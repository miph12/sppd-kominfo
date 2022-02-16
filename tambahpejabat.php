<?php
include"inc/koneksi.php";


if (isset($_POST['simpan'])) {

  $namapegawai= addslashes($_POST['namapegawai']); //nm form
  $nip = addslashes($_POST['nip']) ;
  $golongan =  addslashes($_POST['golongan']) ;
  $namajabatan =  addslashes($_POST['namajabatan']) ;

  

      $insert = mysql_query("INSERT INTO tb_pejabat(  kode_pejabat, nama_pejabat, nippj, kode_golongan, kode_jabatan)
        values('', '$namapegawai', '$nip', '$golongan', '$namajabatan')") or die(mysql_error());

      if ($insert) {
   		echo "";
	  }else{
	    echo "<script>alert('data gagal disimpan');</script>";
	  }

	    echo '<meta http-equiv="refresh" content="pejabat.php">';
	  }






?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>e-SPPD Kominfo</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

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
				<h1 class="page-header">Isi data Pegawai</h1>
			</div>
		</div><!--/.row-->
				
		<div class="panel panel-default">
		<div class="panel-heading" align="center">Form Pengisian Data Pegawai</div>
					
			<div class="row">
				<div class="col-md-8">
					<div class="panel panel-default">
						<div class="panel-body">
							<form class="form-horizontal"  method="POST">
								<fieldset>
									<!-- Name input-->
									
									<div class="form-group">
										<label class="col-md-3 control-label" for="name">Nama Pejabat</label>
										<div class="col-md-9">
										<input id="name" name="namapegawai" type="text" placeholder="Masukkan Nama Pejabat" class="form-control" required>
										</div>
										
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label" for="name">NIP</label>
										<div class="col-md-9">
										<input id="name" name="nip" type="text" placeholder="Masukkan Nomor Induk Pegawai" class="form-control" >
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label" for="name">Golongan</label>
										<div class="col-md-9">
											<select class="form-control" name="golongan">
												<option  >-- Pilih Golongan --</option>  	
													<?php
													   	$koneksi=mysql_connect($host,$username,$password);
													   	mysql_select_db($database,$koneksi);
													    $sql = mysql_query("SELECT * FROM tb_golongan ORDER BY kode_golongan ASC");
													    while($row = mysql_fetch_assoc($sql)){
													    echo "<option  value='$row[kode_golongan]' >$row[golongan]</option>";
														}
													?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label" for="name">Jabatan</label>
										<div class="col-md-9">
											<select class="form-control" name="namajabatan">
												<option >-- Pilih Jabatan --</option>
												  	
													<?php
													   	$koneksi=mysql_connect($host,$username,$password);
													   	mysql_select_db($database,$koneksi);
													    $sql = mysql_query("SELECT * FROM tb_jabatan ORDER BY kode_jabatan ASC");
													    while($row = mysql_fetch_assoc($sql)){
													    echo "<option  value='$row[kode_jabatan]' >$row[jabatan]</option>";
														}
													?>
											</select>
										</div>
									</div>
									
									<div class="form-group">
										<div class="col-md-12 widget-right">
											<button type="submit" class="btn btn-primary btn-md pull-right" name="simpan">Simpan</button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
					
					
									
				</div><!--/.col-->
			</div><!--/.row-->
		
	</div><!--/.main-->	
</body>

</html>