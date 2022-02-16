<?php
include './inc/koneksi.php';
$id = $_GET['kode_pejabat'];
	$res = mysql_query("DELETE FROM tb_pejabat WHERE kode_pejabat=$id");
	if ($res) 
	{
		header('location:pejabat.php');
	}
?>