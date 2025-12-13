<?php
$db = new Database();

// Ambil ID dari URL
$id = $_GET['id'] ?? null;

// Validasi ID
if (!$id) {
    echo "<p>ID tidak ditemukan</p>";
    exit;
}

// Ambil data artikel berdasarkan ID
$artikel = $db->get('artikel', "id=$id");

$form = new Form('', 'Update');

// Jika form disubmit
if ($_POST) {
    $data = [
        'judul' => $_POST['judul'],
        'isi'   => $_POST['isi']
    ];

    $update = $db->update('artikel', $data, "id=$id");

    if ($update) {
        header("Location: /lab11_php_oop/artikel");
        exit;
    } else {
        echo "<p style='color:red'>Gagal mengupdate data</p>";
    }
}
?>

<h3>Ubah Artikel</h3>

<?php
$form->addField('judul', 'Judul Artikel', 'text', $artikel['judul']);
$form->addField('isi', 'Isi Artikel', 'textarea', $artikel['isi']);
$form->displayForm();
?>

<a href="/lab11_php_oop/artikel">← Kembali</a>
