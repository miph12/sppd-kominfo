<?php //koneksi
	$namaserver='localhost';
	$userdb='root';
	$passdb='';
	$namadb='db_sppd';
?>
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
			<li class="active"><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Beranda</a></li>
			<li><a href="sppd.php"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> SPPD</a></li>
			
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
				<h1 class="page-header">Welcome to e-SPPD KOMINFO</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked blank document"><use xlink:href="#stroked-blank-document"/></svg>
						</div>
						<?php 
				            include "../inc/koneksi.php";
				            $a= mysql_query("SELECT
								tb_sppd.status,
								tb_pejabat.kode_pejabat
								FROM
								tb_sppd
								Inner Join tb_pegawai ON tb_sppd.kode_pegawai = tb_pegawai.kode_pegawai
								Inner Join tb_pejabat ON tb_pejabat.kode_pejabat = tb_sppd.kode_pejabat
								Inner Join tb_golongan ON tb_pegawai.kode_golongan = tb_golongan.kode_golongan
								Inner Join tb_jabatan ON tb_pegawai.kode_jabatan = tb_jabatan.kode_jabatan where tb_sppd.status = 0  and tb_pejabat.kode_pejabat = 7")or die(mysql_error());
				            $b = mysql_num_rows($a);
				        ?>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $b ?></div>
							<div class="text-muted">SPPD</div>
						</div>
					</div>
				</div>
			</div>
			
			
		
		
		
								
			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	
</body>

</html>


