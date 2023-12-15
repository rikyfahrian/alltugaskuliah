<?php


$host = "localhost"; // Ganti dengan nama server database Anda
$username = "root"; // Ganti dengan username database Anda
$password = "secret"; // Ganti dengan password database Anda
$dbname = "db_laundry"; // Ganti dengan nama database Anda
$port = 3306;

try {
    $conn = new PDO("mysql:host=$host:$port;dbname=$dbname", $username, $password);
    print "database connected";
} catch (PDOException $exc) {

    echo "gagal koneksi brow" . $exc->getMessage();
}
