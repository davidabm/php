<?php
class Stu_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    public function search_stu($stu)
	{
	    $this -> db -> where('name', $stu);
	    $this -> db -> select('*'); //选取全部信息
	    $query = $this -> db -> get('sty');
	    return $query -> result(); //返回值
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
	public function get_stu($number = FALSE)
	{
		# code...
		$query = $this->db->get_where('sty', array('number' => $number));
    	return $query->row_array();
	}

}