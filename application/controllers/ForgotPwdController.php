<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class forgotPwdController extends CI_Controller {

public function forgotPwd(){

    $this->load->view('forgotPassword');

}
function forgotUserPassword(){
      
    $this->load->model('formModel');
    $data['userId']= $this->formModel->updateUserPassword();
   $this->load->view('conForgotPwd',$data);
}


// ========= confirm forgot password ==================


function conforgotPwd(){
    
    $this->load->model('formModel');
   $data=$this->formModel->userPasswordUpadte();
   if ($data==true) {
    
    redirect("http://localhost/CODEIGNITER/DAY1/index.php/Welcome/Login");
   }

}


}
?>