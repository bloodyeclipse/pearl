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



$surname = stripslashes($_POST['surname']);

$email = stripslashes($_POST['email']);

    $message = stripslashes($_POST['message']);





$phone = stripslashes($_POST['phone']);



$type_of_maintenance = stripslashes($_POST['type_of_maintenance']);





        $query    = "INSERT INTO maintenance
                     VALUES ('$idname', '$name','$surname','$phone','$email','$type_of_maintenance','$message')";
        if( mysqli_query($con, $query)){
       header("Location:services1.php")  ;     }
       else{echo("could not send");}     }
?>


</body>
</html>