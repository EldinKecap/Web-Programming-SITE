
    <?php
    include 'includes/header.php';
    ?>
    <form action="" method="POST" id="createNewAccountForm">
        <div class = "formTitle">Create account</div>

        <input type="text" id="username" placeholder="Enter username">  
        <div id="errorUsername"></div>

        <input type="text" id="password" placeholder="Enter password">
        <div id="errorPassword"></div>

        <input type="text" id="email" placeholder="Enter email">
        <div id="errorEmail"></div>

        <input id="submit" type="submit">

        <a href = "login.php" class = "createNewAccount">Back</a>
    </form>

    <?php
    include 'includes/footer.php';
    ?>