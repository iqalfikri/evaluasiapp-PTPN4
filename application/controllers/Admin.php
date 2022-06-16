<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index() {
		
		$data = array (
			'title' => "Home Dashboard",
			'user' => $this->db->get_where('tbl_users', ['username' => getUsername()])->row_array(),
			'log' => $this->db->order_by('tgl_log', 'DESC')->get_where('tbl_log',['username_user' => getUsername()])->result_array()
		);
		$this->load->view('index', $data);
		//echo "sukses";
	}





}
