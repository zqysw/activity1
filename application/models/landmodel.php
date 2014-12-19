<?php 

	if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Landmodel extends  CI_Model{
	
	public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //检查用户名和密码是否正确
	function Check($username,$password,$remname,$table = 'user'){
		$query = $this->db->get_where($table,array('username' => $username,'password' => $password));
		//$check = "$username = 'username' AND $password = 'password'";
		//$query = $this->db->where($check);

		if($query->num_rows>0){

			if($remname==0){

			//设置session
			$userdata1 = array(
				'username' =>$username
				);
				$this->session->set_userdata($userdata1);
				return true;
			    }
			else{
			$userdata2 = array(
				'username' => $username,
				'password' => $password
				);
				$this->session->set_userdata($userdata2);
				return true;
			 }
		}
		return false;
	}
}
?>