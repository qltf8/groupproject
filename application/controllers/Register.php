<?php
class Register extends CI_Controller {
 
	public function index()
	{
		//Load registration/signin page
		$this->load->view('register');
	}

	public function add_student()
	{
		$this->load->library('form_validation');

		//Validation rules
		$this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[128]|callback_username_check');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[128]|matches[passconf]|callback_password_check');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|max_length[128]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
	
		if($this->form_validation->run() == FALSE)
		{
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