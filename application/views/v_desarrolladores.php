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
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>wizard/css/wizard.css?v=<?php echo time();?>">  
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>openSans.css?v=<?php echo time();?>">
    	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>animate.css?v=<?php echo time();?>">
    	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
    	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>wizard.css?v=<?php echo time();?>">
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
        <section id="programa">
            <div class="js-container">
                <h2>Programa de partners Meridian Engage Technology</h2>
            </div>
        </section>
        <section id="partner" class="js-section">
            <div class="js-container js-flex js-partner">
                <div class="js-partner--imagen">
                    <img src="<?php echo RUTA_IMG?>fondo/fondo-meridian.jpg">
                </div>
                <div class="js-partner--contenido">
                    <h2>Partners del programa Meridian Engage</h2>
                    <p>Tanto si va a crear una aplicaci&oacute;n m&oacute;vil desde cero como si est&aacute; inici&aacute;ndose en Meridian 
                    AppMaker o integrando datos de servicio de ubicaci&oacute;n en una plataforma ya existente, nuestros partners de 
                    categor&iacute;a mundial estar&aacute;n encantados de ayudarle.</p>
                    <a href=""><i class="mdi mdi-arrow_forward"></i>P&oacute;ngase en contacto con nosotros para obtener m&aacute;s informaci&oacute;n</a>
                </div>
            </div>
        </section>
        <section id="desarrollador" class="js-section">
            <div class="js-container">
            	<div class="mdl-wizard">
            		<div class="form-wizard form-wizard-horizontal m-b-10" id="rootwizard2">
						<div class="form-wizard-nav">
							<div class="progress">
								<div class="progress-bar progress-bar-primary" id="progressBarPos"></div>
							</div>
							<ul class="nav nav-justified nav-pills">
                                <li class="active" id="li1Pos">
                                    <a data-toggle="tab" aria-expanded="true" href="#tab1Pos" id="step1Pos">
                                        <span class="step"></span>
                                    </a>
                                    <span class="title">Informaci&oacute;n</span>
                                </li>
                                <li id="li2Pos">
                                    <a data-toggle="tab" aria-expanded="false" href="#tab2Pos" class="my-link-pos" id="step2Pos"> 
                                        <span class="step"></span>
                                    </a>
                                    <span class="title">Caracter&iacute;sticas</span>
                                </li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane pane-pos active" id="tab1Pos">    
							    <div class="row-fluid">
									<div class="col-xs-12 title-wizard">
                                        <h1>Datos Personales</h1>
									</div>
									<div class="col-xs-12 js-input">
										<label for="empresa">Nombre de la empresa</label>
										<input type="text" id="empresa">
									</div>
									<div class="col-xs-12 js-input js-select">
										<select class="selectpicker" id="vertical" title="Ingrese su vertical" multiple>
							                <?php echo $verticales ?>
							            </select>
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
							</div>
                            <div class="tab-pane pane-pos" id="tab2Pos">
                                <div class="row-fluid">
                                    <?php echo $html ?>
								  	<div class="col-xs-12 text-right">
								  		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button btn-guardar-deps" type="button" onclick="guardarDatosDeps()">Guardar</button>
								  	</div>                                           
                                </div>
                            </div>
						</div>
					</div>
            	</div>
            </div>
        </section>
        <footer class="js-section col-xs-12">
            <div class="js-container">
                <div class="js-contendo col-xs-12 p-0">
                    <div class="col-sm-4">
                        <h2>S&Iacute;GANOS</h2>
                        <ul class="js-redes">
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-8">
                        <div class="col-sm-4">
                            <h2>EMPRESA</h2>
                            <ul>
                                <li><a href="">Acerca de nosotros</a></li>
                                <li><a href="">Empleo</a></li>
                                <li><a href="">P&oacute;ngase en contacto con nostros</a></li>
                                <li><a href="">Multimedia</a></li>
                                <li><a href="">Notas de prensa</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <h2>EXPERIMENTE</h2>
                            <ul>
                                <li><a href="" target="_blank">Comunidad Airheads</a></li>
                                <li><a href="" target="_blank">Blogs</a></li>
                                <li><a href="" target="_blank">Casos pr&aacute;cticos</a></li>
                                <li><a href="" target="_blank">Eventos</a></li>
                                <li><a href="" target="_blank">Partner Ready for Networking</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <h2>SERVICIO T&Eacute;CNICO</h2>
                            <ul>
                                <li><a href="" target="_blank">Contacte servicio t&eacute;cnico</a></li>
                                <li><a href="" target="_blank">Abrir un caso</a></li>
                                <li><a href="" target="_blank">Servicios profesionales</a></li>
                                <li><a href="" target="_blank">Inicio de sesi&oacute;n con licencia</a></li>
                                <li><a href="" target="_blank">Aruba Solution Exchange</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="js-footer col-xs-12">
                    <div class="col-sm-7 js-politicas">
                        <a href="">Pol&iacute;tica de privacidad</a>
                        <a href="">Condiciones del servicio</a>
                        <a href="">Cookies</a>
                        <a href="">Mapa del sitio</a>
                        <a href="">Avisos legales</a>
                    </div>
                    <div class="col-sm-5">
                        <p>&copy; Copyright 2018 Hewlett Packard Enterprise Development LP</p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>wizard/js/jquery.bootstrap.wizard.min.js?v=<?php echo time();?>"></script>
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