<?php include("coonection.php")?>

<?php


if(!empty($_POST["package_price"]))
{
    
        $package_name=htmlentities(stripslashes($_POST["package_name"]));
        $package_type=htmlentities(stripslashes($_POST["package_type"]));
        $package_location=htmlentities(stripslashes($_POST["package_location"]));
        $package_price=htmlentities(stripslashes($_POST["package_price"]));
        $package_features=htmlentities(stripslashes($_POST["package_features"]));
        $package_duration=htmlentities(stripslashes($_POST["package_duration"]));
        $package_details=htmlentities(stripslashes($_POST["package_details"]));

       
        $Picture=$_FILES["uploadfile"]["name"];
        $TmpLoc=$_FILES["uploadfile"]["tmp_name"];

        move_uploaded_file($TmpLoc,"../data/items/og/".$Picture);
        $stmt = $conn->prepare("SELECT package_name FROM addpackages WHERE package_name = :Package_name");
        $stmt->bindParam(':Package_name', $package_name);
        $stmt->execute();

      

if($stmt->rowCount() > 0){
    echo "Package already exists";
}
    

          

             else{

                $stmt = $conn->prepare("INSERT INTO addpackages (package_name,package_type,package_location,package_price,package_features,package_duration,package_details,uploadfile)
                VALUES (:Package_name, :Package_type,:Package_location,:Package_price,:Package_features,:Package_duration,:Package_details,:Img_upload)");
                $stmt->bindParam(':Package_name', $package_name);
                $stmt->bindParam(':Package_type', $package_type);
                $stmt->bindParam(':Package_location', $package_location);
                $stmt->bindParam(':Package_price', $package_price);
                $stmt->bindParam(':Package_features', $package_features);
                $stmt->bindParam(':Package_duration', $package_duration);
                $stmt->bindParam(':Package_details', $package_details);



                $stmt->bindParam(':Img_upload', $Picture);
        
            
                $stmt->execute();
        
                echo "Package successfully added";

             }

                
    
                
                     }
                    


          
        
                
           


    
else{
    
    echo "error";
    
}
    
  



    
?>