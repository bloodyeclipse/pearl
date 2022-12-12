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
<!doctype html>

<html>

<head>

 <meta charset="utf-8">
    <title>MEDINOVA - Hospital Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">





                     <link href='' rel='stylesheet'>

     <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>

             <style>@import url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500');


* {
    padding: 0;
    margin: 0;
    list-style: none;
    text-decoration: none;
}

body {
    font-family: 'Roboto', sans-serif;
}

.sidebar {
    position: fixed;
    left: -250px;
    width: 250px;
    height: 100%;
    background: #042331;
    transition: all .5s ease;
}

.sidebar header {
    font-size: 22px;
    color: white;
    line-height: 70px;
    text-align: center;
    background: #063146;
    user-select: none;
}

.sidebar ul a {
    display: block;
    height: 100%;
    width: 100%;
    line-height: 65px;
    font-size: 20px;
    color: white;
    padding-left: 40px;
    box-sizing: border-box;
    border-bottom: 1px solid black;
    border-top: 1px solid rgba(255, 255, 255, .1);
    transition: .4s;
}

ul li:hover a {
    padding-left: 50px;
}

.sidebar ul a i {
    margin-right: 16px;
}

#check {
    display: none;
}

label #btn,
label #cancel {
    position: absolute;
    background: #042331;
    border-radius: 3px;
    cursor: pointer;
}

label #btn {
    left: 40px;
    top: 25px;
    font-size: 35px;
    color: white;
    padding: 6px 12px;
    transition: all .5s;
}

label #cancel {
    z-index: 1111;
    left: -195px;
    top: 17px;
    font-size: 30px;
    color: #0a5275;
    padding: 4px 9px;
    transition: all .5s ease;
}

#check:checked~.sidebar {
    left: 0;
}

#check:checked~label #btn {
    left: 250px;
    opacity: 0;
    pointer-events: none;
}

#check:checked~label #cancel {
    left: 195px;
}

#check:checked~section {
    margin-left: 250px;
}

section {
    background-color: #8BC6EC;
    background-image: linear-gradient(135deg, #8BC6EC 0%, #9599E2 100%);
    height: 100vh;
    transition: all .5s;
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

}</style>
                                <script type='text/javascript' src=''></script>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
                                <script type='text/javascript' src=''></script>
                            </head>
                            <body oncontextmenu='return false' class='snippet-body'>



                             <input type="checkbox" id="check">
  <label for="check">

    <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
  </label>
  <div class="sidebar">

  <header>MENU</header>
      <ul>
          <li><a href="home1.php"><i class="fas fa-qrcode"></i>HOME</a></li>

          <li><a href="viewmessages.php"><i class="far fa-question-circle"></i>Messages</a></li>
          <li><a href="managerservices.php"><i class="fas fa-sliders-h"></i>Services</a></li>

 <li><a href="landingpage1.php"><i class="far fa-envelope"></i>logout</a></li>
      </ul>


 </div>       <br><br><br>
 <section>
   <h1>Search for Tenant</h1>

        <!-- TABLE CONSTRUCTION -->

        <form action="aa.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Search"><br><br>

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



                </table>
    </form></section>










                            <script type='text/javascript'></script>









                  </body>
                        </html>