<?php include("connection.php");?>

<!doctype html>
<html class="no-js" lang="en">
<?php
session_start();
if(isset($_SESSION["email"])){
    $email=$_SESSION["email"];
}
if(isset($_POST["change"])){
    $password=$_POST["password"];
    $confirmpassword=$_POST["confirmpassword"];
    if($password==$confirmpassword){
        $qry="update usersign set password='".$password."',confirmpassword='".$confirmpassword."' where email='".$email."'";
        $conn->query($qry);
        echo"<script>
        alert('change successfully');
        window.location.href='http://localhost/TOUR%20AND%20TRAVEL/bookedpackages.php';
        </script>";

    }
    else{
        echo"<script>
        alert('Password should be match');
        </script>";

    }
   
}
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
        background-color:blue;
        
    }
    .sbody{
        background-color:white;
        
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


    <h1 class="marg1"> Change Password </h1>
    <div class="marg">
        
                <form action="updatepassword.php" method="POST">
                    
                <div class="form-group">
                        <label for="exampleInputPassword1" style="color:red" >Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1" style="color:red" >Confirm Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="confirmpassword" placeholder="Password" required>
                    </div>
                    <br/>
                    <br/>

                    <button type="submit" class="btn btn-primary" name="change">Change Password</button>
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