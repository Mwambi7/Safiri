<?php include("coonection.php")?>
<?php
if(isset($_GET["upid"])){
    $upid=$_GET["upid"];
    echo $upid;
}
$show="select * from addmainpackage where id=".$upid;
$result=$conn->query($show);
$name="";
while($row=$result->fetch()){
    $name=$row["package_name"];
   
    
}
echo $name;
if(isset($_POST["btnsubmit"]))
{

        
    $package_name=htmlentities(stripslashes($_POST["package_name"]));
  

      
     
            {

                $update="update addmainpackage set package_name='".$package_name."'where id=".$upid;
                $conn->query($update);
                echo "update";  
               header("LOCATION:managemainpackage.php");
                

            
        
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
                    <form action="updatemainpackage.php?upid=<?php echo $upid;?>" id="the-form" class="form-control"
                         method="post">

                         <label class="pt-4 pb-2 text-center" id="label">Enter Package name</label><sup
                            class="text-danger star">*</sup>
                        <input type="text" class="form-control" value="<?php echo $name;?>" id="package_name" name="package_name"
                            placeholder="Enter Package name" autocomplete="off">
                        <h4 id="nameerr"></h4>

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