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
					<form>
						<div class="form-group">
                            <label>Persona</label>
							<select class="custom-select2 form-control" name="state" style="width: 100%; height: 38px;">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </select>
						</div>
						<div class="form-group">
							<label>Usuario</label>
							<input class="form-control" placeholder="brysoew" type="text">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input class="form-control" placeholder="************" type="password">
						</div>
						<div class="form-group">
							<label>Rol</label>
							<select class="form-control">
								<option>Profesor</option>
                                <option>Alumno</option>
							</select>
						</div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="example@gmail.com">
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