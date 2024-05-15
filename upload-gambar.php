<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" >
        <p><label for="">Pilih Gambar yang akan di Upload</label><br>
            <input type="file" name="gambar" value="Pilih Gambar" id=""></p>
            <input type="submit" value="Upload Image" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST["submit"])) {
    $target_dir= "gambar/";
    $target_file= $target_dir . basename($_FILES["gambar"]["name"]);
    $uploadOK= 1;
    $tipeGambar= strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check= getimagesize($_FILES["gambar"]["tmp_name"]);
    if($check !== false){
        echo "File berupa citra/gambar -". $check["mime"] . ".";
        $uploadOK= 1;
    }else{
        echo "File bukan berupa citra/gambar";
        $uploadOK= 0;
    }

    if(file_exists($target_file)){
        echo "Maaf, file sudah ada";
        $uploadOK= 0;
    }

    if($_FILES["gambar"]["size"] > 500000){
        echo "Sorry, file anda terlalu besar.";
        $uploadOK= 0;
    }

    if($uploadOK == 0){
        echo "Sorry, file anda gagal upload";
    } else{
        if(move_uploaded_file($_FILES["gambar"]["tmp_name"],$target_file)){
            echo "file". htmlspecialchars(basename($_FILES["gambar"]["name"])). "berhasil upload";
        } else{
            echo "Sorry, ada error saat upload";
        }
    }
}