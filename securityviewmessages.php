<?php
require_once "pearldbms.php";
$sql = " SELECT * FROM contacts ORDER BY Tenant_Id DESC ";

$result = $con->query($sql);

$con->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>

<html lang="en">

<head>

        <meta charset="UTF-8">

        <title>GFG User Details</title>

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

                <h1>GeeksForGeeks</h1>

                <!-- TABLE CONSTRUCTION -->

                <table>

                        <tr>

                                <th>Tenant Id</th>

                                <th>Email</th>

                                <th>Subject</th>

                                <th>Message</th>
                                <th>Reply</th>

                        </tr>

                        <!-- PHP CODE TO FETCH DATA FROM ROWS -->

                        <?php

                                // LOOP TILL END OF DATA

                                while($rows=$result->fetch_assoc())

                                {

                        ?>
                                    <form action="mess.php" method="post">
                        <tr>

                                <!-- FETCHING DATA FROM EACH

                                        ROW OF EVERY COLUMN -->

                                <td><?php echo $rows['Tenant_Id'];?></td>

                                <td><?php echo $rows['email'];?></td>

                                <td><?php echo $rows['subject'];?></td>

                                <td><?php echo $rows['message'];?></td>
                                <td><a href="">Reply</a> </td>

                        </tr>

                        <?php

                                }

                        ?>

                </table>
        </form>
        </section>
</body>

</html>