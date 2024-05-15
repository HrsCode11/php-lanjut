<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$name= $email = "";
$nameERR = $emailERR= "";

function bersihkan_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["u"])){
        $nameERR= "<span style='color: red; font-size: smaller;'>masukkan username</span>";
    }else{
        $name= bersihkan_input($_POST["u"]);
    }
}
    if(empty($_POST["p"])){
        $emailERR = "<span style='color: red; font-size: smaller;'>masukkan password</span>";
    } else{
        $email = bersihkan_input($_POST["p"]);
    }

?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])  ?>" method="post">
    Username: <input type="text" name="u">
    <span class="error">* <?php echo $nameERR; ?></span>
    <br><br>
    Password: <input type="text" name="p">
    <span class="error">* <?php echo $emailERR; ?></span>
    <br><br>
    <input type="submit"  value="Login">
</form>
</body>
</html>