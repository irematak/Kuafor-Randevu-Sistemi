<?php
session_start();
require('_connectmysql.php');
if (isset($_POST['email']) and isset($_POST['password'])){
extract($_POST);
$password = hash('sha256', $password);
$sql = "SELECT * FROM `musteriler` WHERE ";
$sql= $sql . "eposta='$email' and sifre='$password'";
$cevap = mysqli_query($baglanti, $sql);
if(!$cevap ){
echo '<br>Hata:' . mysqli_error($baglanti);
}

$say = mysqli_num_rows($cevap);
if ($say == 1){
$_SESSION['email'] = $email;
}
else if ($email=="" || $password==" "){
    $mesaj = "<p></br>Bütün alanları doldurunuz! </p>";
    }
else{
$mesaj = "<p> Hatalı email veya şifre!</p>";
}
}
if (isset($_SESSION['email'] )){
    header("Location: _profile.php ");
} 
?>




<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bo
otstrap.min.css">
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jque
ry.min.js"></script>
<script
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/boot
strap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-default" style="background-color: #7c037c;">
  <div class="container-fluid ">
    <div class="navbar-header" >
      <a class="navbar-brand" style="color: #ffffff">Kuafor Randevu</a>
    </div>
    <ul class="nav navbar-nav" >
      <li ><a href="_homepage.php" style="color: #ffffff">Ana Sayfa</a></li>
      <li><a href="_randevu.php" style="color: #ffffff">Saç</a></li>
      <li><a href="_randevu.php" style="color: #ffffff">Tırnak </a></li>
      <li><a href="_randevu.php" style="color: #ffffff">Makyaj</a></li>
    </ul>
    </div>
</nav>

<style>
.jumbotron {
    background-color: #7c037c; 
    color: #fff;
}
</style>

<div class="container">
<div class="jumbotron text-center">
<h1 class="text-primary " >Üye Girişi </h1><br />
<p>Daha üye olmadınız mı? <a class="btn btn-warning" href="_register.php">Kaydolun</a></p><br />
<form action="<?php $_PHP_SELF ?>" method="POST">
Email:
<br /><input type="text" name="email" style="color: #000000" ><br /><br />
Şifre:
<br /><input type="password" name="password" style="color: #000000" ><br /><br />
<br /><button type="submit" class="btn btn-success btn-lg" >Üye Girişi</button><br /><br />
<?php
if(isset($mesaj)){ echo $mesaj;} ?>
</div>
</div>

</form>
</body>
</html>


