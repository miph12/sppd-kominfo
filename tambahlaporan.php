<?php
include"inc/koneksi.php";


if (isset($_POST['tambah'])) {

  $dasar =  $_POST['dasar'] ;
  $maksud =  $_POST['maksud'] ;
  $waktu=  $_POST['waktu'];
  $pegawai = $_POST['pegawai'] ;
  $daerah = $_POST['daerah'];
  $acara = $_POST['acara'] ;
  $petunjuk = $_POST['petunjuk'] ;
  $masalah = $_POST['masalah'] ;
  $saran =  $_POST['saran'];
  $keterangan = $_POST['keterangan'];
  

      $insert = mysql_query("INSERT INTO tb_lpd (kode_lpd ,dasar, maksud, waktu_pelaksanaan, kode_pegawai, daerah, nama_kegiatan, arahan,masalah,saran,lain_lain)
        values('','$dasar','$maksud', '$waktu', '$pegawai', '$daerah', '$acara', '$petunjuk', '$masalah', '$saran', '$keterangan')") or die(mysql_error());
      header('location:laporan.php');

      if ($insert) {
   		echo "<script>alert('data berhasil disimpan');</script>";
	  }else{
	    echo "<script>alert('data gagal disimpan');</script>";
	  }

	    echo '<meta http-equiv="refresh" content=" laporan.php">';
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
			<li><a href="pegawai.php"><svg class="glyph stroked female user"><use xlink:href="#stroked-female-user"/></svg> Data Pegawai</a></li>
			<li><a href="pejabat.php"><svg class="glyph stroked female user"><use xlink:href="#stroked-female-user"/></svg> Data Pejabat</a></li>
			<li><a href="sppd.php"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> SPPD</a></li>
			<li class="active"><a href="laporan.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Laporan</a></li>
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
		
				
		<div class="panel panel-default">
		<div class="panel-heading" align="center">Form Pengisian Laporan (LPD)</div>
					
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-body">
						<form class="form-horizontal"  method="post">
							<fieldset>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Dasar</label>
									<div class="col-md-9">
									<textarea id="name" name="dasar" type="text" placeholder="Dasar Surat" class="form-control"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Maksud dan Tujuan</label>
									<div class="col-md-9">
									<textarea id="name" name="maksud" type="text" placeholder="Maksud dan Tujuan" class="form-control" rows="3"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Waktu Pelaksanaan</label>
									<div class="col-md-9">
									<input id="name" name="waktu" type="date" placeholder="Waktu Pelaksanaan" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Nama Petugas</label>
										<div class="col-md-9">
											<select class="form-control" name="pegawai">
												<option   >-- Pilih Pegawai --</option>
												  	
													<?php
													   	$koneksi=mysql_connect($host,$username,$password);
													   	mysql_select_db($database,$koneksi);

													    $sql = mysql_query("SELECT * FROM tb_pegawai ORDER BY kode_pegawai ASC");
													    while($row = mysql_fetch_assoc($sql)){
													    echo "<option value='$row[kode_pegawai]' >  $row[nama_pegawai]</option>";
														}
													?>
											</select>
										</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Daerah yang di Kunjungi</label>
									<div class="col-md-9">
									<textarea id="name" name="daerah" type="text" placeholder="Daerah yang di Kunjungi" class="form-control" rows="3"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Hadir dalam Pertemuan</label>
									<div class="col-md-9">
									<textarea id="name" name="acara" type="text" placeholder="Hadir dalam Pertemuan" class="form-control" rows="7"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Petunjuk/Arahan</label>
									<div class="col-md-9">
									<textarea id="name" name="petunjuk" type="text" placeholder="Petunjuk atau Arahan yang di berikan" class="form-control"  rows="7"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Masalah/temuan</label>
									<div class="col-md-9">
									<textarea id="name" name="masalah" type="text" placeholder="Masalah atau temuan" class="form-control" rows="7"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Saran/tindakan</label>
									<div class="col-md-9">
									<textarea id="name" name="saran" type="text" placeholder="Saran atau tindakan" class="form-control" rows="7"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Lain-lain</label>
									<div class="col-md-9">
									<textarea id="name" name="keterangan" type="text" placeholder="Lain-lain" class="form-control" rows="7"></textarea>
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

