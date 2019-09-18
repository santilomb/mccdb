<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello_world extends CI_Controller {

    public function __construct()
    {
    parent::__construct();
    }

    public function index(){
	$db_obj = $this->load->database();
  	$connected = $db_obj->initialize();
  	if (!$connected) {
  		$this->load->view('hello_world');
	}else{ 
        	$this->load->view('errordb');
	}
    }

}
