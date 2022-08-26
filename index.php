
    <?php
    include 'includes/header.php';
    // session_start();
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
    <link rel="stylesheet" href="./styles/index.css">
<div id="indexBody" >
    <div class="hero">
        <div id="welcomeMessage"><?=$welcomeMsg?></div>
        </div id = "aboutUs">
        <h3>About US</h3>
        <p>We are a group of young people set on promoting and teaching extream sports in Bosnia and Herzegovina. Our goal is changing the view of our community torwards these kinds of sports and creating an enviorment where people that like these sports can express their passion. People in our local community have a big stigma about being hurt through these sports which we want to break by teaching kids in a safe enviorment with proper equipment. So far we have organized 8 events where we implemented skate school for begginers that have never even gotten a chance to try these sports out. After every event we aquired new members that have become our friends and are now proper skaters. We will keep on improving our skate school program and our events. We have been featured in various forms of media channels including the slovenian Pendrek skateboarding magazine . Since the inclusion of skateboarding into the olympic games this so called foreing culture has started to develop in our country and we expect exponential growth in the future.</p>
        <div id="contact">
            <h3>Contact Us</h3>
            <p>email: eldinkecap@gmail.com <br> phone: +38762191012</p>
        </div>
    </div>
        
    
    <?php
    include 'includes/modules.php';
    include 'includes/footer.php';
    ?>