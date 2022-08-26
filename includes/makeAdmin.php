<?php
if(isset($_GET['id'])){
    include 'databases.php';
    $sql="UPDATE users SET admin = 1 where id = ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../index.php?error=sqlerror");
        exit();
    }else{
        mysqli_stmt_bind_param($stmt,'s',$_GET['id']);
        mysqli_stmt_execute($stmt);
        header("Location: ../adminPage.php?success=madeUserAdmin");
        exit();
    }
}else{
    header("Location: ../index.php?error=accessforbidden");
    exit();
}
?>