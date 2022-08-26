
    <?php
    include 'includes/header.php';
    
   
    ?>

    <form action="includes/addProduct-inc.php" method="POST" id="createNewAccountForm">
        <div class = "formTitle">Add a product</div>

        <input type="text" id="productName" name = 'productName' placeholder="Enter product name" >  
        <div id="errorProductName"></div>

        <input type="text" id="productDescription" name = 'productDescription' placeholder="Enter product description" >
        <div id="errorProductDescription"></div>

        <input type="text" id="contactInfo" name = 'contactInfo' placeholder="Enter contact info" >
        <div id="errorContactInfo"></div>

        <input id="submit" class="submit" type="submit" name='submitAddProduct'>

        <a href = "shop.php" class = "createNewAccount">Back</a>
    </form>
    <script src="./javascript/addProduct.js" ></script>
    <?php
    include 'includes/footer.php';
    ?>