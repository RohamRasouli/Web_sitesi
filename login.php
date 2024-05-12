<?php
$AdminEmail = "b211210561@sakarya.edu.tr";
$AdminSifre = "b211210561";

if($_POST)
{
    $email = $_POST['uname'];
    $sifre = $_POST['psw'];

    if($email == $AdminEmail and $sifre == $AdminSifre)
    {
        echo "Hoşgeldiniz b211210561";
    }

    else
    {
        $url = "login.html";

        // Yönlendirme işlemi
        header("Location: " . $url);
        exit();
    }
}
?>



