<html>
<head><title>Demo CRUD</title></head>
<body>
<h2>Demo CRUD dengan metode query()</h2>
<p><strong>Tambah Data</strong></p>

<form action="create" method="post">

<?php echo $model->labels['Nomor_tnkb']; ?> <br  />
<input type ="text" name="Nomor_tnkb" size="10" maxlength="4"  /><br  /><br  />

<?php echo $model->labels['Nama_pemilik']; ?> <br  />
<input type ="text" name="Nama_pemilik" size="30" maxlength="25"  /><br  /><br  />

<?php echo $model->labels['Nomor_mesin']; ?> <br  />
<input type ="text" name="Nomor_mesin" size="20" /><br  /><br  />

<?php echo $model->labels['Nomor_sasis']; ?> <br  />
<input type ="text" name="Nomor_sasis" size="10" /><br  /><br  />

<?php echo $model->labels['Jenis_mobil']; ?> <br  />

    <SELECt name="Jenis_mobil">
    <option value="Sedan">Sedan</option>
    <option value="Minibus">Minibus</option>
    <option value="Bus">Bus</option>
    <option value="Truck">Truck</option>
    </SELECt><br  /><br  />



<?php echo $model->labels['Kapasitas_mesin_mobil']; ?> <br  />
<input type ="text" name="Kapasitas_mesin_mobil" size="10" /><br  /><br  />

<?php echo $model->labels['Tahun_pembuatan_mobil']; ?> <br  />
<input type ="text" name="Tahun_pembuatan_mobil" size="10" /><br  /><br  />


<input type ="submit" name="btnSubmit"  value="Simpan">
<input type ="button" value="Batal" onclick="javascript:history.go(-1);"/>
</form>


</body>
</html>