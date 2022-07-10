<?php
    if(isset($_POST['submitCreateAccount'])){
        require 'databases.php';
        $username = $_POST['usernameCreateAccount'];
        $password = $_POST['passwordCreateAccount'];
        $email = $_POST['email'];
        $sql = 'INSERT INTO users (username,password,email) VALUES (?,?,?)';
        $stmt = mysqli_stmt_init($conn);
        //PROVJERI DA LI MORAS IMENOVAT U DRUGIM FILES TEXT INPUTE UNIQUE IL SE POST RESETUJE SVAKI PUT KAD SE POZOVE
        if(mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../createAccount.php?error=sqlerror");
            exit();
        }
        echo $_POST['usernameCreateAccount'];
        echo "WTF";
        print_r($_POST);
    }


?>