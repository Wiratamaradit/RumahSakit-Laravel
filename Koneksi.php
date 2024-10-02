<?php
$host = 'localhost';
$username = 'root'; 
$password = ''; 
$database = 'db_rumahsakit';

$dbh = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
?>