<?php session_start(); ?>
<html>
	<head>
		<title>Formulario de Estado</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
	<h2>Estado</h2>
	<form role="form" name="contacto" action="php/estado.php" method="post">
		  <div class="form-group">
		    <label for="asesor">Asesor</label>
		    <input type="text" class="form-control" id="asesor" name="asesor" placeholder="Asesor">
		  </div>
		  <div class="form-group">
		    <label for="producto">Producto</label>
		    <input type="text" class="form-control" id="producto" name="producto" placeholder="producto">
		  </div>
		  <div class="form-group">
		    <label for="situacion">Situacion</label>
		    <input type="text" class="form-control" id="situacion" name="situacion" placeholder="Situacion">
		  
		

		  <button type="submit" class="btn btn-default">Registrar</button>
		</form>
		</div>
		</div>
		</div>

		<script src="js/valida_estado.js"></script>
	</body>
</html>