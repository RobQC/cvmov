<?php session_start(); ?>
<html>
	<head>
		<title>Formulario de Venta</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
	<h2>Formulario de Venta</h2>
	<form role="form" name="registro" action="php/venta.php" method="post">
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
		    <label for="celular2">Celular2</label>
		    <input type="text" class="form-control" id="celular2" name="celular2" placeholder="Celular2">
		  </div>
		  <div class="form-group">
		    <label for="departamento">Departamento</label>
		    <input type="text" class="form-control" id="departamento" name="departamento" placeholder="Departamento">
		  </div>
		  <div class="form-group">
		    <label for="distrito">Distrito</label>
		    <input type="text" class="form-control" id="distrito" name="distrito" placeholder="Distrito">
		  </div>
		  <div class="form-group">
		    <label for="direccion">Direccion</label>
		    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion">
		  </div>
		  <div class="form-group">
		    <label for="referencia">Referencia</label>
		    <input type="text" class="form-control" id="referencia" name="referencia" placeholder="Referencia">
		  </div>
		  <div class="form-group">
		    <label for="producto">Producto</label>
		    <input type="text" class="form-control" id="producto" name="producto" placeholder="Producto">
		  </div>
		  <div class="form-group">
		    <label for="precio">Precio</label>
		    <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio">
		  </div>
		  <div class="form-group">
    		<label for="fechanac">Fechanac</label>
    		<input type="date" class="form-control" id="fechanac" name="fechanac" placeholder="Fechanac" min="1900-01-01" max="2100-12-31">
  		  </div>
  		  <div class="form-group">
		    <label for="nombreapo">NombreApo</label>
		    <input type="text" class="form-control" id="nombreapo" name="nombreapo" placeholder="nombreapo">
		  </div>
		  <div class="form-group">
		    <label for="supervisor">Supervisor</label>
		    <input type="text" class="form-control" id="supervisor" name="supervisor" placeholder="Supervisor">
		  </div>

		  <button type="submit" class="btn btn-default">Registrar</button>
		</form>
		</div>
		</div>
		</div>

		<script src="js/valida_venta.js"></script>
	</body>
</html>