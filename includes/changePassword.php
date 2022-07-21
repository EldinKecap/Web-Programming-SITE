<?php
include 'databases.php';
if (isset($_POST)) {
    session_start();
   if(isset($_SESSION['sessionUser'])){
       $sql = "SELECT * FROM users WHERE id = ?";
       $stmt = mysqli_stmt_init($conn);
       if(!mysqli_stmt_prepare($stmt,$sql)){
           header("Location: ../index.php?error=sqlerror");
           exit();
        }else{
            mysqli_stmt_bind_param($stmt,'s',$_SESSION['sessionId']);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                print_r($row); 
                if($row['password'] == $_POST['oldPassword']){
                    $sql = "UPDATE users SET password = ? where id = ?";
                    $stmt = mysqli_stmt_init($conn);
                    //inicijalizirio upit da upise novi password ako je stari tacan
                    if(!mysqli_stmt_prepare($stmt,$sql)){
                        header("Location: ../index.php?error=sqlerror");
                        exit();
                    }else{
                        mysqli_stmt_bind_param($stmt,"si",$_POST['newPassword'],$_SESSION['sessionId']);
                        mysqli_stmt_execute($stmt); //ODKOMENTIRAJ OVO
                        header("Location: ../index.php?success=changedPassword");
                        exit();
                    }
                }else{
                        header("Location: ../index.php?error=oldPasswordDidNotMatch");
                        exit();
                    }
            }
        }

    }else {
            header("Location: ../index.php?error=sessionNotSet");
             exit();
   }    
}else{
    header("Location: ../index.php?error=forbiddenAccess");
    exit();
}

?>