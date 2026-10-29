<?php
// เริ่มต้น Session สำหรับตรวจสอบสิทธิ์การใช้งานทุกหน้าตามเกณฑ์
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Todo : Config Database (การตั้งค่าฐานข้อมูล)
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "grocery_store_db";

// Todo : เชื่อมต่อฐานข้อมูลด้วย MySQLi
$conn = mysqli_connect($host, $user, $pass, $dbname, 3310);

// ตรวจสอบการเชื่อมต่อ
if (!$conn) {
    die("เชื่อมต่อฐานข้อมูลล้มเหลว: " . mysqli_connect_error());
}

echo "เชื่อมต่อฐานข้อมูลสำเร็จ";
// ตั้งค่าภาษาไทย
mysqli_set_charset($conn, "utf8mb4");
