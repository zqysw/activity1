<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	header("Content-type: text/html; charset=utf-8"); 
class 	Sign extends CI_Controller {

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
 		}

 		public function register_in(){
 			$this->load->helper(array('form','url'));
 			$this->load->library('form_validation');
 			$this->load->library('parser');
 			//设置规则
 			if($this->form_validation->run() == FALSE)
 			{

 				$data = array(
 					'string' => "填写内容不符合规范"
 				);
 				//$this->load->view('register',$data);
 				$this->load->vars($data);
 				//$this->parser->parse('register', $data);
 				$this->load->view('register',$data);

 				return  ;
 			}
 			else{
 			//验证密码，与密码确认
 			if($this->input->post('password') != $this->input->post('passconf')){
 				 echo  "两次输入的密码不一致";
 				return ;
 			}
 			//从register.view取得值
 			$data = array();
 			$data['username'] = $this->input->post('username');
 			$data['password'] = $this->input->post('password');
 			$data['phone'] = $this->input->post('phone');

 			//载入model/signmodel
 			$this->load->model('signmodel');
 			 //检测用户是否存在
 			if($this->signmodel->checkUsername($data['username'])){
 				echo "此用户已存在,请换用户名";
 				$this->load->view('register');
 				return ;
 			}
 			if(!$this->signmodel->adduser($data)){
 				 echo  "注册失败";
 				$this->load->view('register');
 				return ;
 			}
 			else{
 			 echo "恭喜你，注册成功";
 				return ;
 			}
 		}
	}
 	}