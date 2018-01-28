<?php
/**
 * Created by PhpStorm.
 * User: armenbrown
 * Date: 13/11/2017
 * Time: 03:19
 */

// Include config file
session_start();
include('/Users/armenbrown/PhpstormProjects/ChainAdventure/Administration/Config.php');

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $myusername = mysqli_real_escape_string($link, $_POST['username']);
    $mypassword = mysqli_real_escape_string($link, $_POST['password']);

    $myfirstName = mysqli_real_escape_string($link, $_POST['FirstName']);
    $myLastName = mysqli_real_escape_string($link, $_POST['LastName']);

    $myBirthday = mysqli_real_escape_string($link, $_POST['Birthday']);
    $myGender = mysqli_real_escape_string($link, $_POST['Gender']);

    $country = mysqli_real_escape_string($link, $_POST['Country']);

    $stmt = $link->prepare("INSERT INTO User_Basic_Info (
                                    User_Email
                                  , Account_Creation_Date 
                                  , User_First_Name 
                                  , User_Last_Name
                                  , User_Password
                                  , User_Gender
                                  , User_Age
                                  , User_Location
                                    ) VALUES (?, ? , ? , ? , ? ,? ,? , ?)");

    $stmt->bind_param("ssssssss", $username, $AccountDate , $firstName , $LastName
                                    , $param_password , $Gender , $birthday, $location);

    $date = date('Y-m-d H:i:s');

    // set parameters and execute
    $username  = $myusername ;
    $AccountDate =  $date ;
    $firstName   = $myfirstName ;
    $LastName = $myLastName;
    $param_password = $mypassword;
    $birthday  = $myBirthday ;
    $Gender =  $myGender ;
    $location = $country ;

    if ($stmt->execute()) {
        $_SESSION['login_user'] = $myusername;
        header('Location: Explore/Explore.php');
        exit();
    } else {
        $error =  "This account already exits";
        echo $error;
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
        <?php include ('/Users/armenbrown/PhpstormProjects/ChainAdventure/Menu/menu.css');?>
    </style>
        <?php include("/Users/armenbrown/PhpstormProjects/ChainAdventure/Menu/menu.php");?>
</div>

<div class="video">
    <div class="homepage-hero-module">
        <div class="video-container">
            <div class="filter"></div>
            <video autoplay loop class="fillWidth" poster="../Media/cloudsover.jpg">
                <source src="../Media/Surf.mp4" type="video/mp4"/>
                Your browser does not support the video tag.
                <source src="../Media/Into_the_Wild.webm"
                        type="video/webm"/>
                Your browser does not support the video tag.
            </video>
            <div class="poster hidden">
                <img src="../Media/Keep_Running.jpg" alt="">
            </div>
        </div>
    </div>
</div>

<div id="Login">
    <div class="LoginForm" id="Registration">

        <div class="forms">
            <form action="Registration.php" method="post">

                <div class="form-group">
                    <label class="formlabel" id="one">Join Striivr for free</label>
                </div>

                <div class="form-group">
                    <label class="formlabel">Email</label>
                    <br>
                    <input type="text" name= "username" class="datafill">
                    <span class="help-block"></span>
                </div>


                <div class="form-group ">
                    <label class="formlabel"> Password</label>
                    <br>
                    <input type="password" name= "password" class="datafill">
                    <span class="help-block">
                </div>

                <div class="form-group ">
                    <label class="formlabel"> First Name:</label>
                    <br>
                    <input type="password" name= "FirstName" class="datafill">
                    <span class="help-block">
                </div>

                <div class="form-group ">
                    <label class="formlabel"> Last Name:</label>
                    <br>
                    <input type="password" name= "LastName" class="datafill">
                    <span class="help-block">
                </div>

                <div class="form-group ">
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <label class="formlabel"> Birthday:</label>
                    <br>
                    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                    <link rel="stylesheet" href="/resources/demos/style.css">
                    <script>
                        $(function () {
                            $("#datepicker").datepicker();
                        });
                    </script>
                    <p><input type="text" name="Birthday" class="datafill"></p>
                </div>

                <div class="form-group ">
                    <label class="formlabel">Gender</label>
                    <br>
                    <input type="password" name= "Gender" class="datafill">
                    <span class="help-block">
                </div>

                <div class="form-group">
                    <label class="formlabel"> Country:</label>
                    <br>
                    <script type="text/javascript" src="../Geography/CountriesandStates.js"></script>
                    <select class="countrychoices" class="datafill" id="country" name="Country" ></select>
                    <br>
                </div>

                <div class="form-group ">
                    <label class="formlabel"> State/County:</label>
                    <br>
                    <select name="state" class="datafill" id="state" ></select>
                    <script language="javascript">
                        populateCountries("country", "state");
                    </script>
                </div>
                    <input type="submit" class="submitlabel" class="button" value="Join Spryvr"></div>
                    </div>
                </p>

        </form>
    </div>
    </form>
</div>
</div>
</div>

<div class="footer">
    <?php include("/Users/armenbrown/PhpstormProjects/ChainAdventure/Menu/Footer.php");?>
</div>

</body>
</html>




