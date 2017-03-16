<?php 

define('DB_SERVER', 'localhost');
define('DB_NAME', 'comision_belleza2017');
define('DB_USER', 'comision_admin');
define('DB_PASS', '$Sanmarcos2017');

$con = mysql_connect(DB_SERVER, DB_USER, DB_PASS);
mysql_select_db(DB_NAME, $con);
?>