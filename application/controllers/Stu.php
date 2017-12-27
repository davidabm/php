<?php
class Stu extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['title'] = 'News archive';

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->load->view('templates/header');
        $this->load->view('stu/index', $data);
        $this->load->view('templates/footer');
    }
    public function search()
    {
        $this -> load -> model('stu_model');
        $user = $this -> stu_model -> search_stu($_POST['name']);
        if ($user) {
            echo "ok";
            # code...
        } else {
            # code...
            echo "no";
        }
        
    }
}