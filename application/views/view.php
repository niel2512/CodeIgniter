<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KONVERSI VIEW</title>
</head>
<body>
    <h2>Konversi hari</h2>

        Hari: <?php  echo $model->get_wkt(); ?> <br>
        <br>
        Menjadi
        <br>
        <?php if($pilih=='j'){?>
            Jam : <?php  echo $model->hr_k_j(); ?> <br>
        <?php } elseif($pilih=='m'){?>
            Menit : <?php  echo $model->hr_k_m(); ?> <br>
        <?php } elseif($pilih=='d'){ ?>
            Detik : <?php  echo $model->hr_k_d(); ?> <br>
        <?php } elseif($pilih=='semua'){ ?>
            Jam : <?php  echo $model->hr_k_j(); ?> <br>
            Menit: <?php  echo $model->hr_k_m(); ?> <br>
            Detik : <?php  echo $model->hr_k_d(); ?> <br>
        <?php } else($pilih==NULL)?>
        <br>
    <a href="Konversi_C">Ulang</a>
</body>
</html>