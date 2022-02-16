<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>e-SPPD Kominfo</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<script src="js/lumino.glyphs.js"></script>
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
}
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
						<a> Hy, Admin </a>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<img src="image/kominfo.jpg" width="200" height="170">
		<ul class="nav menu">
			<li><a href="beranda.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Beranda</a></li>
			<li><a href="pegawai.php"><svg class="glyph stroked female user"><use xlink:href="#stroked-female-user"/></svg> Data Pegawai</a></li>
			<li><a href="pejabat.php"><svg class="glyph stroked female user"><use xlink:href="#stroked-female-user"/></svg> Data Pejabat</a></li>
			<li ><a href="sppd.php"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> SPPD</a></li>
			<li class="active"><a href="laporan.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg>Laporan</a></li>
			<li role="presentation" class="divider"></li>
			<li><a href="index.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Log Out</a></li>
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
							    <div>
									<a href="tambahlaporan.php"><input type="submit" name="tambah" value="Buat Laporan" class="btn btn-primary"></a><br>
									<br>
								</div>
								    <tr>
								        <th >No </th>
								        <th >Dasar</th>
								        <th >Petugas</th>
								        <th >Maksud</th>
								        <th >Waktu Pelaksanaan</th>
								        <th >Daerah yang di Kunjungi</th>
								        <th >Nama Kegiatan</th>
								        <th >Arahan</th>
								        <th >Masalah</th>
								        <th >Saran</th>
								
								        <th >Aksi</th>
								    </tr>
								    <tbody>
								    <?php
									include"inc/koneksi.php";
									$query = mysql_query("SELECT
tb_lpd.dasar,
tb_lpd.maksud,
tb_lpd.waktu_pelaksanaan,
tb_lpd.daerah,
tb_lpd.nama_kegiatan,
tb_lpd.arahan,
tb_lpd.masalah,
tb_lpd.saran,
tb_lpd.lain_lain,
tb_lpd.kode_lpd,
tb_pegawai.nama_pegawai,
tb_pegawai.nip,
tb_jabatan.jabatan,
tb_golongan.golongan
FROM
tb_lpd
Inner Join tb_pegawai ON tb_lpd.kode_pegawai = tb_pegawai.kode_pegawai
Inner Join tb_golongan ON tb_pegawai.kode_golongan = tb_golongan.kode_golongan
Inner Join tb_jabatan ON tb_pegawai.kode_jabatan = tb_jabatan.kode_jabatan
");
									$no=1;

									while ($data = mysql_fetch_assoc($query)) { 
										
										?>
									
										<tr>
											<td class="tabel"><?php echo $no ?></td>
											<td class="tabel"><?php echo $data['dasar']?></td>
											<td class="tabel"><?php echo $data['nama_pegawai']?></td>
											<td class="tabel"><?php echo $data['maksud']?></td>
											<td class="tabel"><?php echo $data['waktu_pelaksanaan']?></td>
											<td class="tabel"><?php echo $data['daerah']?></td>
											<td class="tabel"><?php echo $data['nama_kegiatan']?></td>
											<td class="tabel"><?php echo $data['arahan']?></td>
											<td class="tabel"><?php echo $data['masalah']?></td>
											<td class="tabel"><?php echo $data['saran']?></td>
										

											<td class="tabel">
												
												<a href="cetak/cetak_lpd.php?kode_lpd=<?php echo $data['kode_lpd'];?>" target="_blank"><input type="submit" name="edit" value="Cetak" class="btn-xs" ></a>
												
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
