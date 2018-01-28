<?php
/**
 * Created by PhpStorm.
 * User: armenbrown
 * Date: 25/01/2018
 * Time: 06:19
 */

// Include config file
require_once '/Users/armenbrown/PhpstormProjects/ChainAdventure/Administration/Config.php';

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>
<body>

<div id="menu">
    <nav class="menu-navigation-dark">
        <a href="#"><i class="fa fa-camera-retro"></i><span>Striivr</span></a>
        <a href="../Explore/Explore.php"><i class="fa fa-code"></i><span>Explore</span></a>
        <a href="#"><i class="fa fa-code"></i><span>Blog</span></a>
        <a href="#" class="selected"><i class="fa fa-comment"></i><span>Meet People</span></a>
        <a href="../Blog.html"><i class="fa fa-plane"></i><span>Travel Plans</span></a>
        <a href="../Login/Login.php"><i class="fa fa-heart"></i><span>Login</span></a>
        <a href="../Registration/Registration.php"><i class="fa fa-camera-retro"></i><span>Register</span></a>
    </nav>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="../Media/jquery.slicknav.min.js"></script>

    <script>
        $(function(){
            var menu = $('.menu');
            menu.slicknav();
            menu.on('click', 'a', function(){
                var a = $(this);
                a.siblings().removeClass('selected');
                a.addClass('selected');
            });
        });
    </script>
</div>
</body>
</html>