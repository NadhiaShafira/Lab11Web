<?php
// 🔐 PROTEKSI LOGIN
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['login'])) {
    header("Location: /lab11_php_oop/auth/login");
    exit;
}

$db    = new Database();
$query = $db->query("SELECT * FROM artikel");
?>

<h3>🍜 Data Artikel</h3>

<div class="card">

    <a href="/lab11_php_oop/artikel/tambah" class="action-link">
        ➕ Tambah Artikel
    </a>

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
                <td style="text-align:center;"><?= $no++; ?></td>
                <td><?= $row['judul']; ?></td>
                <td><?= $row['isi']; ?></td>
                <td style="text-align:center;">

                    <a href="/lab11_php_oop/artikel/ubah?id=<?= $row['id']; ?>"
                       class="action-link">
                        ✏️ Ubah
                    </a>

                    <a href="/lab11_php_oop/artikel/hapus?id=<?= $row['id']; ?>"
                       class="action-link"
                       onclick="return confirm('🗑️ Yakin mau menghapus artikel ini?')">
                        🗑️ Hapus
                    </a>

                </td>
            </tr>
        <?php endwhile; ?>
    </table>

</div>
