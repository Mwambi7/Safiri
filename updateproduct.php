
<?php include("coonection.php")?>


<?php
$viewCategories="";
        
        $shows="select * from addpackages";
        $result=$conn->query($shows);
    
        while($row=$result->fetch()){
            $imgshow=$row["uploadfile"];
            $viewCategories=$viewCategories." <tr class='table table-light table-bordered'>
            <td><img src='../data/items/og/".$imgshow."' height='100' width='100' alt='hy' class='text-center'/></td>
            <td>".$row["package_name"]."</td>
            <th>".$row["package_type"]."</th>
            <td>".$row["package_location"]."</td>
            <td>".$row["package_price"]."</td>
            <td>".$row["package_features"]."</td>
            <th>".$row["package_details"]."</th>

            <td><a href='updatepackages.php?upid=".$row["id"]."'width='300' class='btn btn-success'>update</a>
             </td>
             <td>
            <input type='button' class='btn btn-danger' value='Remove' onclick='removeMenu(" . $row["id"] . ");'/>

            </td>

                </tr>
            
            
            ";
           
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
                    <table class="table">

                        <tr class="table table-dark">
                            <th>Image</th>
                            <th>Package Name</th>
                            <th>Package type</th>
                            <th>Package location</th>
                            <th>Package price</th>
                            <th>Package features</th>
                            <th>Package details</th>
                            <th>Action</th>
                            <th>Remove</th>



                        </tr>
                       
                        <?php echo $viewCategories; ?>
                    </table>

                </div>

            </div>
        </div>

        <script>


function removeMenu(menuID) {

var data = {
    "menuID": menuID
};
$.ajax({
    type: "GET",
    url: 'removecat.php',
    data: data,
    success: function(response) {
        alert(response);
        // Simulate an HTTP redirect:
        window.location.replace("http://localhost/TourNest-master/admin/manage_package.php");
      }


});
}
</script>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

</html>