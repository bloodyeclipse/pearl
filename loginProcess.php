
<?php
session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    include 'pearldbms.php';
    $sql=mysqli_query($con,"SELECT * FROM tenants where idname='$idname' and password='md5($password)'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["idname"] = $row['idname'];
        $_SESSION["email"]=$row['email'];
        $_SESSION["name"]=$row['name'];
        $_SESSION["surname"]=$row['surname'];
        $_SESSION["gender"] = $row['gender'];
        $_SESSION["apartment"]=$row['apartment'];
        $_SESSION["hnumber"]=$row['hnumber'];
        $_SESSION["password"]=$row['password'];
        $_SESSION["phone"] = $row['phone'];
        $_SESSION["nationality"]=$row['nationality'];

        header("Location: home.php");
    }
    else
    {
        echo "Invalid Tenant id/Password";
    }
}
?>
