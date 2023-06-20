<?php
require 'baglan.php';

$myIP=$_SERVER["REMOTE_ADDR"];
$myBrowser=$_SERVER["HTTP_USER_AGENT"];
if(isset($_SESSION["LogedIn"]) && $_SESSION["LogedIn"] === true &&
 $myIP==$_SESSION["LoginIP"] && $_SESSION["userAgent"] == $myBrowser){

	header('Refresh:0; index.php');

 }
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="custom.css">
    <title>MRB</title>
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100 ">
		<div class="card  ">
			<div class="card-header">
				<h3>Giriş</h3>
				
			</div>
			<div class="card-body ">
				<form action="islem.php"  method="post" >
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="kadi" placeholder="Kullanıcı Adı">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="sifre" placeholder="Şifre">
					</div>
					<div class="row align-items-center remember">
					
						<input type="checkbox ">Beni Hatırla 
						<div class="col-md-12 pt-2"><a class="f-right text-secondary" href="signin.php">Kayit OL</a></div>
					</div>
					<div class="form-group">
						<input type="submit" value="Giriş" name="giris" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>


<!-- kar yağdırma scripti -->
<script src="snowstorm-min.js"></script>
<script type = "text/javascript">  
<script src="https://cdn.rawgit.com/scottschiller/Snowstorm/master/snowstorm-min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script src="snowstorm-min.js"></script>
<script src="https://cdn.rawgit.com/scottschiller/Snowstorm/master/snowstorm-min.js"></script>
</body>
</html>