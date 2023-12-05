<!DOCTYPE html>
<html lang="en">
<head>
	<title>BOM HELPER VIEW</title>
</head>
<body>
<h2>BOM DENGAN HELPER</h2>
Lemon Tea yang dibuat : <?php  echo $jumlah ?> <br>
<br>
<?php if($tipe=='biaya'){?>
	Tipe Dengan Biaya <br><br>
	lemon tea powder <?php  echo tea_bubuk($jumlah); ?>gr =
	Rp. <?php echo harga_bubuk($jumlah) ?> <br>
	air <?php  echo tea_air($jumlah); ?>ml =
	Rp. <?php echo harga_air($jumlah) ?> <br>
	es batu <?php  echo tea_es($jumlah); ?>gram =
	Rp. <?php echo harga_es($jumlah) ?> <br>
<?php } elseif($tipe=='tnpbiaya'){?>
	Tipe Tanpa Biaya <br><br>
	lemon tea powder <?php  echo tea_bubuk($jumlah); ?>gr  <br>
	air <?php  echo tea_air($jumlah); ?>ml <br>
	es batu <?php  echo tea_es($jumlah); ?>gram <br>
<?php } else($tipe==NULL)?>
<br>
<a href="helper">ulang</a>
</body>

