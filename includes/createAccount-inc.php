<?php
    if(isset($_POST['submitCreateAccount'])){
        require 'databases.php';
        //PROVJERI DA LI MORAS IMENOVAT U DRUGIM FILES TEXT INPUTE UNIQUE IL SE POST RESETUJE SVAKI PUT KAD SE POZOVE
        echo $_POST['usernameCreateAccount'];
        echo "WTF";
        print_r($_POST);
    }


?>