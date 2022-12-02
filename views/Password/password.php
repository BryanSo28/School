<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<?php include_once("../Head/head.php"); ?>
</head>

<body>
    <div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="../../index.php">
					<img src="../../assets/logo-1.png" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="../../index.php">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<img src="../../assets/vendors/images/forgot-password.png" alt="">
				</div>
				<div class="col-md-6">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Olvidé Contraseña</h2>
						</div>
						<h6 class="mb-20">Completa los campos para resetear tu contraseña</h6>
						<form>
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" placeholder="Email">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
								</div>
							</div>
                            <div class="input-group custom">
								<input type="text" class="form-control form-control-lg" placeholder="Usuario">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-user"></i></span>
								</div>
							</div>
                            <div class="input-group custom">
                                <select name="" class="form-control form-control-lg">
                                    <option value="">Seleccion Una Opción</option>
                                    <option value="Profesor">Profesor</option>
                                    <option value="Alumno">Alumno</option>
                                </select>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="row align-items-center">
								<div class="col-5">
									<div class="input-group mb-0">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
										<!--<a class="btn btn-primary btn-lg btn-block" href="index.html">Submit</a>-->
									</div>
								</div>
								<div class="col-2">
									<div class="font-16 weight-600 text-center" data-color="#707373">OR</div>
								</div>
								<div class="col-5">
									<div class="input-group mb-0">
                                        <a class="btn btn-outline-primary btn-lg btn-block" href="../../index.php">Login</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<?php include_once("../Js/js.php"); ?>
</body>

</html>