<!DOCTYPE html>

<html>

<head>
  <title>Hello!</title>
</head>

<body>

<?php
require_once "pearldbms.php";
if (isset($_POST['submit'])) {

        $Tenant_Id = stripslashes($_POST['Tenant_Id']);




$message = stripslashes($_POST['message']);





        $query    = "INSERT INTO messages
                     VALUES ('$Tenant_Id','$message')";
        if( mysqli_query($con, $query)){
      header("Location:managerservices.php")  ;  }
       else{echo("could not send message, try again");}     }
?>


</body>
</html>