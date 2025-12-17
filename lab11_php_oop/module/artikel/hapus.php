<?php
// 🔐 PROTEKSI LOGIN
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['login'])) {
    header("Location: /lab11_php_oop/auth/login");
    exit;
}

$db = new Database();

// validasi id
if (!isset($_GET['id'])) {
    header("Location: /lab11_php_oop/artikel");
    exit;
}

$id = $_GET['id'];

// hapus data
$db->delete('artikel', "id='$id'");

// kembali ke artikel
header("Location: /lab11_php_oop/artikel");
exit;
