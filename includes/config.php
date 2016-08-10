<?php
ob_start();
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['name'] . "!";
} else {
    echo "Please log in first to see this page.";
}
//database credentials
define('DBHOST','localhost');
define('DBUSER','naveen');
define('DBPASS','rolemodel');
define('DBNAME','blog');

$db = new PDO("mysql:host=".DBHOST.";port=90;dbname=".DBNAME, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//set timezone
date_default_timezone_set('Asia/Kolkata');
