<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

function myLoad($class) {
    include_once('webconfig.php');
    include_once ('classes/' . strtolower($class) . '.class.php');
}

spl_autoload_register('myLoad');

session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>CIT313 - Spring 2018 - Exercise 3 - RaleighStelle</title>
    </head>

    <body>

        <?php

        function testRegUser($regUser) {
            if ($regUser instanceof registereduser) {
//                echo "user is a registered user"  . "<br />";
                //above line was for testing purposes
                echo "The registered user's first name is: " . $regUser->first_name . "<br />";
                echo "The registered user's last name is: " . $regUser->last_name . "<br />";
                echo "The registered user's email address is: " . $regUser->email_address . "<br /><hr/>";
                echo "Processing Complete";
            } else {
                echo "Not  REG USER <br /><hr/>";
            }
        }

//first, see if the user's first name name has been set.  If not, skip processing this user.
        if (!empty($_POST['fname'])) {


            $thisFname = $_POST['fname'];
            $thisLname = $_POST['lname'];
            $thisEmail = $_POST['email'];

//            echo "Added " . $thisFname . "<br />";
            //another way tested

            //create an empty regUser variable
            $regUser;

            //new registeruser object with paramaters of newuser and regular
            $regUser = new registereduser('newuser', 'regular');
            $regUser->first_name = $thisFname;
            $regUser->last_name = $thisLname;
            $regUser->email_address = $thisEmail;

            //if registered user is object, output results. Else tell user it isn't an object.
            testRegUser($regUser);
        }
        ?>

        <body>
        </body>
</html>