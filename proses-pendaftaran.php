<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Selamat Datang: <b><?php echo $_POST["nama"];  ?></b><br>
    Nim: <?php echo $_POST["nim"];  ?><br>
    E-mail: <?php echo $_POST["email"];  ?><br>
    Tempat. Tanggal Lahir: <?php echo $_POST["tempat"];  ?>, <?php echo $_POST["tgl"];  ?><br>
    Alamat: <?php echo $_POST["alamat"];  ?><br>
    Jenis Kelamin: <?php echo $_POST["gender"];  ?><br>
</body>
</html>