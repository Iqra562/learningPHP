<?php
session_start();
$server = "mysql:host=localhost;dbname=daraz";
$user = "root";
$password = "";

$pdo= new PDO($server,$user,$password);

?>