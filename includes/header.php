<?php
    require 'databases.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"> -->
    <link rel="stylesheet" href="./styles/headerBodyFooterStyles.css">
    <link rel="stylesheet" href="./styles/changePassword.css">
    <link rel="stylesheet" href="./styles/formStyles.css">
    <link rel="stylesheet" href="./styles/settingsStyles.css">
    <link rel="stylesheet" href="./styles/deleteAccount.css">


    <script defer src="./javascript/formValidation.js"></script>
</head>
<body>
   <header>
       <nav>
            <div id="home"> 
                    <a href="./index.php" >Home</a>
                    <a href="shop.php">Shop</a>
                    <a href="./index.php#contact">Contact</a>

            </div> 
           <a href="./login.php" id='login'>Log in</a>
               <img src="./styles/images/Icons8-Ios7-Very-Basic-Settings-Filled.ico" alt="Settings" id='settingsIcon'>
               <div class = "settingsMenu " >
                   <li class="deleteAccountBtn">Delete account</li>
                   <li class="changePasswordButton"> Change password</li>
                  <li><a id="logout" href=""></a></li> 
                </div>
            
           
        </nav>
    </header>