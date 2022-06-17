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
			'user_all' => $this->db->count_all('tbl_users'),
			'user_pimpinan' => $this->db->select('*')->from('tbl_users')->where('role', 'atasan')->count_all_results(),
			'pelatihan_all' => $this->db->count_all('tbl_pelatihan'),
			'pelatihan_pending' => $this->db->select('*')->from('tbl_users_pelatihan')->where('status', 'pending')->count_all_results(),
			'log_admin' => $this->db->order_by('tgl_log', 'DESC')->select('tbl_log.*,  tbl_users.nama')->from('tbl_log')->join('tbl_users', 'tbl_log.username_user = tbl_users.username')->get()->result_array(),
			'log_users' => $this->db->order_by('tgl_log', 'DESC')->get_where('tbl_log',['username_user' => getUsername()])->result_array()
		);
		$this->load->view('index', $data);
		//print_r($data['log_users']);
		//echo "sukses";
	}





}
