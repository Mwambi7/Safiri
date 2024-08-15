<?php include("coonection.php")?>


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
                    <form action="addpackages.php" id="the-form" class="form-control" method="post">
                    <h4 id="success"></h4>

                        <label class="pt-4 pb-2 text-center" id="label">Enter Package name</label><sup
                            class="text-danger star">*</sup>
                        <input type="text" class="form-control" value="" id="package_name" name="package_name"
                            placeholder="Enter Package name" autocomplete="off">
                        <h4 id="nameerr"></h4>


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
                           



                            $.ajax({
                                method: "POST",
                                url: 'insertdatapackage.php',
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
                                   
                                   
                            
                                         
                                    if ($("#uploadfile").val() == "") {
                                        pic_check();
                                        return false;
                                    } else {
                                        alert(response);
                                        window.location.replace(
                                            "http://localhost/TOUR%20AND%20TRAVEL/admin/managemainpackage.php"
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