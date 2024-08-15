<?php


if(isset($_SESSION["email"])){
    if($_SESSION["email"]==""){
        header("LOCATION:adminlogin.php");
    }
}else{
    header("LOCATION:adminlogin.php");

}
?>