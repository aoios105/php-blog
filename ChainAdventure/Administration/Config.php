<?php
/**
 * Created by PhpStorm.
 * User: armenbrown
 * Date: 24/01/2018
 * Time: 20:32
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ChainAdventure";

// Create connection
$link = new mysqli($servername, $username, $password, $dbname);


// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>