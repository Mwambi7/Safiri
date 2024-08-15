<?php include("coonection.php")?>


<?php
$viewCategories="";
 $idd=0;
        if(isset($_GET["id"])){
            $idd=$_GET["id"];
        }
       



        

         
        $shows="select * from tbl_booking";
        $result=$conn->query($shows);
        $Pname="";
        $Uname="";

    
        while($row=$result->fetch()){
            $imgshow=$row["uploadimg"];
           
            $viewCategories=$viewCategories." <tr class='table table-light table-bordered'>
            <td><img src='../data/items/og/".$imgshow."' height='100' width='100' alt='hy' class='text-center'/></td>
            <td>".$row["name"]."</td>
            <th>".$row["emailid"]."</th>
            <td>".$row["mobileno"]."</td>
            <td>".$row["tourdate"]."</td>
            <td>".$row["package_name"]."</td>
            <th>".$row["package_rate"]."</th>
            <th>".$row["package_duration"]."</th>
            <th>".$row["package_type"]."</th>
            <th>".$row["booking_date"]."</th>
            <th>".$row["status"]."
            
            <a href='updatestatus.php?id=".$row["id"]."'class='btn btn-primary'>Click Here</a>
            </th>

             </tr>            
            ";
           
        }
       
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <?php include("metalinks.php")?>

    <style>
    .text-font {
        font-size: 35px;
        font-weight: bolder;
    }

    .height {
        height: 100vh;
    }

    .error {
        color: red;
        font-size: large;

    }

    .success {
        color: green;
        font-size: large;

    }

    .error1 {
        color: red;
        font-size: large;

    }

    .success1 {
        color: green;
        font-size: large;

    }

    .error2 {
        color: red;
        font-size: large;

    }

    .success2 {
        color: green;
        font-size: large;

    }

    .hide {
        display: none;
    }
    </style>

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
                        <h1 class="text-center pt-4 pb-5"><strong>Manage Booking</strong></h1>
                        <hr class="w-25 mx-auto">
                    </div>
                    <div class="col-sm-2">
                        <p class="pt-5 text-center">
                            <a href="logout.php" class="btn btn-outline-primary">Logout</a>
                        </p>
                    </div>
                </div>
                <div class="container">
                    <table class="table">

                        <tr class="table table-dark">
                            <th>Image</th>
                            <th>User Name</th>
                            <th>Email Id</th>
                            <th>Mobile No</th>
                            <th>Tour date</th>
                            <th>Package_name</th>
                            <th>Package_rate</th>
                            <th>Package_duration</th>
                            <th>Package_type</th>
                            <th>booking_date</th>
                            <th>status</th>
                        </tr>
                        <?php echo $viewCategories; ?>
                    </table>
                   
                </div>

            </div>
        </div>

    </div>
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


</body>

</html>