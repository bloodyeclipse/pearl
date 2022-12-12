<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `tenants` WHERE CONCAT(`idname`, `name`, `surname`, `nationality`,`gender`, `apartment`, `hnumber`, `phone`,`password`, `email`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

}
 else {
    $query = "SELECT * FROM `tenants`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "pearldbms");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<!DOCTYPE html>

<html>

<head>
  <title>Hello!</title>
</head>


 <form action="aa.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>

<table>
    <tr>
                                 <th>Tenant Id</th>

                               <th>Email</th>

                                <th>Name</th>

                                <th>Surname</th>
                                <th>hnumber</th>
                                <th>apartment</th>

                                <th>password</th>

                                <th>gender</th>

                                <th>nationality</th>
                                <th>phone</th>

                        </tr>

                        <!-- PHP CODE TO FETCH DATA FROM ROWS -->

                             <?php

                // LOOP TILL END OF DATA

                while($rows=mysqli_fetch_array($search_result)):
                ?>





                        <tr>

                                <!-- FETCHING DATA FROM EACH

                                        ROW OF EVERY COLUMN -->

                                <td><?php echo $rows["idname"];?></td>

                                <td><?php echo $rows['email'];?></td>

                                <td><?php echo $rows['name'];?></td>

                                <td><?php echo $rows['surname'];?></td>
                                <td><?php echo $rows['hnumber'];?></td>

                                <td><?php echo $rows['apartment'];?></td>

]                                <td><?php echo $rows['password'];?></td>

                                <td><?php echo $rows['gender'];?></td>
                                <td><?php echo $rows['nationality'];?></td>

                                <td><?php echo $rows['phone'];?></td>



                        </tr>

                            <?php

                endwhile;
                ?>

            ?>

                </table>




</body>

</html>