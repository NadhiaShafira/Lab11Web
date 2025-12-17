<?php
// 🔐 Proteksi login
if (!isset($_SESSION['login'])) {
    header("Location: /lab11_php_oop/auth/login");
    exit;
}

$db   = new Database();
$user = $_SESSION['user'];

// 🔄 Proses ubah password
if (isset($_POST['ubah_password'])) {
    $password_baru = $_POST['password_baru'];

    if (!empty($password_baru)) {
        // 🔐 HASH PASSWORD (JAWABAN TUGAS NO 2)
        $hash = password_hash($password_baru, PASSWORD_DEFAULT);

        $db->query("UPDATE users SET password='$hash' WHERE id='{$user['id']}'");

        $success = "✅ Password berhasil diubah";
    } else {
        $error = "❌ Password tidak boleh kosong";
    }
}
?>

<h3>👤 Profil Saya</h3>

<div class="card">
    <p><strong>🙋 Nama:</strong> <?= $user['nama']; ?></p>
    <p><strong>🆔 Username:</strong> <?= $user['username']; ?></p>
</div>

<hr>

<h4>🔐 Ubah Password</h4>

<?php if (isset($success)) : ?>
    <p style="color:green"><?= $success ?></p>
<?php endif; ?>

<?php if (isset($error)) : ?>
    <p style="color:red"><?= $error ?></p>
<?php endif; ?>

<form method="post" class="form-login">
    <label>Password Baru</label>
    <input type="password" name="password_baru" required>

    <button type="submit" name="ubah_password">
        💾 Simpan Password
    </button>
</form>
