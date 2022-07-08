
    <?php
    include 'includes/header.php';
    ?>
    <form action="includes/createAccount-inc.php" method="POST" id="createNewAccountForm">
        <div class = "formTitle">Create account</div>

        <input type="text" id="username" name = 'usernameCreateAccount' placeholder="Enter username">  
        <div id="errorUsername"></div>

        <input type="text" id="password" name = 'passwordCreateAccount' placeholder="Enter password">
        <div id="errorPassword"></div>

        <input type="text" id="email" name = 'email' placeholder="Enter email">
        <div id="errorEmail"></div>

        <input id="submit" type="submit" name='submitCreateAccount'>

        <a href = "login.php" class = "createNewAccount">Back</a>
    </form>

    <?php
    include 'includes/footer.php';
    ?>