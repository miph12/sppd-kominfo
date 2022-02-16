<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>e-SPPD Kominfo</title>

<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/datepicker3.css" rel="stylesheet">
<link href="../css/bootstrap-table.css" rel="stylesheet">
<link href="../css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="../js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 5px;
    font-size: 12px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: grey;
    color: white;
}
tr:hover {
	background-color: #f5f5f5;
}
table, td, th {    
    border: 3px solid #ddd;
    text-align: left;
}
.tabel {
	text-align: center;
}.atas{
	background-color: grey;
    color: white;
</style>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<a class="navbar-brand" href="#"><marquee><span>e-SPPD</span>KOMINFO<span>BONDOWOSO</span></marquee></a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="../index.php" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"/></svg> LogOut </a>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<img src="../image/kominfo.jpg" width="200" height="170">
		<ul class="nav menu">
			<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Beranda</a></li>
			<li class="active"><a href="sppd.php"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> SPPD</a></li>
			
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data SPPD</h1>
			</div>
		</div><!--/.row-->
				
		
	<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">

						<table >
						
							<thead>
							<tbody>
							   
								    <tr>
								        <th rowspan="2">No SPPD</th>
								        <th rowspan="2">Tanggal</th>
								        <th rowspan="2">Maksud</th>
								        <th rowspan="2">Pemberi Perintah</th>
								        <th rowspan="2">Yang di Perintah</th>
								        <th rowspan="2">Tujuan</th>
								        <th rowspan="2">Berangkat</th>
								        <th rowspan="2">Kembali</th>
								        <th colspan="3" class="tabel">Biaya</th>
								        <th rowspan="2">Aksi</th>
								    </tr>
								    <tr>
								    	<td class="atas">Akomodasi</td>
								    	<td class="atas">Transport</td>
								    	<td class="atas">Total</td>
								    </tr>
								    <tbody>
								    <?php
									include"../inc/koneksi.php";

									// $id = mysql_escape_string($_GET['id']);
									$query = mysql_query("SELECT
									tb_sppd.kode_sppd,
									tb_sppd.tanggal_surat,
									tb_sppd.maksud,
									tb_sppd.alat_angkut,
									tb_sppd.tempat_berangkat,
									tb_sppd.tempat_tujuan,
									tb_sppd.lama_perjalanan,
									tb_sppd.tgl_berangkat,
									tb_sppd.tgl_kembali,
									tb_sppd.instansi,
									tb_sppd.status,
									tb_sppd.keterangan,
									tb_sppd.dasar,
									tb_sppd.biaya,
									tb_sppd.biaya_tran,
									tb_sppd.alasan,
									tb_pegawai.nama_pegawai,
									tb_pegawai.nip,
									tb_pejabat.nama_pejabat,
									tb_pejabat.nippj,
									tb_jabatan.jabatan,
									tb_golongan.golongan
FROM
tb_sppd
Inner Join tb_pegawai ON tb_sppd.kode_pegawai = tb_pegawai.kode_pegawai
Inner Join tb_pejabat ON tb_pejabat.kode_pejabat = tb_sppd.kode_pejabat
Inner Join tb_golongan ON tb_pegawai.kode_golongan = tb_golongan.kode_golongan
Inner Join tb_jabatan ON tb_pegawai.kode_jabatan = tb_jabatan.kode_jabatan where tb_sppd.status = 0  and tb_pejabat.kode_pejabat = 7");

									if (isset($_GET['p'])) {
                                 	mysql_query("UPDATE tb_sppd set status = '$_GET[p]' where kode_sppd ='$_GET[id]'");
                                		}
                                	if (isset($_GET['t'])) {
                                 	mysql_query("UPDATE tb_sppd set status = '$_GET[t]' where kode_sppd ='$_GET[id]'");
                                		}
					
									$no=1;
									while ($data = mysql_fetch_assoc($query)) { 
									$bia = $data['biaya'];
									$lama = $data['lama_perjalanan'];
									$ako = $bia*$lama;
									$tran = $data['biaya_tran'];
									$jumlah = $ako+$tran;
										?>
										<tr>
											<td class="tabel"><?php echo $no ?></td>
											<td class="tabel"><?php echo date("d F Y", strtotime($data ['tanggal_surat'])) ;?></td>
											<td class="tabel"><?php echo $data['maksud']?></td>
											<td class="tabel"><?php echo $data['nama_pejabat']?></td>
											<td class="tabel"><?php echo $data['nama_pegawai']?></td>
											<td class="tabel"><?php echo $data['tempat_tujuan']?></td>
											<td class="tabel"><?php echo date("d F Y", strtotime($data ['tgl_berangkat'])) ;?></td>
											<td class="tabel"><?php echo date("d F Y", strtotime($data ['tgl_kembali'])) ;?></td>
											<td class="tabel"><?php echo $data['biaya']?>x<?php echo $data['lama_perjalanan']?></td>
											<td class="tabel"><?php echo $data['biaya_tran']?></td>
											<td class="tabel"><?php echo $jumlah?></td>
											<td class="tabel">
												<?php  
				                                switch ($data['status']) {
				                                  case '0':
				                                    $a = "ACC";
				                                    $b = 1;
				                                    $t = 2;
				                                    break;
				                                  
				                                  default:
				                                    $a = "Telah di ACC";
				                                    break;
				                                }
				                              ?>	
												
                               					<a href="sppd.php?id=<?php echo $data['kode_sppd']; ?>&p=<?php echo $b; ?>">
                               					<button type="button" class="btn-primary"><span><?php echo $a ?></span></button></a>
                               					<a href="alasan.php?id=<?php echo $data['kode_sppd']; ?>">

                               					<button type="button" class="btn-danger">Tolak</button></a>

											</td>
											</tr>
											
									<?php
										$no++; 
									}
									?>
							</tbody>
							</thead>
						

								
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->			
		
						
		
		
	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
		
</body>

</html>
