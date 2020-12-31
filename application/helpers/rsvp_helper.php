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
if ( ! function_exists('event_list_dropdown')) {
	function event_list_dropdown($name='state', $selected=NULL, $id=NULL, $class=NULL) {
		$CI =& get_instance();

		$CI->load->helper('form');

		$type_list = event_id_array();

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

if ( ! function_exists('event_id_array')) {
	function event_id_array() {
		$CI =& get_instance();
		$sql = "SELECT * FROM `limm_events` AS e ORDER BY e.event_date DESC";
		$query = $CI->db->query($sql,false);

		
		if($query -> num_rows() >= 1){
			$film_list 	= array();
			$result 	= $query->result_array();
			foreach($result AS $cur){
				$cur_id					= $cur['id_event'];
				$cur_name				= $cur['event_name'];
				$cur_date				= date('m/d/Y', $cur['event_date']);
				$event_list[$cur_id]	= $cur['event_name'].' - '.$cur_date;
			}
			return $event_list;
			
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
