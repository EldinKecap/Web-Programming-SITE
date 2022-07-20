
    <?php
    include 'includes/header.php';
    session_start();
    if(isset($_SESSION['sessionUser'])){
        $name = ucfirst($_SESSION['sessionUser']);
        $welcomeMsg = "<h1>Welcome {$name}</h1>";
    }else{
        $welcomeMsg = '';
    }
        ?>
    <script defer src="loginOut.js"></script>
    <div id="indexBody" >
    <div id='welcomeMessage'><?=$welcomeMsg?>
    </div>
    Images of product and hopefully a good hero image
    </div>
    <div class="changePassword">
        <form action="includes/changePassword.php" method = "post">
        <label for="oldPassword">Enter old password</label>    
        <input type="text" name = "oldPassword">
        <label for="newPassword">Enter new password</label>
            <input type="text" id= "newPassword">
            <input type="submit">
        </form>
    </div>
    <?php
    include 'includes/footer.php';
    ?>