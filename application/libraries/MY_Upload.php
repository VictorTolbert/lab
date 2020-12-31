<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Upload extends CI_Upload
{

	protected $hash_flag = false;
	protected $max_resize_width = 0;
	protected $max_resize_height = 0;

	private $ci;

	public function __construct($props = []) {
		parent::__construct($props);
		$this->ci =& get_instance();

		if (count($props) > 0) {
			$this->init($props);
		}
	}


	/**
	 * Initialize preferences
	 *
	 * @param array
	 * @return void
	 */
	public function init($config = []) {
		$defaults = [
			'hash_flag' => false,
			'max_resize_width' => 0,
			'max_resize_height' => 0,
		];

		foreach ($defaults as $key => $val) {
			if (isset($config[$key])) {
				$this->$key = $config[$key];
			} else {
				$this->$key = $val;
			}
		}
	}


	/**
	 * Validates image in HTTP POST
	 * @param OBJECT - refrerence to image in $_FILES
	 * @param ARRAY - additional / custom config info
	 * @return BOOLEAN - Whether uploaded image is valid
	 */
	public function validate_image_upload($field, $s3_subdir, $hash = false ) {
		$this->ci->load->library('aws_s3');

		if ($_FILES[$field]['error'] == 1) {
			$error = 'The uploaded file exceeds the maximum file size of 5 megabytes.';
			$this->set_native_upload_error($error);
			return false;
		}

		// Is $_FILES[$field] set? If not, no reason to continue.
		if (! isset($_FILES[$field])) {
			$this->set_error('upload_no_file_selected');
			return false;
		}

		if (! is_uploaded_file($_FILES[$field]['tmp_name'])) {
			$error = ( ! isset($_FILES[$field]['error'])) ? 4 : $_FILES[$field]['error'];
			$this->set_native_upload_error($error);
			return false;
		}

		if (! $this->ci->aws_s3->validate_path($s3_subdir)) {
			$this->set_error('upload_no_filepath');
			return false;
		}

		$this->set_file_properties($field, $hash);

		if (! $this->validate_file_properties()) {
			return false;
		}

		return true;
	}


	private function set_file_properties($field, $hash = false) {
		// Set the uploaded data as class variables
		$this->file_temp = $_FILES[$field]['tmp_name'];
		$this->file_size = $_FILES[$field]['size'];
		$this->file_type = preg_replace("/^(.+?);.*$/", "\\1", $_FILES[$field]['type']);
		$this->file_type = strtolower(trim(stripslashes($this->file_type), '"'));

		if ($hash) {
			$filename = preg_replace('~[\\\\/:*?"<>|!�$%&()=�@#�]~', '_', $_FILES[$field]['name']);

			$this->file_name = $this->_prep_filename(substr(md5(mt_rand()), 0, 8) . '_' . $filename);
			$this->file_name = getenv('APPLICATION_ENV') . '_' . $this->file_name;
		} else {
			$this->file_name = $this->_prep_filename($_FILES[$field]['name']);
		}

		$this->file_ext = $this->get_extension($this->file_name);
		$this->client_name = $this->file_name;

		// replace spaces with underscores
		$_FILES[$field]['name'] = str_replace(' ', '_', $_FILES[$field]['name']);
	}


	/**
	 * Generates new file name to replace existing image name
	 * @param $filename - existing file name
	 * @return $new_filename
	 */
	public function get_new_filename($filename) {
		$replaced_chars = preg_replace('~[\\\\/:*?"<>|!�$%&()=�@#�]~', '_', $filename);
		$new_filename = $this->_prep_filename(substr(md5(mt_rand()), 0, 8) . '_' . $replaced_chars);

		return $new_filename;
	}


	public function do_multi_upload_s3($field) {
		return $this->do_multi_upload($field, true);
	}


	public function do_multi_upload( $field = 'userfile', $s3 = false, $s3_subdir = '' ) {
		$this->ci =& get_instance();
		$this->ci->load->library('aws_s3');

		// Is $_FILES[$field] set? If not, no reason to continue.
		if (! isset($_FILES[$field])) {
			$this->set_error('upload_no_file_selected');
			return false;
		}

		//If not every file filled was used, clear the empties
		foreach ($_FILES[$field]['name'] as $k => $n) {
			if (empty($n)) {
				foreach ($_FILES[$field] as $kk => $f) {
					unset($_FILES[$field][$kk][$k]);
				}
			}
		}

		// Is the upload path valid?
		if (! $s3 && !$this->validate_upload_path($field)) {
			// errors will already be set by validate_upload_path() so just return FALSE
			return false;
		} elseif (! $this->ci->aws_s3->validate_path($s3_subdir)) {
			$this->set_error('upload_no_filepath');
			return false;
		}

		//Multiple file upload
		if (is_array($_FILES[$field])) {
			foreach ($_FILES[$field]['name'] as $k => $file) {
				// Was the file able to be uploaded? If not, determine the reason why.
				if (! is_uploaded_file($_FILES[$field]['tmp_name'][$k])) {
					$error = ( ! isset($_FILES[$field]['error'][$k])) ? 4 : $_FILES[$field]['error'][$k];
					$this->set_native_upload_error($error);
					return false;
				}

				// Set the uploaded data as class variables
				$this->file_temp = $_FILES[$field]['tmp_name'][$k];
				$this->file_size = $_FILES[$field]['size'][$k];
				$this->file_type = preg_replace("/^(.+?);.*$/", "\\1", $_FILES[$field]['type'][$k]);
				$this->file_type = strtolower(trim(stripslashes($this->file_type), '"'));
				$this->file_name = $this->_prep_filename($_FILES[$field]['name'][$k]);
				$this->file_ext = $this->get_extension($this->file_name);
				$this->client_name = $this->file_name;

				if (! $this->validate_file_properties()) {
					return false;
				}

				/*
				 * Move the file to the final destination
				 */
				$final_endpoint = '';
				if (! $s3) {
					//@codingStandardsIgnoreLine
					if (! @copy($this->file_temp, $this->upload_path . $this->file_name)) {
						//@codingStandardsIgnoreLine
						if (! @move_uploaded_file($this->file_temp, $this->upload_path . $this->file_name)) {
							$this->set_error('upload_destination_error');
							return false;
						}
					}

					$final_endpoint = $this->upload_path . $this->file_name;
				} else {
					$this->ci->load->config('aws', true);
					$s3_subdir = (substr($s3_subdir, 0) === '/') ? $s3_subdir : '/' . $s3_subdir;
					$endpoint = $s3_subdir . $this->file_name;
					$final_endpoint = $this->ci->config->item('s3_url', 'aws') . $endpoint;
					$this->ci->aws_s3->upload($endpoint, $this->file_temp);
				}

				/*
				 * Set the finalized image dimensions
				 */
				$this->set_image_properties($final_endpoint);

				$return_value[$k] = $this->data();
			}

			return $return_value;
		}
	}


	/**
	 * Method for single file upload to S3 (single purpose, validation performed beforehand)
	 * @param string $s3_subdir s3 endpoint to store the file within
	 */
	public function upload_s3($s3_subdir = '') {
		$this->ci =& get_instance();
		$this->ci->load->library('aws_s3');

		// check for resize before upload to s3
		if ($this->max_resize_height || $this->max_resize_width) {
			// @codingStandardsIgnoreLine
			$size = @getimagesize($this->file_temp);
			if ($size[0] > $this->max_resize_width || $size[1] > $this->max_resize_height) {
				$configResize = [
					'source_image' => $this->file_temp,
					'width' => $this->max_resize_width ?: '',
					'height' => $this->max_resize_height ?: '',
					'maintain_ratio' => true,
				];

				$this->ci->load->library('image_lib', $configResize);
				$this->ci->image_lib->resize();
			}
		}

		$this->ci->load->config('aws', true);
		$s3_subdir = (substr($s3_subdir, 0) === '/') ? $s3_subdir : '/' . $s3_subdir;
		$endpoint = $s3_subdir . $this->file_name;
		$final_endpoint = $this->ci->config->item('s3_url', 'aws') . $endpoint;

		$this->ci->aws_s3->upload($endpoint, $this->file_temp);

		/*
		 * Set the finalized image dimensions
		 */
		$this->set_image_properties($this->upload_path . $this->file_name);
		return $this->data();
	}


	/*
	 * Method for single file upload to S3
	 * @param string $field field in server $_FILES containing upload
	 * @param string $s3_subdir s3 endpoint to store the file within
	 */
	public function do_upload_s3( $field = 'userfile', $s3_subdir = '') {
		$this->ci =& get_instance();
		$this->ci->load->library('aws_s3');
		$valid_file = $this->validate_image_upload($field, $s3_subdir);

		if (! $valid_file) {
			return false;
		}

		// check for resize before upload to s3
		if ($this->max_resize_height || $this->max_resize_width) {
			// @codingStandardsIgnoreLine
			$size = @getimagesize($this->file_temp);
			if ($size[0] > $this->max_resize_width || $size[1] > $this->max_resize_height) {
				$configResize = [
					'source_image' => $this->file_temp,
					'width' => $this->max_resize_width ?: '',
					'height' => $this->max_resize_height ?: '',
					'maintain_ratio' => true,
				];

				$this->ci->load->library('image_lib', $configResize);
				$this->ci->image_lib->resize();
			}
		}

		$this->ci->load->config('aws', true);

		$s3_subdir = (substr($s3_subdir, 0) === '/') ? $s3_subdir : '/' . $s3_subdir;
		$endpoint = $s3_subdir . $this->file_name;

		$final_endpoint = $this->ci->config->item('s3_url', 'aws') . $endpoint;

		$this->ci->aws_s3->upload($endpoint, $this->file_temp);

		/*
		 * Set the finalized image dimensions
		 */
		$this->set_image_properties($this->upload_path . $this->file_name);
		return $this->data();
	}


	private function set_native_upload_error($error) {
		switch($error) {
			case 1: // UPLOAD_ERR_INI_SIZE
				$this->set_error('upload_file_exceeds_limit');
				break;
			case 2: // UPLOAD_ERR_FORM_SIZE
				$this->set_error('upload_file_exceeds_form_limit');
				break;
			case 3: // UPLOAD_ERR_PARTIAL
				$this->set_error('upload_file_partial');
				break;
			case 4: // UPLOAD_ERR_NO_FILE
				$this->set_error('upload_no_file_selected');
				break;
			case 6: // UPLOAD_ERR_NO_TMP_DIR
				$this->set_error('upload_no_temp_directory');
				break;
			case 7: // UPLOAD_ERR_CANT_WRITE
				$this->set_error('upload_unable_to_write_file');
				break;
			case 8: // UPLOAD_ERR_EXTENSION
				$this->set_error('upload_stopped_by_extension');
				break;
			default:
				$this->set_error('upload_no_file_selected');
				break;
		}
	}


	private function validate_file_properties() {
		// Is the file type allowed to be uploaded?
		if (! $this->is_allowed_filetype()) {
			$this->set_error('upload_invalid_filetype');
			return false;
		}

		// if we're overriding, let's now make sure the new name and type is allowed
		if ($this->_file_name_override != '') {
			$this->file_name = $this->_prep_filename($this->_file_name_override);

			// If no extension was provided in the file_name config item, use the uploaded one
			if (strpos($this->_file_name_override, '.') === false) {
				$this->file_name .= $this->file_ext;
			} else {
				// An extension was provided, lets have it!
				$this->file_ext = $this->get_extension($this->_file_name_override);
			}

			if (! $this->is_allowed_filetype(true)) {
				$this->set_error('upload_invalid_filetype');
				return false;
			}
		}

		// Convert the file size to kilobytes
		if ($this->file_size > 0) {
			$this->file_size = round($this->file_size / 1024, 2);
		}

		// Is the file size within the allowed maximum?
		if (! $this->is_allowed_filesize()) {
			$this->set_error('upload_invalid_filesize');
			return false;
		}

		// Are the image dimensions within the allowed size?
		// Note: This can fail if the server has an open_basdir restriction.
		if (! $this->is_allowed_dimensions()) {
			$this->set_error('upload_invalid_dimensions');
			return false;
		}

		// Sanitize the file name for security
		$ci =& get_instance();
		$ci->load->helper('security');
		$this->file_name = $ci->security->sanitize_filename($this->file_name);

		// Truncate the file name if it's too long
		if ($this->max_filename > 0) {
			$this->file_name = $this->limit_filename_length($this->file_name, $this->max_filename);
		}

		// Remove white spaces in the name
		if ($this->remove_spaces == true) {
			$this->file_name = preg_replace("/\s+/", "_", $this->file_name);
		}

		/*
		 * Validate the file name
		 * This function appends an number onto the end of
		 * the file if one with the same name already exists.
		 * If it returns false there was a problem.
		 */
		$this->orig_name = $this->file_name;

		if ($this->overwrite == false) {
			$this->file_name = $this->set_filename($this->upload_path, $this->file_name);

			if ($this->file_name === false) {
				return false;
			}
		}

		/*
		 * Run the file through the XSS hacking filter
		 * This helps prevent malicious code from being
		 * embedded within a file.	Scripts can easily
		 * be disguised as images or other file types.
		 */
		if ($this->xss_clean) {
			if ($this->do_xss_clean() === false) {
				$this->set_error('upload_unable_to_write_file');
				return false;
			}
		}

		return true;
	}
}
