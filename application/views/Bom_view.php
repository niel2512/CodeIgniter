<!DOCTYPE html>
<html lang="en">
<head>
	<title>BOM VIEW</title>
</head>
<body>
	<h2>BOM</h2>
	Lemon Tea yang dibuat : <?php  echo $model->get_jumlah(); ?> <br>
	<br>
	<?php if($tipe=='biaya'){?>
		Tipe Dengan Biaya <br><br>
		lemon tea powder <?php  echo $model->tea_bubuk(); ?>gr =
		Rp. <?php echo $model->harga_bubuk() ?> <br>
		air <?php  echo $model->tea_air(); ?>ml =
		Rp. <?php echo $model->harga_air() ?> <br>
		es batu <?php  echo $model->tea_es(); ?>gram =
		Rp. <?php echo $model->harga_es() ?> <br>
	<?php } elseif($tipe=='tnpbiaya'){?>
		Tipe Tanpa Biaya <br><br>
		lemon tea powder <?php  echo $model->tea_bubuk(); ?>gr  <br>
		air <?php  echo $model->tea_air(); ?>ml <br>
		es batu <?php  echo $model->tea_es(); ?>gram <br>
	<?php } else($tipe==NULL)?>
	<br>
	<a href="Bom">Input Kembali</a> <br>
	<a href="Bom/helper">Coba Ulang dengan Helper</a>
</body>
