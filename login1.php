<?php
    include('pearldbms.php');
    $idname = $_POST['admin_id'];
    $password = $_POST['password'];


        //to prevent from mysqli injection
        $idname = stripcslashes($admin_id);
        $password = stripcslashes($password);
        $idname = mysqli_real_escape_string($con, $admin_id);
        $password = mysqli_real_escape_string($con, $password);

        $sql = "select *from admin where admin_id = '$admin_id' and password = '$password'";
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



