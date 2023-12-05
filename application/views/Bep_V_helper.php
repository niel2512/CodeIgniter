<!DOCTYPE html>
<html lang="en">
<head>
	<title>BEP VIEW HELPER</title>
</head>
<body>
	<h2>BEP HELPER</h2>
	<?php if($tipe=='unit'){?>
		Tipe BEP UNIT <br><br>
		Modal <?php  echo get_tfc($tfc); ?><br>
		Harga Jual <?php echo get_p($p) ?><br>
		Biaya Produksi <?php  echo get_v($v); ?><br>
		Penjualan rata-rata perhari <?php echo get_x($x) ?> <br>
		BEP UNIT  <?php  echo bep_unit($tfc,$p,$v); ?><br>

	<?php } elseif($tipe=='waktu'){?>
		Tipe BEP WAKTU <br><br>
		Modal <?php  echo get_tfc($tfc); ?><br>
		Harga Jual <?php echo get_p($p) ?><br>
		Biaya Produksi <?php  echo get_v($v); ?><br>
		Penjualan rata-rata perhari <?php echo get_x($x) ?> <br>
		BEP WAKTU  <?php  echo bep_waktu($tfc,$p,$v,$x); ?><br>

    <?php } elseif($tipe=='nilai'){?>
		Tipe BEP NILAI <br><br>
		Modal <?php  echo get_tfc($tfc); ?><br>
		Harga Jual <?php echo get_p($p) ?><br>
		Biaya Produksi <?php  echo get_v($v); ?><br>
		Penjualan rata-rata perhari <?php echo get_x($x) ?> <br>
		BEP NILAI  <?php  echo bep_nilai($tfc,$v,$p); ?><br>

    <?php } elseif($tipe=='all'){?>
		Tipe BEP ALL <br><br>
		Modal <?php  echo get_tfc($tfc); ?><br>
		Harga Jual <?php echo get_p($p) ?><br>
		Biaya Produksi <?php  echo get_v($v); ?><br>
		Penjualan rata-rata perhari <?php echo get_x($x) ?> <br>
		BEP ALL : <br>
        UNIT :<?php  echo bep_unit($tfc,$p,$v); ?><br>
		WAKTU :<?php  echo bep_waktu($tfc,$p,$v,$x); ?><br>
		NILAI :<?php  echo bep_nilai($tfc,$v,$p); ?><br>

	<?php } else($tipe==NULL)?>
	<br>
	<a href="Bep">Input Kembali</a> <br>
	<a href="Bep/helper">Coba Ulang dengan Helper</a>
</body>