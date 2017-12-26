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

        $this->load->view('stu/index', $data);
    }
}