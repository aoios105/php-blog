<?php
/**
 * Created by PhpStorm.
 * User: armenbrown
 * Date: 13/11/2017
 * Time: 03:29
 */


// Initialize the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session.
session_destroy();

// Redirect to login page
header("location: Login.php");

exit;

?>
