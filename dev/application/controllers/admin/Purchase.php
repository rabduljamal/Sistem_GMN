<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase extends Backend_Controller {

	public function index(){
		echo "aaaa";
	}

  public function pengajuan(){
		$data=array(
			"no_order"=>$this->create_id(),
			"tanggal"=>$this->create_date(),
			"user_kode"=>'USR17080902321'
		);
    $this->site->view('form-purchase-pengajuan', $data);
	}

	public function insert(){

	}

	public function insert_tmp(){
		if(!$this->input->is_ajax_request()) {
			echo "Access Denied";
		}else{
			$post=$this->input->post(NULL, TRUE);
			$data=array(
				"id"=>$post['id']
			);
			echo json_encode(array(
				"status"=>"success",
				"data"=>$data
			));
		}
	}

}
