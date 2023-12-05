<html>
<head><title>Demo Crud</title></head>
<body>
<h2>Demo Crud dengan metode Query()</h2>
<p><a href="Crud/create">tambah</a></p>
<table border="1">
<tr>
	<th width="80">Nomor_tnkb</th>
	<th width="120">Nama_pemilik</th>
	<th width="80">Nomor_mesin</th>
    <th width="80">Nomor_sasis</th>
    <th width="80">Jenis_mobil</th>
	<th width="80">Kapasitas_mesin_mobil</th>
    <th width="80">Tahun_pembuatan_mobil</th>
	<th width="100">Ubah</th>
	<th width="100">Hapus</th>
</tr>
<?php
foreach ($rows as $row){
?>
<tr>
	<td><?php echo $row->Nomor_tnkb;?></td>
	<td><?php echo $row->Nama_pemilik;?></td>
	<td><?php echo $row->Nomor_mesin;?></td>
	<td><?php echo $row->Nomor_sasis;?></td>
    <td><?php echo $row->Jenis_mobil;?></td>
    <td><?php echo $row->Kapasitas_mesin_mobil;?></td>
    <td><?php echo $row->Tahun_pembuatan_mobil?></td>

	<td align="center">
	<a href="Crud/update/<?php echo $row->Nomor_tnkb; ?>">Ubah</a>
	</td>
	<td align="center">
	<a href="Crud/delete/<?php echo $row->Nomor_tnkb; ?>">Hapus</a>
	</td>
</tr>
<?php
}
?>

</table>	
</body>
</html>