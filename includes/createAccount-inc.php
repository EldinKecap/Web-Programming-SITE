<?php
    if(isset($_POST['submitCreateAccount'])){
        require 'databases.php';
        $username = $_POST['usernameCreateAccount'];
        $password = $_POST['passwordCreateAccount'];
        $email = $_POST['email'];
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = mysqli_stmt_init($conn);
        if (mysqli_stmt_prepare($stmt,$sql)) {
            mysqli_stmt_bind_param($stmt,'s',$username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rows = mysqli_stmt_num_rows($stmt);
            if($rows > 0){
                header("Location: ../createAccount.php?error=usernameExists");
                exit(); 
        }else{
            $sql = "INSERT INTO users (username,password,email) VALUES (?,?,?)";
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: ../createAccount.php?error=sqlerror");
                exit();
            }else{
                mysqli_stmt_bind_param($stmt,"sss",$username,$password,$email);
                mysqli_stmt_execute($stmt);
                //session podesit da nakon pravljenja novog racuna bude drugo ime na index.php
                header("Location: ../index.php?success=CreatedNewAccount");
                exit();
            }
           
        }
        }
        
        //PROVJERI DA LI MORAS IMENOVAT U DRUGIM FILES TEXT INPUTE UNIQUE IL SE POST RESETUJE SVAKI PUT KAD SE POZOVE
       
    }


?>