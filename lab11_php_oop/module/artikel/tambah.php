<?php
$db = new Database();
$form = new Form('', 'Simpan');

if ($_POST) {
    $data = [
        'judul' => $_POST['judul'],
        'isi'   => $_POST['isi']
    ];

    if ($db->insert('artikel', $data)) {
        header("Location: /lab11_php_oop/artikel");
        exit;
    } else {
        echo "<p style='color:red'>Gagal menyimpan data</p>";
    }
}
?>

<h3>Tambah Artikel</h3>

<?php
$form->addField('judul', 'Judul Artikel');
$form->addField('isi', 'Isi Artikel', 'textarea');
$form->displayForm();
?>

<a href="/lab11_php_oop/artikel">← Kembali</a>
