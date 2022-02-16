<?php 
      include "inc/koneksi.php";
      if (isset($_POST['login'])) {
    
            
            $query2 = mysql_query("SELECT * FROM tb_login where username = '$_POST[username]' and password = md5('$_POST[password]') and level = '$_POST[level]'") or die(mysql_error());
            $data2 = mysql_fetch_array($query2);
            if ($data2['level']=='admin') {
              $_SESSION['username'] = $data2['username'];
              $_SESSION['password'] = $data2['password'];

              header("location: beranda.php");
            }elseif($data2['level']=='sekda'){
              $_SESSION['username'] = $data2['username'];
              $_SESSION['password'] = $data2['password'];

              header("location: sekda/index.php");
            }elseif($data2['level']=='kadis'){
              $_SESSION['username'] = $data2['username'];
              $_SESSION['password'] = $data2['password'];

              header("location: user/index.php");
            }else{
              echo "<script>alert('data salah...!')</script>";
              header("location : index.php");
            } 
          }
        

       ?>



<html>
	<head>
		<title>Halaman Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="shortcut icon" href="login/img/img/kominfo.jpg"/>
		<link rel="stylesheet" href="login/css/menu.css"/>
		<link rel="stylesheet" href="login/css/main.css"/>
		<link rel="stylesheet" href="login/css/bgimg.css"/>
		<link rel="stylesheet" href="login/css/bgimg-nosocial.css"/>
		<link rel="stylesheet" href="login/css/font.css"/>
		<link rel="stylesheet" href="login/css/font-awesome.min.css"/>
		<script type="text/javascript" src="login/js/jquery-1.12.4.min.js"></script>
		<script type="text/javascript" src="login/js/main.js"></script>
	</head>
<body>
	
	<div class="background"></div>
	<div class="backdrop"></div>
	<div class="login-form-container" id="login-form">
		<div class="login-form-content">
			<div class="login-form-header">
				<div class="logo">
					<img src="login/img/kominfo.jpg" width="90" height="90" />
				</div>
				<h3>Login</h3>
			</div>
			<form method="post" action="" class="login-form">
				<div class="input-container">
					<i class="fa fa-envelope"></i>
					<input type="username" class="input" name="username" placeholder="Username"/>
				</div>
				<div class="input-container">
					<i class="fa fa-lock"></i>
					<input type="password"  id="login-password" class="input" name="password" placeholder="Password"/>
					<i id="show-password" class="fa fa-eye"></i>
				</div>
				<div class="input-container">
					<i class="fa fa-envelope"></i>
					<select name="level" > 
					<option value="admin">Admin</option>
					<option value="kadis">Kepala Dinas</option>
					<option value="sekda" >Sekda</option>

					</select>
					
				</div>
				<input type="submit" name="login" value="Login" class="button"/>

			</form>
			
		</div>
	</div>
</body>
</html>