<?php //oturumu sonlandirma islemi
require ('_connectmysql.php');
if (isset($_POST['cikis'])){
extract($_POST);
session_start();
session_destroy();
header('Location: _login.php');
}
?>


<!DOCTYPE html>
<html>

<head>

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
<div style="background-image: url('image.jpg') ; background-repeat: no-repeat; background-size: cover;">
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
    .center {
    position: absolute;
    right:500px;
    width: 400px;
    font-size: 120%;
    border: 3px solid #73AD21;
    padding: 10px;
  }

  .centerp {
   position: absolute;
   right: 500px;
   font-size: 120%;
   width:400px;
   border: 3px solid #73AD21;
   bottom:80px; 
   padding: 10px;
}
 
  .new{
  position: absolute;
  right: 40px;
  width:400px;
  border: 3px solid #73AD21;
  font-size: 13px;
  padding: 10px;
}
</style>

<?php //verileri listeleme
$baglanti = mysqli_connect("localhost","root","","kuaforkayit");

if ($baglanti->connect_errno > 0) {
    die("<b>Bağlantı Hatası:</b> " . $baglanti->connect_error);
}

$baglanti->set_charset("utf8");
session_start();
$i=0;
$k=0;
$m=0;
$flag=0;

if ((isset($_POST['yorum']) ) ){ //yorumların listeleme islemi
  $sorgu = $baglanti->query("SELECT  yorum, email FROM yorumlar");

  while ($cikti = $sorgu->fetch_array()) {
    
    if(($cikti["email"] == $_SESSION["email"] )){
     $array[$i]=$cikti["yorum"];
     $i++;
   }
  
}
  $sorgu->close();}


if(isset($_POST['randevu'])){ //randevu bilgilerini listeleme
  $sorgu2= $baglanti->query("SELECT  randevu_ismi, email FROM randevular");
  while ($cikti = $sorgu2->fetch_array()) {
    if(($cikti["email"] == $_SESSION["email"] )){
      $array2[$k]=$cikti["randevu_ismi"];
      $k++;
    }
 }
  $sorgu2->close();
}


if(isset($_POST['bilgi'])){ //kişisel bilgileri listeleme
  $sorgu3= $baglanti->query("SELECT  isim, soyisim, dogum_tarihi, tel_no, eposta FROM musteriler");
  $flag=1;
  while ($cikti = $sorgu3->fetch_array()) {
    if(($cikti["eposta"] == $_SESSION["email"] )){
      $array3[$m] = $cikti["isim"];
      $m++;

      if($m==1){
        $array3[$m]=$cikti["soyisim"];
        $m++;
      }

      if($m==2){
        $array3[$m]=$cikti["dogum_tarihi"];
        $m++;
      }
      if($m==3){
        $array3[$m]=$cikti["tel_no"];
        $m++;
      }
    
    }
 }
}

$baglanti->close();
?>
  

<div class="center">
<div class="container ">
  <h1>Yorumlar</h1>
  <?php
  for($j=0; $j<$i; $j++){
    echo  $array[$j]. "</br>"  ;
   }?>
</div>
</div>



<div class="new">
 <div class="container ">

   <h1>Kisisel Bilgiler</h1>
    <?php
      if($flag==1){
       echo "İsim: ". $array3[0] . "</br>"  ;
       echo "Soyisim: ". $array3[1] . "</br>"  ;
       echo "Doğum Tarihi: " . $array3[2] . "</br>"  ;
       echo "Telefon Numarası: " . $array3[3] . "</br>"  ;
    } ?> 

     <form action="" method="post">
     <h5>Lütfen düzenlenecek bilgiyi ve yeni değerini </br> <b> İsim : Yeni_İsim</b> şeklinde giriniz! </h5>
     Duzenlenecek Bilgi:
     <br /><input type="text" name="duzenlenen" >
     <button class="btn btn-primary "  name="duzenle" >Duzenle</button></br></br>
     </form>

  </div>
</div>


<div class="centerp">
 <div class="container ">
  <h1>Randevular</h1>
  <?php
    for($j=0; $j<$k; $j++){
      if($array2[$j]==""){
        continue;
      }
     echo  $array2[$j]. "</br>"  ;
   }?>

    <form action="" method="post">
    Silinecek Randevu:
    <br /><input type="text" name="silinen" >
    <button class="btn btn-primary "  name="randevu_sil" >Randevu Sil</button></br></br>
    </form>

 </div>
</div>


<form action="" method="post">
 <div class="card " style="width:300px ">
   <div class="card bg-danger col text-center justify-content-center align-self-center ">
   <img class="card-img-top" src="icon.png" alt="Card image" >
    <div class="card-body" style="color: #000000;">
     <h2 class="card-title" >Hesabım</h2></br></br>
     <button class="btn btn-primary "  name="bilgi" >Kisisel Bilgiler</button></br></br>
     <button class="btn btn-primary "  name="randevu" >Randevularım</button></br></br>
     <button class="btn btn-primary "  name="yorum" >Yorumlarım</button></br></br>
     <button class="btn btn-primary "  name="cikis" >Çıkış</button></br></br>
    </div>
  </div>
 </div>
</form>


<?php //silme
 $baglanti = new mysqli("localhost", "root", "", "kuaforkayit");

 if ($baglanti->connect_errno > 0) {
    die("<b>Bağlantı Hatası:</b> " . $baglanti->connect_error);
}
 $baglanti->set_charset("utf8");

 if(isset($_POST['randevu_sil'])){
    $deleted = $_POST['silinen'];
    $sorgu = $baglanti->query("DELETE FROM randevular WHERE randevu_ismi = '{$deleted}' ");

if ($baglanti->errno > 0) {
    die("<b>Sorgu Hatası:</b> " . $baglanti->error);
}

$baglanti->close();
} ?>


<?php //düzenleme

$baglanti = new mysqli("localhost", "root", "", "kuaforkayit");

if ($baglanti->connect_errno > 0) {
    die("<b>Baglanti Hatasi:</b> " . $baglanti->connect_error);
}

$baglanti->set_charset("utf8");
$email = $_SESSION["email"] ;

if(isset($_POST['duzenle'])){
  $metin = $_POST['duzenlenen'];
  $dizi = explode (":",$metin);
  $yeni = $dizi[1];


 if($dizi[0] == "İsim "){
  $sorgu = $baglanti->query("UPDATE musteriler SET isim = '{$yeni}' WHERE eposta =  '{$email}' ");
} 

else if($dizi[0] == "Soyisim "){
  $sorgu = $baglanti->query("UPDATE musteriler SET soyisim = '{$yeni}' WHERE eposta =  '{$email}' ");
}
  
else if($dizi[0] == "Doğum Tarihi "){
  $sorgu = $baglanti->query("UPDATE musteriler SET dogum_tarihi = '{$yeni}' WHERE eposta =  '{$email}' ");
} 
  else if($dizi[0] == "Telefon Numarası "){
    $sorgu = $baglanti->query("UPDATE musteriler SET tel_no = '{$yeni}' WHERE eposta =  '{$email}' ");
} 
$baglanti->close();
} ?>


</div>
</body>
</html>