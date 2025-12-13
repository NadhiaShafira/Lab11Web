<?php
$db = new Database();
$query = $db->query("SELECT * FROM artikel");
?>

<h3>🍜 Data Artikel</h3>

<a href="/lab11_php_oop/artikel/tambah" class="action-link">➕ Tambah Artikel</a>

<br><br>

<table>
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Aksi</th>
    </tr>

    <?php $no = 1; ?>
    <?php while ($row = $query->fetch_assoc()) : ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['judul']; ?></td>
            <td><?= $row['isi']; ?></td>
            <td style="text-align:center;">
                <a href="/lab11_php_oop/artikel/ubah?id=<?= $row['id']; ?>" class="action-link">✏️ Ubah</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
