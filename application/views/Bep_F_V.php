<!DOCTYPE html>
<html lang="en">
<head>
    <title>BEP FORM VIEW</title>
</head>
<body>
    <h2>BEP TANPA HELPER</h2>
    <form action="" method="post" >
        TPF (Total Biaya Sampai usaha berjalan): <input type="number" name="tfc"><br>
        P (Harga Jual Per Unit):<input type="number" name="p"><br>
        V (Biaya Produksi):<input type="number" name="v"><br>
        X (Penjualan Rata Rata perhari):<input type="number" name="x"><br>
        <br>
        Tipe Output :
        <select class="combo" name="tipe" id="tipe">
            <option value="unit">BEP Unit</option>
            <option value="waktu">BEP Waktu</option>
            <option value="nilai">BEP Nilai</option>
            <option value="all">All</option>
        </select>
        <input type="submit" value="submit" name="btn_submit">
    </form>
</body>