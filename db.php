<?php
$dsn = 'mysql:host=localhost;dbname=jewelry_db2';
$username = 'root';
$password = '';
$options = [];
try {
$connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {

}


