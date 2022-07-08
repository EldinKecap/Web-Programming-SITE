
    <?php
    include 'includes/header.php';
    session_start();
    $welcomeMsg = "<h1>Welcome {$_SESSION['sessionUser']}</h1>";
    ?>
    <div><?=$welcomeMsg;?>
    </div>
    <div id="indexBody" >
    Images of product and hopefully a good hero image
    </div>
    <?php
    include 'includes/footer.php';
    ?>