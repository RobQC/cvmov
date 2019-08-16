<?php session_start(); ?>
<html>
	<head>
		<title>Formulario de Contacto</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
	<h2>Formulario de Contacto</h2>
	<form role="form" name="contacto" action="php/contacto.php" method="post">
		  <div class="form-group">
		    <label for="nombre">Nombre</label>
		    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
		  </div>
		  <div class="form-group">
		    <label for="apellido">Apellido</label>
		    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
		  </div>
		  <div class="form-group">
		    <label for="dni">DNI</label>
		    <input type="text" class="form-control" id="dni" name="dni" placeholder="DNI">
		  </div>
		    <div class="form-group">
		    <label for="celular">Celular</label>
		    <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular">
		  </div>
		  <div class="form-group">
		    <label for="producto">Producto</label>
		    <input type="text" class="form-control" id="producto" name="producto" placeholder="Producto">
		  </div>
		  <div class="form-group">
		    <label for="tipoproducto">TipoProducto</label>
		    <input type="text" class="form-control" id="tipoproducto" name="tipoproducto" placeholder="TipoProducto">
		  </div>
		   <div class="form-group">
		    <label for="direccion">Direccion</label>
		    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion">
		  </div>
		
		  <div class="form-group">
		    <label for="asesor">Asesor</label>
		    <input type="text" class="form-control" id="asesor" name="asesor" placeholder="Asesor">
		  </div>
		  <div class="form-group">
		    <label for="comentario">Comentario</label>
		    <input type="text" class="form-control" id="comentario" name="comentario" placeholder="Comentario">
		  </div>
		

		  <button type="submit" class="btn btn-default">Registrar</button>
		</form>
		</div>
		</div>
		</div>

		<script src="js/valida_contacto.js"></script>
	</body>
</html>