<!DOCTYPE HTML>
<html>
<head>
    <title>PHP Multi Page Form</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="container">
    <div class="main">
        <h2>PHP Multi Page Form</h2>
        <?php
        session_start();

                    foreach ($_POST as $key => $value) {
                        $_SESSION['post'][$key] = $value;
                    }

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "ChainAdventure";

                    $link = new mysqli($servername, $username, $password, $dbname);

                    $stmt = $link->prepare("INSERT INTO User_Basic_Info (
                                                User_Email
                                              , Account_Creation_Date 
                                              , User_First_Name 
                                              , User_Last_Name
                                              , User_Password)
                                                VALUES (?, ? , ? , ? , ?)");

                    $stmt->bind_param("sssss", $username, $AccountDate , $firstName , $LastName , $param_password);

                    // set parameters and execute
                    $username  = $myusername ;
                    $AccountDate =  $date ;
                    $firstName   = $myfirstName ;
                    $LastName = $myLastName;
                    $param_password = $mypassword;

                    if ($stmt->execute()) {

                    extract($_SESSION['post']); // Function to extract array.

                    $connection = mysql_connect("localhost", "root", "");
                    $db = mysql_select_db("ChainAdventure", $connection); // Storing values in database.

                    $query = mysql_query("insert into detail 
(name,email,password,religion,nationality,gender,qualification,experience,address1,address2,city,pin,state) 
values('$name','$email','$password','$religion','$nationality','$gender','$qualification'
,'$experience','$address1','$address2','$city','$pin','$state')", $connection);

                    if ($query) {
                        echo '<p><span id="success">Form Submitted successfully..!!</span></p>';
                    } else {
                        echo '<p><span>Form Submission Failed..!!</span></p>';
                    }
                    unset($_SESSION['post']); // Destroying session.
                }
            } else {
                header("location: page1_form.php"); // Redirecting to first page.
            }
        } else {
            header("location: page1_form.php"); // Redirecting to first page.
        }
        ?>
    </div>
</div>
</body>
</html>
