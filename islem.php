<?php
ob_start();
session_start();
require 'baglan.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){

  $username = $_POST['kadi'];
  $password = $_POST['sifre'];


if(!$username){
    echo "<script type='text/javascript'>alert('Lütfen kullanıcı adı giriniz');</script>";
    header('Refresh:0; login.php');

}
else if(!$password){
    echo "<script type='text/javascript'>alert('Lütfen şifre giriniz');</script>";
    header('Refresh:0; login.php');
}
else {
    include "baglan.php";

$sorgu =  "SELECT * FROM kullanici WHERE username='$username' AND passwor='$password' " ;
$sonuc = mysqli_query($conn,$sorgu);

$row = mysqli_fetch_assoc($sonuc);

if(empty($row)){

echo "<script type='text/javascript'>alert('Yanlış kullanıcı adı veya Şifre');</script>";
    header('Refresh:0; login.php');

} 
else {
    session_regenerate_id(true);
$_SESSION["LogedIn"]=true;
$_SESSION["LoginIP"]=$_SERVER["REMOTE_ADDR"];
$_SESSION["userAgent"]=$_SERVER["HTTP_USER_AGENT"];

$_SESSION['kadi']=$username;
    echo "Başarıyla Giriş Yaptınız , Hosgeldin ".$_SESSION["kadi"];
    header('Refresh:2; index.php');


   
}

     }
}

 else{

    echo"İzinsiz harrreket yakalarım :)";
    header('Refresh:1; login.php');
}

?>