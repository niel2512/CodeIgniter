<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2><font color="Blue" face="algerian">Menghitung Total Belanja</font></h2>
<form method="POST">
Total belanja :
<br><input type="text" name="total"><br>
Discount :
<br><input type="text" name="disc"><br>
<input type="submit" name="submit" value="Submit"><br><br>
</form>
<?php
if(isset($_POST['submit'])){
    $a=$_POST['total'];
    $b=$_POST['disc'];
echo "Total Belanja : ".$a."<br>";
echo "Diskon : ".$b."<br>";
echo "Pajaknya : ".pajak($a)."<br/>";
echo "Diskonnya : ".diskon($a,$b)."<br/>";
echo "Total Setelah Pajak : ".setelah($a,$b)."<br/>";
echo "Total Setelah Diskon dan Pajak : ".totalset($a,$b)."<br/>";
}
?>
</body>
</html>