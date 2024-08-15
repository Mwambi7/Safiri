<?php include("coonection.php")?>


<?php
$packagename="";
$cat="select package_name from addmainpackage";
$result=$conn->query($cat);
while($row=$result->fetch()){
    $packagename="<option>".$row["package_name"]."</option>".$packagename;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("metalinks.php")?>
    <?php include("cssadmin.php");?>
    <?php include("topheader.php")?>


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
                        <h1 class="text-center pt-4 pb-5"><strong>Add Packages</strong></h1>
                        <hr class="w-25 mx-auto">
                    </div>
                    <div class="col-sm-2">
                        <p class="pt-5 text-center">
                            <a href="logout.php" class="btn btn-outline-primary">Logout</a>
                        </p>
                    </div>
                </div>
                <div class="container">
                    <form action="addsubpackages.php" id="the-form" class="form-control" method="post">
                    <h4 id="success"></h4>

                        <label class="pt-4 pb-2 text-center" id="label">Enter Package name</label><sup
                            class="text-danger star">*</sup>
                        <input type="text" class="form-control" value="" id="package_name" name="package_name"
                            placeholder="Enter Package name" autocomplete="off">
                        <h4 id="nameerr"></h4>



                        <label class="pt-4 pb-2 text-center" id="label">Enter Package type</label><sup
                            class="text-danger star">*</sup>
                        <input type="text" class="form-control" value="" id="package_type" name="package_type"
                            placeholder="Enter Package  type" autocomplete="off">
                        <h4 id="typeerr"></h4>

                        <label class="pt-4 pb-2 text-center" id="label">Enter Package location</label><sup>
                        <select name="package_location" id="package_location"class="form-control">
                        <option> <?php echo $packagename;?></option>
                            </select><br/>

                           


                        <label class="pt-4 pb-2 text-center" id="label">Enter Package Price</label><sup
                            class="text-danger star">*</sup>
                        <input type="text" class="form-control" value="" id="package_price" name="package_price"
                            placeholder="Enter Category name" autocomplete="off">
                        <h4 id="priceerr"></h4>


                        <label class="pt-4 pb-2 text-center" id="label">Enter Package features</label><sup
                            class="text-danger star">*</sup>
                        <input type="text" class="form-control" value="" id="package_features" name="package_features"
                            placeholder="Enter Category name" autocomplete="off">
                        <h4 id="featureserr"></h4>


                        <label class="pt-4 pb-2 text-center" id="label">Enter Package Duration</label><sup
                            class="text-danger star">*</sup>
                        <input type="text" class="form-control" value="" id="package_duration" name="package_duration"
                            placeholder="Enter Package Duration" autocomplete="off">
                            <small> Enter duration like (5 days 2 nights)</small>
                        <h4 id="durationerr"></h4>


                        <label class="pt-4 pb-2 text-center" id="label">Enter Package Details</label><sup
                            class="text-danger star">*</sup>
                        <input type="text" class="form-control" value="" id="package_details" name="package_details"
                            placeholder="Enter Package details" autocomplete="off">
                        <h4 id="detailserr"></h4>


                        <label class="pt-4 pb-2 text-center">Select Picture</label><sup class="text-danger star">*</sup>
                        <input type="file" class="form-control" value="" id="uploadfile" name="uploadfile" required
                            placeholder="Enter quantity">
                        <h4 id="picname"></h4>

                        <br>
                        <br>
                        <input type="button" id="btnsubmit" value="Add Package" class="btn btn-success">
                        <input type="button" id="sd" value="Reset" class="btn btn-danger">



                    </form>

                    <script>
                    function package_name() {
                        var package_name = $("#package_name").val();

                        if (package_name.length == "") {
                            $("#nameerr").show();
                            $("#nameerr").html("Please enter Package name");
                            $("#nameerr").focus();
                            $("#nameerr").css("color", "red");
                            return false;

                        } else {
                            $("#nameerr").hide();

                        }
                    }

                    function package_type() {
                        var package_type = $("#package_type").val();

                        if (package_type.length == "") {
                            $("#typeerr").show();
                            $("#typeerr").html("Please enter package_type");
                            $("#typeerr").focus();
                            $("#typeerr").css("color", "red");
                            return false;

                        } else {
                            $("#typeerr").hide();

                        }
                    }

                    function package_location() {
                        var package_location = $("#package_location").val();

                        if (package_type.length == "") {
                            $("#locationerr").show();
                            $("#locationerr").html("Please enter package_location");
                            $("#locationerr").focus();
                            $("#locationerr").css("color", "red");
                            return false;

                        } else {
                            $("#locationerr").hide();

                        }
                    }

                    
                    function package_duration() {
                        var package_duration = $("#package_duration").val();

                        if (package_duration.length == "") {
                            $("#durationerr").show();
                            $("#durationerr").html("Please enter package_duartion");
                            $("#durationerr").focus();
                            $("#durationerr").css("color", "red");
                            return false;

                        } else {
                            $("#durationerr").hide();

                        }
                    }

                    function package_price() {
                        var package_price = $("#package_price").val();

                        if (package_price.length == "") {
                            $("#priceerr").show();
                            $("#priceerr").html("Please enter package_price");
                            $("#priceerr").focus();
                            $("#priceerr").css("color", "red");
                            return false;

                        } else {
                            $("#priceerr").hide();

                        }
                    }

                    function package_features() {
                        var package_features = $("#package_features").val();

                        if (package_type.length == "") {
                            $("#featureserr").show();
                            $("#featureserr").html("Please enter package_features");
                            $("#featureserr").focus();
                            $("#featureserr").css("color", "red");
                            return false;

                        } else {
                            $("#featureserr").hide();

                        }
                    }

                    function package_details() {
                        var package_details = $("#package_details").val();

                        if (package_details.length == "") {
                            $("#detailserr").show();
                            $("#detailserr").html("Please enter package_details");
                            $("#detailserr").focus();
                            $("#detailserr").css("color", "red");
                            return false;

                        } else {
                            $("#detailserr").hide();

                        }
                    }






                    function pic_check() {
                        var uploadfile = $("#uploadfile").val();
                        var a = 1;
                        var ext = $('#uploadfile').val().split('.').pop().toLowerCase();
                        if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                            $("#picname").show();
                            $("#picname").html(" only JPG, JPEG, PNG & GIF files are allowed");
                            $("#picname").focus();
                            $("#picname").css("color", "red");
                            return false;
                            a = 0;
                        } else {
                            $("#picname").hide();

                        }

                    }


                    $(document).ready(function() {
                        $("#btnsubmit").click(function() {

                            var file_data = $("#uploadfile").prop("files")[0];
                            var form_data = new FormData();
                            form_data.append("uploadfile", file_data);
                            form_data.append("package_name", $("#package_name").val());
                            form_data.append("package_type", $("#package_type").val());
                            form_data.append("package_location", $("#package_location").val());
                            form_data.append("package_price", $("#package_price").val());
                            form_data.append("package_features", $("#package_features").val());
                            form_data.append("package_duration", $("#package_duration").val());
                            form_data.append("package_details", $("#package_details").val());




                            $.ajax({
                                method: "POST",
                                url: 'insertdata2.php',
                                data: form_data,
                                cache: false,
                                contentType: false,
                                processData: false,
                                success: function(response) {

                                    if ($("#package_name").val() == "") {
                                        package_name();
                                        return false;
                                    }
                                    else{
                                            $("#nameerr").hide();

                                    }
                                    if ($("#package_type").val() == "") {
                                        package_type();
                                        return false;

                                    }
                                    else{
                                        $("#typeerr").hide();

                                    }

                                    if ($("#package_location").val() == "") {
                                        package_location();
                                        return false;

                                    }
                                    else{
                                        $("#locationerr").hide();

                                    }

                                    if ($("#package_price").val() == "") {
                                        package_price();
                                        return false;

                                    }
                                    else{
                                        $("#priceerr").hide();

                                    }
                                    if ($("#package_price").val() == "") {
                                        package_price();
                                        return false;

                                    }
                                    else{
                                        $("#priceerr").hide();

                                    }

                                    if ($("#package_features").val() == "") {
                                        package_features();
                                        return false;

                                    }
                                    else{
                                        $("#featureserr").hide();

                                    }
                                    if ($("#package_duration").val() == "") {
                                        package_duration();
                                        return false;

                                    }
                                    else{
                                        $("#durationerr").hide();

                                    }

                                    if ($("#package_details").val() == "") {
                                        package_details();
                                        return false;

                                    }
                                    else{
                                        $("#detailserr").hide();

                                    }
                                    if ($("#uploadfile").val() == "") {
                                        pic_check();
                                        return false;
                                    } else {
                                        alert(response);
                                        window.location.replace(
                                            "http://localhost/TOUR%20AND%20TRAVEL/admin/manage_package.php"
                                        );


                                    }



                                }


                            });
                        })


                    })

                    $("#sd").on("click", function() {
                        $("#category").val("");
                        $("#description").val("");

                    });
                    </script>


                </div>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

</html>