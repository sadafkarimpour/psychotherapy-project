<?php 

defined('BASEPATH') OR exit('No direct dcript sccess allowed');
class Main extends MY_controller{

	public function __construct(){

		parent ::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index(){
		$this->load->view("header");
		$path="http://localhost/TestPsychotherapy/";
		$data=[
			'path'=>$path,
			'urlhome'=>$path,
		];
		$this->load->helper("url");
		$this->load->view("menu",$data);
		$this->load->view("index");
		$this->load->view("footer");
	}


}
