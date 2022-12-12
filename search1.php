 <?php

require_once "pearldbms.php";
if(isset($_POST['search']))
{
    $Tenant_Id=$_POST['Tenant_Id']  ;



$sql = " SELECT * FROM `tenants` where Tenant_Id='$Tenant_Id' ";

$sql_run=mysqli_query($con,$sql);
while($rows=mysqli_fetch_array($sql_run))
 }                          ?>
