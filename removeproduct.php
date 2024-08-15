<?php include("coonection.php")?>
  
  <?php     
if(isset($_GET["productId"])){
    $stmt = $conn->prepare("DELETE from tbl_add_product where id=:ProductId");
    $stmt->bindParam(':ProductId', $_GET["productId"]);
    $stmt->execute();
    echo "Menu Removed";
}
?>