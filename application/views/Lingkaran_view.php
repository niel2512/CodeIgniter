<html>
<head><title>Controller, Model, View</title></head>
<body>
<h2>Model lingkaran</h2>
<!-- memanggil metode get_radius() dari objek $model -->
Nilai jari-jari: <?php echo $model->get_radius();   ?> <br />

<!-- memanggil metode hitung_luas() dari objek $model -->
Luas Lingkaran: <?php echo $model->hitung_luas();   ?> <br />

<!-- memanggil metode hitung_keliling() dari objek $model -->
Nilai jari-jari: <?php echo $model->hitung_keliling();   ?> <br />


</body>
</html>