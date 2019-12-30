<?php

class Contact extends Front_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('homepage_model'));
    }

    function contactmesage() {
        echo lang("contact_success_msg");
    }

    function index() {

        $data['meta_description'] = $this->setting->meta_description;
        $data['meta_keywords'] = $this->setting->meta_keywords;
        $data['page_title'] = lang('room_types');
        $data['room_types'] = $this->homepage_model->get_room_types_all();
        $this->render('contact/contact');
    }

    function save() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[32]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[32]');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('message', 'Message', 'trim|required');

        if ($this->form_validation->run() == TRUE) {
            $name = $this->input->post("name");
            $email = $this->input->post("email");
            $phone = $this->input->post("phone");
            $message = $this->input->post("message");

            $dataArray = array(
                "name" => $name,
                "email" => $email,
                "phone" => $phone,
                "message" => $message
            );
            $this->contact_mail($dataArray);
            $this->session->set_flashdata('success', $this->contactmesage());
            redirect("front/contact");
        } else {

            $this->session->set_flashdata('error', validation_errors());
            redirect("front/contact");
        }
    }

    function contact_mail($dataArray) {
        $html = $this->load->view('homepage/mail', $dataArray, true);        
        $row = $this->homepage_model->get_template(6);       
        $row['subject'] = str_replace('{site_name}', $this->setting->name, $row['subject']);
        $row['content'] = str_replace('{site_name}', $this->setting->name, $row['content']);
        $row['content'] = str_replace('{summary}', $html, $row['content']);

        $msg = html_entity_decode($row['content'], ENT_QUOTES, 'UTF-8');
        $params['recipient'] = 'homesudan7@gmail.com';
        $params['subject'] = $row['subject'];
        $params['message'] = $msg;
        
        $this->mailer->send($params);
    }
}
