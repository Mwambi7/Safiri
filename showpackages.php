
<?php include("connection.php");?>

<?php
$location="";
if(isset($_GET["name"])){
    $location=$_GET["name"];
}

$bookpackageshow="";
$packageshow="";
$show="select * from addpackages where package_location='$location'";
$result=$conn->query($show);
while($row=$result->fetch()){
    $name=$row["package_name"];
    $imgshow=$row["uploadfile"];
    $packageshow=$packageshow."
    
  
    
    
    
    
    ";    
    $bookpackageshow=$bookpackageshow."
    
    <div class='col-md-3 col-sm-4'>
    <div class='single-package-item'>
        <img src='data/items/og/".$imgshow."' alt='package-place'>
        <div class='single-package-item-txt'>
            <h3>".$row["package_name"]." <span class='pull-right'> Rs:  ".$row["package_price"]."</span></h3>
            <div class='packages-para'>
                <p>
                    <span>
                        <i class='fa fa-angle-right'></i> ".$row["package_duration"]."
                    </span>
                </p>
                <p>
                    <span>
                        <i class='fa fa-angle-right'></i> transportation
                    </span>
                    <i class='fa fa-angle-right'></i> ".$row["package_features"]."
                </p>
            </div>
            <!--/.packages-para-->
            <div class='packages-review'>
                <p>
                    <i class='fa fa-star'></i>
                    <i class='fa fa-star'></i>
                    <i class='fa fa-star'></i>
                    <i class='fa fa-star'></i>
                    <i class='fa fa-star'></i>
                    <span>2544 review</span>
                </p>
            </div>
            <!--/.packages-review-->
            <div class='about-btn'>
                <a href='book_package.php?id=".$row["id"]."' class='btn btn-success'> Book Now </a>
            </div>
            <!--/.about-btnn t-->
        </div>
        <!--/.single-package-item-txt-->
    </div>
    <!--/.single-package-item-->

</div>
    
    
    ";

}
?>
<!doctype html>
<html class="no-js" lang="en">
<?php

?>

<head>
    <!-- META DATA -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

    <!-- TITLE OF SITE -->
    <title>Travel</title>

    <!-- favicon img -->
    <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png" />

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />

    <!--animate.css-->
    <link rel="stylesheet" href="assets/css/animate.css" />

    <!--hover.css-->
    <link rel="stylesheet" href="assets/css/hover-min.css">

    <!--datepicker.css-->
    <link rel="stylesheet" href="assets/css/datepicker.css">

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />

    <!-- range css-->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css" />

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <!-- bootsnav -->
    <link rel="stylesheet" href="assets/css/bootsnav.css" />

    <!--style.css-->
    <link rel="stylesheet" href="assets/css/style.css" />

    <!--responsive.css-->
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    <style>
    .back {
        background-color: grey;
        position:sticky;
        z-index:1;
    }
    </style>

</head>


<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->

    <!-- main-menu Start -->
    <header class="top-area back">
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="logo">
                            <a href="index.html">
                                tour<span>Nest</span>
                            </a>
                        </div><!-- /.logo-->
                    </div><!-- /.col-->
                    <div class="col-sm-10">
                        <div class="main-menu">

                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <i class="fa fa-bars"></i>
                                </button><!-- / button-->
                            </div><!-- /.navbar-header-->
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class=""><a href="index.php">home</a></li>
                                    <li class=""><a href="index.php">Destination</a></li>
                                    <li class=""><a href="showpackages.php">Packages </a></li>
                                   
                                    <li>
                                        <a href="login2.php">userlogin</a>

                                    </li>
                                    
                                    <li>
                                        <a href="admin/adminlogin.php"> Admin login</a>

                                    </li>
                                    <!--/.project-btn-->
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.main-menu-->
                    </div><!-- /.col-->
                </div><!-- /.row -->
                <div class="home-border"></div><!-- /.home-border-->
            </div><!-- /.container-->
        </div><!-- /.header-area -->

    </header><!-- /.top-area-->
    <!-- main-menu End -->


  
   
+


    <!--discount-offer start-->

    <!--packages start-->
    <section id="pack" class="packages">
        <div class="container">
            <div class="gallary-header text-center">
                <h2>
                   Your Places <?php echo $location;?>
                </h2>
                <p>
                    Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla.
                </p>
            </div>
            <!--/.gallery-header-->
            <div class="packages-content">
                <div class="row">

                    <!--/.col-->



                    <?php echo $bookpackageshow;?>

                </div>
                <!--/.col-->


            </div>
            <!--/.row-->
        </div>
        <!--/.packages-content-->
        </div>
        <!--/.container-->

    </section>
    <!--/.packages-->
    <!--packages end-->



    



    <!-- footer-copyright start -->
    <footer class="footer-copyright">
        <div class="container">
            <div class="footer-content">
                <div class="row">

                    <div class="col-sm-3">
                        <div class="single-footer-item">
                            <div class="footer-logo">
                                <a href="index.html">
                                    tour<span>Nest</span>
                                </a>
                                <p>
                                    best travel agency
                                </p>
                            </div>
                        </div>
                        <!--/.single-footer-item-->
                    </div>
                    <!--/.col-->

                    <div class="col-sm-3">
                        <div class="single-footer-item">
                            <h2>link</h2>
                            <div class="single-footer-txt">
                                <p><a href="#">home</a></p>
                                <p><a href="#">destination</a></p>
                                <p><a href="#">spacial packages</a></p>
                                <p><a href="#">special offers</a></p>
                                <p><a href="#">blog</a></p>
                                <p><a href="#">contacts</a></p>
                            </div>
                            <!--/.single-footer-txt-->
                        </div>
                        <!--/.single-footer-item-->

                    </div>
                    <!--/.col-->

                    <div class="col-sm-3">
                        <div class="single-footer-item">
                            <h2>popular destination</h2>
                            <div class="single-footer-txt">
                                <p><a href="#">china</a></p>
                                <p><a href="#">venezuela</a></p>
                                <p><a href="#">brazil</a></p>
                                <p><a href="#">australia</a></p>
                                <p><a href="#">london</a></p>
                            </div>
                            <!--/.single-footer-txt-->
                        </div>
                        <!--/.single-footer-item-->
                    </div>
                    <!--/.col-->

                    <div class="col-sm-3">
                        <div class="single-footer-item text-center">
                            <h2 class="text-left">contacts</h2>
                            <div class="single-footer-txt text-left">
                                <p>+91-7986190670</p>
                                <p class="foot-email"><a href="#">abc@gmail.com</a></p>
                                <p>Susheela Bajwa (Roll No.10722012517) (BCA 6th Sem)</p>
                                <p>Ramanjit Kaur  (Roll No.10722012509) (BCA 6th Sem)</p>

                                <p>Batala</p>
                                <p>Punjab </p>
                            </div>
                            <!--/.single-footer-txt-->
                        </div>
                        <!--/.single-footer-item-->
                    </div>

                </div>
                <!--/.row-->

            </div>
            <!--/.footer-content-->
            <hr>
            <div class="foot-icons ">
                <ul class="footer-social-links list-inline list-unstyled">
                    <li><a href="#" target="_blank" class="foot-icon-bg-1"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank" class="foot-icon-bg-2"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank" class="foot-icon-bg-3"><i class="fa fa-instagram"></i></a></li>
                </ul>
                <p>&copy; 2017 <a href="https://www.themesine.com">ThemeSINE</a>. All Right Reserved</p>

            </div>
            <!--/.foot-icons-->
            <div id="scroll-Top">
                <i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip"
                    data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
            </div>
            <!--/.scroll-Top-->
        </div><!-- /.container-->

    </footer><!-- /.footer-copyright-->
    <!-- footer-copyright end -->




    <script src="assets/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


    <!--bootstrap.min.js-->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- bootsnav js -->
    <script src="assets/js/bootsnav.js"></script>

    <!-- jquery.filterizr.min.js -->
    <script src="assets/js/jquery.filterizr.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!--jquery-ui.min.js-->
    <script src="assets/js/jquery-ui.min.js"></script>

    <!-- counter js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>

    <!--owl.carousel.js-->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- jquery.sticky.js -->
    <script src="assets/js/jquery.sticky.js"></script>

    <!--datepicker.js-->
    <script src="assets/js/datepicker.js"></script>

    <!--Custom JS-->
    <script src="assets/js/custom.js"></script>


</body>

</html>