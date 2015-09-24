<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define ('DB', 'ankilearn_kl_com_ua');

$db = @mysqli_connect(HOST, USER, PASS, DB) or die ("No connection DB");
?>
