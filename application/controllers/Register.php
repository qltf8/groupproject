<?php

class Register extends CI_Controller {
 
 function index()
 {
  $this->load->helper(array('form', 'url'));
  
  $this->load->library('form_validation');
  $this->form_validation->set_rules('username', 'Username', 'required|callback_username_check');
$this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]|callback_password_check');
$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
    
  if ($this->form_validation->run() == FALSE)
  {
   $this->load->view('register');
  }
  else
  {
   $this->load->view('registersuccess');
  }
 }
  public function username_check($str)
 {
  if (0)
  {
   $this->form_validation->set_message('username_check', 'The %s field can not be ...');
   return FALSE;
  }
  else
  {
   return TRUE;
  }
 }
public function password_check($str)
 {
  if (0)
  {
   $this->form_validation->set_message('username_check', 'The %s field can not be ...');
   return FALSE;
  }
  else
  {
   return TRUE;
  }
 }
}
?>