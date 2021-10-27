<?php
define('DBSERVER', 'localhost');
define('DBUSERNAME','root');
define('DBPASSWORD','Naveen@9267');
define('DBNAME','coursera');

$db = mysqli_connect(DBSERVER,DBUSERNAME,DBPASSWORD,DBNAME);

if ($db===false) {
	die("Error: Connection error " . mysqli_connect_error());
}
?>