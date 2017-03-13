<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Login_model extends CI_Model
{
	public function __construct(){
		parent::__construct();

	}

	public function login($email,$password){


		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$q=$this->db->get('usuario');

		if($q->num_rows()>0){
			return true;
		}else{
			return false;
		}
	}


	public function getUsers(){

			$result = $this->db->get('usuario');

			if($result->num_rows()>0){
			return $result->result();
		}else{
			return false;
		}
		}
}
