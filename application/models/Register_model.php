<?php
	class Register_model extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function insert($array){
			$sql="insert into user values(?,?,?)";
			$data[0]=$array['username'];
			$data[1]=md5($array['password']);
			$data[2]=$array['eamail']
			$data[3]=$array['nation'];
			$bol=$this->db->query($sql,$data);
			if($bol)
				echo "successs";
		}
	}
?>