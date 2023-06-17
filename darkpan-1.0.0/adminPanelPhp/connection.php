<?php
session_start();
$server = "mysql:host=localhost;dbname=admin panel";
$user = "root";
$password = "";

$pdo= new PDO($server,$user,$password);

?>