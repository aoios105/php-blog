<?php
include('/Users/armenbrown/PhpstormProjects/ChainAdventure/Administration/Config.php');

$_SESSION= "";

$error = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($link, $_POST['username']);
    $mypassword = mysqli_real_escape_string($link, $_POST['password']);

    $sql = "SELECT User_Email FROM User_Basic_Info WHERE User_Email 
            = '$myusername' and User_Password = '$mypassword'";

    $result = mysqli_query($link,$sql);

    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    if ($count == 1) {

        header("../ChainAdventure/About.html");
        exit();

    } else {
        //Fail
        echo "Entry fail";
        $error = "Your Login Name or Password is invalid";
        include('Login.php');
    }

}

?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="../CSS/Core.css">
    <script type="text/javascript" src="jquery-1.8.3.js"></script>
    <script type="text/javascript" src="Login.js"></script>
</head>

<body>

<div class="menu">
    <style>
        <?php include('/Users/armenbrown/PhpstormProjects/ChainAdventure/Menu/menu.css');?>
    </style>
        <?php include("/Users/armenbrown/PhpstormProjects/ChainAdventure/Menu/menu.php");?>
</div>

<div class="video">
    <div class="homepage-hero-module">
        <div class="video-container">
            <div class="filter"></div>
            <video autoplay loop class="fillWidth" poster="../Media/backpack.jpg">
                <source src="../Media/cycling3.mp4"
                        type="video/webm"/>
                Your browser does not support the video tag.
                <source src="../Media/Into_the_Wild.webm"
                        type="video/webm"/>
                Your browser does not support the video tag.
            </video>
            <div class="poster hidden">
                <img src="../Media/forest.jpg" alt="">
            </div>
        </div>
    </div>
</div>

<div id="Login">
    <div class="LoginForm">
        <div class="forms">
            <form action="Login.php" method="post">

                <div class="form-group">
                    <label class="formlabel" id="two">Login into Striivr</label>
                </div>

                <div class="form-group">
                    <label class="formlabel">Email:</label>
                    <br>
                    <input type="text" name= "username" class="datafill">
                    <span class="help-block"></span>
                </div>

                <div class="form-group ">
                    <label class="formlabel"> Password:</label>
                    <br>
                    <input type="password" name= "password" class="datafill">
                    <span class="help-block">
                </div>

                <div class="checkbox">
                    <label class="rememberlabel"> <input type="checkbox"> Remember me</label>
                    <a href="PasswordReset.php" id="basiclink"> Forgot your password?</a>
                </div>

                <div class="form-group">
                    <input class="submitlabel" type="submit" value="Sign in">
                </div>


                <div class="form-group">
                        <input class="submitlabel" type="submit" value="Join us!"/>
                </div>

            </form>


        </div>
    </div>
</div>
</div>

<div class="footer">
    <?php include("/Users/armenbrown/PhpstormProjects/ChainAdventure/Menu/Footer.php");?>
</div>
</body>
</html>




