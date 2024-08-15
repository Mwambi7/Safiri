<?php include("coonection.php")?>
  
  <?php     
if(isset($_GET["menuID"])){
    $stmt = $conn->prepare("DELETE from addpackages where id=:menuID");
    $stmt->bindParam(':menuID', $_GET["menuID"]);
    $stmt->execute();
    echo "Package Removed";
}
?>