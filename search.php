
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>

<html lang="en">

<head>

        <meta charset="UTF-8">

        <title> </title>

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

                <h1></h1>


    <form action="" method="post">
        <input type="text"  name="idname" placeholder="enter your user id"/>
         <input type="submit" name="search" value"SEARCH BY ID"/>
    </form>
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

       $con = mysqli_connect("localhost","root","","pearldbms");
if(isset($_POST['search']))
{
    $idname=$_POST['idname'];



$sql = " SELECT * FROM 'tenants' where idname='$idname' ";

$sql_run=mysqli_query($con,$sql);
while($rows=mysqli_fetch_array($sql_run))
 {
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

                                }         }

                        ?>

                </table>
                   </form>
        </section>
</body>

</html>