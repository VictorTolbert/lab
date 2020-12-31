<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Utility class leveraging / wrapping CI Image Manipulation
 */
class Image_Editor
{
    private $ci;

    /**
     * __construct
     * @return void
     **/
    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->library('image_lib');
    }

    /**
     * Calculates image resize based on scale
     * @param $scale (Float) - scale multiplier for image
     * @return $dimensions (Array) - height and width based on scale
     */
    public function calculate_image_scale($scale, $height, $width)
    {
        $dimensions = [];

        $dimensions['height'] = floor($scale * $height);
        $dimensions['width']  = floor($scale * $width);

        return $dimensions;
    }

    /**
     * Converts rotation angle from Guillotine.js to PHP
     * @param $g_angle (Integer) - angle from guillotine.js
     * @return $angle (Integer) - angle for PHP rotation
     */
    public function convert_guillotine_angle($angle)
    {
        return (360 - $angle);
    }


    /**
     * Resize image
     * @param $scale (Float) - Scale multiplier for new height & width
     * @param $current_img_url - Path to image to be resized
     * @param $config (Array) - Config for image_lib initialization
     * @return $success (Boolean) - whether image resize succeeded
     */
    public function resize_image($scale, $current_img_url, $config)
    {
        $src_image_dimensions = getimagesize($current_img_url);
        $success              = false;

        if ($src_image_dimensions) {
            $src_height     = $src_image_dimensions[1];
            $src_width      = $src_image_dimensions[0];
            $new_dimensions = $this->calculate_image_scale($scale, $src_height, $src_width);

            $config['height'] = $new_dimensions['height'];
            $config['width']  = $new_dimensions['width'];

            if (! $this->ci->load->is_loaded('image_lib')) {
                $this->ci->load->library('image_lib', $config);
            } else {
                $this->ci->image_lib->initialize($config);
            }

            if ($this->ci->image_lib->resize()) {
                $success = true;
            } else {
                log_message(
                    'error',
                    'An exception occurred using image_lib->resize(): '
          . $this->ci->image_lib->display_errors()
                );
            }
        }

        return $success;
    }


    /**
     * Rotate image
     * @param $angle (Integer) - Angle of rotation
     * @param $config (Array) - array of config options for CI img_lib
     * @return $success (Boolean) - whether rotation succeeded
     */
    public function rotate_image($config)
    {
        $success = false;

        if ($config['rotation_angle']) {
            if (! $this->ci->load->is_loaded('image_lib')) {
                $this->ci->load->library('image_lib', $config);
            } else {
                $this->ci->image_lib->initialize($config);
            }

            if ($this->ci->image_lib->rotate()) {
                $success = true;
            } else {
                log_message(
                    'error',
                    'An exception occurred using image_lib->rotate(): '
          . $this->ci->image_lib->display_errors()
                );
            }
        } else {
            log_message('error', 'rotation_angle variable not passed into $config Array');
        }

        return $success;
    }


    /**
     * Crop image
     * @param $config (Array) - array of config options for CI img_lib
     * @param $success (Boolean) - whether cropping succeeded
     */
    public function crop_image($config)
    {
        $success = false;

        if ($config['height'] && $config['width']) {
            $config['maintain_ratio'] = false;

            if (! $this->ci->load->is_loaded('image_lib')) {
                $this->ci->load->library('image_lib', $config);
            } else {
                $this->ci->image_lib->initialize($config);
            }

            if ($this->ci->image_lib->crop()) {
                $success = true;
            } else {
                log_message(
                    'error',
                    'An exception occurred using image_lib->crop(): '
          . $this->ci->image_lib->display_errors()
                );
            }
        } else {
            log_message('error', 'height and width are required for image cropping');
        }

        return $success;
    }


    /**
     * Edits given image based on settings incl. crop, rotate, resize
     * @param $image_path - location of image to be edited
     * @param $settings - array of settings
     */
    public function edit_image($current_img, $config)
    {
        $temp_img_path = tempnam(sys_get_temp_dir(), null);
        file_put_contents($temp_img_path, file_get_contents($current_img));
        $config['source_image'] = $temp_img_path;
        // Resize image if new image scale is submitted
        if ($config['scale'] != 1) {
            $resized = $this->resize_image($config['scale'], $current_img, $config);
        }

        // Rotate image
        if ($config['rotation_angle']) {
            $config['rotation_angle'] = $this->convert_guillotine_angle($config['rotation_angle']);
            $rotated                  = $this->rotate_image($config);
        }

        // Crop image (if picture is not exact size)
        $this->crop_image($config);
        return $temp_img_path;
    }
}
