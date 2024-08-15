<?php include("topheader.php")?>

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
            <div class="col-sm-10 bg-light">
               <div class="row">
                   <div class="col-sm-2">
                       <p class="text-center pt-5">
                                    <img class="rounded" src="images/icon-1.png" width="150px" height="140px">
                                </p>
                   </div>
                   <div class="col-sm-8">
                       <h1 class="text-center pt-4 pb-5"><strong>Welcome to admin</strong></h1>
                       <hr class="w-25 mx-auto">
                   </div>
                   <div class="col-sm-2">
                       <p class="pt-5 text-center">
                            <a href="logout.php" class="btn btn-outline-primary">Logout</a>
                       </p>
                   </div>
               </div>
               <div class="container mx-auto">
                 <h1>Welcome to admin</h1>   
            
                        
                                  </div>
                
            </div>
        </div>
    </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>