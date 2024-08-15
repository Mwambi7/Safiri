<?php include("coonection.php")?>

<?php
$categoryname="";
$description="";

if(!empty($_POST["description"]))
{
         $season=htmlentities(stripslashes($_POST["season"]));
         $category=htmlentities(stripslashes($_POST["category"]));
        $productname=htmlentities(stripslashes($_POST["product"]));
        $description=htmlentities(stripslashes($_POST["description"]));
        $price=htmlentities(stripslashes($_POST["price"]));
        $brand=htmlentities(stripslashes($_POST["brand"]));
        $quantity=htmlentities(stripslashes($_POST["quantity"]));
        $color=htmlentities(stripslashes($_POST["color"]));
        $size=htmlentities(stripslashes($_POST["size"]));
        $quantity=htmlentities(stripslashes($_POST["quantity"]));


        $Picture=$_FILES["uploadfile"]["name"];
        $TmpLoc=$_FILES["uploadfile"]["tmp_name"];

        $Picture2=$_FILES["uploadfile2"]["name"];
        $TmpLoc2=$_FILES["uploadfile2"]["tmp_name"];


        // echo $description.">>".$category.">>".$season.">>".$Picture.">>".$Picture2;
     
        move_uploaded_file($TmpLoc,"../data/products/og/".$Picture);
        move_uploaded_file($TmpLoc2,"../data/products/og/".$Picture2);

        $stmt = $conn->prepare("SELECT product_name FROM tbl_add_product WHERE product_name = :Product_name");
    $stmt->bindParam(':Product_name', $productname);
    $stmt->execute();
    $catid=1;

            if($stmt->rowCount() > 0){
             echo "product already exists";
                }
            
                
                else{

                    $stmt = $conn->prepare("INSERT INTO tbl_add_product (season,category,product_name,product_desc,product_price,product_brand,product_qty,product_size,product_color,front_pic,back_pic,cat_id)
                    VALUES (:Season, :Category,:Product_name,:Product_desc,:Product_price,:Product_brand,:Product_qty,:Product_size,:Product_color,:Front_pic,:Back_pic,:Cat_id)");
                   
                   $stmt->bindParam(':Season', $season);
                    $stmt->bindParam(':Category', $category);
                    $stmt->bindParam(':Product_name', $productname);
                    $stmt->bindParam(':Product_desc', $description);
                    $stmt->bindParam(':Product_price', $price);
                    $stmt->bindParam(':Product_brand', $brand);
                    $stmt->bindParam(':Product_qty', $quantity);
                    $stmt->bindParam(':Product_size', $size);
                    $stmt->bindParam(':Product_color', $color);
                    $stmt->bindParam(':Front_pic', $Picture);
                    $stmt->bindParam(':Back_pic', $Picture2);
                    $stmt->bindParam(':Cat_id', $catid);









                
                    $stmt->execute();

                    echo "product successfully added";

          
        
                }
           
}         


    
else{
    
    echo "error";
    
}
    
  



    
?>