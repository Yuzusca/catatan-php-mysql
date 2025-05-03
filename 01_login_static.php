<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "2357401007" && $password == "13102005") {
        echo "Berhasil Login";
    } else {
        echo "Username / Password tidak sesuai";
    }
}

/*punya Yusuf Hidayat*/
?>

<form method="POST">
    <label>Username:(NIM)</label><br>
    <input type="text" name="username" required><br>
    <label>Password:</label><br>
    <input type="password" name="password" required><br>
    <input type="submit" value="Masuk">
</form>
