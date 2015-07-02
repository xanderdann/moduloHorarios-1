<!DOCTYPE html>
<html>
<head lang="es">

	<!-- Plantilla -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/template/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/template/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
	<link href="css/template/dist/css/timeline.css" rel="stylesheet">
	<link href="css/template/dist/css/sb-admin-2.css" rel="stylesheet">
	<link href="css/template/bower_components/morrisjs/morris.css" rel="stylesheet">
	<link href="css/template/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- Fin plantilla -->

	<link href="css/palete.css" rel="stylesheet" type="text/css" />

	<meta charset="utf-8">
	<meta name="description" content="Planificación académica para la UPTM-KR">
	<link rel="shortcut icon" type="image/x-icon" href="css/img/favicon.png"/>

	<title>SIGPA - Sistema de Información para la Gestión de la Planificación Académica</title>
</head>
<body>
<div id="wrapper">

	<!-- Navegación -->

	<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

		<!-- Menú superior -->

		<div class="navbar-header">

			<!-- Botón menú responsive -->

			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<!-- Fin botón menú responsive -->

			<!-- Logo principal -->

			<a class="navbar-brand" style="font-size: 1.5em;" href="index.html"><img src="css/img/iconoBlanco.png" style="height: 1.5em; width: 1.5em; display: inline;" /> SIGPA</a>

			<!-- Fin logo principal -->

		</div>

			<!-- Botones del menú superior -->

		<ul class="nav navbar-top-links navbar-right">

				<!-- Registro de actividades -->

			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" title="Registro de actividades">
					<i class="fa fa-th-list fa-fw"></i> <i class="fa fa-caret-down"></i>
				</a>

					<!-- Elementos del registro -->

				<ul class="dropdown-menu" style="width: 30em;">
					<li><a>
						<div>
							<strong>Usuario</strong>
							<span class="pull-right text-muted"><em>Fecha</em></span>
						</div>

						<div>
							Descripción de la actividad
						</div><br/>

						<pre>update carrera set nombre='PNF Informática' where id='03'</pre>
					</a></li>

					<li class="divider"></li>

					<li><a class="text-center" href="#"><strong>Ver el registro completo</strong></a></li>
				</ul>

					<!-- Fin elementos del registro -->

			</li>

				<!-- Fin registro de actividades -->

				<!-- Períodos de planificación -->

			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" title="Períodos de planificación">
					<i class="fa fa-calendar fa-fw"></i> <i class="fa fa-caret-down"></i>
				</a>

				<ul class="dropdown-menu" style="width: 25em;">
					<li><a>
						<div>
							<p>
								<strong>Carrera (Sede)</strong>
								<span class="pull-right text-muted">Fecha fin</span>
							</p>

							<div class="progress progress-striped active">
								<div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
									Días restantes
								</div>
							</div>
						</div>
					</a></li>

					<li class="divider"></li>

					<li><a class="text-center" href="#"><strong>Ver períodos de planificación</strong></a></li>
				</ul>
			</li>

				<!-- Fin períodos de planificación -->

				<!-- Usuario -->

			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" title="Panel de usuario">
					<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
				</a>

				<ul class="dropdown-menu" style="width: 15em;">
					<li><a>
						<i class="fa fa-user fa-fw" style="float: left;"></i> 
						<span style="display: inline-block; margin-left: 0.3em;">Cédula<br>Nombre<br/>Apellido</span>
					</a></li>

					<li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuración</a></li>

					<li class="divider"></li>

					<li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a></li>
				</ul>

			</li>

				<!-- Fin usuario -->

		</ul>

			<!-- Fin botones del menú superior -->

		<!-- Fin menú superior -->

		<!-- Menú principal -->

		<div class="navbar-default sidebar" role="navigation">
			<div class="sidebar-nav navbar-collapse">
				<ul class="nav" id="side-menu">

			<!-- Búsqueda -->

					<li class="sidebar-search">
						<div class="input-group custom-search-form">
							<input type="text" class="form-control" placeholder="Buscar...">

							<span class="input-group-btn">
								<button class="btn btn-default" type="button">
									<i class="fa fa-search"></i>
								</button>
							</span>
						</div>
					</li>

			<!-- Fin búsqueda -->

			<!-- Elementos del menú -->

					<li><a href="#"><i class="fa fa-check-square-o fa-fw"></i> Elemento</a></li>

					<li>
						<a href="#"><i class="fa fa-sitemap fa-fw"></i> Elemento múltiple<span class="fa arrow"></span></a>

						<ul class="nav nav-second-level">
							<li><a href="#"><i class="fa fa-check-square-o fa-fw"></i> Segundo nivel</a></li>

							<li>
								<a href="#"><i class="fa fa-sitemap fa-fw"></i> Segundo nivel múltiple <span class="fa arrow"></span></a>
								<ul class="nav nav-third-level">
									<li><a href="#"><i class="fa fa-check-square-o fa-fw"></i> Tercer nivel</a></li>
								</ul>
							</li>
						</ul>
					</li>

					<!--

					Elemento simple:
						<li><a href="#"><i class="fa fa-check-square-o fa-fw"></i> Elemento</a></li>

					Elemento múltiple:
						<li>
							<a href="#"><i class="fa fa-sitemap fa-fw"></i> Elemento múltiple<span class="fa arrow"></span></a>

							<ul class="nav nav-second-level">
								<li><a href="#"><i class="fa fa-check-square-o fa-fw"></i> Segundo nivel</a></li>

								<li>
									<a href="#"><i class="fa fa-sitemap fa-fw"></i> Segundo nivel múltiple <span class="fa arrow"></span></a>
									<ul class="nav nav-third-level">
										<li><a href="#"><i class="fa fa-check-square-o fa-fw"></i> Tercer nivel</a></li>
									</ul>
								</li>
							</ul>
						</li>

					-->

			<!-- Fin elementos del menú -->

				</ul>
			</div>
		</div>

		<!-- Fin menú principal -->
	</nav>

	<!-- Fin navegación -->

	<!-- Contenido -->

	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Horarios</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<?php 
					include 'kuai/section.php';
				 ?>
			</div>
		</div>
	</div>

	<!-- Fin contenido -->

</div>
</body>

<!-- Bibliotecas plantilla -->

<script src="css/template/bower_components/jquery/dist/jquery.min.js"></script>
<script src="css/template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="css/template/bower_components/metisMenu/dist/metisMenu.min.js"></script>
<script src="css/template/dist/js/sb-admin-2.js"></script>

<!-- Fin bibliotecas plantilla -->

</html>