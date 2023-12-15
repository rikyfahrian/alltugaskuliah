<?php
session_start();
include "koneksi.php";

$username = $_POST["username"];
$password = md5($_POST["password"]);

try {
    $stmt = $conn->prepare('SELECT * FROM admin WHERE username = :username AND password = :password');
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':password', $password, PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $_SESSION["username"] = $username;
        $_SESSION["status"] = "login";
        session_write_close(); // Pastikan data sesi disimpan sebelum pengalihan header
        header("Location: view/admin.php");
    } else {
        header("Location: index.php?pesan=passwordsalah");
    }
} catch (PDOException $pdoE) {
    echo $pdoE->getMessage();
}
