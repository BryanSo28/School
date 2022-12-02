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
						<h4 class="text-blue h4">Listado De Entrevistas</h4>
					</div>
					<a href="../Entrevista/registrar.php" class="dropdown-toggle no-arrow"><button type="button" class="btn btn-primary btn-lg" style="margin-left : 55em">Nuevo Entrevista</button></a>
					<div class="pb-20">
						<table class="table hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
									<th>Foto</th>
									<th class="table-plus datatable-nosort">Name</th>
									<th>Age</th>
									<th>Office</th>
									<th>Address</th>
									<th>Start Date</th>
									<th>Salart</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								<td class="table-plus">
									<img src="../../assets/vendors/images/product-1.jpg" width="70" height="70" alt="">
								</td>
									<td class="table-plus">Gloria F. Mead</td>
									<td>25</td>
									<td>Sagittarius</td>
									<td>2829 Trainer Avenue Peoria, IL 61602 </td>
									<td>29-03-2018</td>
									<td>$162,700</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
												<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<img src="../../assets/vendors/images/product-1.jpg" width="70" height="70" alt="">
									</td>
									<td class="table-plus">Andrea J. Cagle</td>
									<td>30</td>
									<td>Gemini</td>
									<td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
									<td>29-03-2018</td>
									<td>$162,700</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
												<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
											</div>
										</div>
									</td>
								</tr>
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