<?php 
include ('inc/koneksi.php');


//jika tombol update di click
if(isset($_POST['update'])){
    $kodepegawai = $_POST['kodepegawai'];
    $namapegawai= $_POST['namapegawai'];
    $nip = $_POST['nip'];
    $namagolongan = $_POST['namagolongan'];
    $namajabatan = $_POST['namajabatan'];
    

    $query =mysql_query("UPDATE tb_pejabat set 
                            kode_pejabat='$kodepegawai',
                            nama_pejabat='$namapegawai',
                            nippj='$nip',
                            kode_golongan='$namagolongan',
                            kode_jabatan='$namajabatan'
                            
                            where kode_pejabat=$kodepegawai") or die(mysql_error());


if ($query){
        echo "<script>alert('data berhasil diperbaharui...!!');</script>";
    }else
    {
        echo "<script>alert('data gagal diperbaharui...!!');</script>";
    }

    header('location:pejabat.php');
}
    
$kodepegawai = $_GET['kode_pegawai'];
        $query =mysql_query("SELECT
tb_pejabat.kode_pejabat,
tb_pejabat.nama_pejabat,
tb_pejabat.nippj,
tb_golongan.golongan,
tb_golongan.kode_golongan,
tb_golongan.eselon,
tb_jabatan.jabatan,
tb_jabatan.kode_jabatan
FROM
tb_golongan
Inner Join tb_pejabat ON tb_pejabat.kode_golongan = tb_golongan.kode_golongan
Inner Join tb_jabatan ON tb_pejabat.kode_jabatan = tb_jabatan.kode_jabatan
 where kode_pejabat=$kodepegawai") or die (mysql_error());
        $data =mysql_fetch_array($query);
        //print_r($data);
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
						<a>Hy, Admin </a>
						
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
				<h1 class="page-header">Perbaharui Data Pejabat</h1>
			</div>
		</div><!--/.row-->
				
		<div class="panel panel-default">
		<div class="panel-heading" align="center">Form Edit Data Pejabat</div>
					
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
										<input id="name" name="kodepegawai" type="text" placeholder="Masukkan Kode" class="form-control" value="<?php  echo $data['kode_pejabat']; ?>">
										</div>
										
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label" for="name">Nama Pegawai</label>
										<div class="col-md-9">
										<input id="name" name="namapegawai" type="text" placeholder="Masukkan Nama Pegawai" class="form-control" value="<?php  echo $data['nama_pejabat']; ?>">
										</div>
										
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label" for="name">NIP</label>
										<div class="col-md-9">
										<input id="name" name="nip" type="text" placeholder="Masukkan Nomor Induk Pegawai" class="form-control" value="<?php  echo $data['nippj']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label" for="name">Golongan</label>
										<div class="col-md-9">
											<select class="form-control" name="namagolongan">
												<option value="<?php echo $data['kode_golongan'] ?>"><?php echo $data['golongan'] ?></option>
												<?php 
												$s = mysql_query("SELECT * from tb_golongan") or die(mysql_error());
												while ($d = mysql_fetch_array($s)){
												?>
												<option value="<?php echo $d['kode_golongan'] ?>"><?php echo $d['golongan'] ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label" for="name">Jabatan</label>
										<div class="col-md-9">
											<select class="form-control" name="namajabatan">
												<option value="<?php echo $data['kode_jabatan'] ?>"><?php echo $data['jabatan'] ?></option>
												<?php 
												$s = mysql_query("SELECT * from tb_jabatan") or die(mysql_error());
												while ($d = mysql_fetch_array($s)){
												?>
												<option value="<?php echo $d['kode_jabatan'] ?>"><?php echo $d['jabatan'] ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									
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

	
</body>

</html>
