<!DOCTYPE html>
<html>
<head>
<title><B><font size="7" color="pink">Bilangan Helper</font></B></title>
</head>
<body>
<form method="POST" action="bilangan">
<input type="number" name="no">
<input type="submit" name="Hitung">
</form>
<?php
if(isset($_POST['Hitung'])){
echo "Angka".$_POST['no']."<br/>";
echo "ganjil"($_POST['no'])."<br/>";
echo "prima"($_POST['no'])."<br/>";
echo "genap"($_POST['no'])."<br/>";
echo "kel2"($_POST['no'])."<br/>";
}