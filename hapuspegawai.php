<?php
include './inc/koneksi.php';
$id = $_GET['kode_pegawai'];
	$res = mysql_query("DELETE FROM tb_pegawai WHERE kode_pegawai=$id");
	if ($res) 
	{
		header('location:pegawai.php');
	}
?>