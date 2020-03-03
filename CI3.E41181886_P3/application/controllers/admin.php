<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){ //mendeteksi apakah user atau admin sudah memiliki session login
			redirect(base_url("login")); //jika tidak, maka akan diarahkan ke halaman login lagi
		}
	}
 
	function index(){
		$this->load->view('v_admin');
	}
}