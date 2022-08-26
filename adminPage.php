<?php
    include 'includes/header.php';
    include 'includes/modules.php';
    // session_start();
    if(isset($_SESSION['sessionUser'])){
        $name = ucfirst($_SESSION['sessionUser']);
        $welcomeMsg = "<h1>Welcome {$name}</h1>";
    }else{
        $welcomeMsg = '';
    }
    if($_SESSION['sessionAdmin'] == null){
        header("Location: ./index.php?error=accessforbidden");
    }
    ?>
    <script defer src = "./javascript/loginOut.js"></script>
    <script defer src = "./javascript/deleteAccount.js"></script>
    <script defer src="./javascript/changePassword.js"></script>
    <link rel="stylesheet" href="./styles/adminPage.css">
    <div id="indexBody" >
    
        <div id="welcomeMessage"><?=$welcomeMsg?></div>
        <h1>Accounts</h1>
    <table align="center" id = "accountsTable">
        <!-- <tr>
            <th colspan="5"><h1>Accounts</h1></th>
        </tr> -->
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Admin</th>
        </tr>
        <?php
        $sql = 'SELECT * FROM users';
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            echo "<h1>SQL ERROR</h1>";
        }else{
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            // print_r($result);
            echo '<br>';
            while($rows = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td class= "id"><?php echo $rows["id"]?></td>
                    <td class = "username"><?php echo $rows["username"]?></td>
                    <td class= "password"><?php echo $rows["password"]?></td>
                    <td class= "email"><?php echo $rows["email"]?></td>
                    <td class= "admin"><?php if ($rows["admin"] == 1){
                        echo 'Is Admin';
                        }else {
                            echo "Make Admin";
                        }
                        ?></td>
                    
                </tr>
                <?php
            }
        }
        ?>
        </table>
        <div class="sort">
            <h1>Sort results by clicking on the column name</h1>
        </div>
        <script src="./javascript/adminPage.js"></script>
<?php

    
    include 'includes/footer.php';
    ?>