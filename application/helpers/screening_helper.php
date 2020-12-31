<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * State Dropdown
 *
 * Returns HTML for a dropdown filled with state information
 *
 * @access public
 * @param string $name     Value of <select>'s name attribute
 * @param string $selected Value of <option> to be selected
 * @param string $id       Value of <select>'s id attribute (optional)
 * @param string $class    Value of <select>'s class attribute (optional)
 * @return string
 */
if ( ! function_exists('screening_type_dropdown')) {
	function screening_type_dropdown($name='state', $selected=NULL, $id=NULL, $class=NULL) {
		$CI =& get_instance();

		$CI->load->helper('form');

		$type_list = screening_type_array();

		$extra = '';
		if ( ! is_null($id)) {
			$extra .= 'id="' . $id . '" ';
		}
		if ( ! is_null($class)) {
			$extra .= 'class="' . $class . '" ';
		}
		$extra = substr($extra, 0, -1);

		return form_dropdown($name, $type_list, $selected, $extra);
	}
}


if ( ! function_exists('film_list_dropdown')) {
	function film_list_dropdown($name='state', $selected=NULL, $id=NULL, $class=NULL) {
		$CI =& get_instance();

		$CI->load->helper('form');

		$film_list = film_list_array();

		$extra = '';
		if ( ! is_null($id)) {
			$extra .= 'id="' . $id . '" ';
		}
		if ( ! is_null($class)) {
			$extra .= 'class="' . $class . '" ';
		}
		$extra = substr($extra, 0, -1);

		return form_dropdown($name, $film_list, $selected, $extra);
	}
}


if ( ! function_exists('actions_list_dropdown')) {
	function actions_list_dropdown($name='state', $selected=NULL, $id=NULL, $class=NULL) {
		$CI =& get_instance();

		$CI->load->helper('form');

		$actions_list = actions_list_array();

		$extra = '';
		if ( ! is_null($id)) {
			$extra .= 'id="' . $id . '" ';
		}
		if ( ! is_null($class)) {
			$extra .= 'class="' . $class . '" ';
		}
		$extra = substr($extra, 0, -1);

		return form_dropdown($name, $actions_list, $selected, $extra);
	}
}




if ( ! function_exists('screening_type_array')) {
	function screening_type_array() {
		$screening_type_list = array(
			'1' => 'Educational',
			'2' => 'Private',
			'3' => 'Public'
		);

		return $screening_type_list;
	}
}

if ( ! function_exists('film_list_array')) {
	function film_list_array() {
		$CI =& get_instance();
		$sql = "SELECT * FROM `distro_films` AS f ORDER BY f.film_nick ASC";
		$query = $CI->db->query($sql,false);

		
		if($query -> num_rows() >= 1){
			$film_list 	= array();
			$result 	= $query->result_array();
			foreach($result AS $cur){
				$cur_id				= $cur['id_film'];
				$cur_name			= $cur['film_name'];
				$cur_nick			= $cur['film_nick'];
				$film_list[$cur_id]	= $cur_nick;
			}
			return $film_list;
			
		}else{
			return false;
		}
	}
}

if ( ! function_exists('actions_list_array')) {
	function actions_list_array() {
		$CI =& get_instance();
		$sql = "SELECT * FROM `distro_pending_actions` AS f ORDER BY f.id_distro_pending_action ASC";
		$query = $CI->db->query($sql,false);

		
		if($query -> num_rows() >= 1){
			$actions_list 	= array();
			$result 	= $query->result_array();
			foreach($result AS $cur){
				$cur_id				= $cur['id_distro_pending_action'];
				$cur_name			= $cur['distro_pending_action_name'];
				$actions_list[$cur_id]	= $cur_name;
			}
			return $actions_list;
			
		}else{
			return false;
		}
	}
}



?>
