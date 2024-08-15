<?php include("connection.php");?>
<?php
$bookpackageshow="";
$packageshow="";
$show="select * from addpackages limit 4";
$result=$conn->query($show);
while($row=$result->fetch()){
    $name=$row["package_name"];
    $imgshow=$row["uploadfile"];
    $packageshow=$packageshow."
    
    <div class='col-md-6'>
    <div class='filtr-item'>
        <img src='data/items/og/".$imgshow."' alt='portfolio image' />
        <div class='item-title'>
            <a href='#'>
                ".$row["package_name"]."
            </a>
            <p><span>12 tours</span><span>9 places</span></p>
        </div> <!-- /.item-title-->
    </div><!-- /.filtr-item -->
</div><!-- /.col -->
    
    
    
    
    ";    
    $bookpackageshow=$bookpackageshow."
    
    <div class='col-md-4 col-sm-6'>
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
if(isset($_POST["signup"])){
    $email=$_POST["email"];
    $mobile=$_POST["mobile"];
    $password=$_POST["password"];
    $confirmpassword=$_POST["confirmpassword"];
    if($password!=$confirmpassword){
        echo "<script>
        alert('password should be match');
        </script>";
    }
    else{
        $insert="insert into usersign (`email`, `mobile`, `password`, `confirmpassword`)values('".$email."','".$mobile."','".$password."','".$confirmpassword."')";
        $conn->query($insert);
        echo "<script>
        alert('REgistered Succesffull');
        window.location.href='http://localhost/TOUR%20AND%20TRAVEL/login2.php';
        </script>"; 
        }

}
?>
<!doctype html>
<html class="no-js" lang="en">
<?php

?>

<head>
    <style>
        
    .marg {
        width: 600px;
        position: relative;
        top:250px;
        left:600px;
        padding:30px;
        font-size:20px;
    }
    .marg1{
        
        width: 600px;
        position: relative;
        top:250px;
        left:600px;
        padding:30px;
        font-size:40px;
        text-align:center;
        color:white;
        background-color:red;
        
    }
    .sbody{
        background-color:orange;
        
    }
    </style>
    <!-- META DATA -->
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

<body class="sbody">


    <h1 class="marg1"> Signup Form </h1>
    <div class="marg">
        
                <form action="usersignup.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1" style="color:red">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email"aria-describedby="emailHelp"
                            placeholder="Enter email" required>
                        <small id="emailHelp" class="form-text text-muted">
                        </small>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1" style="color:red" >Mobile No..</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="mobile" placeholder="Password" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1" style="color:red" >Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" style="color:red" >Confirm Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="confirmpassword" placeholder="Password"required>
                    </div>
                    
                    <br/>
                    <br/>

                    <button type="submit" class="btn btn-primary" name="signup">Signup</button>
                    <a href="login.php">If you already created. you click on login</a>
                </form>
            
    </div>



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