<?php
require ('_connectmysql.php');
if (isset($_POST['email']) && isset($_POST['password'])){
extract($_POST);
$password = hash('sha256', $password);
$name ;
$sql="INSERT INTO `musteriler` (isim, soyisim, eposta, sifre, tel_no, dogum_tarihi)";
$sql = $sql . "VALUES ('$name','$surname','$email', '$password', '$phone_num', '$birth_date')";
$cevap = mysqli_query($baglanti, $sql);
if ($cevap && $name!="" && $surname!="" && $email!="" && $password!="" && $phone_num!=""  && $birth_date!=""){
$mesaj = "<p></br>Başarıyla kaydolundu! </p>";
}else{
$mesaj = "<p></br>Kaydolunamadı :(</br>  Lütfen bütün alanları doldurun! </p>";
}
}?>


<html>

<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<style>
.jumbotron {
  background-color: #7c037c; 
  color: #fff;
}
</style>

<nav class="navbar navbar-default" style="background-color: #7c037c;">
  <div class="container-fluid ">
    <div class="navbar-header" >
      <a class="navbar-brand" style="color: #ffffff">Kuafor Randevu</a>
    </div>
    <ul class="nav navbar-nav" >
      <li ><a href="index.php" style="color: #ffffff">Ana Sayfa</a></li>
      <li><a href="_randevu.php" style="color: #ffffff">Saç</a></li>
      <li><a href="_randevu.php" style="color: #ffffff">Tırnak </a></li>
      <li><a href="_randevu.php" style="color: #ffffff">Makyaj</a></li>
    </ul>
    </div>
</nav>
  

<div class="container">
  <div class="jumbotron text-center">
   <h1 class="text-primary " >Kayıt Formu </h1><br />
   <p>Zaten üye misiniz? <a class="btn btn-warning" href="_login.php">Üye Girişi</a></p><br />


  <form action="<?php $_PHP_SELF ?>" method="POST" >
  İsim:
  <br /><input type="text" name="name" style="color: #000000" ><br /><br />
  Soyisim:
  <br /><input type="text" name="surname" style="color: #000000"><br /><br />
  Cep Telefonu:
  <br /><input type="text" name="phone_num" style="color: #000000"><br /><br />
  Doğum Tarihi:
  <br /><input type="text" name="birth_date" style="color: #000000"><br /><br />
  E-posta:
  <br /><input type="email" name="email" style="color: #000000"><br /><br />
  Şifre:
  <br /><input type="password" name="password" style="color: #000000"><br /><br />
  <br /><button type="submit" class="btn btn-success  btn-lg">Kayıt</button></br>
  </form>
<?php
if (isset($mesaj)) echo $mesaj; ?>
  </div>
</div>

</body>
</html>
