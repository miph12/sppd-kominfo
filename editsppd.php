<?php 
include ('inc/koneksi.php');

if(isset($_POST['update'])){

	$kodesppd =  $_POST['kodesppd'];
  $tanggalsurat =  $_POST['tanggalsurat'];
  $pemberiperintah =  $_POST['pemberiperintah'];
  $maksud= $_POST['maksud'];
  $alatangkut = $_POST['alatangkut'];
  $tempatberangkat = $_POST['tempatberangkat'];
  $tempattujuan = $_POST['tempattujuan'] ;
  $lamaperjalanan = $_POST['lamaperjalanan'] ;
  $tanggalberangkat = $_POST['tanggalberangkat'];
  $tanggalkembali =  $_POST['tanggalkembali'];
  $penerimaperintah = $_POST['penerimaperintah'];
  $trans =  $_POST['trans'];
  $keterangan =  $_POST['keterangan'];
  $dasar =  $_POST['dasar'];


    $query =mysql_query("UPDATE tb_sppd set 
    						tanggal_surat= '$tanggalsurat',
    						maksud = '$maksud',
    						kode_pejabat= '$pemberiperintah',
    						kode_pegawai='$penerimaperintah', 
    						alat_angkut ='$alatangkut',
    						tempat_berangkat= '$tempatberangkat',
    						tempat_tujuan='$tempattujuan',
    						lama_perjalanan='$lamaperjalanan',
    						tgl_berangkat='$tanggalberangkat',
    						tgl_kembali='$tanggalkembali',
    						biaya_tran='$trans',
    						keterangan='$keterangan',
    						dasar='$dasar'
                            
                            where kode_sppd= '$kodesppd' ");


if ($query){
        echo "<script>alert('data berhasil diperbaharui...!!');</script>";
    }else
    {
        echo "<script>alert('data gagal diperbaharui...!!');</script>";
    }

    header('location:sppd.php');
}
    
$kodesppd = $_GET['kode_sppd'];
$query =mysql_query("SELECT
*,
tb_sppd.kode_sppd,
tb_sppd.tanggal_surat,
tb_sppd.maksud,
tb_sppd.alat_angkut,
tb_sppd.tempat_berangkat,
tb_sppd.tempat_tujuan,
tb_sppd.lama_perjalanan,
tb_sppd.tgl_berangkat,
tb_sppd.tgl_kembali,
tb_sppd.biaya_tran,
tb_sppd.keterangan,
tb_sppd.dasar,
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
Inner Join tb_jabatan ON tb_pegawai.kode_jabatan = tb_jabatan.kode_jabatan  WHERE kode_sppd= '$kodesppd' ") or die (mysql_error());
        $data =mysql_fetch_array($query);
        
 
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
						<a>  Hy, Admin </a>
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
			<li ><a href="laporan.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg>Laporan</a></li>
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
				<h1 class="page-header">Perbaharui data SPPD</h1>
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
									<label class="col-md-3 control-label" for="name">Kode</label>
									<div class="col-md-9">
									<input id="name" name="kodesppd" type="text" placeholder="Maksud Perjalanan Dinas" class="form-control" value="<?php  echo $data['kode_sppd']; ?>" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tanggal Surat</label>
									<div class="col-md-9">
									<input id="name" name="tanggalsurat" type="date" placeholder="Tanggal Berangkat" class="form-control" value="<?php  echo $data['tanggal_surat']; ?>">
									</div>
								</div>

								<div class="form-group" >
									<label class="col-md-3 control-label" for="name" >Pejabat yang memberi perintah</label>
										<div class="col-md-9">
											<select class="form-control" name="pemberiperintah">
												<option value="<?php echo $data['kode_pejabat'] ?>"><?php echo $data['nama_pejabat'] ?></option>
												<?php 
												$s = mysql_query("SELECT * from tb_pejabat") or die(mysql_error());
												while ($d = mysql_fetch_array($s)){
												?>
												<option value="<?php echo $d['kode_pejabat'] ?>"><?php echo $d['nama_pejabat'] ?></option>
												<?php } ?>
											</select>
										</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Maksud Perjalanan Dinas</label>
									<div class="col-md-9">
									<input id="name" name="maksud" type="text" placeholder="Maksud Perjalanan Dinas" class="form-control" value="<?php  echo $data['maksud']; ?>" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Alat Angkut yang dipergunakan</label>
									<div class="col-md-9">
									<input id="name" name="alatangkut" type="text" placeholder="Alat Angkut yang dipergunakan" class="form-control" value="<?php  echo $data['alat_angkut']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tempat Berangkat</label>
									<div class="col-md-9">
									<input id="name" name="tempatberangkat" type="text" placeholder="Tempat Berangkat" class="form-control" value="<?php  echo $data['tempat_berangkat']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tempat Tujuan</label>
									<div class="col-md-9">
									<input id="name" name="tempattujuan" type="text" placeholder="Tempat Tujuan" class="form-control" value="<?php  echo $data['tempat_tujuan']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Lama Perjalanan</label>
									<div class="col-md-3">
									<input id="name" name="lamaperjalanan" type="number" placeholder="Lama Perjalanan" class="form-control" value="<?php  echo $data['lama_perjalanan']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tanggal Berangkat</label>
									<div class="col-md-9">
									<input id="name" name="tanggalberangkat" type="date" placeholder="Tanggal Berangkat" class="form-control" value="<?php  echo $data['tgl_berangkat']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tanggal Kembali</label>
									<div class="col-md-9">
									<input id="name" name="tanggalkembali" type="date" placeholder="Tanggal Kembali" class="form-control" value="<?php  echo $data['tgl_kembali']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Pegawai yang diperintah</label>
										<div class="col-md-9">
											<select class="form-control" name="penerimaperintah">
												<option value="<?php echo $data['kode_pegawai'] ?>"><?php echo $data['nama_pegawai'] ?></option>
												<?php 
												$s = mysql_query("SELECT * from tb_pegawai") or die(mysql_error());
												while ($d = mysql_fetch_array($s)){
												?>
												<option value="<?php echo $d['kode_pegawai'] ?>"><?php echo $d['nama_pegawai'] ?></option>
												<?php } ?>
											</select>
										</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Biaya Transportasi</label>
									<div class="col-md-9">
									<input id="name" name="trans" type="text" placeholder="Instansi" class="form-control" value="<?php  echo $data['biaya_tran']; ?>">
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Keterangan</label>
									<div class="col-md-9">
									<input id="name" name="keterangan" type="text" placeholder="Keterangan" class="form-control" value="<?php  echo $data['keterangan']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Dasar</label>
									<div class="col-md-9">
									<input id="name" name="dasar" type="text" placeholder="Dasar Surat" class="form-control" value="<?php  echo $data['dasar']; ?>">
									</div>
								</div>
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" class="btn btn-primary btn-md pull-right" name="update">Simpan</button>
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

