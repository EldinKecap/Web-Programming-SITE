<?php
    session_start();
    if (isset($_SESSION['sessionUser'])) {
    include "databases.php";
        $sql = "DELETE FROM users WHERE id = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        }else {
            mysqli_stmt_bind_param($stmt,"s",$_SESSION['sessionId']);
            mysqli_stmt_execute($stmt);
            header("Location: ./logout.php");
        }

    }else{
        header("Location: ../index.php?error=forbiddenAccess");
        exit();
    }

?>
