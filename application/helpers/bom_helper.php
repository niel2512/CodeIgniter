<?php

function tea_bubuk($jumlah)
{
	return $jumlah*25;
}

function tea_air($jumlah)
{
	return $jumlah*100;
}

function tea_es($jumlah)
{
	return $jumlah*50;
}

function harga_bubuk($jumlah)
{
	return tea_bubuk($jumlah)*80;
}

function harga_air($jumlah)
{
	return tea_air($jumlah)*0.8;
}

function harga_es($jumlah)
{
	return tea_es($jumlah)*1;
}
