<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	
	function index(){	
		$this->data['content']='content/login';
		$this->load->view('common/body',$this->data);
	}
}