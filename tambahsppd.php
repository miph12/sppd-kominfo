<?php
include"inc/koneksi.php";


if (isset($_POST['tambah'])) {  

  $tanggalsurat =  $_POST['tanggalsurat'] ;
  $pemberiperintah =  $_POST['pemberiperintah'] ;
  $maksud= $_POST['maksud'];
  $alatangkut = $_POST['alatangkut'] ;
  $tempatberangkat = $_POST['tempatberangkat'];
  $tempattujuan = $_POST['tempattujuan'] ;
  $tingkat = $_POST['tingkat'] ;
  $lamaperjalanan = $_POST['lamaperjalanan'] ;
  $tanggalberangkat = $_POST['tanggalberangkat'] ;
  $tanggalkembali =  $_POST['tanggalkembali'];
  $penerimaperintah = $_POST['penerimaperintah'];
  $keterangan =  $_POST['keterangan'];
  $dasar =  $_POST['dasar'];
  $trans =  $_POST['trans'];
  $ako = $_POST['lamaperjalanan'];										
  
		  	$gol = mysql_query("SELECT * from tb_golongan, tb_pegawai where tb_pegawai.kode_golongan = tb_golongan.kode_golongan and tb_pegawai.kode_pegawai ='$penerimaperintah' ");
		  	$golo = mysql_fetch_array($gol);
			$kogol = $golo['kode_golongan'];

			$tarif = mysql_query("SELECT * from tb_biaya, tb_tujuan, tb_golongan where tb_biaya.kode_tujuan = '$tingkat' and tb_biaya.kode_golongan = '$kogol' ");
			$tarifb = mysql_fetch_array($tarif);
			$biaya = $tarifb['biaya'];
		

			// echo $kali;			

  	if ($tanggalkembali < $tanggalberangkat) {
  		echo "<script>alert('Maaf, Tanggal Perjalanan Kurang Tepat');</script>";
  	} else {
		      $insert = mysql_query("INSERT  INTO tb_sppd (kode_sppd ,tanggal_surat, maksud, kode_pejabat, kode_pegawai,biaya, alat_angkut, tempat_berangkat,tempat_tujuan,tingkat_perjalanan,lama_perjalanan,tgl_berangkat,tgl_kembali,keterangan,dasar,biaya_tran)
		        values('','$tanggalsurat','$maksud', '$pemberiperintah', '$penerimaperintah','$biaya', '$alatangkut', '$tempatberangkat', '$tempattujuan', '$tingkat' ,'$lamaperjalanan', '$tanggalberangkat', '$tanggalkembali','$keterangan', '$dasar','$trans')") or die(mysql_error());
		      header('location:sppd.php');
		      if ($insert) {
		   		echo "<script>alert('data berhasil disimpan');</script>";
			  }else{
			    echo "<script>alert('data gagal disimpan');</script>";
			  }

			    echo '<meta http-equiv="refresh" content="sppd.php">';
			  }
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
<script srv="js/jquery-3.1.0.js"></script>
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
			<li><a href="pegawai.php"><svg class="glyph stroked female user"><use xlink:href="#stroked-female-user"/></svg> Data Pegawai</a></li>
			<li><a href="pejabat.php"><svg class="glyph stroked female user"><use xlink:href="#stroked-female-user"/></svg> Data Pejabat</a></li>
			<li class="active"><a href="sppd.php"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> SPPD</a></li>
			<li ><a href="laporan.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Laporan</a></li>
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
				<h1 class="page-header">Isi data SPPD</h1>
			</div>
		</div><!--/.row-->
				
		<div class="panel panel-default">
		<div class="panel-heading" align="center">Form Pengisian Data SPPD</div>
					
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-body">
						<form class="form-horizontal"  method="post">
							<fieldset>
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tanggal Surat</label>
									<div class="col-md-9">
									<input id="name" name="tanggalsurat" type="date" placeholder="Tanggal Berangkat" class="form-control">
									</div>
								</div>

								<div class="form-group" >
									<label class="col-md-3 control-label" for="name" >Pejabat yang memberi perintah</label>
										<div class="col-md-9">
											<select class="form-control" name="pemberiperintah">
												<option   >-- Pilih Pegawai --</option>
												  	
													<?php
													   	$koneksi=mysql_connect($host,$username,$password);
													   	mysql_select_db($database,$koneksi);
													    $sql = mysql_query("SELECT * FROM tb_pejabat ORDER BY kode_pejabat ASC");
													    while($row = mysql_fetch_assoc($sql)){
													    echo "<option value='$row[kode_pejabat]' > $row[nama_pejabat] </option>";
														}
													?>
											</select>
										</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Maksud Perjalanan Dinas</label>
									<div class="col-md-9">
									<input id="name" name="maksud" type="text" placeholder="Maksud Perjalanan Dinas" class="form-control" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Alat Angkut yang dipergunakan</label>
									<div class="col-md-9">
									<input id="name" name="alatangkut" type="text" placeholder="Alat Angkut yang dipergunakan" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tempat Berangkat</label>
									<div class="col-md-9">
									<input id="name" name="tempatberangkat" type="text" placeholder="Tempat Berangkat" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tempat Tujuan</label>
									<div class="col-md-9">
									<input id="name" name="tempattujuan" type="text" placeholder="Tempat Tujuan" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tingkat Perjalanan</label>
										<div class="col-md-9">
											<select id="city" class="form-control" name="tingkat">
												<option>-- Pilih Tingkat Perjalanan--</option>
												<?php
													   	$koneksi=mysql_connect($host,$username,$password);
													   	mysql_select_db($database,$koneksi);
													    $sql = mysql_query("SELECT * FROM tb_tujuan ORDER BY kode_tujuan ASC");
													    while($row = mysql_fetch_assoc($sql)){
													    echo "<option value='$row[kode_tujuan]' > $row[nama_tujuan] </option>";
														}
													?>
											</select>
										</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Lama Perjalanan</label>
									<div class="col-md-3">
									<input id="name" name="lamaperjalanan" type="number" placeholder="Lama Perjalanan" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name" ">Tanggal Berangkat</label>
									<div class="col-md-9">
									<input id="name" name="tanggalberangkat" type="date" placeholder="Tanggal Berangkat" class="form-control" >
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tanggal Kembali</label>
									<div class="col-md-9">
									<input id="name" name="tanggalkembali" type="date" placeholder="Tanggal Kembali" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Pegawai yang diperintah</label>
										<div class="col-md-9">
											<select  class="form-control" name="penerimaperintah">
												<option   >-- Pilih Pegawai --</option>
												  	
													<?php
													   	$koneksi=mysql_connect($host,$username,$password);
													   	mysql_select_db($database,$koneksi);

													    $sql = mysql_query("SELECT
														tb_golongan.golongan,
														tb_pegawai.nama_pegawai,
														tb_pegawai.nip,
														tb_pegawai.kode_pegawai
														FROM
														tb_golongan
														Inner Join tb_pegawai ON tb_pegawai.kode_golongan = tb_golongan.kode_golongan");
													    while($row = mysql_fetch_assoc($sql)){
													    echo "<option value='$row[kode_pegawai]' >  $row[nama_pegawai]</option>";
														}
														
													?>
											</select>
											<input id="name" name="golongan" type="hidden" value="<?php $row['kode_golongan']; ?>" class="form-control">
										</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Biaya Transportasi</label>
									<div class="col-md-9">
									<input id="name" name="trans" type="number" placeholder="Biaya Transportasi" class="form-control">
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Keterangan</label>
									<div class="col-md-9">
									<input id="name" name="keterangan" type="text" placeholder="Keterangan" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Dasar</label>
									<div class="col-md-9">
									<input id="name" name="dasar" type="text" placeholder="Dasar Surat" class="form-control">
									</div>
								</div>
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" class="btn btn-primary btn-md pull-right" name="tambah">Simpan</button>
									</div>
								</div>
								
							</fieldset>
						</form>
					</div>
				</div>
				
				
								
			</div><!--/.col-->
		</div><!--/.row-->
		
	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/jquery-3.1.0.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>

