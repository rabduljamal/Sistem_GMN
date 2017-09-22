<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase_model extends My_Model{
	protected $_table_name = 'Purchase';
	protected $_primary_key = 'ID';
	protected $_order_by = 'ID';
	protected $_order_by_type = 'DESC';

	function __construct(){
		parent::__construct();
	}

	public function Insert(){

	}

	public function Delete(){

	}



}
