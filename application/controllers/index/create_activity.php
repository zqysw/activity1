<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
header('Content-Type:text/html;charset = utf8');
class Create_activity extends CI_Controller {

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
 		//判断是否已登录
    //is_login函数	
    //function is_login(){
    	
    //}

	public function index()
	{
		//is_login();
		if($this->session->userdata('islogin')){
    			//if true
			
    		}
    	else{
    		//if 没有登录
    		$data = array(
    			'note' => '登录之后可以使用发布功能'
    			);
    		$this->load->view('land',$data);
    		return;
    	}
    	$this->load->view('create_activity');

	}


}
