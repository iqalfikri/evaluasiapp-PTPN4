<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index()
    {
        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('password','Password','required|trim');
          
        if (!$this->session->userdata('username')) {
            if ($this->form_validation->run() == false) {
                $data = array(
                    'title' => "Halaman Login"
                );
                $this->load->view('auth/auth-login', $data);
              } else {
                $this->_login();
              }
        } else {
            redirect('admin');
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->db->get_where('tbl_users', ['username' => $username])->row_array();

        if ($user != NULL){
            if ($password == $user['password']) {
                $data = [
                  'username' => $user['username'],
                  'role'  => $user['role']
                ];
                $activity = "Berhasil masuk ke aplikasi";
                $this->session->set_userdata($data);
                add_log($activity, $data['username']);
                redirect('');
              } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Maaf <strong>password</strong> anda salah !<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    redirect('login');
              }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Maaf <strong>NIK SAP</strong> anda tidak ditemukan ! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('login');
        }
    }

    public function logout(){
    $username = $this->session->userdata('username');
    $activity = "Telah keluar dari aplikasi";
    add_log($activity, $username);
    
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('role');
    $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">Terima kasih, Anda berhasil keluar <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('login');
    }

}

/* End of file Controllername.php */
