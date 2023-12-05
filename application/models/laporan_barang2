<h2>Daftar Barang</h2>
<?php
echo form_open('transaksi2');
?>
<hr>
<table class="table table-bordered" border = "1">
    <tr><th>No</th><th>Kategori Barang</th><th>Nama Barang</th><th>Harga Barang</th></tr>
    <?php
    $no=1;
    $harga=0;
    foreach ($record->result() as $r)
    {
        echo "<tr>
            <td width='10'>$no</td>
            <td width='160'>$r->nama_kategori</td>
            <td>$r->nama_barang</td>
            <td align='right'>$r->harga</td>
            </tr>";
        $no++;
        $harga=$harga+$r->harga;
    }
    ?>
    <tr><td colspan="3">Total</td><td align="right"><?php echo $harga;?></td></tr>
</table>