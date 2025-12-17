<?php
// 🔐 PROTEKSI LOGIN
if (!isset($_SESSION['login'])) {
    header("Location: /lab11_php_oop/auth/login");
    exit;
}

$db   = new Database();
$form = new Form('', '💾 Simpan Artikel');

// proses simpan
if ($_POST) {
    $data = [
        'judul' => $_POST['judul'],
        'isi'   => $_POST['isi']
    ];

    if ($db->insert('artikel', $data)) {
        header("Location: /lab11_php_oop/artikel");
        exit;
    } else {
        echo "<p style='color:red'>❌ Gagal menyimpan data</p>";
    }
}
?>

<h3>➕ Tambah Artikel ✨</h3>

<div class="card">
    <?php
    $form->addField('judul', '📝 Judul Artikel');
    $form->addField('isi', '📄 Isi Artikel', 'textarea');
    $form->displayForm();
    ?>

    <br>
    <a href="/lab11_php_oop/artikel" class="action-link">
        ⬅️ Kembali
    </a>
</div>
