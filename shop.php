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
   
    ?>
    <script defer src = "./javascript/loginOut.js"></script>
    <script defer src = "./javascript/deleteAccount.js"></script>
    <script defer src="./javascript/changePassword.js"></script>
    <link rel="stylesheet" href="./styles/adminPage.css">
    <div id="indexBody" >
    
        <div id="welcomeMessage"><?=$welcomeMsg?></div>
        <h1>Products</h1>
    <table align="center" id = "productsTable">
        <!-- <tr>
            <th colspan="5"><h1>Accounts</h1></th>
        </tr> -->
        <tr>
            <th>Post ID</th>
            <!-- <th>UserId</th> -->
            <th>Product Name</th>
            <th>Contact</th>
            <th>Description</th>
            <?php if($_SESSION['sessionAdmin']==1){ ?><th><?php echo 'Delete product'; } ?></th>

        </tr>
        <?php
        $sql = 'SELECT * FROM products';
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
                    <!-- <td class = "userId"><?php 
                    // echo $rows["userId"];
                    ?></td> -->
                    <td class= "productName"><?php echo $rows["productName"];?></td>
                    <td class= "contact"><?php echo $rows["contact"]; ?></td>
                    <td class= "description"><?php echo $rows["description"];?></td>
                    <?php if($_SESSION['sessionAdmin']==1){ ?><td class="delete"><?php echo 'delete'; } ?></td>
                </tr>
                <?php
            }
        }
        ?>
        </table>
        <div class="sort">
            <h1>Sort results by clicking on the column name</h1>
        </div>
        <script src="./javascript/shop.js"></script>
<?php

    
    include 'includes/footer.php';
    ?>