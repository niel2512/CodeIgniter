<html>
<head><title>Contrtoller, Model, View</title></head>
<body>
	<h2> Perhitungan Total Akhir Bayar</h2>

	<?php if ($cust=='member'){ ?>
		Total Pembelian : <?php echo $model-> get_pembelian (); ?><br />
		Total Pajak : <?php echo $model-> hitung_pajak (); ?> <br />
		Total Potongan : <?php echo $model-> potongan_member (); ?> <br />
		Total Akhir Bayar Member : <?php echo $model-> total_bayar_member (); ?> <br />
	<?php  } else {?>
		Total Pembelian : <?php echo $model-> get_pembelian (); ?> <br />
		Total Pajak : <?php echo $model-> hitung_pajak (); ?> <br />
		Total Potongan : <?php echo $model-> potongan_member (); ?> <br />
		Total Akhir Bayar Non Member : <?php echo $model-> total_bayar(); ?> <br />
	<?php  } ?>
</body>
</html>