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

}