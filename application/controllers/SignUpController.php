<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignUpController extends CI_Controller {

    public function signup(){
        $this->load->view('signupForm');
    }

    public function userSignupData(){
        $this->load->model('formModel');
       $data = $this->formModel->userSignup();
       if ($data==true) {
       redirect("http://localhost/CODEIGNITER/DAY1/index.php/Welcome/Login");
       } else {
        redirect("http://localhost/CODEIGNITER/DAY1/index.php/SignupController/signup");
       }
       
    }
}
?>
