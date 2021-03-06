
    <?php
    include 'includes/header.php';
    if(isset($_GET['error'])){ 
        $msg = $_GET['error'];
        if($msg == 'usernameExists'){
            $msg = 'This Username is taken.';
            $username = $_GET['username'];
            $email = $_GET['email'];
        }
    }else{
        $msg = '';
        $username = '';
        $email = '';
    }
    ?>
    <form action="includes/createAccount-inc.php" method="POST" id="createNewAccountForm">
        <div class = "formTitle">Create account</div>

        <input type="text" id="username" name = 'usernameCreateAccount' placeholder="Enter username" value="<?=$username?>">  
        <div id="errorUsername"><?=$msg?></div>

        <input type="text" id="password" name = 'passwordCreateAccount' placeholder="Enter password" >
        <div id="errorPassword"></div>

        <input type="text" id="email" name = 'email' placeholder="Enter email" value = "<?=$email?>">
        <div id="errorEmail"></div>

        <input id="submit" class="submit" type="submit" name='submitCreateAccount'>

        <a href = "login.php" class = "createNewAccount">Back</a>
    </form>

    <?php
    include 'includes/footer.php';
    ?>