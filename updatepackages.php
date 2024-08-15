<?php include("coonection.php")?>
<?php
if(isset($_GET["upid"])){
    $upid=$_GET["upid"];
    echo $upid;
}
$show="select * from addpackages where id=".$upid;
$result=$conn->query($show);

while($row=$result->fetch()){
    $name=$row["package_name"];
    $packagetype=$row["package_type"];
    $packagelocation=$row["package_location"];
    $packageprice=$row["package_price"];   
    $packagefeatures=$row["package_features"];   
    $packagedetails=$row["package_details"];   
    
}
if(isset($_POST["btnsubmit"]))
{

        
    $package_name=htmlentities(stripslashes($_POST["package_name"]));
    $package_type=htmlentities(stripslashes($_POST["package_type"]));
    $package_location=htmlentities(stripslashes($_POST["package_location"]));
    $package_price=htmlentities(stripslashes($_POST["package_price"]));
    $package_features=htmlentities(stripslashes($_POST["package_features"]));
    $package_details=htmlentities(stripslashes($_POST["package_details"]));

      
     
            {

                $update="update addpackages set package_name='".$package_name."',package_type='".$package_type."',package_price='".$package_price."',package_features='".$package_features."',package_details='".$package_details."' where id=".$upid;
                $conn->query($update);
                echo "update";  
               header("LOCATION:manage_package.php");
                

            
        
                }
           
}         



?>

<!DOCTYPE html>
<html lang="en">

<head>
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
                        <h1 class="text-center pt-4 pb-5"><strong>Add Category</strong></h1>
                        <hr class="w-25 mx-auto">
                    </div>
                    <div class="col-sm-2">
                        <p class="pt-5 text-center">
                            <a href="logout.php" class="btn btn-outline-primary">Logout</a>
                        </p>
                    </div>
                </div>
                <div class="container">
                    <form action="updatepackages.php?upid=<?php echo $upid;?>" id="the-form" class="form-control"
                         method="post">

                         <label class="pt-4 pb-2 text-center" id="label">Enter Package name</label><sup
                            class="text-danger star">*</sup>
                        <input type="text" class="form-control" value="<?php echo $name;?>" id="package_name" name="package_name"
                            placeholder="Enter Package name" autocomplete="off">
                        <h4 id="nameerr"></h4>



                        <label class="pt-4 pb-2 text-center" id="label">Enter Package type</label><sup
                            class="text-danger star">*</sup>
                        <input type="text" class="form-control" value="<?php echo $packagetype;?>" id="package_type" name="package_type"
                            placeholder="Enter Package  type" autocomplete="off">
                        <h4 id="typeerr"></h4>


                        <label class="pt-4 pb-2 text-center" id="label">Enter Package location</label><sup
                            class="text-danger star">*</sup>
                        <input type="text" class="form-control" value="<?php echo $packagelocation;?>" id="package_location" name="package_location"
                            placeholder="Enter Package location" autocomplete="off">
                        <h4 id="locationerr"></h4>


                        <label class="pt-4 pb-2 text-center" id="label">Enter Package Price</label><sup
                            class="text-danger star">*</sup>
                        <input type="text" class="form-control" value="<?php echo $packageprice;?>" id="package_price" name="package_price"
                            placeholder="Enter Category name" autocomplete="off">
                        <h4 id="priceerr"></h4>


                        <label class="pt-4 pb-2 text-center" id="label">Enter Package features</label><sup
                            class="text-danger star">*</sup>
                        <input type="text" class="form-control" value="<?php echo $packagefeatures;?>" id="package_features" name="package_features"
                            placeholder="Enter Category name" autocomplete="off">
                        <h4 id="featureserr"></h4>


                        <label class="pt-4 pb-2 text-center" id="label">Enter Package Details</label><sup
                            class="text-danger star">*</sup>
                        <input type="text" class="form-control" value="<?php echo $packagedetails;?>" id="package_details" name="package_details"
                            placeholder="Enter Package details" autocomplete="off">
                        <h4 id="detailserr"></h4>



                        <br>
                        <br>
                        <input type="submit" name="btnsubmit" value="update Package" class="btn btn-success">
                        <input type="button" id="sd" value="Reset" class="btn btn-danger">






                    </form>

                    
                </div>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

</html>