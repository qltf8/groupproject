<?php
class Register extends CI_Controller {
 
public function index()
{
	$this->load->helper(array('form', 'url'));
	$this->load->library('form_validation');
	$this->form_validation->set_rules('username', 'Username', 'required|callback_username_check');
	$this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]|callback_password_check');
	$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	if($this->form_validation->run() == FALSE)
		{
  		    //$this->load->helper('url');
   			$this->load->view('register');
		}
  		else
		{
   			$this->load->model('register_model','register');
   			$user=$this->input->post('username');
   			$bol=$this->register->insert($_POST);
   			if($bol){
   			$this->load->library('session');
 			$this->session->set_userdata('user',$user);
 			$this->session->set_userdata('profession','student');
 			$this->load->view('registersuccess');
		}
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
 public function checkUnique(){
 	$student_id=$this->input->post('student_id');
 	$this->load->model('register_model','register');
 	echo $this->register->ajxCheck($student_id);
 }

 	public function student(){
 		echo "student";
 	}
 	public function instructor(){
 		echo "instructor";
 	}
 	public function admin(){
 		echo "admin";
 	}
}
?>