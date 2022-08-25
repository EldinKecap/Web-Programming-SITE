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
        <p class = "" >Are you sure? This will delete your account permanently.</p>
            <div class = "answerDeleteAccount">
                <div class = "yes">Yes</div>
                <div class = "no" >No</div>
            </div>
    </div>