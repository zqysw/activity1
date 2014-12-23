<?php 

	if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Landmodel extends  CI_Model{
	
	public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //检查用户名和密码是否正确
	function Check($username,$password,$autoland,$table = 'user'){
		$query = $this->db->get_where($table,array('username' => $username,'password' => $password));
		//$check = "$username = 'username' AND $password = 'password'";
		//$query = $this->db->where($check);

		if($query->num_rows>0){

			if($autoland==0){

			//设置session
			$userdata = array(
				'username' =>$username,
				'islogin' => FALSE
				);
				$this->session->set_userdata($userdata);
				return true;
			    }
			else {
			$userdata = array(
				'username' => $username,
				'password' => $password,
				'islogin' =>TRUE
				);
				$this->session->set_userdata($userdata);
				return true;
			 }
		}
		return false;
	}
}
?>