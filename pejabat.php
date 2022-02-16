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
			<li ><a href="pegawai.php"><svg class="glyph stroked female user"><use xlink:href="#stroked-female-user"/></svg> Data Pegawai</a></li>
			<li class="active"><a href="pejabat.php"><svg class="glyph stroked female user"><use xlink:href="#stroked-female-user"/></svg> Data Pejabat</a></li>
			<li><a href="sppd.php"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> SPPD</a></li>
			<li><a href="laporan.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Laporan</a></li>
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
				<h1 class="page-header">Data Pejabat</h1>
			</div>
		</div><!--/.row-->
				

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">

						<table class="table table-hover table-bordered table-striped"  >
						
							<thead>
							
							    <div>
									<a href="tambahpejabat.php"><input type="submit" name="tambah" value="Tambah Pejabat" class="btn btn-primary"></a><br>
									<br>
									
								</div>
								    <tr >
								        <th class="tabel" >No</th>
								        <th class="tabel" >Nama</th>
								        <th class="tabel" >NIP</th>
								        <th class="tabel" >Golongan/Pangkat</th>
								        <th class="tabel" >Jabatan</th>
								        <th class="tabel" >Aksi</th>
								    </tr>
								    <tbody>
								     <?php
									include"inc/koneksi.php";
									$query = mysql_query("SELECT
tb_golongan.golongan,
tb_jabatan.jabatan,
tb_pejabat.nama_pejabat,
tb_pejabat.nippj,
tb_pejabat.kode_pejabat
FROM
tb_pejabat
Inner Join tb_jabatan ON tb_pejabat.kode_jabatan = tb_jabatan.kode_jabatan
Inner Join tb_golongan ON tb_pejabat.kode_golongan = tb_golongan.kode_golongan
");
									$no=1;

									while ($data = mysql_fetch_assoc($query)) { 
											
										?>

										<tr>
											<td class="tabel" style="height: 10px"><?php echo $no ?></td>
											<td class="tabel1"><?php echo $data['nama_pejabat']?></td>
											<td class="tabel"><?php echo $data['nippj']?></td>
											<td class="tabel"><?php echo $data['golongan']?></td>
											<td class="tabel"><?php echo $data['jabatan']?></td>
											<td class="tabel">
												<a href="editpejabat.php?kode_pegawai=<?php echo $data['kode_pejabat'];?>"><input type="submit" name="edit" value="Edit" class="btn-xs"></a>
												<a href="hapuspejabat.php?kode_pejabat=<?php echo $data['kode_pejabat'];?>"><input type="submit" name="delete" value="Hapus" class="btn-xs"></a>
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
	<style >
		.tabel{
			text-align: center;
		}
		.tabel1{
			text-align: left;
		}
		td{
	
		}
		td,th{
			font-size: 10px;
			padding: 8px;
		}
	</style>
</body>

</html>
