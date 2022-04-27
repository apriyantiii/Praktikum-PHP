<?php
//ambil nilai variabel eror
if (isset($_GET['error'])) {
    $error = $_GET['error'];
} else {
    $error = "";
}

//siapkan pesan kesalahan
$pesan = "";
if ($error == "variabel_belum_diset") {
    $pesan = "<h3>Maaf, anda harus mengakses halaman ini dari form-login.php</h3>";
}
if ($error == "nama_kosong") {
    $pesan = "<h3>Maaf, anda harus mengisi nama</h3>";
}
if ($error == "email_kosong") {
    $pesan = "<h3>Maf, anda harus mengisi email</h3>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>

<body>
    <h2>Form Login</h2>
    <?php
    echo $pesan;
    ?>
    <form action="form-proses.php" method="get">
        Nama : <input type="text" name="nama">
        <br>
        E-Mail : <input type="text" name="email">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>