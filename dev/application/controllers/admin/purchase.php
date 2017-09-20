<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase extends Backend_Controller {

	public function index(){

	}

  public function pengajuan(){
    $this->site->view('form-purchase-pengajuan');
	}
}
