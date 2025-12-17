<?php
// ===============================
// BOOTSTRAP
// ===============================
session_start();

require_once 'config.php';
require_once 'class/Database.php';
require_once 'class/Form.php';

// ===============================
// ROUTING
// ===============================
$path = $_GET['path'] ?? '';
$path = trim($path, '/');

if ($path === '') {
    // kalau belum login → ke login
    if (!isset($_SESSION['login'])) {
        $path = 'auth/login';
    } else {
        $path = 'artikel/index';
    }
}

$segments = explode('/', $path);
$module = $segments[0] ?? 'artikel';
$page   = $segments[1] ?? 'index';

$file = "module/$module/$page.php";

// ===============================
// VIEW
// ===============================
include 'template/header.php';

if (file_exists($file)) {
    include $file;
} else {
    echo "<h3>404 - Modul tidak ditemukan</h3>";
}

include 'template/footer.php';
