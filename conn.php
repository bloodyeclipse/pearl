<!DOCTYPE html>

<html>

<head>
  <title>Hello!</title>
</head>

<body>

<?php
require_once "pearldbms.php";
if (isset($_POST['submit'])) {

        $idname = stripslashes($_POST['idname']);


        $name    = stripslashes($_POST['name']);

        $password = stripslashes(md5($_POST['password']));

$surname = stripslashes($_POST['surname']);

$email = stripslashes($_POST['email']);


$hnumber = stripslashes($_POST['hnumber']);

$apartment = stripslashes($_POST['apartment']);


$phone = stripslashes($_POST['phone']);

$gender = stripslashes($_POST['gender']);

$nationality = stripslashes($_POST['nationality']);





        $query    = "INSERT INTO tenants
                     VALUES ('$idname', '$name', '$password','$surname','$email','$hnumber','$apartment','$phone','$gender','$nationality')";
        if( mysqli_query($con, $query)){
       header("Location:managerservices.php")  ;  }
       else{echo("could not register");}     }
?>


</body>
</html>