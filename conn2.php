<html>

<head>
  <title>Hello!</title>
</head>

<body>

<?php
require_once "pearldbms.php";
if (isset($_POST['submit'])) {

        $name = stripslashes($_POST['name']);



$hnumber = stripslashes($_POST['hnumber']);

$apartment = stripslashes($_POST['apartment']);


$visitorid = stripslashes($_POST['visitorid']);







        $query    = "INSERT INTO visitor
                     VALUES ('$name', '$visitorid','$hnumber','$apartment')";
        if( mysqli_query($con, $query)){
       header("Location:securityservices.php")  ;  }
       else{echo("could not register");}     }
?>


</body>
</html>