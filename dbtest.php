<?php
/*
test mysql database
*/
$main_host = "https://beijing2022.cn";
$intl_host="https://beijing2022-intl.com";
$db = parse_ini_file("db.ini");
$db = parse_ini_file("db_intl.ini");
$user = $db['user'];
$password = $db['pass'];
$name = $db['name'];
$host = $db['host'];
$type = $db['type'];
$link = mysql_connect('localhost', $user, $password);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>
