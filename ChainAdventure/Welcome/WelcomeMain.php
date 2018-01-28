<?php
/**
 * Created by PhpStorm.
 * User: armenbrown
 * Date: 25/01/2018
 * Time: 06:33
 */

// Include config file
require_once ('/Users/armenbrown/PhpstormProjects/ChainAdventure/Administration/Config.php');

$_SESSION= "";
// Initialize the session
session_start();

// session variable is not set it will redirect to login page

if(!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header("location: /Users/armenbrown/PhpstormProjects/ChainAdventure/Login/Login.php");
    exit;
    }

?>

<!DOCTYPE html>
<html lang="en">


<div class="menu">

    <style>
        <?php include('/Users/armenbrown/PhpstormProjects/ChainAdventure/Menu/menu.css');?>
    </style>
        <?php include("/Users/armenbrown/PhpstormProjects/ChainAdventure/Menu/menu.php");?>


    <div class="video">
        <div class="Welcome">
            <h2>Welcome</h2>
        </div>

        <script type="text/javascript" src="Login.js"></script>
        <style>
            <?php include ('/Users/armenbrown/PhpstormProjects/ChainAdventure/CSS/Core.css');?>
            <?php include ("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css");?>
        </style>
        <?php include("/Users/armenbrown/PhpstormProjects/ChainAdventure/Welcome/Welcome.php");?>
    </div>


    <div class="footer">
        <?php include("/Users/armenbrown/PhpstormProjects/ChainAdventure/Menu/Footer.php");?>
    </div>
