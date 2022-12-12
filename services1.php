<!doctype html>
                        
<html>
                            
<head>
 
 <meta charset="utf-8">
    <title>services</title>
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






                     

     <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>

             <style>@import url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500');

             /********** Template CSS **********/
:root {
    --primary: #13C5DD;
    --secondary: #354F8E;
    --light: #EFF5F9;
    --dark: #1D2A4D;
}

.btn {
    font-weight: 700;
    transition: .5s;
}

.btn:hover {
    -webkit-box-shadow: 0 8px 6px -6px #555555;
    -moz-box-shadow: 0 8px 6px -6px #555555;
    box-shadow: 0 8px 6px -6px #555555;
}

.btn-primary {
    color: #FFFFFF;
}

.btn-square {
    width: 36px;
    height: 36px;
}

.btn-sm-square {
    width: 28px;
    height: 28px;
}

.btn-lg-square {
    width: 46px;
    height: 46px;
}

.btn-square,
.btn-sm-square,
.btn-lg-square {
    padding-left: 0;
    padding-right: 0;
    text-align: center;
}

.back-to-top {
    position: fixed;
    display: none;
    right: 30px;
    bottom: 0;
    border-radius: 50% 50% 0 0;
    z-index: 99;
}

.navbar-light .navbar-nav .nav-link {
    font-family: 'Jost', sans-serif;
    position: relative;
    margin-left: 30px;
    padding: 30px 0;
    font-size: 18px;
    font-weight: 700;
    color: var(--dark);
    outline: none;
    transition: .5s;
}

.navbar-light .navbar-nav .nav-link:hover,
.navbar-light .navbar-nav .nav-link.active {
    color: var(--primary);
}

@media (min-width: 992px) {
    .navbar-light .navbar-nav .nav-link::before {
        position: absolute;
        content: "";
        width: 0;
        height: 5px;
        bottom: 0;
        left: 50%;
        background: var(--primary);
        transition: .5s;
    }

    .navbar-light .navbar-nav .nav-link:hover::before,
    .navbar-light .navbar-nav .nav-link.active::before {
        width: 100%;
        left: 0;
    }
}

@media (max-width: 991.98px) {
    .navbar-light .navbar-nav .nav-link  {
        margin-left: 0;
        padding: 10px 0;
    }
}

.hero-header {
    background: url(../img/hero.jpg) top right no-repeat;
    background-size: cover;
}

.service-item {
    position: relative;
    height: 350px;
    padding: 0 30px;
    transition: .5s;
}

.service-item .service-icon {
    width: 150px;
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--primary);
    border-radius: 50%;
    transform: rotate(-14deg);
}

.service-item .service-icon i {
    transform: rotate(15deg);
}

.service-item a.btn {
    position: absolute;
    width: 60px;
    bottom: -48px;
    left: 50%;
    margin-left: -30px;
    opacity: 0;
}

.service-item:hover a.btn {
    bottom: -24px;
    opacity: 1;
}

.price-carousel::after {
    position: absolute;
    content: "";
    width: 100%;
    height: 50%;
    bottom: 0;
    left: 0;
    background: var(--primary);
    border-radius: 8px 8px 50% 50%;
    z-index: -1;
}

.price-carousel .owl-nav {
    margin-top: 35px;
    width: 100%;
    text-align: center;
    display: flex;
    justify-content: center;
}

.price-carousel .owl-nav .owl-prev,
.price-carousel .owl-nav .owl-next{
    position: relative;
    margin: 0 5px;
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary);
    background: #FFFFFF;
    font-size: 22px;
    border-radius: 45px;
    transition: .5s;
}

.price-carousel .owl-nav .owl-prev:hover,
.price-carousel .owl-nav .owl-next:hover {
    color: var(--dark);
}

@media (min-width: 576px) {
    .team-item .row {
        height: 350px;
    }
}

.team-carousel .owl-nav {
    position: absolute;
    padding: 0 45px;
    width: 100%;
    height: 45px;
    top: calc(50% - 22.5px);
    left: 0;
    display: flex;
    justify-content: space-between;
}

.team-carousel .owl-nav .owl-prev,
.team-carousel .owl-nav .owl-next {
    position: relative;
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #FFFFFF;
    background: var(--primary);
    border-radius: 45px;
    font-size: 22px;
    transition: .5s;
}

.team-carousel .owl-nav .owl-prev:hover,
.team-carousel .owl-nav .owl-next:hover {
    background: var(--dark);
}

.testimonial-carousel .owl-dots {
    margin-top: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.testimonial-carousel .owl-dot {
    position: relative;
    display: inline-block;
    margin: 0 5px;
    width: 20px;
    height: 20px;
    background: var(--light);
    border: 2px solid var(--primary);
    border-radius: 20px;
    transition: .5s;
}

.testimonial-carousel .owl-dot.active {
    width: 40px;
    height: 40px;
    background: var(--primary);
}

.testimonial-carousel .owl-item img {
    width: 150px;
    height: 150px;
}


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
         <li><a href="tenanthome.php"><i class="fas fa-qrcode"></i>HOME</a></li>


    <li><a href="services1.php"><i class="fas fa-sliders-h"></i>Services</a></li>

 <li><a href="landingpage1.php"><i class="far fa-envelope"></i>logout</a></li>
      </ul>
 

 </div>
  <section><div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5"></h5>
                <h1 class="display-4">Our Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-xl-4 col-lg-6">
                    <div class="bg-light rounded overflow-hidden">
                        <img class="img-fluid w-100" src="payment.png" alt="">
                        <div class="p-4">
                            <a class="h3 d-block mb-3" href="payment.php">Make Payments</a>
                            
                        </div>
<div class="d-flex justify-content-between border-top p-4">
                            <div class="d-flex align-items-center">

                            </div>
                            <div class="d-flex align-items-center">

                            </div>
                       
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="bg-light rounded overflow-hidden">
                        <img class="img-fluid w-100" src="house.png" alt="">
                        <div class="p-4">
                            <a class="h3 d-block mb-3" href="tenantrequest.php">Appliance services</a>
                            
                        </div>

                        <div class="d-flex justify-content-between border-top p-4">
                           
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="bg-light rounded overflow-hidden">
                        <img class="img-fluid w-100" src="property.png" alt="">
                        <div class="p-4">
                            <a class="h3 d-block mb-3" href="apartments.php">Find property</a>

                        </div>
                        <div class="d-flex justify-content-between border-top p-4">
                            <div class="d-flex align-items-center">

                            </div>
                            <div class="d-flex align-items-center">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="bg-light rounded overflow-hidden">
                        <img class="img-fluid w-100" src="sustainable-energy.png" alt="">
                        <div class="p-4">
                            <a class="h3 d-block mb-3" href="https://www.citypower.co.za/customers/Pages/Load_Shedding_Downloads.aspx">Loadshedding schedule</a>
                            <p class="m-0"></p>
                        </div>
                        <div class="d-flex justify-content-between border-top p-4">
                            <div class="d-flex align-items-center">

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="bg-light rounded overflow-hidden">
                        <img class="img-fluid w-100" src="customer-service.png" alt="">
                        <div class="p-4">
                            <a class="h3 d-block mb-3" href="contact2.php">Contact us</a>
                            
                        </div>
                        <div class="d-flex justify-content-between border-top p-4">


                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="bg-light rounded overflow-hidden">
                        <img class="img-fluid w-100" src="receive-mail.png" alt="">
                        <div class="p-4">
                            <a class="h3 d-block mb-3" href="tenantviewmessage.php">View Messages</a>

                        </div>

        </div>
    </div>
</section>
                            <script type='text/javascript'></script>









                  </body>
                        </html>