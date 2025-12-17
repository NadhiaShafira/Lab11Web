<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$db = new Database();

// jika sudah login, langsung ke artikel
if (isset($_SESSION['login'])) {
    header("Location: /lab11_php_oop/artikel");
    exit;
}

// proses login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = $db->get('users', "username='$username'");

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['login'] = true;
        $_SESSION['user']  = $user;

        header("Location: /lab11_php_oop/artikel");
        exit;
    } else {
        $error = "❌ Username atau password salah!";
    }
}
?>

<h3>🔐 Login</h3>

<div class="card">
    <?php if (isset($error)) : ?>
        <p style="color:red"><?= $error ?></p>
    <?php endif; ?>

    <form method="post" class="form-login">
        <label>👤 Username</label>
        <input type="text" name="username" required>

        <label>🔑 Password</label>
        <input type="password" name="password" required>

        <button type="submit" name="login">
            🚀 Masuk
        </button>
    </form>
</div>
