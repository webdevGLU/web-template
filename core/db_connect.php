<?php
session_start();
 # With composer we can autoload the Handlebars package
 require_once ("./vendor/autoload.php");

/**
 * Voor de MAC gebruikers;
 */
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "webshop";

/**
 * Voor de Windows gebruikers;
 */
// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "";
// $dbname = "webshop";

$con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($con -> connect_errno) {
    echo "Failed to connect to MySQL: " . $con -> connect_error;
    exit();
}

define("BASEURL","http://localhost/webdev-base-webshop/");
define("BASEURL_CMS","http://localhost/webdev-base-webshop/admin/");

function dd ( $var, $die = false ) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    if($die){
        exit();
    }
}