<?php
require_once '../vendor/autoload.php';
require"jwtUtil.php";
$encodedJwt = new JwtUtil();    



header("Content-Type: application/json");


$hostName = "127.0.0.1";
$userName = "root";
$password = "";
$dbName = "php_test";

try {

    $encodedJwt->setJWT();
    $conn = new PDO("mysql:host=$hostName;dbname=$dbName",$userName,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    echo json_encode(["meaage" => "Connected Successfully... "]);
    
} catch (PDOException $e) {
   
    echo json_encode(["error" => "Connection Faild...". $e->getMessage()]);
}

