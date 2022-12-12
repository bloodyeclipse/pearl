<?php
    include('pearldbms.php');
    $idname = $_POST['idname'];
    $password = $_POST['password'];


        //to prevent from mysqli injection
        $idname = stripcslashes($idname);
        $password = stripcslashes($password);
        $idname = mysqli_real_escape_string($con, $idname);
        $password = mysqli_real_escape_string($con, $password);

        $sql = "select *from tenants where idname = '$idname' and password = '$password'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);


        if($count == 1){
           header("Location:tenanthome.php")  ;




                }

        else  {


             header("Location:tenantlogin1.php")  ;
             echo '<script> alert("Invalid ID / password");</script>';
        }


?>



