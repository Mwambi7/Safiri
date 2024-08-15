<?php include("coonection.php");?>
<?php
$viewCategories="";
        
        $shows="select * from addpackages";
        $result=$conn->query($shows);
    
        while($row=$result->fetch()){
            $imgshow=$row["uploadfile"];
            $viewCategories=$viewCategories." <tr class='table table-light table-bordered'>
            <td><img src='data/items/og/".$imgshow."' height='100' width='100' alt='hy' class='text-center'/></td>
            <td>".$row["package_name"]."</td>
            <th>".$row["package_type"]."</th>
            <td>".$row["package_location"]."</td>
            <td>".$row["package_price"]."</td>
            <td>".$row["package_features"]."</td>
            <th>".$row["package_details"]."</th>

            <td><a href='updatepackages.php?upid=".$row["id"]."'width='300' class='btn btn-success'>update</a>
             </td>

                </tr>
            
            
            ";
           
        }

?>

<!doctype html>
<html class="no-js" lang="en">
<?php
$email="";
if(isset($_SESSION["email"])){
    $email=$_SESSION["email"];
}

?>

<head>
    <style>
        .pck{
            text-align:center;
            font-size:40px;
            margin-bottom:50px;
        }
.main{
    margin-top:100px;
}

    </style>
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

</head>

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->

    <!-- main-menu Start -->
    <header class="top-area">
        <div class="header-area">
            <div class="container">
                <div class="row">
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
                                    <li class=""><a href="#home">My Profile</a></li>
                                    <li class=""><a href="mypackages.php">My Packages</a></li>
                                    <li class=""><a href="bookedpackages.php">My Booked Packages </a></li>
                                    <li class=""><a href="updatepassword.php">Update Password</a></li>
                           
                                    <li>

                                        <a href=''>
                                    <?php
                                    echo $email;
                                    
                                    
                                    ?>
                                    </a>
                                    </li>
                                    
                                    <li>
                                        <a href="logout.php"> Logout</a>

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
    <div class="main">
<div class="container">
    <h1 class="pck"> My Packages</h1>
    <table class="table">

<tr class="table table-dark">
    <th>Image</th>
    <th>Package Name</th>
    <th>Package type</th>
    <th>Package location</th>
    <th>Package price</th>
    <th>Package features</th>
    <th>Package details</th>
    <th>Cancel Package</th>



</tr>

<?php echo $viewCategories; ?>
</table>

</div>

                </div>
   


                    
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
                                <p>+1 (300) 1234 6543</p>
                                <p class="foot-email"><a href="#">info@tnest.com</a></p>
                                <p>North Warnner Park 336/A</p>
                                <p>Newyork, USA</p>
                            </div>
                            <!--/.single-footer-txt-->
                        </div>
                        <!--/.single-footer-item-->
                    </div>
                    <!--/.col-->

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