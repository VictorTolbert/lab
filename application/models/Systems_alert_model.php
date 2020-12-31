<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}


class System_alerts_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->driver('cache');
    }

    public function upsert_system_alert($post_data)
    {
        if (is_sys_admin()) {
            $alert_exists = $this->db->where(['alert_name' => $post_data['alert_name']])->get('system_alerts')->result();
            if (empty($alert_exists)) {
                $result = $this->db->insert('system_alerts', ['alert_message' => $post_data['alert_message'], 'alert_name' => $post_data['alert_name'], 'alert_color' => $post_data['alert_color'], 'alert_enabled' => 1]);
            } else {
                $result = $this->update_by([ 'id' => $alert_exists[0]->id ], [ 'alert_message' => $post_data['alert_message'], 'alert_color' => $post_data['alert_color'], 'alert_enabled' => 1 ]);
            }

            $alert_exists = $this->db->where(['alert_name' => $post_data['alert_name']])->get('system_alerts', 1)->result();

            if ($alert_exists) {
                $this->db->delete('system_alert_locations', ['system_alert_id' => $alert_exists[0]->id]);
                foreach ($post_data['system_alert_locations'] as $system_alert_location) {
                    $result = $this->db->insert('system_alert_locations', ['system_alert_id' => $alert_exists[0]->id, 'uri' => $system_alert_location]);
                }

                $system_alert_with_locations = [
                    'id' => $alert_exists[0]->id,
                    'alert_name' => $alert_exists[0]->alert_name,
                    'alert_color' => $alert_exists[0]->alert_color,
                    'alert_color_bootstrap_name' => $this->get_bootstrap_name_from_alert_color_hex($alert_exists[0]->alert_color),
                    'alert_message' => $alert_exists[0]->alert_message,
                    'alert_enabled' => $alert_exists[0]->alert_enabled,
                    'system_alert_locations' => $post_data['system_alert_locations'],
                ];

                $this->cache->redis->save('system_alerts_' . $system_alert_with_locations['alert_name'], $system_alert_with_locations, 0);
                $all_alerts_with_locations = $this->get_system_alerts_from_db();
                $this->cache->redis->save('system_alerts', $all_alerts_with_locations, 0);
            } else {
                $system_alert_with_locations = null;
            }

            return $system_alert_with_locations;
        }
    }


    public function delete_system_alert($name)
    {
        if (is_sys_admin()) {
            $this->db->select('id')->from('system_alerts');
            if ($name) {
                $this->db->where(['alert_name' => $name]);
            }

            $alerts = $this->db->get()->result_array();

            if (!alerts) {
                return null;
            }

            $this->cache->redis->delete('system_alerts_'.$name);
            foreach ($alerts as $alert) {
                $delete_alert_result         = $this->db->delete('system_alerts', ['id' => $alert['id']]);
                $delete_alert_loation_result = $this->db->delete('system_alert_locations', ['system_alert_id' => $alert['id']]);
            }

            $all_alerts_with_locations = $this->get_system_alerts_from_db();
            $this->cache->redis->save('system_alerts', $all_alerts_with_locations, 0);
            $delete_alert_loation_result = $this->db->delete('system_alert_locations', ['system_alert_id' => $alert['id']]);
            return ($delete_alert_result && $delete_alert_loation_result) ? true : false;
        }
    }


    public function get_alerts($name = null)
    {
        if ($name) {
            $system_alerts = $this->cache->redis->get('system_alerts_'.$name);
            if (!$system_alerts) {
                $system_alerts = $this->get_system_alerts_from_db($name);
            }

            $system_alerts['alert_color_bootstrap_name'] = $this->get_bootstrap_name_from_alert_color_hex($system_alert['alert_color']);
        } else {
            $system_alerts = null;
            try {
                $system_alerts = $this->cache->redis->get('system_alerts');
            } catch (Exception $e) {
                error_log('Unable to retrieve System Alerts from redis. ' . $e->getMessage());
            }

            if (!$system_alerts) {
                $system_alerts = $this->get_system_alerts_from_db();
            }

            foreach ($system_alerts as $key => $system_alert) {
                $system_alerts[$key]['alert_color_bootstrap_name'] = $this->get_bootstrap_name_from_alert_color_hex($system_alert['alert_color']);
            }
        }

        return $system_alerts;
    }


    private function get_system_alerts_from_db($name = null)
    {
        $alerts_with_locations = [];
        $this->db->select('*')->from('system_alerts');
        if ($name) {
            $this->db->where(['alert_name' => $name]);
        }

        $alerts = $this->db->get()->result_array();

        $system_alert_locations = $this->db->select('*')->from('system_alert_locations')->get()->result_array();
        $alert_colors           = $this->get_alert_colors();

        foreach ($alerts as $alert) {
            $alerts_with_locations[$alert['id']]                           = $alert;
            $alerts_with_locations[$alert['id']]['system_alert_locations'] = [];
        }

        foreach ($system_alert_locations as $system_alert_location) {
            $alerts_with_locations[$system_alert_location['system_alert_id']]['system_alert_locations'][] = $system_alert_location['uri'];
        }

        return $alerts_with_locations;
    }


    public function get_bootstrap_name_from_alert_color_hex($hex_value)
    {
        $this->load->config('system_alerts', true);
        $system_alert_colors = $this->config->item('system_alert_colors', 'system_alerts');
        foreach ($system_alert_colors as $system_alert_color) {
            if ($system_alert_color['hex'] === $hex_value) {
                return $system_alert_color['bootstrap_name'];
            }
        }

        return null;
    }


    public function get_uris_from_alerts($alerts)
    {
        if (!empty($alerts)) {
            $alert_uris = [];
            $alert_uris = array_reduce(
                $alerts,
                function ($carry, $item) {
                    return array_merge((array)$carry, $item['system_alert_locations']);
                }
            );
        }

        return $alert_uris;
    }


    public function get_alert_colors()
    {
        $this->load->config('system_alerts', true);
        $results = $this->config->item('system_alert_colors', 'system_alerts');
        return $results;
    }
}
