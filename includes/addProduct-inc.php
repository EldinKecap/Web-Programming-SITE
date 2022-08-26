<?php
    if(isset($_POST['submitAddProduct'])){
        require 'databases.php';
        $productName = $_POST['productName'];
        $productDescription = $_POST['productDescription'];
        $contactInfo = $_POST['contactInfo'];
        
        $stmt = mysqli_stmt_init($conn);
       
            $sql = "INSERT INTO products (productName,description,contact) VALUES (?,?,?) ";
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: ../addProduct.php?error=sqlerror");
                exit();
            }else{
                mysqli_stmt_bind_param($stmt,"sss",$productName,$productDescription,$contactInfo);
                mysqli_stmt_execute($stmt);
                header("Location: ../shop.php?success=addedProduct");
                exit();
            }
           
        
        
        
        //PROVJERI DA LI MORAS IMENOVAT U DRUGIM FILES TEXT INPUTE UNIQUE IL SE POST RESETUJE SVAKI PUT KAD SE POZOVE
       
        }else{
        header("Location: ../index.php?error=forbiddenaccess");
        exit();
    }


?>