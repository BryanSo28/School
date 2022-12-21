<?php
	require_once("../../config/conexion.php");
	if(isset($_SESSION["id_usuario"])){
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<?php include_once("../Head/head.php"); ?>
</head>
<body>
	<div class="pre-loader">
		<?php include_once("../Loader/loader.php"); ?>
	</div>

	<div class="header">
		<?php include_once("../Header/header.php"); ?>
	</div>

	<div class="right-sidebar">
		<?php include_once("../Right/right.php"); ?>
	</div>

	<div class="left-side-bar">
		<?php include_once("../Nav/nav.php"); ?>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Registrar Profesor</h4>
						</div>
					</div>
					<form action="" method="POST">
						<div class="form-group">
							<label>Nombres</label>
							<input class="form-control" type="text" name="nombres">
						</div>
						<div class="form-group">
							<label>Apellidos</label>
							<input class="form-control" type="text" name="apellidos">
						</div>
						<div class="form-group">
							<label>DNI</label>
							<input class="form-control" type="number" name="dni">
						</div>
						<div class="form-group">
							<label>Teléfono</label>
							<input class="form-control" type="number" name="telefono">
						</div>
						<div class="form-group">
							<label>Fecha Nacimiento</label>
							<input class="form-control" type="password" name="fecha_nacimiento">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input class="form-control" type="email" name="email">
						</div>
						<div class="form-group">
							<label>Dirección</label>
							<input type="text" class="form-control" name="direccion">
						</div>
						<div class="form-group">
							<label>Género</label>
							<select class="form-control" name="genero">
								<option value="Masculino">Masculino</option>
								<option value="Femenino">Femenino</option>
							</select>
						</div>
						<div class="form-group">
							<label>Departamento</label>
							<select class="custom-select2 form-control" name="departamento" style="width: 100%; height: 38px;">
							</select>
						</div>
						<div class="form-group">
							<label>Provincia</label>
							<select class="custom-select2 form-control" name="provincia" style="width: 100%; height: 38px;">
							</select>
						</div>
						<div class="form-group">
							<label>Distrito</label>
							<select class="custom-select2 form-control" name="distrito" style="width: 100%; height: 38px;">
							</select>
						</div>
						<div class="form-group">
							<label>Enfermedad</label>
							<input type="text" class="form-control" name="enfermedad">
						</div>
						<div class="form-group">
							<label>Comentario</label>
							<textarea class="form-control" name="comentario"></textarea>
						</div>
						<div class="form-group">
							<label>Foto</label>
							<input type="file" class="form-control-file form-control height-auto" name="foto">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-lg" style="margin-left : 55em">Registrar</button>
						</div>
					</form>
				</div>
			</div>
			<?php include_once("../Footer/footer.php"); ?>
		</div>
	</div>
	<!-- js -->
	<?php include_once("../Js/js.php"); ?>
</body>
</html>
<?php
	}else{
		header("Location:index.php");
	}
?>