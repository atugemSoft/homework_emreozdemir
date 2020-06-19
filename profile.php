<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Not Hesaplama Arayüzü </title>
</head>
<style>
    body{
        background-color: #FFE4E1;
    }
</style>
<body>
<?php


echo "Merhaba, ";
echo  $_COOKIE['email'];




?>
<br> <br>
<?php
echo "Notunuzu hesaplamak için 'Hesapla' butonuna tıklayınız.";
?>
<form name="form1" method="post" action="hesapla.html" >
    <input type="submit" name="hesapla" id="hesapla" value="Hesapla">
</form>
</body>
</html>
