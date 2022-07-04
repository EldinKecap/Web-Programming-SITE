
    <?php
    include 'includes/header.php';
    ?>
    <form action="" onclick = "getUserInput()" onsubmit="return false" id="createNewAccountForm">
        <div class = "formTitle">Create new account</div>

        <div id="errorUsername"></div>
        <input type="text" id="username" placeholder="Enter username">  

        <div id="errorPassword"></div>
        <input type="text" id="password" placeholder="Enter password">

        <div id="errorEmail"></div>
        <input type="text" id="email" placeholder="Enter email">

        <input id="submit" type="submit">

        <a href = "login.php" class = "createNewAccount">Back</a>
    </form>

    <?php
    include 'includes/footer.php';
    ?>