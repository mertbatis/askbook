
<?php
ob_start();
session_start();
require 'baglan.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){


$susername = $_POST['skadi'];
$spassword = $_POST['ssifre'];
$spassworda = $_POST['ssifrea'];



if(!$susername){
    echo "<script type='text/javascript'>alert('Lütfen kullanıcı adı giriniz');</script>";
    header('Refresh:0; signin.php');

}
else if(!$spassword){
    echo "<script type='text/javascript'>alert('Lütfen şifre giriniz');</script>";
    header('Refresh:0; signin.php');

}
else if($spassword!=$spassworda){
    echo "<script type='text/javascript'>alert('Girdiğiniz Şifreler aynı olmalıdır');</script>";
    header('Refresh:0; signin.php');

}
else if($susername==$spassword){
    echo "<script type='text/javascript'>alert('Kullanıcı adı şifre ile aynı olamaz');</script>";
    header('Refresh:0; signin.php');

}



else {
  
    
$spassword = password_hash($_POST['ssifrea'],PASSWORD_DEFAULT);

    $ekle = "INSERT INTO kullanici (username,passwor) VALUES ('$susername','$spassword' )";

$calistirekle= mysqli_query($conn,$ekle);

if($ekle){

echo "Başarıyla Kayıt oldunuz , Giriş ekranına Yönlendiriliyorsunuz ";
header('Refresh:2; login.php');

$_SESSION["LogedIn"]=true;
$_SESSION["LoginIP"]=$_SERVER["REMOTE_ADDR"];
$_SESSION["userAgent"]=$_SERVER["HTTP_USER_AGENT"];
}
else{

    echo"bir hata oluştu";

    header('Refresh:2; login.php');
}


}


}

else{

echo"İzinsiz harrreket yakalarım :)";
header('Refresh:1; login.php');
}

?>
