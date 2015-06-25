<?php
ob_start();
session_start();

//set timezone
date_default_timezone_set('Europe/Amsterdam');

//database credentials
define('DBHOST','mysql.hostinger.nl');
define('DBUSER','u654405693_portf');
define('DBPASS','kozakken1997');
define('DBNAME','u654405693_portf');

//application address
define('DIR','http://arjandeconinck.tk/');
define('SITEEMAIL','arjandeconinck@live.nl');

try {

	//create PDO connection
	$db = new PDO("mysql:host=".DBHOST.";port=3306;dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

//include the user class, pass in the database connection
include('classes/user.php');
$user = new User($db);
?>
