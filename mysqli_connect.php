<?php
define('DB_USER','');
define('DB_PASSWORD','');
define('DB_HOST','');
define('DB_NAME','');
$dbc=@mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) OR die('could not connect to the database'.mysqli_connect_error());
mysqli_set_charset($dbc,'utf8');
?>