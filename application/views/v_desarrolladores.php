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
        <section id="desarrollador" class="section">
            <div class="js-container">
            	<ul class="nav nav-tabs" role="tablist">
				    <li class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
				    <li><a href="#menu1" aria-controls="menu1" role="tab" data-toggle="tab">Menu 1</a></li>
			  	</ul>
            	<div class="tab-content">
    				<div id="home" class="tab-pane fade in active"><br>
    					<div class="title">
		            		<h3>DATOS PERSONALES:</h3>
		            	</div>
		            	<div class="col-xs-12 js-input">
							<label for="empresa">Nombre de la empresa</label>
							<input type="text" id="empresa">
						</div>
						<div class="col-xs-12 js-input js-select">
							<select class="selectpicker" id="pais" title="Ingrese su país" multiple>
				                <option value="1">Dominican Republic</option>
		                        <option value="2">Puerto Rico</option>
		                        <option value="3">Panam&aacute;</option>
		                        <option value="4">Costa Rica</option>
		                        <option value="5">Guatemala</option>
		                        <option value="6">El Salvador</option>
		                        <option value="7">Nicaragua</option>
		                        <option value="8">Honduras</option>
		                        <option value="9">Haiti</option>
		                        <option value="10">Aruba</option>
		                        <option value="11">Curacao</option>
		                        <option value="12">Guyana</option>
		                        <option value="13">Netherlands Antilles</option>
		                        <option value="14">St. Kitts & Nevis</option>
		                        <option value="15">St. Maarten</option>
		                        <option value="16">St Vincent & Grenadines</option>
		                        <option value="17">Suriname</option>
		                        <option value="18">Virgin Islands (U.S)</option>
		                        <option value="19">Antigua & Bermuda</option>
		                        <option value="20">Virgin Islands (British)</option>
		                        <option value="21">Belize</option>
		                        <option value="22">Turks & Caicos</option>
		                        <option value="23">Dominica</option>
		                        <option value="24">St Lucia</option>
		                        <option value="25">Bonaire</option>
		                        <option value="26">Martinique</option>
		                        <option value="27">St Barthelem</option>
		                        <option value="28">Anguilla</option>
		                        <option value="29">Grenada</option>
		                        <option value="30">Bahamas</option>
		                        <option value="31">Barbados</option>
		                        <option value="32">Cayman</option>
		                        <option value="33">Jamaica</option>
		                        <option value="34">Trinidad & Tobago</option>
		                        <option value="35">Bermuda</option>
				            </select>
				        </div>
						<div class="col-xs-12 js-input">
						  	<label for="gerente">Nombre del gerente</label>
							<input type="text" id="gerente" maxlength="50" onkeypress="return soloLetras(event);">
						</div>
						<div class="col-xs-12 js-input">
						  	<label for="cont_comercial">Email del contacto comercial</label>
						    <input type="email" id="cont_comercial">
						</div>
						<div class="col-xs-12 js-input">
					 	 	<label for="cont_tecnico" class="col-2 col-form-label">Email del contacto t&eacute;cnico</label>
						    <input type="email" id="cont_tecnico">
						</div>
						<div class="col-xs-12 js-input">
						  	<label for="url" class="col-2 col-form-label">URL de su p&aacute;gina web</label>
						    <input type="url" id="url">
						</div>
						<div class="col-xs-12 js-input">
						  	<label for="telefono" class="col-2 col-form-label">Teléfono</label>
						    <input type="tel" id="telefono">
						</div>
						<div class="col-xs-12 text-right">
							<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button" onclick="guardarDesarrolladores()">Guardar</button>
		            	</div>
    				</div>
    				<div id="menu1" class="tab-pane fade"><br>
					  	<?php echo $html ?>
					  	<div class="col-xs-12 text-right">
					  		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button" type="button" onclick="guardarDatosDeps()">Guardar</button>
					  	</div>
				    </div>
    			</div>
            </div>
        </section>
        <script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jsutils.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jsmenu.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>desarrolladores.js?v=<?php echo time();?>"></script>
        <script type="text/javascript">
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
                $('select').selectpicker('mobile');
            } else {
                $('select').selectpicker();
            }
        </script>
    </body>
</html>