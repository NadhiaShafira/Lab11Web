<?php
// 🔐 PROTEKSI LOGIN
if (!isset($_SESSION['login'])) {
    header("Location: /lab11_php_oop/auth/login");
    exit;
}

$db = new Database();

// ambil id
$id = $_GET['id'] ?? null;
if (!$id) {
    echo "<p>❌ ID tidak ditemukan</p>";
    exit;
}

// ambil data
$artikel = $db->get('artikel', "id=$id");

$form = new Form('', '🔄 Update Artikel');

// proses update
if ($_POST) {
    $data = [
        'judul' => $_POST['judul'],
        'isi'   => $_POST['isi']
    ];

    if ($db->update('artikel', $data, "id=$id")) {
        header("Location: /lab11_php_oop/artikel");
        exit;
    } else {
        echo "<p style='color:red'>❌ Gagal mengupdate data</p>";
    }
}
?>

<h3>✏️ Ubah Artikel 💕</h3>

<div class="card">
    <?php
    $form->addField('judul', '📝 Judul Artikel', 'text', $artikel['judul']);
    $form->addField('isi', '📄 Isi Artikel', 'textarea', $artikel['isi']);
    $form->displayForm();
    ?>

    <br>
    <a href="/lab11_php_oop/artikel" class="action-link">
        ⬅️ Kembali
    </a>
</div>
