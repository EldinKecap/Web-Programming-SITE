
    <?php
    include 'includes/header.php';
    session_start();
    if(isset($_SESSION['sessionUser'])){
        $name = ucfirst($_SESSION['sessionUser']);
        $welcomeMsg = "<h1>Welcome {$name}</h1>";
    }
        ?>
    <div id="indexBody" >
    <div><?if(isset($_SESSION['sessionUser']))echo $welcomeMsg?>
    </div>
    Images of product and hopefully a good hero image
    </div>
    <?php
    include 'includes/footer.php';
    ?>