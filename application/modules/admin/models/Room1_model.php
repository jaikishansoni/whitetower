<?php

Class Room1_model extends CI_Model {

    var $CI;

    function __construct() {
        parent::__construct();

        $this->CI = & get_instance();
        $this->CI->load->database();
        $this->CI->load->helper('url');
    }

    function get_states() {
        $this->db->select('COUNT(room1_no) as total_rooms1');
        $result = $this->db->get('rooms1');
        return $result->row();
    }

    function get_all() {
            $this->db->select('R.*,F.name floor,RT.title room1_type,F.floor_no');
        $this->db->join('floors F', 'F.id = R.floor_id', 'LEFT');
        $this->db->join('room1_types RT', 'RT.id = R.room1_type_id', 'LEFT');
        $result = $this->db->get('rooms1 R');
        return $result->result();
    }

    function get_by_room_no($no, $id) {
        if ($id > 0) {
            $this->db->where('id !=', $id);
        }
        $this->db->where('room1_no', $no);
        $result = $this->db->get('rooms1');
        return $result->row();
    }

    function get_booked_room() {
        $this->db->where('date', date('Y-m-d'));
        $this->db->where('room_id >', 0);
        $result = $this->db->get('rel_orders_prices');
        return $result->result();
    }

    function get($id) {
        $this->db->where('id', $id);
        $result = $this->db->get('rooms1');
        return $result->row();
    }

    function save($save) {
        if ($save['id']) {
            $this->db->where('id', $save['id']);
            $this->db->update('rooms1', $save);
            return $save['id'];
        } else {
            $this->db->insert('rooms1', $save);
            return $this->db->insert_id();
        }
    }

    function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('rooms1');
    }

}
