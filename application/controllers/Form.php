<?php

class Form extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('users_model');
    }
	 public function index(){
	    $this->load->helper('form');
	    $this->load->library('form_validation');
	    $validation = [
	        [
	            'field' => 'username',
	            'label' => 'ユーザー名',
	            'rules' => 'required|min_length[5]|max_length[10]'
	        ],
	        [
	            'field' => 'password',
	            'label' => 'パスワード',
	            'rules' => 'required|matches[passconf]'
	        ],
	        [
	            'field' => 'passconf',
	            'label' => 'パスワードの確認',
	            'rules' => 'required'
	        ],
	        [
	            'field' => 'email',
	            'label' => 'メールアドレス',
	            'rules' => 'required|valid_email'
	        ]
	    ];
	    $this->form_validation->set_rules($validation);


	    if($this->form_validation->run() === false){
	        $this->load->view('myform');
	    }else{
	        $this->users_model->create_user();
	        $this->load->view('form_success');
	    }
    }
}
