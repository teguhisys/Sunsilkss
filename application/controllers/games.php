<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Games extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	
	function index(){	
		redirect('games/cs');
	}
	
	function cs(){	
		$this->data['content']='content/games_cs';
		$this->load->view('common/body',$this->data);
	}
	
}?>