<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Howto extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	
	function index(){	
		redirect('howto/ctc');
	}
	
	function ctc(){	
		$this->data['content']='content/howto_ctc';
		$this->load->view('common/body',$this->data);
	}
	function cs(){	
		$this->data['content']='content/howto_cs';
		$this->load->view('common/body',$this->data);
	}
	function co(){	
		$this->data['content']='content/howto_co';
		$this->load->view('common/body',$this->data);
	}
	function tq(){	
		$this->data['content']='content/howto_tq';
		$this->load->view('common/body',$this->data);
	}
}?>