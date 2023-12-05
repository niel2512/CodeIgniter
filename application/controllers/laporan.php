<h3>Laporan Transaksi</h3>
<?php
echo form_open('transaksi/laporan');
?>
<hr>
<table class="table table-bordered" border = "1">
    <tr><th>No</th><th>Tanggal Transaksi</th><th>Operator</th><th>Total Transaksi</th></tr>
    <?php
    $no=1;
    $total=0;
    foreach ($record->result() as $r)
    {
        echo "<tr>
            <td width='10'>$no</td>
            <td width='160'>$r->tanggal_transaksi</td>
            <td>$r->nama_lengkap</td>
            <td align='right'>$r->total</td>
            </tr>";
        $no++;
        $total=$total+$r->total;
    }
    ?>
    <tr><td colspan="3">Total</td><td align="right"><?php echo $total;?></td></tr>
</table>
