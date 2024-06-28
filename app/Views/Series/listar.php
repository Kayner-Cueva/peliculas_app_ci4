<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ScreenSaga</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('public/assets/plugins/fontawesome-free/css/all.min.css') ?> ">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('public/assets/plugins/template/css/adminlte.min.css') ?> ">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<!-- Incluye las bibliotecas de Bootstrap CSS y JavaScript -->

</head>

<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url('/admin') ?>" class="nav-link">Home</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url('/contacto') ?>" class="nav-link">Contact</a>
				</li>
			</ul>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<!-- Navbar Search -->
				<li class="nav-item">
					<a class="nav-link" data-widget="navbar-search" href="#" role="button">
						<i class="fas fa-search"></i>
					</a>
					<div class="navbar-search-block">
						<form class="form-inline">
							<div class="input-group input-group-sm">
								<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
								<div class="input-group-append">
									<button class="btn btn-navbar" type="submit">
										<i class="fas fa-search"></i>
									</button>
									<button class="btn btn-navbar" type="button" data-widget="navbar-search">
										<i class="fas fa-times"></i>
									</button>
								</div>
							</div>
						</form>
					</div>
				</li>

				<!-- Messages Dropdown Menu -->
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="far fa-comments"></i>
						<span class="badge badge-danger navbar-badge">3</span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<a href="#" class="dropdown-item">
							<!-- Message Start -->
							<div class="media">
								<img src="<?= base_url('public/assets/plugins/template/img/user1-128x128.jpg') ?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
								<div class="media-body">
									<h3 class="dropdown-item-title">
										Brad Diesel
										<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
									</h3>
									<p class="text-sm">Call me whenever you can...</p>
									<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
								</div>
							</div>
							<!-- Message End -->
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<!-- Message Start -->
							<div class="media">
								<img src="<?= base_url('public/assets/plugins/template/img/user8-128x128.jpg') ?> " alt="User Avatar" class="img-size-50 img-circle mr-3">
								<div class="media-body">
									<h3 class="dropdown-item-title">
										John Pierce
										<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
									</h3>
									<p class="text-sm">I got your message bro</p>
									<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
								</div>
							</div>
							<!-- Message End -->
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<!-- Message Start -->
							<div class="media">
								<img src="<?= base_url('public/assets/plugins/template/img/user3-128x128.jpg') ?> " alt="User Avatar" class="img-size-50 img-circle mr-3">
								<div class="media-body">
									<h3 class="dropdown-item-title">
										Nora Silvester
										<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
									</h3>
									<p class="text-sm">The subject goes here</p>
									<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
								</div>
							</div>
							<!-- Message End -->
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
					</div>
				</li>
				<!-- Notifications Dropdown Menu -->
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="far fa-bell"></i>
						<span class="badge badge-warning navbar-badge">15</span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<span class="dropdown-item dropdown-header">15 Notifications</span>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-envelope mr-2"></i> 4 new messages
							<span class="float-right text-muted text-sm">3 mins</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-users mr-2"></i> 8 friend requests
							<span class="float-right text-muted text-sm">12 hours</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-file mr-2"></i> 3 new reports
							<span class="float-right text-muted text-sm">2 days</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-widget="fullscreen" href="#" role="button">
						<i class="fas fa-expand-arrows-alt"></i>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
						<i class="fas fa-th-large"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="../../index3.html" class="brand-link">
				<img src="<?= base_url('public/assets/plugins/template/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">ScreenSaga</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?= base_url('public/assets/plugins/template/img/user2-160x160.jpg') ?> " class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block"><?= $_SESSION['nombre_completo'] ?></a>
					</div>
				</div>

				<!-- SidebarSearch Form -->
				<div class="form-inline">
					<div class="input-group" data-widget="sidebar-search">
						<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
						<div class="input-group-append">
							<button class="btn btn-sidebar">
								<i class="fas fa-search fa-fw"></i>
							</button>
						</div>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
						<li class="nav-item">
							<a href="../widgets.html" class="nav-link">
								<i class="nav-icon fas fa-th"></i>
								<p>
									Widgets
									<span class="right badge badge-danger">New</span>
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-table"></i>
								<p>
									Tables
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?php echo base_url() . 'index_auditoria' ?>" class="nav-link">
										<i class="fas fa-list nav-icon"></i>
										<p>Auditoria</p>
									</a>
									<a href="<?php echo base_url() . 'index_autores' ?>" class="nav-link">
										<i class="fa fa-users nav-icon"></i>
										<p>Autores</p>
									</a>
									<a href="<?php echo base_url() . 'index_categorias' ?>" class="nav-link">
										<i class="far fa-bookmark nav-icon"></i>
										<p>Categorias</p>
									</a>
									<a href="<?php echo base_url() . 'index_peliculas' ?>" class="nav-link">
										<i class="fa fa-film nav-icon"></i>
										<p>Peliculas</p>
									</a>
									<a href="<?php echo base_url() . 'index_portadas' ?>" class="nav-link">
										<i class="far fa-file-video nav-icon"></i>
										<p>Portadas</p>
									</a>
									<a href="<?php echo base_url() . 'index_series' ?>" class="nav-link">
										<i class="far fa-file-video nav-icon"></i>
										<p>Series</p>
									</a>
									<a href="<?php echo base_url() . 'index_tvshow' ?>" class="nav-link">
										<i class="fas fa-tv nav-icon"></i>
										<p>TV Show</p>
									</a>
									<a href="<?php echo base_url() . 'index_usuarios' ?>" class="nav-link">
										<i class="far fa-user nav-icon"></i>
										<p>Usuarios</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-header">EXAMPLES</li>
						<li class="nav-item">
							<a href="../gallery.html" class="nav-link">
								<i class="nav-icon far fa-image"></i>
								<p>
									Gallery
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon far fa-envelope"></i>
								<p>
									Mailbox
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="../mailbox/mailbox.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Inbox</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="../mailbox/compose.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Compose</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="../mailbox/read-mail.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Read</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item menu-open">
							<a href="#" class="nav-link active">
								<i class="nav-icon far fa-plus-square"></i>
								<p>
									Extras
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>
											Login & Register
											<i class="fas fa-angle-left right"></i>
										</p>
									</a>
									<ul class="nav nav-treeview">
										<li class="nav-item">
											<a href="../examples/login.html" class="nav-link">
												<i class="far fa-circle nav-icon"></i>
												<p>Login v1</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="../examples/register.html" class="nav-link">
												<i class="far fa-circle nav-icon"></i>
												<p>Register v1</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="../examples/forgot-password.html" class="nav-link">
												<i class="far fa-circle nav-icon"></i>
												<p>Forgot Password v1</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="../examples/recover-password.html" class="nav-link">
												<i class="far fa-circle nav-icon"></i>
												<p>Recover Password v1</p>
											</a>
										</li>
									</ul>
								</li>
								<li class="nav-item">
									<a href="../examples/lockscreen.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Lockscreen</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-search"></i>
								<p>
									Search
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="../search/simple.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Simple Search</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-header">LABELS</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon far fa-circle text-danger"></i>
								<p class="text">Important</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon far fa-circle text-warning"></i>
								<p>Warning</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon far fa-circle text-info"></i>
								<p>Informational</p>
							</a>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>Gestion de Series</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Series</li>
							</ol>
						</div>
					</div>
				</div><!-- /.container-fluid -->
			</section>

			<!-- Main content -->
			<section class="content">

				<div class="container mt-4">
					<div class="card">
						<div class="card-header text-white bg-primary mb-3">
							<a href="<?php echo base_url() . 'nuevo' ?>" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevoModal">Registro Series</a>
							<a href="<?php echo base_url() . 'index_temporadas' ?>" class="btn btn-primary">Listar Temporadas</a>
							<a href="<?php echo base_url() . 'index_episodios' ?>" class="btn btn-primary">Listar Episodios</a>
						</div>
						<div class="card-body">
							<table id="example" class="table table-striped table-hover dt-responsive display nowrap table-bordered" cellspacing="0">
								<thead class="table-info ">
									<tr>
										<th scope="col">ID</th>
										<th scope="col">Portada</th>
										<th scope="col">Fongo</th>
										<th scope="col">logo</th>
										<th scope="col">Titulo</th>
										<th scope="col">Descripcion</th>
										<th scope="col">Categorias</th>
										<th scope="col">Creador</th>
										<th scope="col">Fecha de Estreno</th>
										<th scope="col">Temporadas</th>
										<th scope="col">Acciones</th>
									</tr>
								</thead>
								<tbody>

									<?php
									foreach ($series as $value) {
									?>

										<tr>
											<th><?php echo $value['id_series'] ?></th>
											<td><?php echo $value['portada']; ?></td>
											<td><?php echo $value['fondo']; ?></td>
											<td><?php echo $value['logo']; ?></td>
											<td><?php echo $value['titulo']; ?></td>
											<td><?php echo $value['descripcion']; ?></td>
											<td><?php echo $value['categoria']; ?></td>
											<td><?php echo $value['creador']; ?></td>
											<td><?php echo $value['temporada']; ?></td>
											<td><?php echo $value['fecha_estreno']; ?></td>
											<td><a class="btn btn-warning" href="<?php echo base_url('borrar_series?id='. $value['id_series']);?>">
													<i class="fas fa-eraser"></i>
												</a>
												<a class="btn btn-info" href="<?php echo base_url('editar_series?id='. $value['id_series']);?>">
													<i class="fas fa-edit"></i>
												</a>
											</td>

										</tr>
									<?php
									} ?>
								</tbody>
							</table>
							<?php
							echo $paginator->links();
							?>
						</div>
						<?php include 'nuevo.php'; ?>

						<script>
							let nuevomodal = document.getElementById('nuevoModal')

							nuevomodal.addEventListener('shown.bs.modal', event => {
								let button = event.relatedTarget
							})
						</script>
					</div>
				</div>

			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				<b>Version</b> 3.2.0
			</div>
			<strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="<?= base_url('public/assets/plugins/jquery/jquery.min.js') ?> "></script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url('public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?> "></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url('public/assets/plugins/template/js/adminlte.min.js') ?> "></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>

</html