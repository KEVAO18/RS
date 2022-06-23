<?php

include_once '../config/routes.php';

include_once '../config/config.php';

$info = new config();


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=$info->getName()?></title>

	<link rel="stylesheet" type="text/css" href="assets/css/colores.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-blanco">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="<?=$info->getServe()?>/Home"><?=$info->getName()?></a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNav">
	      <ul class="navbar-nav">
	        <li class="nav-item">
	          <a class="nav-link" aria-current="page" href="<?=$info->getServe()?>/LogIn">LogIn</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="<?=$info->getServe()?>/SingUp">SingUp</a>
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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>