<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

	public $data = array();

	function __construct(){
		parent::__construct();

		$this->load->helper(array('template_helper'));
		$this->load->library(array('Site'));
		$this->load->model(array());

		date_default_timezone_set('Asia/Jakarta');
	}

	public function create_id(){
		$usec = microtime();
		list($ts_usec, $ts_sec) = explode(" ", $usec);
		// real usec, 6 digit
		$ts_usec = substr($ts_usec, 2, 2);
		return date("YmdHis", $ts_sec) . $ts_usec;
	}

	public function create_date(){
		return date("Y-m-d H:i:s");
	}

	public function send_api($data,$url){
	  $ch = curl_init();
	  curl_setopt($ch, CURLOPT_URL, $url);
	  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

	  $result = curl_exec($ch);

	  curl_close($ch);

	  return $result;
	}
}
