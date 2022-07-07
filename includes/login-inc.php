<?php
    if(isset($_POST['submit'])){
        require 'databases.php';
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = 'SELECT * FROM users WHERE username = ?';
        $stmt = mysqli_stmt_init($conn);
       
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header('Location: ../index.php?error=sqlerror');
            exit();
        }else{
            mysqli_stmt_bind_param($stmt,'s',$username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            // print_r($result);
            if($row = mysqli_fetch_assoc($result)){
                // print_r($row);
                //prepravi da sa hashovima radi
                $passCheck = $password==$row['password']?true:false;
                if($passCheck){
                    session_start();
                    $_SESSION['sessionId'] = $row['id'];
                    $_SESSION['sessionUser'] = $row['username'];
                    header("Location: ../index.php?success=loggedin");
                    exit();
                }else{
                    header("Location: ../index.php?error=wrongPassword");
                    exit();
                }
            }else{
                header("Location: ../index.php?error=noUserName");
                exit();
            } 
        }
    }else{
        header("Location: ../index.php?error=accessforbidden");
        exit();
        echo 'nije postan submit';
    }

?>