<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	public function index()
	{	
		$this->load->helper('url');
		$this->load->model('page_model','page');
		$per_page=5;
		$config['per_page']=$per_page;
		$config['total_rows']=$this->page->getRows();
		$config['prev_link'] = '&nbsp Prev &nbsp';
		//$config['prev_tag_open'] = '<div>';
		//$config['prev_tag_close'] = '</div>';
		$config['next_link'] = '&nbsp Next &nbsp';
		//$config['next_tag_open'] = '<div>';
		//$config['next_tag_close'] = '</div>';
		$config['base_url']=base_url('index.php/page/index');
		$this->load->library('pagination');
		$this->pagination->initialize($config);
		$data['links']=$this->pagination->create_links();
		$offset=intval($this->uri->segment(3));
		$data['field']=$this->page->getField();
		$data['content']=$this->page->getContent($offset,$per_page);
		$this->load->view('page',$data);
	}
	public function test(){
		$this->load->model('page_model','page');
		echo "<pre>";
		print_r($this->page->getField());
		echo "</pre>";
	}
}
