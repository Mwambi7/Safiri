<?php include("coonection.php")?>

<?php

    $res="";

    if(isset($_POST["btnLogin"])){


        $Email=htmlentities(stripslashes($_POST["Email"]));
        $Password=htmlentities(stripslashes($_POST["Password"]));

        session_start();
        $_SESSION["email"]=$Email;

        if(strlen($Email)>0 && strlen($Password)>0){
            

            $query = "SELECT id FROM tbl_admin WHERE admin_user = :Email AND password = :Password limit 1"; 
               
            $statement = $conn->prepare($query);  
            $statement->execute(  
                 array(  
                      'Email'     =>     $Email,  
                      'Password'     =>     $Password 
                      
                 )  
            );  
            
            $count = $statement->rowCount();  
            
            
            if($count==1){
              
                header("LOCATION:index.php");
                
             }else{
                $res="<strong class='text-danger'>Invalid login details.</strong>";    
            }
        }else{
            $res="<strong class='text-danger'>Invalid login details.</strong>";
        }

    }
?>