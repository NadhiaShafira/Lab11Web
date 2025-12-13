<?php
// ===================================================
// BOOTSTRAP APLIKASI
// ===================================================

// Load konfigurasi
include "config.php";

// Load class OOP
include "class/database.php";
include "class/form.php";

// Session (opsional)
session_start();

// ===================================================
// ROUTING LOGIC
// ===================================================

// Ambil path dari URL (hasil rewrite .htaccess)
$path = isset($_GET['path']) ? $_GET['path'] : 'artikel/index';

// Pecah path
$segments = explode('/', trim($path, '/'));

// Tentukan modul & halaman
$mod  = $segments[0] ?? 'artikel';
$page = $segments[1] ?? 'index';

// Tentukan file modul
$file = "module/$mod/$page.php";

// ===================================================
// LOAD TEMPLATE + KONTEN
// ===================================================
include "template/header.php";

if (file_exists($file)) {
    include $file;
} else {
    echo "<h3>404 - Modul tidak ditemukan</h3>";
}

include "template/footer.php";
