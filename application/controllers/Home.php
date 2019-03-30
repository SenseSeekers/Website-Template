<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array(); 
		$data['sitename'] = ' CI_Crud | Phase 02 '; 
		$table = 'tbl_menus';
		//$data['menus'] = array('Home','Mobile','TV','Laptop','Dextop','Byke'); 
		$data['menus'] = $this->menu_model->select($table,$data); 
		$this->load->view('Homepage',$data);
	}

	public function About()
	{
		$data = array(); 
		$data['sitename'] = ' About page ! '; 
		$table = 'tbl_menus';
		//$data['menus'] = array('Home','Mobile','TV','Laptop','Dextop','Byke'); 
		$data['menus'] = $this->menu_model->select($table,$data); 
		$this->load->view('About',$data);
	}
/*------------------------------------------------------------------------------*/
/*------------------------contact modul option ---------------------------------*/
/*------------------------------------------------------------------------------*/
public function Contact(){
	$data = array();
	$data ['sitename']= 'contact page !';
	$tablec = 'tbl_contact';
	$table = 'tbl_menus';
	$data ['menus'] = $this->menu_model->select($table,$data);
	$data ['contacts'] = $this->menu_model->select($tablec,$data);
	$this->load->view('Contact',$data);
}
public function Contactsave(){
	$table = 'tbl_contact';
	$data = array();
	$data ['name'] = $this->input->post('name');
	$data ['email'] = $this->input->post('email');
	$data ['address'] = $this->input->post('address');
	$data ['phone'] = $this->input->post('phone');
	$data = $this->contact_model->save($table,$data);
	redirect('Home/Contact',$data);
}
	/*------------------------------------------------------------------------------*/
	public function contactdelete($id)
	{
		$table = 'tbl_contact';
		$data = $this->contact_model->remove($table,$id);
		redirect('Home/Contact',$data);
	}

/*
|---------------------------------------------------------------------------------
*/
	public function contactpudateByid($id){
	$data = array();
/*-------------------------------------*/
	$data['table'] = 'tbl_contact';
	$data['id'] = $id;
	$data ['name'] = $this->input->post('name');
	$data ['email'] = $this->input->post('email');
	$data ['address'] = $this->input->post('address');
	$data ['phone'] = $this->input->post('phone');
	$this->contact_model->Contactupdate($data);
	redirect('Home/Contact/');
}
/*------------------------------------------------------------------------------*/
/*------------------------Mobile modul option ----------------------------------*/
/*------------------------------------------------------------------------------*/
	public function Mobile ()
	{
		$data = array() ;
		$data ['sitename'] = 'Mobile page !';
		$table_m = 'tbl_mobile';
		$table = 'tbl_menus';
		$data ['menus'] = $this->menu_model->select($table,$data);
		$data ['mobiles'] = $this->contact_model->select($table_m,$data);
		$this->load->view('Mobile',$data); 
	}
/*
|---------------------------------------------------------------------------------
*/
	public function mobilesave(){
		$table = 'tbl_mobile';
		$data = array();
		$data ['name'] = $this->input->post('name');
		$data ['model'] = $this->input->post('model');
		$data ['details'] = $this->input->post('details');
		$data ['price'] = $this->input->post('price');
		$data = $this->contact_model->save($table,$data);
		redirect('Home/Mobile',$data);
	}
/*
|---------------------------------------------------------------------------------
*/
	public function mobiledelet($id)
	{
		$table = 'tbl_mobile';
		$data = $this->contact_model->remove($table,$id);
		redirect('Home/Mobile/',$data);
	}
/*
|---------------------------------------------------------------------------------
*/
	public function mobileupdateByid($id){
	$data = array();
/*-------------------------------------*/
	$data['table'] = 'tbl_mobile';
	$data['id'] = $id;
	$data ['name'] = $this->input->post('name');
	$data ['model'] = $this->input->post('model');
	$data ['details'] = $this->input->post('details');
	$data ['price'] = $this->input->post('price');
	$this->contact_model->Mobileupdate($data);
	redirect('Home/Mobile/');
}
/*------------------------------------------------------------------------------*/
/*------------------------laptop modul option ----------------------------------*/
/*------------------------------------------------------------------------------*/

	public function laptop ()
	{
		$data = array() ;
		$data ['sitename'] = 'Laptop page !';
		$table_m = 'tbl_laptop';
		$table = 'tbl_menus';
		$data ['menus'] = $this->menu_model->select($table,$data);
		$data ['laptops'] = $this->contact_model->select($table_m,$data);
		$this->load->view('laptop',$data); 
	}
	public function laptopsave(){
		$table = 'tbl_laptop';
		$data = array();
		$data ['name'] = $this->input->post('name');
		$data ['model'] = $this->input->post('model');
		$data ['details'] = $this->input->post('details');
		$data ['price'] = $this->input->post('price');
		$data = $this->contact_model->save($table,$data);
		redirect('Home/laptop',$data);
	}

	public function laptopdelete($id){ 
		$table = 'tbl_laptop';
		$data = $this->contact_model->remove($table,$id);
		redirect('Home/laptop',$data);
	}

/*
|---------------------------------------------------------------------------------
*/
	public function laptopupdateByid($id){
	$data = array();
/*-------------------------------------*/
	$data['table'] = 'tbl_laptop';
	$data['id'] = $id;
	$data ['name'] = $this->input->post('name');
	$data ['model'] = $this->input->post('model');
	$data ['details'] = $this->input->post('details');
	$data ['price'] = $this->input->post('price');
	$this->contact_model->laptopupdate($data);
	redirect('Home/laptop/');
}

/*------------------------------------------------------------------------------*/
/*-------------------------- Byke model option ---------------------------------*/
/*------------------------------------------------------------------------------*/

	public function byke ()
	{
		$data = array() ;
		$data ['sitename'] = 'Byke page !';
		$table_m = 'tbl_byke';
		$table = 'tbl_menus';
		$data ['menus'] = $this->menu_model->select($table,$data);
		$data ['bykes'] = $this->contact_model->select($table_m,$data);
		$this->load->view('byke',$data); 
	}
	public function bykesave(){
		$table = 'tbl_byke';
		$data = array();
		$data ['name'] = $this->input->post('name');
		$data ['model'] = $this->input->post('model');
		$data ['details'] = $this->input->post('details');
		$data ['price'] = $this->input->post('price');
		$data = $this->contact_model->save($table,$data);
		redirect('Home/byke',$data);
	}
/*------------------------------------------------------------------------------*/

	public function bykedelete ($id)
	{
		$table = 'tbl_byke';
		$data = $this->contact_model->remove($table,$id);
		redirect('Home/byke',$data);
	}

public function bykeupdateid($id){

	$data = array();
/*-------------------------------------*/
	$data['table'] = 'tbl_byke';
	$data['id'] = $id;
	$data ['name'] = $this->input->post('name');
	$data ['model'] = $this->input->post('model');
	$data ['details'] = $this->input->post('details');
	$data ['price'] = $this->input->post('price');
	$this->contact_model->bykeupdateid($data);
	redirect('Home/Byke/');
}

/*------------------------------------------------------------------------------*/
/*-------------------------- Cosmetics model option ----------------------------*/
/*------------------------------------------------------------------------------*/

	public function cosmetics ()
	{
		$data = array() ;
		$data ['sitename'] = 'Cosmetics page !';
		$table_m = 'tbl_cosmetics';
		$table = 'tbl_menus';
		$data ['menus'] = $this->menu_model->select($table,$data);
		$data ['cosmetice'] = $this->contact_model->select($table_m,$data);
		$this->load->view('cosmetics',$data); 
	}
	public function cosmeticssave(){
		$table = 'tbl_cosmetics';
		$data = array();
		$data ['name'] = $this->input->post('name');
		$data ['model'] = $this->input->post('model');
		$data ['details'] = $this->input->post('details');
		$data ['price'] = $this->input->post('price');
		$data = $this->contact_model->save($table,$data);
		redirect('Home/cosmetics',$data);
	}

	public function cosmeticsdelete ($id){
		$table = 'tbl_cosmetics';
		$data = $this->contact_model->remove($table,$id);
		redirect('Home/cosmetics',$data);
	}

/*
|---------------------------------------------------------------------------------
*/
	public function CosmeticsBYeditID($id){
	$data = array();
/*-------------------------------------*/
	$data['table'] = 'tbl_cosmetics';
	$data['id'] = $id;
	$data ['name'] = $this->input->post('name');
	$data ['model'] = $this->input->post('model');
	$data ['details'] = $this->input->post('details');
	$data ['price'] = $this->input->post('price');
	$this->contact_model->cosmeticsupate($data);
	redirect('Home/cosmetics/');
}


/*------------------------------------------------------------------------------*/
/*----------------------------Tvs option model ---------------------------------*/
/*------------------------------------------------------------------------------*/

	public function tvs ()
	{
		$data = array() ;
		$data ['sitename'] = 'Tvs page !';
		$table_m = 'tbl_tv';
		$table = 'tbl_menus';
		$data ['menus'] = $this->menu_model->select($table,$data);
		$data ['tvis'] = $this->contact_model->select($table_m,$data);
		$this->load->view('tvs',$data); 
	}
	public function tvssave(){
		$table = 'tbl_tv';
		$data = array();
		$data ['name'] = $this->input->post('name');
		$data ['model'] = $this->input->post('model');
		$data ['details'] = $this->input->post('details');
		$data ['price'] = $this->input->post('price');
		$data = $this->contact_model->save($table,$data);
		redirect('Home/tvs',$data);
	}
/*------------------------------------------------------------------------------*/
	public function tvsdelete ($id){
		$table = 'tbl_tv';
		$data = $this->contact_model->remove($table,$id);
		redirect('Home/tvs',$data);
	}

/*
|---------------------------------------------------------------------------------
*/
	public function TvupdinById($id){
	$data = array();
/*-------------------------------------*/
	$data['table'] = 'tbl_tv';
	$data['id'] = $id;
	$data ['name'] = $this->input->post('name');
	$data ['model'] = $this->input->post('model');
	$data ['details'] = $this->input->post('details');
	$data ['price'] = $this->input->post('price');
	$this->contact_model->TvsUpdate($data);
	redirect('Home/tvs/');
}

/*------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------*/
	public function Book(){

		$data = array() ;
		$data ['sitename'] = 'Book page !';
		$table_m = 'tbl_book';
		$table = 'tbl_menus';
		$data ['menus'] = $this->menu_model->select($table,$data);
		$data ['Books'] = $this->contact_model->select($table_m,$data);
		$this->load->view('Book',$data); 
	}

	public function Booksave()
	{ 
		$table = 'tbl_Book';
		$data = array();
		$data ['authorname'] = $this->input->post('authorname');
		$data ['bookname']  = $this->input->post('bookname');
		$data ['details']  = $this->input->post('details');
		$data ['price'] = $this->input->post('price');
		$data = $this->contact_model->save($table,$data);
		redirect('Home/Book',$data);

	}

	public function Bookdelete($id){
		$table = 'tbl_Book';
		$data = $this->contact_model->remove($table,$id);
		redirect('Home/Book',$data);
	}
	public function BookupdateId($id){
		$data = array();
	/*------------------------------------------------------------------------------*/
		$data ['table'] = 'tbl_Book';
		$data ['id'] = $id;
		$data ['authorname'] = $this->input->post('authorname');
		$data ['bookname'] = $this->input->post('bookname');
		$data ['details'] = $this->input->post('details');
		$data ['price']  = $this->input->post('price');
		$this->contact_model->BookDataById($data);
		redirect('Home/Book',$data);

	}
/*------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------*/

	public function Homepage (){
		$data = array() ;
		$data ['sitename'] = 'Homepage page !';
		$table = 'tbl_menus';
		$data ['menus'] = $this->menu_model->select($table,$data);
		$this->load->view('Homepage',$data); 
	}

/*------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------*/

}