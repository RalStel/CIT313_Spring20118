<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once('webconfig.php');
include_once(ABSOLUTE_PATH . '/classes/user.class.php');
include_once(ABSOLUTE_PATH . '/classes/registered_user.class.php');
include_once(ABSOLUTE_PATH . '/classes/admin_user.class.php');

$registereduser = new registereduser('Regular User', 'ralstelle');
$admin = new admin('Administrator', 'benstelle');

$registereduser->first_name = 'Raleigh';
$registereduser->last_name = 'Stelle';
$registereduser->email_address = 'ralstel@gmail.com';
//set methods for user

$admin->first_name = 'Ben';
$admin->last_name = 'Stela';
$admin->email_address = 'benstel@gmail.com';
//set methods for admin

echo "User Level: " . $registereduser->user_level . " <br/>";
echo "Registered User ID: " . $registereduser->user_id . " <br/>";
echo "Registered User Type: " . $registereduser->user_type . " <br/>";
echo "Registered First Name: " . $registereduser->first_name . " <br/>";
echo "Registered Last Name: " . $registereduser->last_name . " <br/>";
echo "Registered Email: " . $registereduser->email_address . " <br/><hr/>";
//get methods for user

echo "User Level: " . $admin->user_level . " <br/>";
echo "Admin User ID: " . $admin->user_id . " <br/>";
echo "Admin User Type: " . $admin->user_type . " <br/>";
echo "Admin First Name: " . $admin->first_name . " <br/>";
echo "Admin Last Name: " . $admin->last_name . " <br/>";
echo "Admin Email: " . $admin->email_address . " <br/>";
//get methods for admin
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CIT313 - Spring 2018 - Exercise 2 - RaleighStelle</title>
    </head>
    <body>
        <?php
        ?>
    </body>
</html>
