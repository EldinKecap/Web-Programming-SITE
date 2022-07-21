
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
<!-- OVAJ SCRIP TAG NECE RADIT SAMO NA OVOJ STRANICI ZTO GA PREBACI GDJE JOS ZATREBA -->
    <script defer src = "./javascript/loginOut.js"></script>
    <script defer src = "./javascript/deleteAccount.js"></script>
    <script defer src="./javascript/changePassword.js"></script>
    <div id="indexBody" >
    <div id='welcomeMessage'><?=$welcomeMsg?>
    </div>
    Images of product and hopefully a good hero image
    </div>

    <!-- Change Password -->
    <div class="changePassword">
        <form action="includes/changePassword.php" method = "post">
            <label for="oldPassword">Enter old password</label>    
                <input type="text" name = "oldPassword" id = "oldPassword">
                    <div id="errorOldPassword"></div>
            <label for="newPassword">Enter new password</label>
                <input type="text" name = "newPassword" id = "newPassword">
                    <div id="errorNewPassword"></div>

            <input type="submit" class = "submit" id="submitChangedPassword">
            <div type="close" class = "createNewAccount closeNewPassword" >Close</div>
            <!-- <span class="material-icons">close</span> -->
        </form>
    </div>
    <div class = "deleteAccount">
        <p class = "" >Are you sure?</p>
            <div class = "answerDeleteAccount">
                <div class = "yes">Yes</div>
                <div class = "no" >No</div>
            </div>
    </div>
    <?php
    include 'includes/footer.php';
    ?>