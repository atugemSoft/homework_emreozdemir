


<?php

$sunucu="127.0.0.1:3307";
$user="root";
$sifre="root";
$veritabani="users";



$Email=$_POST['Email'];
$Password=md5($_POST['password']);

$baglanti=new mysqli($sunucu,$user,$sifre,$veritabani);

if($baglanti->connect_error){
    die("Hata: ".$baglanti->connect_error);
}

$sql="select * from register where Email='$Email' and Sifre='$Password'";

$getir=mysqli_query($baglanti,$sql);

$say=mysqli_num_rows($getir);

if($say>0)
{



    setcookie("email",$Email);



    header("Location:profile.php");

}
else
{

    header("Location:login.php");
}


$baglanti->close();


?>
