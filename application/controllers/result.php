<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Result extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	
	function index(){	
		redirect('result/thankyou');
	}
	
	function thankyou(){	
		$this->data['content']='content/result_thankyou';
		$this->load->view('common/body',$this->data);
	}
	function bad(){	
		$this->data['content']='content/result_bad';
		$this->load->view('common/body',$this->data);
	}
}?>