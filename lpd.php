
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
    text-align: center;
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
.atas{
	background-color: grey;
    color: white;
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
			<li class="active"><a href="sppd.php"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> SPPD</a></li>
			<li><a href="laporan.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg>Laporan</a></li>
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
									<a href="tambahsppd.php"><input type="submit" name="tambah" value="Tambah SPPD" class="btn btn-primary"></a><br>
									<br>
								</div>
								    <tr>
								        <th rowspan="2">No SPPD</th>
								        <th rowspan="2">Tanggal</th>
								        <th rowspan="2">Maksud</th>
								        <th rowspan="2">Pemberi Perintah</th>
								        <th rowspan="2">Yang di Perintah</th>
								        <th rowspan="2">Tujuan</th>
								        <th rowspan="2">Berangkat</th>
								        <th rowspan="2">Kembali</th>
								        
								    </tr>
								   
								    <tbody>
								    <?php
									include"inc/koneksi.php";
									// $id = mysql_escape_string($_GET['id']);
									$query = mysql_query("SELECT * FROM kas
									 ");

					
									$no=1;
									while ($data = mysql_fetch_assoc($query)) { 
									
										?>
										<tr>
											<td class="tabel"><?php echo $no ?></td>
											<td class="tabel"><?php echo $data['kode']?></td>
											
											<td class="tabel"><?php echo $data['ma']?></td>
											<td class="tabel"><?php echo $data['keterangan']?></td>
											<td class="tabel"><?php echo date("d F Y", strtotime($data ['tgl'])) ;?></td>
											<td class="tabel"><?php echo $data['jumlah']?></td>
											<td class="tabel"><?php echo $data['jenis']?></td>
											<td class="tabel"><?php echo $data['keluar']?></td>
											 
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
