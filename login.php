    <?php
    include 'includes/header.php';
    $username = '';
    if(isset($_GET['error'])){ 
        $msg = $_GET['error'];
        $msgPw = '';
        if($msg == 'noUsernameInDatabase'){
            $msg = 'This username does not exist.';
            $username = $_GET['username'];
        }elseif($msg == 'sqlerror'){
            $msg = 'Database error';
            $username = $_GET['username'];
        }elseif($msg == 'wrongPassword'){
            $username = $_GET['username'];
            $msgPw = 'Password you have entered is not correct';
            $msg = '';
        }
    }else{
        $msg = '';
        $msgPw='';    
    }
    ?>
    <!-- onsubmit je settovan na funkciju koja ne zaustavlja submit trenutno -->
    <form action="includes/login-inc.php" method="POST">
        <div class = "formTitle">Log in</div>
        
        <input type="text" id="username" placeholder="Enter username" name="username" value="<?=$username?>">
        <div id="errorUsername"><?=$msg?></div>
       
        <input type="text" id="password" placeholder="Enter password" name="password">
         <div id="errorPassword"><?=$msgPw?></div>
         <input class="submit" type="submit" name = "submit" id="submit">
        <a href = "createAccount.php" class = "createNewAccount">Create account</a>
    </form>

    <?php
    include 'includes/footer.php';
    ?>