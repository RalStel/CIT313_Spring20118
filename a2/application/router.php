<?php

define('ABSOLUTE_PATH', '/home/rbstelle/htdocs/CIT313/FA2014/a2');
define('URL_ROOT', 'http://corsair.cs.iupui.edu:21571/CIT313/FA2014/a2');


function myLoad($class) {
//if the file exists, include it once
    if (file_exists('application/' . strtolower($class) . '.class.php')) {
        include_once ('application/' . strtolower($class) . '.class.php');
    }

    if (file_exists('application/controllers/' . strtolower($class) . '.class.php')) {
        include_once ('application/controllers/' . strtolower($class) . '.class.php');
    }

    if (file_exists('application/models/' . strtolower($class) . '.class.php')) {
        include_once ('application/models/' . strtolower($class) . '.class.php');
    }

}

//auto register the classes
spl_autoload_register('myLoad');


new Controller();
?>