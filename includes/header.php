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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="./styles.css">
    <script defer src="formValidation.js"></script>
</head>
<body>
   <header>
       <nav>
          <div id="home"><a href="./index.php" >Home</a></div> 
           <a href="./login.php" id='login'>Log in</a>
           
               <img src="images/Icons8-Ios7-Very-Basic-Settings-Filled.ico" alt="Settings" id='settingsIcon'>
               <div class = "settingsMenu " >
                   <li>Delete account</li>
                   <li class="changePasswordButton"> Change password</li>
                  <li><a id="logout" href=""></a></li> 
                </div>
            
           
        </nav>
    </header>