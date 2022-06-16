<?php

function is_logged_in()
{
  $ci = get_instance();
  if (!$ci->session->userdata('username')) {
    redirect('login');
  } else {
    $role = $ci->session->userdata('role');
  }
}

function add_log($activity, $username)
{
  $ci = get_instance();

  if ($username == NULL) {
    $ci->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">Terima kasih, Anda berhasil keluar <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('login');
  } else {
    $data['activity'] = $activity;
    $data['username_user'] = $username;
    $ci->db->insert('tbl_log', $data);
  }

}
