<?php include("coonection.php")?>
<?php include("adminlogindata.php");?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("metalinks.php")?>

    
    <?php include("cssadmin.php");?>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 bg-dark height">
                <?php include("sidebar.php")?>
            </div>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-2">
                        <p class="text-center pt-5">
                            <img class="rounded" src="images/icon-1.png" width="150px" height="140px">
                        </p>
                    </div>
                    <div class="col-sm-8">
                        <h1 class="text-center pt-4 pb-5"><strong>Admin Login</strong></h1>
                        <hr class="w-25 mx-auto">
                    </div>
                
                </div>
                <div class="container">
                        <form action="adminlogin.php" method="POST" class="mt-3 mb-3">
                                
                                <div class="wow fadeInLeft mgb" data-wow-delay="0.4s">
                                    <label class="lgText">Username</label>

                                    <input type="text" class="form-control" name="Email" required>
                                </div>
                                <div class="wow fadeInLeft mgb mb-3" data-wow-delay="0.4s">
                                    <label class="lgText">Password</label>

                                    <input type="password" class="form-control" name="Password" required>
                                </div>
                                <div class="wow fadeInLeft mgb" data-wow-delay="0.4s">
                                    <input type="submit" value="Login" class="btn btn-danger btn-lg" name="btnLogin">
                                </div>

                            </form>

                </div>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

</html>