<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Verify extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	
	function index(){	
		$this->data['content']='content/verify';
		$this->load->view('common/body',$this->data);
	}
	
	function success(){	
		$this->data['content']='content/verify_success';
		$this->load->view('common/body',$this->data);
	}
	function invalid(){	
		$this->data['content']='content/verify_invalid';
		$this->load->view('common/body',$this->data);
	}
}?>