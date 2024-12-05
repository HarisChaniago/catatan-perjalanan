<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/style.css">
    <style>

    </style>
</head>

<body>

    <div class="kotak">
        <h1>Registrasi</h1>
        <form action="proses/registrasi.php" method="POST">
            <div class="input-grup">
                <input name="nik" type="text" placeholder="NIK">
                <input name="nama" type="text" placeholder="Nama Legkap">
            </div>
            <div>
                <a href="login.php">Sudah punya akun</a>
            </div>
            <div>
                <button type="submit">Daftar</button>
            </div>
        </form>
    </div>


</body>

</html>