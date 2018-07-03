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
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>jswizard.css?v=<?php echo time();?>">
    	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
    </head>
    <body>
        <nav class="navbar navbar-default">
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
        </nav>
        <div style="height: 90px"></div>
        <section id="programa" class="js-section">
            <div class="js-fondo--programa"></div>
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
                    <a href="https://www.arubanetworks.com/es/partners/programa/engage/engage-form/"><i class="mdi mdi-arrow_forward"></i>P&oacute;ngase en contacto con nosotros para obtener m&aacute;s informaci&oacute;n</a>
                </div>
            </div> 
        </section>
        <section id="desarrollador" class="js-section col-xs-12">
            <div class="js-container">
        		<div class="js-wizard" id="rootwizard2">
					<div class="js-wizard__nav">
						<div class="js-progress">
							<div class="js-progress__bar" id="progressBarPos"></div>
						</div>
						<ul class="js-nav nav nav-justified nav-pills">
                            <li class="active" id="li1Pos">
                                <a data-toggle="tab" aria-expanded="true" href="#tab1Pos" id="step1Pos">
                                    <span class="step"></span>
                                </a>
                                <span class="js-nav__title">Informaci&oacute;n</span>
                            </li>
                            <li id="li2Pos">
                                <a data-toggle="tab" aria-expanded="true" href="#tab2Pos" class="my-link-pos" id="step2Pos"> 
                                    <span class="step"></span>
                                </a>
                                <span class="js-nav__title">Caracter&iacute;sticas</span>
                            </li>
                            <li id="li3Pos">
                                <a data-toggle="tab" aria-expanded="true" href="#tab3Pos" class="my-link-pos" id="step3Pos"> 
                                    <span class="step"></span>
                                </a>
                                <span class="js-nav__title">Reglas del programa</span>
                            </li>
                            <li id="li4Pos">
                                <a data-toggle="tab" aria-expanded="false" href="#tab4Pos" class="my-link-pos" id="step4Pos"> 
                                    <span class="step"></span>
                                </a>
                                <span class="js-nav__title">Documentos de soporte</span>
                            </li>
						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane pane-pos active" id="tab1Pos">    
						    <div class="row-fluid">
								<div class="col-xs-12 js-wizard__title">
                                    <h2>Datos de la Empresa</h2>
								</div>
								<div class="col-xs-12 col-sm-6">
									<div class="col-xs-12 js-input">
										<label for="empresa">Nombre de la empresa</label>
										<input type="text" id="empresa">
									</div>
                                    <div class="col-xs-12 js-input">
                                        <label for="descripcion" class="col-2 col-form-label">Descripción de la empresa (M&aacute;x 300 caracteres)</label>
                                        <input type="text" id="descripcion" maxlength="300">
                                        <!-- <span class="mdl-textfield__limit" for="descripcion" data-limit="300">0/300</span> -->
                                    </div>
									<div class="col-xs-12 js-input js-select">
										<select class="selectpicker" id="vertical" data-actions-box="true" data-size="10" title="Indique los sectores que atiende" multiple>
							                <?php echo $verticales ?>
							            </select>
							        </div>
									<div class="col-xs-12 js-input js-select">
										<select class="selectpicker" id="pais" data-size="10" title="Países de Cobertura" multiple>
							                <?php echo $paises ?>
							            </select>
							        </div>
                                    <div class="col-xs-12 js-input">
                                        <label for="telefono" class="col-2 col-form-label">Teléfono</label>
                                        <input type="text" id="telefono">
                                    </div>
									<div class="col-xs-12 js-input">
									  	<label for="gerente">Nombre del contacto comercial</label>
										<input type="text" id="gerente" maxlength="100">
									</div>
									<div class="col-xs-12 js-input">
									  	<label for="cont_comercial">Email del contacto comercial</label>
									    <input type="email" id="cont_comercial">
									</div>
								</div>
								<div class="colxs-12 col-sm-6">
                                    <div class="col-xs-12 js-input">
                                        <label for="mov_comercial" class="col-2 col-form-label">M&oacute;vil del contacto comercial</label>
                                        <input type="text" id="mov_comercial">
                                    </div>
                                    <div class="col-xs-12 js-input">
                                        <label for="nom_tecnico" class="col-2 col-form-label">Nombre del contacto t&eacute;cnico</label>
                                        <input type="text" id="nom_tecnico">
                                    </div>
									<div class="col-xs-12 js-input">
								 	 	<label for="cont_tecnico" class="col-2 col-form-label">Email del contacto t&eacute;cnico</label>
									    <input type="email" id="cont_tecnico">
									</div>
									<div class="col-xs-12 js-input">
									  	<label for="url" class="col-2 col-form-label">P&aacute;gina web de la empresa</label>
									    <input type="url" id="url">
									</div>
                                    <div class="col-xs-12 js-input js-file js-flex">
                                        <input class="js-disabled" type="text" id="archivoDocumento" name="archivoDocumento" maxlength="10" placeholder="Suba su logo (2MB Max)" style="pointer-events: none">
                                        <div class="js-icon">
                                            <button type="button" class="mdl-button mdl-js-button mdl-button--icon js-disabled" onclick="subirFactura()">
                                                <i class="mdi mdi-backup"></i>
                                            </button>
                                        </div>
                                    </div>
									<div class="col-xs-12 text-right">
										<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button" onclick="guardarDesarrolladores();agregarDatos();">Guardar y continuar</button>
					            	</div>
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
                        <div class="tab-pane pane-pos" id="tab3Pos">
                            <div class="col-xs-12 text-center">
                                <h3>Reglas para participar en el programa</h3>
                            </div>
                            <div class="col-xs-12">
                                <p>1. El aspirante debe diligenciar su perfil a través del  micrositio </p>
                                <p>2. Diligenciar el formulario no garantiza que el perfil va a ser creado y la información publicada, se debe ajustar a la mayor cantidad de parámetros posibles</p>
                                <p>3. El Formulario y la descripción del alcance del servicio del desarrollador va a estar sujeto a verificación por parte del personal técnico de Aruba</p>
                                <p>4. El aspirante debe diligenciar una forma adicional donde autoriza a Aruba a postear su información en el sitio y a ser contactado en cualquier momento por otros socios de negocio, clientes o personal Aruba</p>
                                <p>5. Es mandatorio que el desarrollador al ser contactado a través del micrositio responda de manera eficiente y con celeridad a quienes lo requieran</p>
                                <p>6. El desarrollador debe una vez se dé de alta, acceder al track de entrenamientos que recibirá en su carta de bienvenida</p>
                            </div>
                        </div>
                        <div class="tab-pane pane-pos" id="tab4Pos">
                            <div class="col-xs-12 text-center">
                                <h2>DOCUMENTOS SOPORTE</h2>
                            </div>
                            <div class="col-xs-12">
                                <p>1. Carta de autorización por parte del desarrollador para postear su información en el portal de Aruba</p>
                                <p>2. Documento del programa</p>
                                <p class="m-l-20">a. Reglas del programa</p>
                                <p class="m-l-20">b. Beneficios</p>
                                <p class="m-l-40">i. Incentivo por cada desarrollo exitoso y documentado</p>
                                <p class="m-l-40">ii. Demo kit</p>
                                <p class="m-l-40">iii. Training No formal – sesiones SEs</p>
                                <p>3. Formato para la documentación del caso de éxito</p>
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
                            <li><a href="https://twitter.com/ArubaEMEA" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/arubanetworks" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/aruba-a-hewlett-packard-enterprise-company/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-8">
                        <div class="col-sm-4">
                            <h2>EMPRESA</h2>
                            <ul>
                                <li><a href="https://www.arubanetworks.com/es/compania/acerca-de-nosotros/">Acerca de nosotros</a></li>
                                <li><a href="https://careers.arubanetworks.com/" target="_blank">Empleo</a></li>
                                <li><a href="https://www.arubanetworks.com/es/compania/pongase-en-contacto-con-nosotros/">P&oacute;ngase en contacto con nostros</a></li>
                                <li><a href="https://www.arubanetworks.com/es/compania/centro-de-prensa/">Multimedia</a></li>
                                <li><a href="https://www.arubanetworks.com/es/compania/notas-de-prensa/">Notas de prensa</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <h2>EXPERIMENTE</h2>
                            <ul>
                                <li><a href="https://community.arubanetworks.com/" target="_blank">Comunidad Airheads</a></li>
                                <li><a href="https://community.arubanetworks.com/t5/Blogs/ct-p/news?source=footer" target="_blank">Blogs</a></li>
                                <li><a href="https://www.arubanetworks.com/es/recursos/#wpcf-type=1">Casos pr&aacute;cticos</a></li>
                                <li><a href="https://www.arubanetworks.com/es/compania/eventos/">Eventos</a></li>
                                <li><a href="https://partner.hpe.com/aruba?TYPE=33554433&REALMOID=06-0009a4f6-684b-17f6-b8e5-70ef10c3d05d&GUID=&SMAUTHREASON=0&METHOD=GET&SMAGENTNAME=1X6WKX2K3YgnwZ4JKRWBNAONV95wtWOWI4uByjr6FVDAMEDB0zkkX4EeZVG4GCnp&TARGET=$SM$https%3a%2f%2fpartner%2ehpe%2ecom%2fgroup%2fupp-aruba%2fhome" target="_blank">Partner Ready for Networking</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <h2>SERVICIO T&Eacute;CNICO</h2>
                            <ul>
                                <li><a href="https://www.arubanetworks.com/es/servicios-de-apoyo/ponerse-en-contacto-con-el-servicio-tecnico/">Contacte servicio t&eacute;cnico</a></li>
                                <li><a href="https://cf.passport.hpe.com/hppcf/login.do?cc=US&lang=EN&applandingpage=https%3a%2f%2fh10145.www1.hpe.com%2fhelp%2fhelp_questions.aspx%3fl2id%3d48%26SelectedTab%3d3&hpappid=118682_MYNETWORKING_PRO_HPE" target="_blank">Abrir un caso</a></li>
                                <li><a href="https://www.arubanetworks.com/es/servicios-de-apoyo/servicios-profesionales/">Servicios profesionales</a></li>
                                <li><a href="https://cf.passport.hpe.com/hppcf/login.do?cc=US&lang=EN&applandingpage=https%3a%2f%2fh10145.www1.hpe.com%2flicense%2fGenerateLicense.aspx%3fsmp%3d1&hpappid=118682_MYNETWORKING_PRO_HPE"  target="_blank">Inicio de sesi&oacute;n con licencia</a></li>
                                <li><a href="https://ase.arubanetworks.com/?source=footer" target="_blank">Aruba Solution Exchange</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="js-footer col-xs-12">
                    <div class="col-sm-7 js-politicas">
                        <a href="https://www.hpe.com/es/es/legal/privacy.html" target="_blank">Pol&iacute;tica de privacidad</a>
                        <a href="https://www.arubanetworks.com/es/condiciones-del-servicio/">Condiciones del servicio</a>
                        <a href="">Cookies</a>
                        <a href="https://www.arubanetworks.com/es/mapa-del-sitio/">Mapa del sitio</a>
                        <a href="https://www.arubanetworks.com/es/avisos-legales/">Avisos legales</a>
                    </div>
                    <div class="col-sm-5">
                        <p>&copy; Copyright 2018 Hewlett Packard Enterprise Development LP</p>
                    </div>
                </div>
            </div>
        </footer>
        <form id="frmArchivo" method="post" style="display: none;">
            <input id="archivo" type="file" name="archivo" />
            <input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>
        </form>
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
            // init();
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
                $('select').selectpicker('mobile');
            } else {
                $('select').selectpicker();
            }
        </script>
    </body>
</html>