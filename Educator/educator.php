<?php 
include('../dbConnection.php');
if(!isset($_SESSION)){ 
  session_start(); 
}
// setting header type to json, We'll be outputting a Json data
header('Content-type: application/json');

 // Admin Login Verification
 if(!isset($_SESSION['is_admin1_login'])){
   if(isset($_POST['checkLogemail']) && isset($_POST['admin1LogEmail']) && isset($_POST['admin1LogPass'])){
     $admin1LogEmail = $_POST['admin1LogEmail'];
     $admin1LogPass = $_POST['admin1LogPass'];
     $sql = "SELECT edu_email, edu_pass FROM educator WHERE edu_email='".$admin1LogEmail."' AND edu_pass='".$admin1LogPass."'";
     $result = $conn->query($sql);
     $row = $result->num_rows;
     
     if($row === 1){
       $_SESSION['is_admin1_login'] = true;
       $_SESSION['admin1LogEmail'] = $admin1LogEmail;
       echo json_encode($row);
     } else if($row === 0) {
       echo json_encode($row);
     }
   }
 }

?>