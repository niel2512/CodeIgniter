<?php
class model_barang2 extends ci_model
{
function laporan_default()
    {
        $query="SELECT kategori_barang.nama_kategori,barang.nama_barang,harga
                FROM kategori_barang
                JOIN barang
                ON barang.kategori_id=kategori_barang.kategori_id
                group by barang.barang_id
                order by harga asc;";
        return $this->db->query($query);
    }    

function laporan_periode($kategori_barang)
    {
        $query="SELECT kategori_barang.nama_kategori,barang.nama_barang,harga
                FROM kategori_barang
                JOIN barang
                ON barang.kategori_id=kategori_barang.kategori_id
                WHERE nama_kategori= '$kategori_barang'
                group by barang.barang_id
                order by harga asc;";
        return $this->db->query($query);
    }
}