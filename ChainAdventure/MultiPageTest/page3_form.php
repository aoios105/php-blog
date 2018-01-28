<?php
session_start();

        foreach ($_POST as $key => $value) {
            $_SESSION['post'][$key] = $value;
        }

?>
<!DOCTYPE HTML>
<html>
<head>
    <title>PHP Multi Page Form</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="container">
    <div class="main">
        <h2>PHP Multi Page Form</h2><hr/>
        <span id="error">
 <?php
 if (!empty($_SESSION['error_page3'])) {
     echo $_SESSION['error_page3'];
     unset($_SESSION['error_page3']);
 }
 ?>
 </span>
        <form action="page4_form.php" method="post">
            <b>Complete Address :</b>
            <label>Address Line1 :<span>*</span></label>
            <input name="address1" id="address1" type="text" size="30" required>
            <label>Address Line2 :</label>
            <input name="address2" id="address2" type="text" size="50">
            <label>City :<span>*</span></label>
            <input name="city" id="city" type="text" size="25" required>
            <label>Pin Code :<span>*</span></label>
            <input name="pin" id="pin" type="text" size="10" required>
            <label>State :<span>*</span></label>
            <input name="state" id="state" type="text" size="30" required>
            <input type="reset" value="Reset" />
            <input name="submit" type="submit" value="Submit" />
        </form>
    </div>
</div>
</body>
</html>