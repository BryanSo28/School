<?php
	require_once("../../config/conexion.php");
	if(isset($_SESSION["id_usuario"])){
		require_once("../../controllers/usuario.php");

		$list = new usuarioController();
		$lista = $list->listUsuario();

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
				<!-- Export Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Listado De Usuarios</h4>
					</div>
					<a href="../Usuario/registrar.php" class="dropdown-toggle no-arrow"><button type="button" class="btn btn-primary btn-lg" style="margin-left : 55em">Nuevo Usuario</button></a>
					<div class="pb-20">
						<table class="table hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
									<th>Foto</th>
									<th class="table-plus datatable-nosort">ID</th>
									<th>Usuario</th>
									<th>DNI</th>
									<th>Rol</th>
									<th>Email</th>
									<th>Fecha Creación</th>
									<th class="datatable-nosort">Acción</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($lista as $res) {?>
								<tr>
								<td class="table-plus">
									<img src="../../assets/vendors/images/product-1.jpg" width="70" height="70" alt="">
								</td>
									<td class="table-plus"><?php echo $res['id_usuario']; ?></td>
									<td><?php echo $res['usuario']; ?></td>
									<td><?php echo $res['dni']; ?></td>
									<td><?php if ($res['rol']==1) {
												echo "Profesor";
												}else {
													echo "Alumno";
												}?> </td>
									<td><?php echo $res['email']; ?></td>
									<td><?php echo $res['fecha_creacion']; ?></td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> Ver</a>
												<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Editar</a>
												<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Eliminar</a>
											</div>
										</div>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
				<!-- Export Datatable End -->
			</div>
            <?php include_once("../Footer/footer.php"); ?>
		</div>
	</div>
	<!-- js -->
	<?php include_once("../Js/js.php"); ?>
</html>
<?php
	}else{
		header("Location:index.php");
	}
?>