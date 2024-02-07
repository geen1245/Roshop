<?php
$host = "localhost";
$dbname = "datadb";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้: " . $exception->getMessage();
    exit();
}
?>
