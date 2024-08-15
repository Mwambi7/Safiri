<?php include("coonection.php")?>

<?php


if(!empty($_POST["package_name"]))
{
    
        $package_name=htmlentities(stripslashes($_POST["package_name"]));

       
        $Picture=$_FILES["uploadfile"]["name"];
        $TmpLoc=$_FILES["uploadfile"]["tmp_name"];

        move_uploaded_file($TmpLoc,"../data/items/og/".$Picture);
        $stmt = $conn->prepare("SELECT package_name FROM addmainpackage WHERE package_name = :Package_name");
        $stmt->bindParam(':Package_name', $package_name);
        $stmt->execute();

      

if($stmt->rowCount() > 0){
    echo "Package already exists";
}
    

          

             else{

                $stmt = $conn->prepare("INSERT INTO addmainpackage (package_name,uploadfile)
                VALUES (:Package_name,:Img_upload)");
                $stmt->bindParam(':Package_name', $package_name);
                $stmt->bindParam(':Img_upload', $Picture);
               $stmt->execute();
        
                echo "Package successfully added";

             }

                
    
                
                     }
                    


          
        
                
           


    
else{
    
    echo "error";
    
}
    
  



    
?>