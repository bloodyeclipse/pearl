<!DOCTYPE html>

<html>

<head>
  <title>contcat us</title>
</head>

<body>

<?php
require_once "pearldbms.php";
if (isset($_POST['submit'])) {

        $Tenant_Id = stripslashes($_POST['Tenant_Id']);


        $email    = stripslashes($_POST['email']);

        $subject = stripslashes($_POST['subject']);

$message = stripslashes($_POST['message']);





        $query    = "INSERT INTO contacts
                     VALUES ('$Tenant_Id', '$email', '$subject','$message')";
        if( mysqli_query($con, $query)){
     header("Location:services1.php")  ;  }
       else{echo("could not send message, try again");}     }
?>


</body>
</html>