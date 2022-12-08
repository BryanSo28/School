<?php   
	include_once("../../controllers/usuario.php");
	$user = new usuarioController();
	$lista = $user->listDNI();


	if ($_POST) {
		$usuario = $_POST["usuario"];
		$clave = $_POST["clave"];
		$rol = $_POST["rol"];
		$email = $_POST["email"];
		
		$user->insertUsuario($usuario,$clave,$rol,$email);
	}


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
				<!-- horizontal Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Registrar Usuario</h4>
						</div>
					</div>
					<form action="" method="POST">
						<div class="form-group">
                            <label>Persona</label>
							<select class="custom-select2 form-control" name="dni" style="width: 100%; height: 38px;">
								<?php foreach ($lista as $res) {?>
                                	<option value="<?php echo $res['dni'];?>"><?php echo $res['dni'];?></option>
								<?php } ?>
                            </select>
						</div>
						<div class="form-group">
							<label>Usuario</label>
							<input class="form-control" placeholder="brysoew" name="usuario" type="text">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input class="form-control" placeholder="************" name="clave" type="password">
						</div>
						<div class="form-group">
							<label>Rol</label>
							<select class="form-control" name="rol">
								<option value="1">Profesor</option>
                                <option value="2">Alumno</option>
							</select>
						</div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="example@gmail.com" name="email">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg" style="margin-left : 55em">Registrar</button>
					</form>
				</div>
				<!-- horizontal Basic Forms End -->

			</div>
			<?php include_once("../Footer/footer.php"); ?>
		</div>
	</div>
	<!-- js -->
    <?php include_once("../Js/js.php"); ?>
</body>
</html>