<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


Class contact_model extends CI_Model{

	public function select($table){
		//$data = array('Home','Mobile','Phone','Saipul Palalo'); 

		$this->db->select('*'); 
		$this->db->from($table); 

		$result = $this->db->get();
		$result  = $result->result(); 
		 		
		return $result; 
	}

	public function save($table , $data){
		$this->db->insert($table,$data);
	}

		public function remove($table,$id){
      		$this->db->where('id', $id);
      		$this->db->delete($table); 
		}
/*--------------------------------------------------------*/
	public function Mobileupdate($data){

		$this->db->set('name',$data['name']);
		$this->db->set('model',$data['model']);
		$this->db->set('details',$data['details']);
		$this->db->set('price',$data['price']);
		$this->db->where('id',$data['id']);
		$this->db->update($data['table']);
	}

/*--------------------------------------------------------*/
	public function Contactupdate($data){

		$this->db->set('name',$data['name']);
		$this->db->set('email',$data['email']);
		$this->db->set('address',$data['address']);
		$this->db->set('phone',$data['phone']);
		$this->db->where('id',$data['id']);
		$this->db->update($data['table']);
	}

/*--------------------------------------------------------*/
	public function laptopupdate($data){

		$this->db->set('name',$data['name']);
		$this->db->set('model',$data['model']);
		$this->db->set('details',$data['details']);
		$this->db->set('price',$data['price']);
		$this->db->where('id',$data['id']);
		$this->db->update($data['table']);
	}

/*--------------------------------------------------------*/
	public function cosmeticsupate($data){

		$this->db->set('name',$data['name']);
		$this->db->set('model',$data['model']);
		$this->db->set('details',$data['details']);
		$this->db->set('price',$data['price']);
		$this->db->where('id',$data['id']);
		$this->db->update($data['table']);
	}
/*--------------------------------------------------------*/
	public function TvsUpdate($data){

		$this->db->set('name',$data['name']);
		$this->db->set('model',$data['model']);
		$this->db->set('details',$data['details']);
		$this->db->set('price',$data['price']);
		$this->db->where('id',$data['id']);
		$this->db->update($data['table']);
	}
/*--------------------------------------------------------*/
public function bykeupdateid($data){
	$this->db->set('name',$data['name']);
	$this->db->set('model',$data['model']);
	$this->db->set('details',$data['details']);
	$this->db->set('price',$data['price']);
	$this->db->where('id',$data['id']);
	$this->db->update($data['table']);
}
public function BookDataById($data){
	$this->db->set('authorname',$data['authorname']);
	$this->db->set('bookname',$data['bookname']);
	$this->db->set('details',$data['details']);
	$this->db->set('price',$data['price']);
	$this->db->where('id',$data['id']);
	$this->db->update($data['table']);
}
/*--------------------------------------------------------*/
}

?>