<?php
if(!isset($_SESSION)){ 
  session_start(); 
}
define('TITLE', 'Add Educator');
include('./adminInclude/header.php'); 
include('../dbConnection.php');

 if(isset($_SESSION['is_admin_login'])){
  $adminEmail = $_SESSION['adminLogEmail'];
 } else {
  echo "<script> location.href='../index.php'; </script>";
 }
 if(isset($_REQUEST['newEduSubmitBtn'])){
  // Checking for Empty Fields
  if(($_REQUEST['edu_name'] == "") || ($_REQUEST['edu_email'] == "") || ($_REQUEST['edu_pass'] == "") || ($_REQUEST['edu_qual'] == "")){
   // msg displayed if required field missing
   $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  } else {
   // Assigning User Values to Variable
   $edu_name = $_REQUEST['edu_name'];
   $edu_email = $_REQUEST['edu_email'];
   $edu_pass = $_REQUEST['edu_pass'];
   $edu_qual = $_REQUEST['edu_qual'];

    $sql = "INSERT INTO educator (edu_name, edu_email, edu_pass, edu_qual) VALUES ('$edu_name', '$edu_email', '$edu_pass', '$edu_qual')";
    if($conn->query($sql) == TRUE){
     // below msg display on form submit success
     $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> educator Added Successfully </div>';
    } else {
     // below msg display on form submit failed
     $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Add Educator </div>';
    }
  }
  }
 ?>
<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center">Add New educator</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="edu_name">Name</label>
      <input type="text" class="form-control" id="edu_name" name="edu_name">
    </div>
    <div class="form-group">
      <label for="edu_email">Email</label>
      <input type="text" class="form-control" id="edu_email" name="edu_email">
    </div>
    <div class="form-group">
      <label for="edu_pass">Password</label>
      <input type="text" class="form-control" id="edu_pass" name="edu_pass">
    </div>
    <div class="form-group">
      <label for="edu_occ">Qualification</label>
      <input type="text" class="form-control" id="edu_qual" name="edu_qual">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="newEduSubmitBtn" name="newEduSubmitBtn">Submit</button>
      <a href="educators.php" class="btn btn-secondary">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg; } ?>
  </form>
</div>
</div>  <!-- div Row close from header -->
</div>  <!-- div Conatiner-fluid close from header -->

<?php
include('./adminInclude/footer.php'); 
?>