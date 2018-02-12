<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

function myLoad($class) {
    include_once('webconfig.php');
    include_once ('classes/' . strtolower($class) . '.class.php');
}

//auto register the classes
spl_autoload_register('myLoad');

$testAdd = Admin::addNums(4, 4);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>CIT313 - Spring 2018 - Exercise 3 - RaleighStelle</title>
    </head>

    <body>
<!--        mathematical output!-->
        <p>Before You Fill Out This Form, Let's Do Some Math!: <?php echo "$testAdd" ?></p>
        <div class="form-container">
            <form id="form1" name="form1" action="<?php echo URL_ROOT . '/results.php' ?>" method="post">
                <table width="500" border="0" cellpadding="5" cellspacing="5">
                    <tr>
                        <td width="169">First Name:</td>
                        <td width="321"><label for="fname"></label>
                            <input type="text" name="fname" id="fname" /></td>
                    </tr>
                    <tr>
                        <td>Last Name:</td>
                        <td><input type="text" name="lname" id="lname" /></td>
                    </tr>
                    <tr>
                        <td>Email Address:</td>
                        <td><input type="text" name="email" id="email" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Register" class="button" /></td>
                    </tr>
                </table>
            </form>

        </div><!-- /form-container -->

    </body>
</html>