<?php if(!defined("BASEPATH")) exit("Hack Attempt");
class Logout extends CI_Controller{
	function __construct(){
		parent::__construct();	
	}	
	
	function index(){
		redirect('home');
	}
}
