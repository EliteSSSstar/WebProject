<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "authorconnect_db1";
$dsn = "mysql:host=$servername;dbname=$dbname";
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
