<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

$errors =[
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
    ];

if(isset($_POST['submit'])){

$firstName =  mysqli_real_escape_string($conn,  $_POST['firstName']);
$lastName =  mysqli_real_escape_string($conn,  $_POST['lastName']);
$email =  mysqli_real_escape_string($conn,  $_POST['email']);


$sql ="INSERT INTO users(firstName, lastName, email) VALUES ('$firstName','$lastName','$email')";
  if(empty($firstName)){
      $errors['firstNameError'] = 'يرجى إدخال الاسم الاول ';
  }
    if(empty($lastName)){
      $errors['lastNameError'] = 'يرجي ادخال الاسم الاخير';
  }
    if(empty($email)){
      $errors['emailError'] = 'يرجي ادخال الايميل';
  }
  elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errors['emailError'] = 'برجاء إدخال ايميل ';
  }
  else {
       if(!mysqli_query($conn,$sql)){
     
      echo 'Error' .mysqli_error($conn);
  }
  }
  
}