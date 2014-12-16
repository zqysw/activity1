<?php
	$config = array(
		//注册规则
		'sign/register_in' =>array(
			array(
				'field' =>'username',
				'label' =>'昵称',
				'rules' =>'trim|required|min_length[4]'
			),
			array(
				'field' =>'password',
				'label' =>'密码',
				'rules' =>'trim|required|min_length[6]|md5|alpha_dash'
			),
			array(
				'field' =>'passconf',
				'label' =>'确认密码',
				'rules' =>'trim|required|min_length[6]|md5|alpha_dash'
			),
			array(
				'field' =>'phone',
				'label' =>'联系方式',
				'rules' =>'trim|required|min_length[11]|numeric'
			)
		),
		//登录规则
		'land/land_in' =>array(
			array(
				'field' => 'username',
				'label' =>'昵称',
				'rules' =>'trim|required|min_length[4]'
				),
			array(
				'field' =>'password',
				'label' =>'密码',
				'rules' =>'trim|required|min_length[6]|alpah_dash|md5'
				)
			)
	)
?>