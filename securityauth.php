<?php
    include_once 'pearldbms.php';
     $securityID = $_POST['$securityID'];
    $password = $_POST['password'];


        //to prevent from mysqli injection
        $securityID = stripcslashes($securityID);
        $password = stripcslashes($password);
        $securityID = mysqli_real_escape_string($con, $securityID);
        $password = mysqli_real_escape_string($con, $password);

        $sql = "select *from security where  securityID = '$securityID' and password = '$password'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);


        if($count == 1){
           header("Location:securityhome.php")  ;




                }

        else  {
                 
             header("Location:securitylogin.php")  ;

        }


?>



