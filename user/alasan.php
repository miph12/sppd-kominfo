<?php
include"../inc/koneksi.php";


if(isset($_POST['simpan'])){
    $alasan = $_POST['alasan'];
    $status = 2;
    $query =mysql_query("UPDATE tb_sppd set
    						status = '$status',
                            alasan ='$alasan'
                            
                            where kode_sppd= '$_GET[id]'") or die(mysql_error());
    header('location:sppd.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>e-SPPD Kominfo</title>

<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/datepicker3.css" rel="stylesheet">
<link href="../css/styles.css" rel="stylesheet">

<script src="../js/lumino.glyphs.js"></script>
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
						<a href="index.php" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"/></svg> LogOut </a>
					</li>
				</ul>
			</div>				
		</div>
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
		<div class="panel panel-default">
		<div class="panel-heading" align="center">Form Alasan ditolak</div>
					
			<div class="row">
				<div class="col-md-8">
					<div class="panel panel-default">
						<div class="panel-body">
							<form class="form-horizontal"  method="POST">
								<fieldset>
									<div class="form-group">
										<label class="col-md-3 control-label" for="name">Alasan</label>
										<div class="col-md-9">
										<input id="name" name="alasan" type="text" placeholder="Masukkan Alasan" class="form-control" required>
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