<!DOCTYPE html>
<html lang="en">
<head>
    <title>BEP VIEW</title>
</head>
<body>
    <h2>BEP</h2>
    <?php if($tipe=='unit'){?>
        Tipe BEP UNIT <br><br>
        Modal <?php  echo $model->get_tfc(); ?><br>
        Harga Jual <?php echo $model->get_p() ?><br>
        Biaya Produksi <?php  echo $model->get_v(); ?><br>
        Penjualan rata-rata perhari <?php echo $model->get_x() ?> <br>
        BEP UNIT  <?php  echo $model->bep_unit(); ?><br>

    <?php } elseif($tipe=='waktu'){?>
        Tipe BEP WAKTU <br><br>
        Modal <?php  echo $model->get_tfc(); ?><br>
        Harga Jual <?php echo $model->get_p() ?><br>
        Biaya Produksi <?php  echo $model->get_v(); ?><br>
        Penjualan rata-rata perhari <?php echo $model->get_x() ?> <br>
        BEP WAKTU  <?php  echo $model->bep_waktu(); ?><br>

    <?php } elseif($tipe=='nilai'){?>
        Tipe BEP NILAI <br><br>
        Modal <?php  echo $model->get_tfc(); ?><br>
        Harga Jual <?php echo $model->get_p() ?><br>
        Biaya Produksi <?php  echo $model->get_v(); ?><br>
        Penjualan rata-rata perhari <?php echo $model->get_x() ?> <br>
        BEP NILAI  <?php  echo $model->bep_nilai(); ?><br>

    <?php } elseif($tipe=='all'){?>
        Tipe BEP ALL <br><br>
        Modal <?php  echo $model->get_tfc(); ?><br>
        Harga Jual <?php echo $model->get_p() ?><br>
        Biaya Produksi <?php  echo $model->get_v(); ?><br>
        Penjualan rata-rata perhari <?php echo $model->get_x() ?> <br>
        BEP ALL : <br>
        UNIT :<?php  echo $model->bep_unit(); ?><br>
        WAKTU :<?php  echo $model->bep_waktu(); ?><br>
        NILAI :<?php  echo $model->bep_nilai(); ?><br>

    <?php } else($tipe==NULL)?>
    <br>
    <a href="Bep">Input Kembali</a> <br>
    <a href="Bep/helper">Coba Ulang dengan Helper</a>
</body>