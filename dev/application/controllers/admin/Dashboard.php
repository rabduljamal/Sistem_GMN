<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Backend_Controller {

	public function index(){

		$this->Dsh();

	}

	public function Dsh(){
		$data = array(
			'level' => 'purchase',
			'test' => 'purchase',

		);
		$this->site->view('index', $data);
	}

}
