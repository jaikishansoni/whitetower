<?php

Class Price_manager_room_model extends CI_Model {

    var $CI;

    function __construct() {
        parent::__construct();

        $this->CI = & get_instance();
        $this->CI->load->database();
        $this->CI->load->helper('url');
    }

    function get_all() {
        $this->db->select('P.*,R.title');
        $this->db->join('room1_types R', 'R.id = P.room1_type_id', 'LEFT');
        $result = $this->db->get('price_manager_room P');
        return $result->result();
    }

    function get($id) {
        $this->db->where('id', $id);
        $result = $this->db->get('price_manager_room');
        return $result->row();
    }

    function save($save) {
        if ($save['id']) {
            $this->db->where('id', $save['id']);
            $this->db->update('price_manager_room', $save);
            return $save['id'];
        } else {
            $this->db->insert('price_manager_room', $save);
            return $this->db->insert_id();
        }
    }

    function save_special_price_room($save) {
        $this->db->insert('special_price_room', $save);
        return $this->db->insert_id();
    }

    function get_special_price_rooms($id) {
        $this->db->order_by('date_from', 'ASC');
        $this->db->where('room1_type_id', $id);
        return $this->db->get('special_price_room')->result();
    }

    function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('price_manager_room');
    }

    function delete_spl_price($id) {
        $this->db->where('id', $id);
        $this->db->delete('special_price_room');
    }

    function get_room1_type_price($id) {
        $this->db->where('room1_type_id', $id);
        $result = $this->db->get('price_manager_room');
        return $result->row();
    }

    function check_daterange() {
        if (!empty($_POST['id'])) {
            $this->db->where('id !-', $_POST['id']);
        }
        $this->db->where('date(date_to) >=', $_POST['start_date']);
        $this->db->where('date(date_from) <=', $_POST['start_date']);
        $result = $this->db->get('special_price_room');
        return $result->row();
    }

}
