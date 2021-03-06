<?php
class Stu extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');

        $this->load->model('stu_model');
        $this->load->library('form_validation');
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

        $this->form_validation->set_rules('title', 'Title', 'required');



        $user = $this -> stu_model -> search_stu($_POST['name']);
        $title = $this -> stu_model -> search_stu($_POST['title']);

        if ($user) {
            if ($user[0] -> number == $_POST['number']) {
                # code...
                $data['error'] = "正确";


                $this -> stu_model -> u_update();

                $data['stu_item'] = $this->stu_model->get_stu();

                $this->load->view('templates/header');
                $this->load->view('stu/show', $data);
                $this->load->view('templates/footer');
            } else {
                # code...
                echo "学号错误";
            }
            
        } else {
            # code...
            echo "姓名错误";
        }
        
    }
}