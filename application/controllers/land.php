<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	header("Content-type: text/html; charset=utf-8"); 
class 	Land extends CI_Controller {

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
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->load->model('landmodel');
		$this->load->library('session');
 		}
 		
	public function index()
	{
		$data = array(
 			'note' => '',
 		);
		$this->load->view('land',$data);

	}
	public function land_in()
	{
	//规则判断
		if($this->form_validation->run() == FALSE)
		{
			$data = array(
				'note' => '填写内容不符合规范'
				);
			$this->load->view('land',$data);
			return;
		}
		else
		{
			$data = array();
			$data['username'] = $this->input->post('username');
			$data['password'] = $this->input->post('password');
			$data['remname'] = $this->input->post('remname');
			if(!$this->landmodel->Check($data['username'],$data['password'],$data['remname']))
			{
				$data = array(
					'note' => '用户名或密码有误'
					);
				$this->load->view('land',$data);
				return;
			}
			else
			{
				$data = array(
					'username' => $data['username']
					);
				$this->load->view('land_success',$data);
			}
		}
	}
	//注销
	public function logout(){
		if(isset($_SESSION['username'])){
			unset($_SESSION['username']);
		}
		$this->load->view('show_activity');
	} 

}
?>