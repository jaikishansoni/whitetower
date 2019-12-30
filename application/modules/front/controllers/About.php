<?php

class About extends Front_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('homepage_model', 'login_model', 'account_model'));
    }

    function index() {
        
        $data['meta_description'] = $this->setting->meta_description;
        $data['meta_keywords'] = $this->setting->meta_keywords;
        $data['page_title'] = lang('home');
        $data['banners'] = $this->homepage_model->get_banners();
        $data['testimonials'] = $this->homepage_model->get_testimonials(); // get 6 testimonials
        $data['room_types'] = $this->homepage_model->get_room_types();
        $data['coupons'] = $this->homepage_model->get_coupons();
        //$data['testimonials']	= $this->testimonial_model->get_all();
        //echo '<pre>'; print_r($data['coupons']);die;
        $this->render('about/about');
    }

    

}
