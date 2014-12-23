<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class 	Index extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 function __construct()
 		{
  			parent::__construct();
  			$this->load->library('session');
 		}
 		
	public function index()
	{

		//判断是否已登录
		if($this->session->userdata('islogin')){
    			//if true
			$data = array(
				'username' => $this->session->userdata['username']
			);
			$this->load->view('land_success',$data);
    		}
    	else{
    		//if 没有登录
    		$this->load->view('show_activity');
    	}
		

	}
	//这是转到具体介绍页面 
	public function ac_introduction(){
		$this->load->view('ac_introduction');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */