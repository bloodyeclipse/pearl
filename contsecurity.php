<!DOCTYPE html>

<html>

<head>
  <title>Hello!</title>
</head>

<body>

<?php
require_once "pearldbms.php";
if (isset($_POST['submit2'])) {

        $securityID = stripslashes($_POST['securityID']);


        $name    = stripslashes($_POST['name']);

        $password = stripslashes($_POST['password']);

$surname = stripslashes($_POST['surname']);

$email = stripslashes($_POST['email']);




$apartment = stripslashes($_POST['apartment']);


$phone = stripslashes($_POST['phone']);

$gender = stripslashes($_POST['gender']);







        $query    = "INSERT INTO security
                     VALUES ('$securityID', '$name', '$surname','$gender','$phone','$email','$apartment','$password',)";
        if( mysqli_query($con, $query)){
       echo"
       <script> alert('Successfully registered');
       </script>  ";  }

       else{echo("could not register");}     }
?>


</body>
</html>