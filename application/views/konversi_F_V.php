<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Form View</title>
</head>
<body>
    <h2>Konversi Hari</h2>

    <form action="" method="post">
    Hari: <br>
        <input type="text" name="wkt">
        <select name="pilih" id="pilih">
            <option value="j">jam</option>
            <option value="m">menit</option>
            <option value="d">detik</option>
            <option value="semua">semua</option>
        </select>

        <input type="submit" name="btn_submit" value="Hitung">
    </form>
</body>
</html>