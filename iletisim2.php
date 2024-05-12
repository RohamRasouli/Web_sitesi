<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $ad = $_POST["name"];
    $cinsiyet = $_POST["cinsiyet"];
    $adres = $_POST["address"];
    $alanKodu = $_POST["zipcode"];
    $telefon = $_POST["phone"];
    $email = $_POST["email"];

    echo "Ad: " . $ad . "<br>";
    echo "Cinsiyet: " . $cinsiyet . "<br>";
    echo "Adres: " . $adres . "<br>";
    echo "Alan Kodu: " . $alanKodu . "<br>";
    echo "Telefon: " . $telefon . "<br>";
    echo "email: " . $email . "<br>";
}
?>