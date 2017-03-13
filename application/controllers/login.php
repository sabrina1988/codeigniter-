<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
	
		parent::__construct();
		$this->load->model('login_model');
}
	


	public function index()
	{
		if(isset($_POST['password'])){
			$this->load->model('login_model');
			if($this->login_model->login($_POST['email'],md5($_POST['password']))){

				  $data['data'] = $this->login_model->getUsers();
				  
				  $this->load->view('index',$data);
				}else{
					redirect('login');
				}
			}
			$this->load->view('login');
		}


		
				
}
