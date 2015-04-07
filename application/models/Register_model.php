<?php
	class Register_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}
		public function insert($array){
			echo print_r($array);
		}
	}
?>