<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/style.css">

</head>

<body>

    <div class="kotak">
        <h1>Login</h1>
        <?php

        session_start();

        if (isset($_SESSION['succes'])) {
            // Tampilkan pesan sukses
            echo "<p style='color: #ffffff;'>" . $_SESSION['succes'] . "</p>";

            // Setelah pesan ditampilkan, hapus pesan sukses dari session
            unset($_SESSION['succes']);
        }

        ?>
        <form action="">
            <div class="input-grup">
                <input name="nik" type="text" placeholder="NIK">
                <input name="nama" type="text" placeholder="Nama Legkap">
            </div>
            <div>
                <a href="registrasi.php">Belum punya akun?</a>
            </div>
            <div>
                <button type="submit">Masuk</button>
            </div>
        </form>
    </div>


</body>

</html>