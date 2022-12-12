<?php
require_once "pearldbms.php";
$sql = " SELECT * FROM securitymaintenance ORDER BY idname DESC ";

$result = $con->query($sql);

$con->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>

<html lang="en">

<head>

        <meta charset="UTF-8">

        <title>view messsages</title>

        <!-- CSS FOR STYLING THE PAGE -->

        <style>

                table {

                        margin: 0 auto;

                        font-size: large;

                        border: 1px solid black;

                }


                h1 {

                        text-align: center;

                        color: #006600;

                        font-size: xx-large;

                        font-family: 'Gill Sans', 'Gill Sans MT',

                        ' Calibri', 'Trebuchet MS', 'sans-serif';

                }


                td {

                        background-color: #E4F5D4;

                        border: 1px solid black;

                }


                th,

                td {

                        font-weight: bold;

                        border: 1px solid black;

                        padding: 10px;

                        text-align: center;

                }


                td {

                        font-weight: lighter;

                }

        </style>
</head>

<body>

        <section>

                <h1>View queries</h1>

                <!-- TABLE CONSTRUCTION -->

                <table>

                        <tr>

                                <th>Name</th>

                                <th>Surname</th>

                                <th>security id </th>
                                <th>  email  </th>
                               <th> phone </th>
                               <th> type of mantaince</th>

                                <th>Message</th>
                                <th>Reply</th>

                        </tr>

                        <!-- PHP CODE TO FETCH DATA FROM ROWS -->

                        <?php

                                // LOOP TILL END OF DATA

                                while($rows=$result->fetch_assoc())

                                {

                        ?>
                                    <!--<form action="mess.php" method="post">          --->
                        <tr>

                                <!-- FETCHING DATA FROM EACH

                                        ROW OF EVERY COLUMN -->

                                <td><?php echo $rows['idname'];?></td>

                                <td><?php echo $rows['surname'];?></td>

                                <td><?php echo $rows['name'];?></td>

                                <td><?php echo $rows['email'];?></td>
                                <td><?php echo $rows['phone'];?></td>

                                <td><?php echo $rows['type_of_maintenance'];?></td>



                                <td><?php echo $rows['message'];?></td>
                                <td><a href="adminsendmessage.php">Reply</a> </td>

                        </tr>

                        <?php

                                }

                        ?>

                </table>
        </form>
        </section>
</body>

</html>