<?php
session_start();
if(isset($_GET['id'])&&$_SESSION['sessionAdmin']){
    include 'databases.php';
    $sql="DELETE FROM products where id = ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../index.php?error=sqlerror");
        exit();
    }else{
        mysqli_stmt_bind_param($stmt,'s',$_GET['id']);
        mysqli_stmt_execute($stmt);
        header("Location: ../shop.php?success=deletedPost");
        exit();
    }
}else{
    header("Location: ../index.php?error=accessforbidden");
    exit();
}
?>