<!DOCTYPE html> 
<html>
    <head>
    	<meta charset="ISO-8859-1">
        <meta http-equiv="X-UA-Compatible"  content="IE=edge">
        <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <meta name="description"            content="Aruba Meridian">
        <meta name="keywords"               content="Aruba, Meridian">
        <meta name="robots"                 content="Index,Follow">
        <meta name="date"                   content="May 7, 2018"/>
        <meta name="language"               content="es">
        <meta name="theme-color"            content="#FF8300">
    	<title>Aruba | Meridian</title>
        <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/favicon.png">
    	<link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>openSans.css?v=<?php echo time();?>">
    	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>animate.css?v=<?php echo time();?>">
    	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
    	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
    </head>
    <body>
        <!-- <nav class="navbar navbar-default">
            <div class="container-fluid js-container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand p-0" href="#"><img src="<?php echo RUTA_IMG?>logo/logo_aruba.svg" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <div class="form-group m-0">
                            <input type="text" class="form-control" placeholder="Search" id="buscador" onkeyup="verificarDatos(event);">
                        </div>
                        <button type="submit" class="btn btn-default" onclick="buscadorPartner()">Submit</button>
                        <div class="js-select">
                            <select class="selectpicker" title="Español" id="idioma" onchange="filtroGeografia()">
                                <option value="Español">Español</option>
                                <option value="Inglés">Inglés</option>
                                <option value="Portugués">Portugués</option>
                            </select>
                        </div>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                        </li>
                        <li><a href="#">Cont&aacute;ctenos</a></li>
                    </ul>
                </div>
            </div>
        </nav> -->
        <img src="<?php echo RUTA_IMG?>fondo/fondo-top.png" style="width: 100%;">
        <section id="principal">
            <div class="js-container">
            	<div class="title">
            		<h3>DATOS PERSONALES:</h3>
            	</div>
            	<div class="form-group row">
				  <label for="example-text-input" class="col-2 col-form-label">Empresa</label>
				  <div class="col-10">
				    <input class="form-control" type="text" placeholder="Nombre de la empresa" id="empresa">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-text-input" class="col-2 col-form-label">Gerente</label>
				  <div class="col-10">
				    <input class="form-control" type="text" placeholder="Nombre del gerente" id="gerente">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-text-input" class="col-2 col-form-label">Contacto Comercial</label>
				  <div class="col-10">
				    <input class="form-control" type="text" placeholder="Nombre del contacto comercial" id="cont_comercial">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-text-input" class="col-2 col-form-label">Contacto técnico</label>
				  <div class="col-10">
				    <input class="form-control" type="text" placeholder="Nombre del contacto técnico" id="cont_tecnico">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-url-input" class="col-2 col-form-label">URL</label>
				  <div class="col-10">
				    <input class="form-control" type="url" placeholder="URL de su página web" id="url">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-email-input" class="col-2 col-form-label">Email</label>
				  <div class="col-10">
				    <input class="form-control" type="email" placeholder="user@example.com" id="email">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
				  <div class="col-10">
				    <input class="form-control" type="tel" placeholder="1-(555)-555-5555" id="telefono">
				  </div>
				</div>
				<div class="form-group row">
					<button class="mdl-button mdl-js-button btn-primary" onclick="guardarDesarrolladores()">
	                    Guardar
	                </button>
            	</div>
            </div>
        </section>
        <img src="<?php echo RUTA_IMG?>fondo/fondo-bottom.png" style="width: 100%;">
        <script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jsutils.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jsmenu.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>index.js?v=<?php echo time();?>"></script>
        <script type="text/javascript">
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
                $('select').selectpicker('mobile');
            } else {
                $('select').selectpicker();
            }
        </script>
    </body>
</html>