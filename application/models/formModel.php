<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class formModel extends CI_model{
// ============================= signup form ===================
function userSignup(){
    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $pwd = $this->input->post('password');
    $rpwd = $this->input->post('rpassword');

    if ($pwd==$rpwd){

        $sql = "INSERT INTO `signup_form` (`name`, `email`, `pwd`, `rpwd`) VALUES (?, ?, ?, ?)";
        $result = $this->db->query($sql, array($name, $email, $pwd, $rpwd));
     
     if ($result) {
        return true;
     } else {
        return false;
     }
    } 
    else {
       echo "Password doesn t match";
    }
    }



    function insertData(){
        $email = $this->input->post("email");
        $pwd = $this->input->post("Password");
    
        // It's important to use proper SQL syntax and protect against SQL injection
        $sql = "SELECT `email`, `pwd` FROM `signup_form` WHERE email = ? AND pwd = ?";
        $result = $this->db->query($sql, array($email, $pwd));
         
        if ($result && $result->num_rows() > 0) {
            redirect('http://localhost/CODEIGNITER/DAY1/index.php/STDRegistrationFormController/registrationForm');
            // echo "<script>alert('I have your data');</script>"; // User data found
        } else {
            redirect('http://localhost/CODEIGNITER/DAY1/index.php/Welcome/Login');
            // echo "<script>alert('I am getting an error');</script>"; // User data not found
        }
    }
    
    
    


function fetchData(){
 
    $sql = " SELECT * FROM login_form";
    $result = $this->db->query($sql);
     if ($result->num_rows()> 0) {
        $data = $result->result_array();
         return $data;
     }
     else{
        echo " i am getting error";
     }

 }


   function DelData($ID){
 $sql = "DELETE FROM `login_form` WHERE id ='$ID'";
 $result = $this->db->query($sql);
if ($result) {
 return true;
}
else {
    echo " i am getting error";
}
}


// ========= edit user data =========

function edit($ID){
    $sql = " SELECT * FROM login_form where ID = '$ID'";
    $result = $this->db->query($sql);
    if ($result->num_rows()>0) {
        $data = $result->result_array();
        return $data;
    }

    else{
        return false;
    }
 
}

// ============ update user data ======= 
function updateUserData(){
    $Fname = $this->input->post('Fname');
    $Id = $this->input->post('id');
    $Lname = $this->input->post('Lname');
    $email = $this->input->post('email');
    $pwd  = $this->input->post('Password');
$sql = "UPDATE `login_form` SET `First_name`='$Fname ',
`Last_name`='$Lname',`Email`='$email',`Password`='$pwd ' WHERE ID = '$Id'";

$result = $this->db->query($sql);
if ($result) {
    return true;
} else {
    return false ;
} 
}


// ================= forgot user password =============

public function updateUserPassword(){
   $email= $this->input->post('email');
   $sql ="select id from signup_form where email= ?";
   $result=$this->db->query($sql, array($email));
   if ($result->num_rows()>0) {
       $data = $result->result_array();
    return $data;
   } else {
   return false;
   }
}




function userPasswordUpadte(){
    $password= $this->input->post('conPassword');
    $id= $this->input->post('id');
    $sql= "UPDATE `signup_form` SET `pwd`='$password',`rpwd`='$password' WHERE id=$id";
    $result=$this->db->query($sql);
    if ($result) {
        return true;
    } 
    
   
}



// ================ STUDENT REGISTRATION FORM ====================

function studentRegistrationForm(){
    $name = $this->input->post('name');
    $FatherName = $this->input->post('FatherName');
    $MotherName = $this->input->post('MotherName');
    $Email = $this->input->post('Email');
    $number = $this->input->post('number');
    $Password = $this->input->post('Password');
    $courseType = $this->input->post('courseType');
    $city = $this->input->post('city');


    $sql = "INSERT INTO `std_registration`(`ID`, `name`, `FatherName`, `MotherName`, `Email`, 
    `number`, `Password`, `courseType`, `city`) VALUES ('','  $name','$FatherName',
    '$MotherName','$Email','$number',' $Password','$courseType','$city')";

    $result = $this->db->query($sql);
    if ($result) {
        redirect('http://localhost/CODEIGNITER/DAY1/index.php/dashBoardController/stdDashBoard');
    } else {
        echo "Error inserting data";
    }
}





function checkCondition(){

}


}

