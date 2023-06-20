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
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Kayıt ol</h3>
				
			</div>
			<div class="card-body">
				<form action="islemk.php"  method="post" >
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="skadi" placeholder="Kullanıcı Adı">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="ssifre" placeholder="Şifre">
                        
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="ssifrea" placeholder="Şifreyi Yeniden giriniz">
                        
					</div>
					
					<div class="form-group">
						<input type="submit" value="Kayıt ol" name="giris" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>

</body>
<!-- kar yağdırma scripti -->
<script src="snowstorm-min.js"></script>
<script type = "text/javascript">  
<script src="https://cdn.rawgit.com/scottschiller/Snowstorm/master/snowstorm-min.js"></script>
</html>