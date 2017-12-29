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
	function u_update() {

	    $this->load->helper('url');

	    $slug = url_title($this->input->post('title'), 'dash', TRUE);

	    $data = array(
	        'title' => $this->input->post('title'),
	        'view' => '1'
	    );

	    return $this->db->insert('sty', $data);

	}

}