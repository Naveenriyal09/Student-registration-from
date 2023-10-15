<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function Login(){
		$this->load->view('loginForm');
	}

	function userLogin(){
	$this->load->model('formModel');
	 $this->formModel->insertData();
	
 } 
//  ============================= 

 function showTable(){
	$this->load->model('signupForm');
	$data['users'] =$this->signupForm->fetchData();
	 $this->load->view('table', $data);
 }
 

 function DeleteData($Id){

$this->load->model('signupForm');
 $data = $this->signupForm->DelData($Id);
  if ($data == true) {
	redirect('http://localhost/CODEIGNITER/DAY1/index.php/Welcome/action');
  }
 }

// ============ edit user data ===========


 function editUserData($ID){
	 $this->load->model('CIModel');
	 $data['user'] = $this->CIModel->edit($ID);

	 $this->load->view('edit', $data);

 }
//  ================== Update User Data ===========


function updateData(){
	 $this->load->model('formCIModelModel');
	$data = $this->updateUserData();
	if ($data == true) {
		redirect("http://localhost/CODEIGNITER/DAY1/index.php/Welcome/showTable");
	}
	 else {
		echo " i am getting error";
	}
	
	
}

}
