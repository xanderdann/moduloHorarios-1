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

	<meta charset="utf-8">
	<meta name="description" content="Planificación académica para la UPTM-KR">
	<link rel="shortcut icon" type="image/x-icon" href="css/img/favicon.png"/>

	<title>SIGPA - Sistema de Información para la Gestión de la Planificación Académica</title>
</head>

<body>
	<img src="css/img/banner.jpg" style="height: 70px; width: 100%;" />

	<div class="container">
		<div class="row">

	<!-- Formulario -->

			<div class="col-lg-4" style="margin-top: 5em;">
				<div class="panel panel-default">
					<div class="panel-body">

			<!-- Pestañas -->

						<ul class="nav nav-tabs">
							<li class="active" style="width: 50%;"><a href="#iniciar" data-toggle="tab">Entrar</a></li>
							<li style="width: 50%;"><a href="#reestablecer" data-toggle="tab">Reestablecer</a></li>
						</ul>

			<!-- Fin pestañas -->

			<!-- Contenido de las pestañas -->

						<div class="tab-content"><br/>

				<!-- Formulario para iniciar sesión -->

							<div class="tab-pane fade in active" id="iniciar">
								<form role="form">
									<div class="form-group">
										<div class="input-group" title="Ingrese su cédula de indentidad">
											<input type="text" name="cedula" placeholder="Cédula" class="form-control" autofocus="autofocus" />
											<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
										</div>
									</div>

									<div class="form-group">
										<div class="input-group" title="Ingrese su contraseña">
											<input type="password" name="contrasena" placeholder="Contraseña" class="form-control" />
											<span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>
										</div>
									</div>

									<div class="checkbox"><label>
										<input type="checkbox" name="recordar" value="1" /> Recordar mi cédula
									</label></div>

									<input type="submit" value="Entrar" class="btn btn-lg btn-primary btn-block" /><br/>
								</form>
							</div>

				<!-- Fin formulario para iniciar sesión -->

				<!-- Formulario para reestablecer la contraseña -->

							<div class="tab-pane fade" id="reestablecer">
								<form role="form">
									<div class="form-group">
										<div class="input-group" title="Ingrese su cédula de indentidad">
											<input type="text" name="cedula" placeholder="Cédula" class="form-control" autofocus="autofocus" />
											<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
										</div>
									</div>

									<div class="form-group">
										<div class="input-group" title="Ingrese su frase de recuperación">
											<input type="password" name="frase" placeholder="Frase de recuperación" class="form-control" autofocus="autofocus" />
											<span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
										</div>
									</div>

									<div class="form-group">
										<div class="input-group" title="Ingrese una nueva contraseña">
											<input type="password" name="contrasena" placeholder="Nueva contraseña" class="form-control" />
											<span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>
										</div>
									</div>

									<div class="form-group">
										<div class="input-group" title="Repita la contraseña">
											<input type="password" name="recontrasena" placeholder="Repita la contraseña" class="form-control" />
											<span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>
										</div>
									</div>

									<input type="submit" value="Reestablecer" class="btn btn-lg btn-primary btn-block" /><br/>
								</form>
							</div>
						</div>

				<!-- Fin formulario para reestablecer la contraseña -->

			<!-- Fin contenido de las pentañas -->

					</div>
				</div>
			</div>

	<!-- Fin formulario -->

	<!-- Información -->

			<div class="col-lg-7 col-lg-offset-1 text-justify">
				<h1 class="page-header">Vicerectorado académico</h1>

				<dl>
					<dt style="font-size: 1.3em;">Misión</dt>
						<dd>Coordinar la materialización de los planes y programas de la oferta académica para contribuir con la formación profesional universitaria y la municipalización de la educación.</dd>

					<dt style="font-size: 1.3em;">Visión</dt>
						<dd>Potenciar el desarrollo de una docencia de excelencia, transversal y flexible que permita obtener un egresado conpetente y crítica en un contexto de permanente cambio.</dd>

					<dt style="font-size: 1.3em;">Objetivo general</dt>
						<dd>Supervisar las actividades académicas y administradtivas de docencia, investigación y extensión de la universidad en los niveles de estudios y pregrado</dd>
					
					<dt style="font-size: 1.3em;">Objetivos especificos</dt>
						<dd>
							<ul>
								<li>Controlar la materialización de los planes y programas de las ofertas académicas de la institución para contribuir con la formación de profesionales universitarios.</li>
								<li>Convocar al concejo acdémico universitario de las diferentes universidades integradoras de los <abbr title="Proyecto Nacional de Formación" class="initialism">PNF</abbr> y Carreras cortas de acuerdo al diagrama estructural vigente.</li>
								<li>Controlar las acciones necesarias para garantizar lagestión y unificación de los <abbr title="Proyecto Nacional de Formación" class="initialism">PNF</abbr> y carreras cortas en las sedes y los diferentes núcleos</li>
								<li>Fomentar ante las universidades integradoras de los <abbr title="Proyecto Nacional de Formación" class="initialism">PNF</abbr> y carreras cortas los planes y proyectos en concordancia con las líneas emanadas del <abbr title="Ministerio del Poder Popular para Educación Universitaria, Ciencia y Tecnología" class="initialism">MPPEUCT</abbr> que permitan el buen desenvolvimiento de la academia universitaria</li>
								<li>Garantizar la realización de las actividades docentes con la máxima calidad y eficiencia, en concordancia con los objetivos y políticas institucionales</li>
								<li>Velar por los ajustes curriculares presentados por las unidades integradoras de los <abbr title="Proyecto Nacional de Formación" class="initialism">PNF</abbr> y carreras cortas de las sedes y de los núcleos</li>
								<li>Dar respuesta a las consultas académicas y funcionamiento que formule los órganos directivos y las comunidades en general</li>
							</ul>
						</dd>
				</dl>
			</div>

	<!-- Fin información -->

		</div>

	</div>
</body>

<!-- Bibliotecas plantilla -->

<script src="css/template/bower_components/jquery/dist/jquery.min.js"></script>
<script src="css/template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="css/template/bower_components/metisMenu/dist/metisMenu.min.js"></script>
<script src="css/template/dist/js/sb-admin-2.js"></script>

<!-- Fin bibliotecas plantilla -->

</html>