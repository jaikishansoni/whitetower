<?php

class Apartment_types extends Front_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('homepage_model'));
    }

    function index() {

        $data['meta_description'] = $this->setting->meta_description;
        $data['meta_keywords'] = $this->setting->meta_keywords;
        $data['page_title'] = lang('room_types');
        $data['room_types'] = $this->homepage_model->get_room_types_all();
       
        $this->render('apartment_types/apartment_types', $data);
    }

    function apartment($id) {
       
        $data['room_type'] = $room_type = $this->homepage_model->get_room_type($id);
        $data['amenities'] = $this->homepage_model->get_amenities_active($id);
        $data['room_types'] = $this->homepage_model->get_room_types();
        $data['feature_images'] = $this->homepage_model->get_feature_Image($id);
        
        $data['images'] = $this->homepage_model->get_no_feature_Image($id);
        //$data['images'] = $this->homepage_model->get_images($id);
       
        $data['meta_description'] = $this->setting->meta_description;
        $data['meta_keywords'] = $this->setting->meta_keywords;
        $data['page_title'] = $room_type->title;
       
        $this->render('apartment_types/apartment_type', $data);
    }

    function check() {
        //echo '<pre>'; print_r($_POST);die;
        $check = check_availability_ajax($_POST['date_from'], $_POST['date_to'], $_POST['adults'], $_POST['kids'], $_POST['room_type']);
        echo $check;
    }

}
