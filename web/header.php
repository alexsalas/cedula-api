<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo $html_title; ?> - Consultas de Cédulas Venezolanas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="api,cedula,cedulas,venezuela,venezolanas,venezolanos,consultas,webservice,json" />
	<meta name="description" content="<?php echo $html_description; ?>" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<?php if($menu_select == 'baja') echo '<meta name="robots" content="nofollow" />';	?>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link rel="shortcut icon" type="image/png" href="images/icon.png"/>
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>
	<link href="css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap-select.js"></script>
	<?php if(isset($html_tags_header)) echo $html_tags_header; ?>
</head>
<body>
<?php 
if(!isset($html_show_body) || $html_show_body) {
?>
<div class="price_header">
   <div class="container">
      <div class="header_top">
	      <div class="header-left">
					 <div class="logo" onclick="window.location.href='index.html'">
						<img src="images/logo-cedula2.png" alt=""/>
						<div class="textLogo">Cédula</div>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li <?php if($menu_select == 'index') echo 'class="active"'; ?>><a href="index.php">API</a></li> 
						    	<li <?php if($menu_select == 'precios') echo 'class="active"'; ?>><a href="precios.php">Precios</a></li>
						    	<li <?php if($menu_select == 'login') echo 'class="active"'; ?>><a href="login.php">Registro / Login</a></li>
						    	<div class="clearfix"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>
	       </div>
	      <ul class="phone">
	      	<li><i style="color:white" class="glyphicon glyphicon-info-sign"> </i></li>
	      	<li><p style="color:white">+58 (416) 835-1191</p></li>
	      	<li><p style="color:white">soporte@cedula.com.ve</p></li>
	      </ul>
	      <div class="clearfix"> </div>
	   </div>
	   <div class="clearfix"></div>
	</div>
</div>
<div class="container">
<?php 

}