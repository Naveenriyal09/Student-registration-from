<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashBoardController extends CI_Controller {

    function stdDashBoard(){

        $data['user']=$this->load->view('dashBoard');
    }
  
}
?>