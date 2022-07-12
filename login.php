    <?php
    include 'includes/header.php';
    if(isset($_GET['error'])){ 
        $msg = $_GET['error'];
        if($msg == 'noUserNameInDatabase'){
            $msg = 'This Username is not in the database.';
        }
    }else{
        $msg = '';
    }
    ?>
    <!-- onsubmit je settovan na funkciju koja ne zaustavlja submit trenutno -->
    <form action="includes/login-inc.php" method="POST">
        <div class = "formTitle">Log in</div>
        
        <input type="text" id="username" placeholder="Enter username" name="username">
        <div id="errorUsername"><?=$msg?></div>
       
        <input type="text" id="password" placeholder="Enter password" name="password">
         <div id="errorPassword"></div>
         <input id="submit" type="submit" name = submit>
        <a href = "createAccount.php" class = "createNewAccount">Create account</a>
    </form>

    <?php
    include 'includes/footer.php';
    ?>