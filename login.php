<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pembelian Tanaman Hias</title>
</head>
<body>
    <h2>Login - Pembelian Tanaman Hias</h2>
    
    <?php
    // Cek apakah form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari form
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Validasi input
        if (empty($username) || empty($password)) {
            echo "Silakan lengkapi semua kolom!";
        } else {
            // Lakukan validasi login (contoh sederhana, Anda dapat menggantinya dengan validasi sesuai kebutuhan)
            if ($username === "user@example.com" && $password === "password123") {
                // Jika login berhasil, arahkan ke program pembelian tanaman hias dengan metode GET
                header("Location: pembelian.php?username=" . urlencode($username));
                exit();
            } else {
                echo "Login gagal. Periksa kembali username dan password!";
            }
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username/Email:</label>
        <input type="text" id="username" name="username" required>
        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
