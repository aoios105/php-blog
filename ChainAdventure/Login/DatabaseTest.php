<?php
/**
 * Created by PhpStorm.
 * User: armenbrown
 * Date: 26/01/2018
 * Time: 03:04
 */

include('/Users/armenbrown/PhpstormProjects/ChainAdventure/Administration/Config.php');

$stmt = $link->prepare("INSERT INTO LoginDetails (User_Email, User_Password)
                    VALUES (?, ?)");

$stmt->bind_param("ss", $username, $param_password);

// set parameters and execute
$username = "John";
$param_password = "Doe";

$stmt->execute();

echo "New records created successfully";

$stmt->close();
$link->close();

?>