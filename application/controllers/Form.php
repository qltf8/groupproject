<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nation', 'nation', 'required');
		$this->form_validation->set_rules('degree', 'degree', 'required');
	if($this->form_validation->run() == FALSE)
		{
   			$this->load->view('application/status');
		}
  		else
		{
   			$data['nation']=$this->input->post('nation');
   			$data['degree']=$this->input->post('degree');
   			$this->load->model("test_model","test");
			$data['course']=$this->test->showDept();
			foreach($data['course'] as $value){
				$dept=$value['deptment'];
				$data[$dept]=$this->test->showCourse($dept);
			}
			$this->load->view('application/form',$data);
		}
	}
	
	public function interUnder(){
		$id=$this->input->post('id');
		$data[0]=$this->input->post('id');
		$data[1]=$this->input->post('fname');
		$data[2]=$this->input->post('lname');
		$data[3]=$this->input->post('gpa');
		$data[4]=$this->input->post('phone');
		$data[5]=$this->input->post('email');
		$data[6]=$this->input->post('gradDate');
		$data[7]=$this->input->post('work');
		$teaching=$this->input->post('teaching');
		$taught=$this->input->post('taught');
		$teach=$this->input->post('teach');
		foreach($teach as $name){
			$course[$name]=$this->input->post($name);
		}
		$under[0]=$this->input->post('id');
		$under[1]=$this->input->post('program');
		$under[2]=$this->input->post('level');
		$inter[0]=$this->input->post('id');
		$inter[1]=$this->input->post('score');
		$inter[2]=$this->input->post('test');
		$this->load->model('form_model','form');
		$this->form->closeAutoCommit();
		$b1=$this->form->putApp($data);
		$b2=$this->form->putTeaching($id,$teaching);
		$b3=$this->form->putTaught($id,$taught);
		$b4=$this->form->putTeach($id,$course);
		$b5=$this->form->putUnder($under);
		$b6=$this->form->putInter($inter);
		if($b1&&$b2&&$b3&&$b4&&$b5&&$b6){
			$this->form->commit();
			$this->form->openAutoCommit();
		}else{
			$this->form->rollback();
			$this->form->openAutoCommit();
		}
	}
	public function interGra(){
		echo "interGra";
	}
	public function natUnder(){
		echo "natUnder";
	}
	public function natGra(){
		echo "natGra";
	}
}
