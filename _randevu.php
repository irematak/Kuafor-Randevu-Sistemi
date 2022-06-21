<?php
  session_start();
require ('_connectmysql.php');
$randevu_ismi="";
if (isset($_POST['pedikür'])){
extract($_POST);
$randevu_ismi="pedikür";}
else if (isset($_POST['manikür'])){
    extract($_POST);
    $randevu_ismi="manikür";}
else if (isset($_POST['makyaj'])){
        extract($_POST);
        $randevu_ismi="makyaj";}
else if (isset($_POST['sackesimi'])){
    extract($_POST);
    $randevu_ismi="saç kesimi";}

  
$email= $_SESSION["email"] ;
$sql="INSERT INTO `randevular` (randevu_ismi,email)";
$sql = $sql . "VALUES ('$randevu_ismi','$email')";

$cevap = mysqli_query($baglanti, $sql);
if ($cevap){
$mesaj = "<p></br><strong>Randevu alındı!</strong> </p>";
}else{
$mesaj = "<p>Randevu alınamadı! </p>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <style>
      body {
        background-image: url('bg.jpg');
        background-repeat: no-repeat;
        background-size: cover;
      }
    </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body >

<nav class="navbar navbar-default" style="background-color: #7c037c;">
  <div class="container-fluid ">
    <div class="navbar-header" >
      <a class="navbar-brand" style="color: #ffffff">Kuafor Randevu</a>
    </div>

    <ul class="nav navbar-nav" >
      <li><a href="_homepage.php" style="color: #ffffff">Ana Sayfa</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="_register.php" style="color: #ffffff"><span class="glyphicon glyphicon-pencil"></span> Kaydol</a></li>
      <li><a href="_login.php" style="color: #ffffff"><span class="glyphicon glyphicon-user"></span>Hesabım</a></li>
    </ul>

  </div>
</nav>

<div class="container-fluid">
  <div class="text-center">
    <h1><strong>Hizmetlerimiz </strong></h1>
    </br>
  </div>
  <form action="" method="post">
  <div class="row">
    <div class="col-sm-3">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Saç Kesimi</h1>
        </div>
        <div class="panel-body">
          <p><strong>Saçın bazı olumlu ve olumsuz yönleri dikkate alınarak ,
          size özel uyguladığımız stil testleri ile kişinin yüz hatlarına, ifadesine ve 
          yaşam tarzına en uygun saç kesim seçenekleri sunuyoruz.</strong></p>
          
        </div>
        <div class="panel-footer">
          <h3>$$$</h3>
          <button name="sackesimi" class="btn btn-success  btn-lg">Hemen randevu alın</button>
        </div>
      </div>
    </div>


    <div class="col-sm-3">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Manikür</h1>
        </div>
        <div class="panel-body">
          <p><strong>Manikür öncesinde tırnaklarınız istediğiniz şekil ve boya getirdikten sonra manikür sırasında kullanılacak olan malzemeler kişiye özeldir.
            Manikür sorunlarınız dikkatle dinlenir ve gerekli uygulamalar yapılır.</strong></p>
        </div>
        <div class="panel-footer">
          <h3>$$$</h3>
          <button name="manikür" class="btn btn-success  btn-lg">Hemen randevu alın</button>
        </div>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h2>Profosyonel Makyaj</h2>
        </div>
        <div class="panel-body">
          <p><strong>Cilt tipiniz ve temizliği esas alınarak yüz şeklinize ve bulunacağınız
         ortama en uygun sezonun moda renkerinden oluşan profosyonel makyaj hizmeti sunmaktayız.</strong></p>
        </div>
        <div class="panel-footer">
          <h3>$$$</h3>
         
          <button name="makyaj" class="btn btn-success  btn-lg">Hemen randevu alın</button>
        </div>
      </div>
    </div>
   <div class="col-sm-3">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Pedikür</h1>
        </div>
        <div class="panel-body">
          <p><strong>Ayak tırnakları ve deri için yapılan bu uygulama sırasında kullanılan ürünler kişiye özeldir. 
             Deri üzerinde nasırlaşmayı önleyici krem ve parafin uygulaması yapılır. Canlandırıcı masaj işlemi ile sona erdirilir.</strong> </p>
          
        </div>
        <div class="panel-footer">
          <h3>$$$</h3>
         
          <button class="btn btn-success  btn-lg" name="pedikür">Hemen randevu alın</button>
          
    </form>
        </div>
      </div>
    </div>
    
  </div>
  <?php
          if (isset($mesaj)) echo $mesaj; ?>
</div>

    </body>
    </head>
    </html>