<?php include("coonection.php")?>

<?php
if(isset($_POST["catid"]))
{

        $categoryname=htmlentities(stripslashes($_POST["category"]));
        $description=htmlentities(stripslashes($_POST["description"]));
        $catid=$_POST["catid"];

      
     
            {

                $update="update add_categories set category='".$categoryname."',description='".$description."' where id=".$catid;
                $conn->query($update);
                echo "update";
               header("LOCATION:manage_categories.php");
                

          
        
                }
           
}         


    
else{
    echo "error";
}
    
  



    
?>