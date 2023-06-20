<?php 

$_server = "localhost";
$kullanici = "root";
$sifre = "";
$db = "kullanici";

$conn = new mysqli($_server,$kullanici,$sifre,$db);


if($conn -> connect_error)
{
    die("bağlantı hatası : ".$conn->connect_error);
}

?>

