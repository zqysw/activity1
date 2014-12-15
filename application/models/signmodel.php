<?php 

	if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Signmodel extends  CI_Model{
	
	public function __construct() {
        parent::__construct();
        $this->load->database();
    }

//检查用户名是否重复
	function checkUsername($username,$table = 'user'){
		$query = $this->db->get_where($table,array('username' => $username));

		if($query->num_rows>0){
			return true;
		}
		return false;
	}
//插入数据到表中
	function adduser($data,$table = 'user'){
		return $this->db->insert($table,$data);
	}

}






?>