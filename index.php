<?php
session_start();
require "baglan.php";
$myIP=$_SERVER["REMOTE_ADDR"];
$myBrowser=$_SERVER["HTTP_USER_AGENT"];

if(isset($_SESSION["LogedIn"]) && $_SESSION["LogedIn"] === true &&
 $myIP==$_SESSION["LoginIP"] && $_SESSION["userAgent"] == $myBrowser){

?>
<style>
html,body{



	background-image: url('https://wallpaperaccess.com/full/831751.png');

}
.resim{

 height:500px !important;
}

.naber{
  top:10%;
  left: 45%;
 }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
<body>
     <nav class="navbar navbar-expand-lg navbar-light text-center" style ="background-color:#90aec6!important">
        <a class="navbar-brand" href="#">ASKBOOK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-5">
            <li class="nav-item active mr-auto">
              <a class="nav-link" href="#">Anasayfa <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <ul class="navbar-nav m-autox">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#"> Profiline Gir "<?php echo ''.$_SESSION['kadi'];?>"</a>
                <a class="dropdown-item" href="#">Ayarlar</a>
                <a class="dropdown-item" href="exit.php">Çıkış</a>
              </div>
            </li>
          </ul> 
              <span class="m-auto  badge-light badge "> <h4 ><?php echo ''.$_SESSION['kadi']; ?> Page</h2>  </span> 

      
        </div>

       
      </nav>
<div class="container position-relative">
   <img src="img/nabermudur.jpg" alt=""><h1 class="position-absolute text-white naber">NABER <?php echo ''.$_SESSION['kadi'];?> </h1> </img> </div>
   





      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script src="snowstorm-min.js"></script>
<script src="https://cdn.rawgit.com/scottschiller/Snowstorm/master/snowstorm-min.js"></script>
</body>

</html>


<?php 

}
else {
   
header('Refresh:0; login.php');
    
}




?>
