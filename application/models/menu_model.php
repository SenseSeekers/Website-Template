<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


Class Menu_model extends CI_Model{

	public function select($table){
		//$data = array('Home','Mobile','Phone','Saipul Palalo'); 

		$this->db->select('*'); 
		$this->db->from($table); 

		$result = $this->db->get();
		$result  = $result->result(); 
		 		
		return $result; 
	}

	public function save($table,$data){
		$this->db->insert($table,$data);
	}
}

?>