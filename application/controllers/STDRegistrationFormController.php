<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class STDRegistrationFormController extends CI_Controller {

    function registrationForm(){
        $this->load->view('stdRegistrationForm');
    }
    function stdRegistraion(){
       $this->load->model('formModel');
       $this->formModel->studentRegistrationForm();
    }



}
?>