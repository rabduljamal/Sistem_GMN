<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Backend_Controller {

	public function index(){
    $this->load->helper('url');
         redirect('admin/dashboard');
	}
}
