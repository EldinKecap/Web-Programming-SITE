    <?php
    include 'includes/header.php';
    ?>
    
    <form action="" onclick="getUserInput()" onsubmit="return false">
        <div class = "formTitle">Log in</div>
        <div id="errorUsername"></div>
        <input type="text" id="username" placeholder="Enter username">
        
        <div id="errorPassword"></div>
        <input type="text" id="password" placeholder="Enter password">
        <input id="submit" type="submit">
        <a href = "createAccount.php" class = "createNewAccount">Create account</a>
    </form>

    <?php
    include 'includes/footer.php';
    ?>