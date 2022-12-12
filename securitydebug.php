<?php
 require "pearldbms.php";
 echo $_POST["name"];


  $query    ="INSERT INTO securitymaintenance(`name`, `surname`, `idname`, `email`,
  `phone`, `type_of_maintenance`, `message`) VALUES ('aa','bb','cc','dd','','',''])";

       echo mysqli_query($con, $query);




?>