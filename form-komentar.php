<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nama: <input type="text" name="nama"><br>
        E-mail: <input type="email" name="email"><br>
        Komentar: <textarea name="komentar" id="" cols="40" rows="5"></textarea><br>

        <input type="submit" s value="simpan">
        <input type="reset" value="bersihkan">
    </form>
</body>
</html>
<?php
$nama = $email = $komentar = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $komentar = $_POST["komentar"];

    echo ("Nama :". $nama. "<br>");
    echo ("Email :". $email. "<br>");
    echo ("Komentar :". $komentar. "<br>");
    echo ("<hr>");
}
function bersihkan_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    
}

?>