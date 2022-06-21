<?php
require ('_connectmysql.php');
if (isset($_POST['email']) && isset($_POST['comments'])){
extract($_POST);
$email;
$comments;
$name ;
$sql="INSERT INTO `yorumlar` (isim, email, yorum)";
$sql = $sql . "VALUES ('$name','$email', '$comments')";
$cevap = mysqli_query($baglanti, $sql);
if ($cevap){
$mesaj = "<p></br>Yorumunuz başarıyla gönderildi. </p>";
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<div style="background-image: url('kuafor.jpg') ; background-repeat: no-repeat; background-size: cover;">

<nav class="navbar navbar-default" style="background-color: #7c037c;">
  <div class="container-fluid ">
    <div class="navbar-header" >
      <a class="navbar-brand" style="color: #ffffff">Kuafor Randevu</a>
    </div>
    <ul class="nav navbar-nav" >
      <li class="active"><a href="_homepage.php">Ana Sayfa</a></li>
      <li><a href="_randevu.php" style="color: #ffffff">Saç</a></li>
      <li><a href="_randevu.php" style="color: #ffffff">Tırnak </a></li>
      <li><a href="_randevu.php" style="color: #ffffff">Makyaj</a></li>
    </ul>
 
    <ul class="nav navbar-nav navbar-right">
      <li><a href="_register.php" style="color: #ffffff"><span class="glyphicon glyphicon-pencil"></span> Kaydol</a></li>
      <li><a href="_login.php" style="color: #ffffff"><span class="glyphicon glyphicon-user"></span> Hesabım</a></li>
    </ul>
  
  </div>
</nav>
  
    </br> 
    <div class="col-sm-4">
    <font size="8" color="white" face="Tahoma" > Kendinize bi güzellik yapın!</font>
    </br>  </br> </br>
    <font size="6" color="white" face="Tahoma" >Kolayca online randevunuzu alın.</font> 
    </br>  </br> </br> </br>  
    </div>



    <div class="container-fluid bg-grey">
      <div class="col-sm-9">
       <p>İletşim Bilgilerimiz </p>
       <p><span class="glyphicon glyphicon-map-marker"></span> İstanbul</p>
       <p><span class="glyphicon glyphicon-phone"></span> +90 5555555555</p>
       <p><span class="glyphicon glyphicon-envelope"></span> iletisim@gmail.com</p> 
       <p><span class="	glyphicon glyphicon-search"></span> Github: github.com/irematak/Kuafor-Randevu-Sistemi</p> </br> </br> 
      </div>
      </br>  </br>

      <form action="" method="post">
       <div class="col-sm-4">
        <div class="row">
          <div class="col-sm-6 ">
          <input class="form-control" id="name" name="name" placeholder="İsim" type="text" required>
          </div>
         <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email"  required>
         </div>
        </div>

        <textarea class="form-control" id="comments" name="comments" placeholder="Yorum..." rows="3" required ></textarea><br>
         <div class="row">
          <div class="col-sm-7 form-group">
           <br /><button type="submit" class="btn btn-success ">Gönder</button><br />

           <?php
             if (isset($mesaj)) echo $mesaj; ?>
          </div>
         </div>
   
       </div>
       </form>
  
    </div>


</body>
</html>