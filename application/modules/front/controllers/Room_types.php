<?php

class Room_types extends Front_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('homepage_model'));
    }

    function index() {

        $data['meta_description'] = $this->setting->meta_description;
        $data['meta_keywords'] = $this->setting->meta_keywords;
        $data['page_title'] = lang('room_types');
        $data['room_types'] = $this->homepage_model->get_room_types_all();

        $this->render('room_types/room_types', $data);
    }

    function room($id) {

        $data['room_type'] = $room_type = $this->homepage_model->get_room1_type($id);
        $data['amenities'] = $this->homepage_model->get_amenities_active($id);

        $data['room_types'] = $this->homepage_model->get_room_types();
        $data['feature_images'] = $this->homepage_model->get_room_feature_Image($id);

        $data['images'] = $this->homepage_model->get_room_no_feature_Image($id);
        // $data['images'] = $this->homepage_model->get_room_images($id);

        $data['meta_description'] = $this->setting->meta_description;
        $data['meta_keywords'] = $this->setting->meta_keywords;
        $data['page_title'] = $room_type->title;

        $this->render('room_types/room_type', $data);
    }

    function check() {

        $check = check_availability_ajax($_POST['date_from'], $_POST['date_to'], $_POST['adults'], $_POST['kids'], $_POST['room_type']);
        echo $check;
    }

    function checkroom() {

        $check = check_room_availability_ajax($_POST['date_from'], $_POST['date_to'], $_POST['adults'], $_POST['kids'], $_POST['room_type']);
        echo $check;
    }

}
