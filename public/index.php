<?php

include_once '../config/routes.php';

include_once '../config/config.php';

$info = new config();


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=$info->getName()?></title>

	<link rel="stylesheet" type="text/css" href="<?=$info->getServe()?>/assets/css/colores.css">
	<link rel="stylesheet" type="text/css" href="<?=$info->getServe()?>/assets/css/fonts.css">
	<link rel="stylesheet" type="text/css" href="<?=$info->getServe()?>/assets/css/hw.css">
	<link rel="stylesheet" type="text/css" href="<?=$info->getServe()?>/assets/css/margin.css">
	<link rel="stylesheet" type="text/css" href="<?=$info->getServe()?>/assets/css/padding.css">

	<!-- swal -->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- aos -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-blanco shadow">
	  <div class="container-fluid">
	    <a class="navbar-brand color-negro" href="<?=$info->getServe()?>/Home"><?=$info->getName()?></a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNav">
	      <ul class="navbar-nav">
	        <li class="nav-item">
	          <a class="nav-link color-negro" aria-current="page" href="<?=$info->getServe()?>/LogIn">LogIn</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link color-negro" href="<?=$info->getServe()?>/SingUp">SingUp</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<div class="container">
		<?php
			$rutas = new routes($info->getServe(), $info->getName(), $info->getAutor());
		?>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>