<?php
class Stu_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    
	public function u_update() {

	    $this->load->helper('url');

	    $number = $this->input->post('number');
	    $name = $this->input->post('name');

	    $data = array(
	        'title' => $this->input->post('title'),
	        'view' => '1'
	    );

	    $this->db->where('number', $number);

	    return $this->db->update('sty', $data);

	}

}