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
    	<title>Aruba | Programa de Partners Desenvolvedores</title>
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
                        <li><a href="#">Entre em contato conosco</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div style="height: 90px"></div>
        <section id="programa" class="js-section">
            <div class="js-fondo--programa"></div>
            <div class="js-container">
                <h2>Solicitude de participação no Programa para parceiros desenvolvedores</h2>
            </div>
        </section>
        <section id="partner" class="js-section">
            <div class="js-container js-flex js-partner">
                <div class="js-partner--imagen js-partner--absolute"></div>
                <div class="js-partner--contenido">
                    <h2>Convidamos você a fazer parte do Programa para Parceiros Desenvolvedores</h2>
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
                                <span class="js-nav__title">Informação</span>
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
                                <span class="js-nav__title">Regras do programa</span>
                            </li>
                            <li id="li4Pos">
                                <a data-toggle="tab" aria-expanded="false" href="#tab4Pos" class="my-link-pos" id="step4Pos"> 
                                    <span class="step"></span>
                                </a>
                                <span class="js-nav__title">Documentos de suporte</span>
                            </li>
						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane pane-pos active" id="tab1Pos">    
						    <div class="row-fluid">
								<div class="col-xs-12 js-wizard__title">
                                    <h2>Dados da empresa</h2>
								</div>
								<div class="col-xs-12 col-sm-6">
									<div class="col-xs-12 js-input">
										<label for="empresa">Nome da empresa</label>
										<input type="text" id="empresa">
									</div>
                                    <div class="col-xs-12 js-input">
                                        <label for="descripcion" class="col-2 col-form-label">Descrição da empresa (m&aacute;ximo de 300 caracteres)</label>
                                        <input type="text" id="descripcion" maxlength="300">
                                        <!-- <span class="mdl-textfield__limit" for="descripcion" data-limit="300">0/300</span> -->
                                    </div>
									<div class="col-xs-12 js-input js-select">
										<select class="selectpicker" id="vertical" data-actions-box="true" data-size="10" title="Indique os setores que você atende" multiple>
							                <?php echo $verticales ?>
							            </select>
							        </div>
									<div class="col-xs-12 js-input js-select">
										<select class="selectpicker" id="pais" data-size="10" title="Países de cobertura" multiple>
							                <?php echo $paises ?>
							            </select>
							        </div>
                                    <div class="col-xs-12 js-input">
                                        <label for="telefono" class="col-2 col-form-label">Telefone</label>
                                        <input type="text" id="telefono">
                                    </div>
									<div class="col-xs-12 js-input">
									  	<label for="gerente">Nome do contato comercial</label>
										<input type="text" id="gerente" maxlength="100">
									</div>
									<div class="col-xs-12 js-input">
									  	<label for="cont_comercial">E-mail do contato comercial</label>
									    <input type="email" id="cont_comercial">
									</div>
								</div>
								<div class="colxs-12 col-sm-6">
                                    <div class="col-xs-12 js-input">
                                        <label for="mov_comercial" class="col-2 col-form-label">N&uacute;mero de telefone celular do contato comercial</label>
                                        <input type="text" id="mov_comercial">
                                    </div>
                                    <div class="col-xs-12 js-input">
                                        <label for="nom_tecnico" class="col-2 col-form-label">Nome do contato t&eacute;cnico</label>
                                        <input type="text" id="nom_tecnico">
                                    </div>
									<div class="col-xs-12 js-input">
								 	 	<label for="cont_tecnico" class="col-2 col-form-label">E-mail do contato t&eacute;cnico</label>
									    <input type="email" id="cont_tecnico">
									</div>
									<div class="col-xs-12 js-input">
									  	<label for="url" class="col-2 col-form-label">Website da empresa</label>
									    <input type="url" id="url">
									</div>
                                    <div class="col-xs-12 js-input js-file js-flex">
                                        <input class="js-disabled" type="text" id="archivoDocumento" name="archivoDocumento" maxlength="10" placeholder="Envie seu logotipo (2MB Max)" style="pointer-events: none">
                                        <div class="js-icon">
                                            <button type="button" class="mdl-button mdl-js-button mdl-button--icon js-disabled" onclick="subirFactura()">
                                                <i class="mdi mdi-backup"></i>
                                            </button>
                                        </div>
                                    </div>
									<div class="col-xs-12 text-right">
										<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button" onclick="guardarDesarrolladores();agregarDatos();">Salvar e continuar</button>
					            	</div>
								</div>
							</div>
						</div>
                        <div class="tab-pane pane-pos" id="tab2Pos">
                            <div class="row-fluid">
                                <?php echo $html ?>
							  	<div class="col-xs-12 text-right">
							  		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button btn-guardar-deps" type="button" onclick="guardarDatosDeps()">Salvar e continuar</button>
							  	</div>                                           
                            </div>
                        </div>
                        <div class="tab-pane pane-pos" id="tab3Pos">
                            <h3>Regras para participar no programa</h3>
                            <ol>
                                <li>O candidato deve preencher seu perfil através do microsite.</li>
                                <li>A diligência do formulário não garante que o perfil será criado e as informações publicadas devem ser ajustadas ao maior número possível de parâmetros.</li>
                                <li>O formulário e a descrição do escopo de serviço do desenvolvedor estarão sujeitas a verificação pela equipe técnica de Aruba.</li>
                                <li>O candidato deve preencher um formulário adicional no qual autoriza a Aruba a publicar suas informações no site e ser contatado a qualquer momento por outros parceiros de negócios, clientes ou funcionários da Aruba.</li>
                                <li>É obrigatório que o desenvolvedor a ser contatado pelo microsite responda de maneira eficiente e rápida àqueles que o solicitem.</li>
                                <li>O desenvolvedor deve fazer login uma vez, acessar a trilha de treinamento a qual receberá em sua carta de boas-vindas.</li>
                            </ol>
                            <div class="col-xs-12 text-right">
                                <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button" href="Home">Declínio</a>
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button" type="button" onclick="nextSoporte()">Aceitar</button>
                            </div>
                        </div>
                        <div class="tab-pane pane-pos" id="tab4Pos">
                            <h3>Documentos de suporte</h3>
                            <ol>
                                <li><a class="js-link" href="<?php echo RUTA_PDF?>Carta_autorizacion.pdf" target="_blank">Carta de autorização</a> do desenvolvedor para publicar suas informações no site da Aruba</li>
                                <li><a class="js-link" href="<?php echo RUTA_PDF?>Documento_programa.pdf" target="_blank">Documento do programa</a></li>
                                <ol class="js-letras">
                                    <li>Regras do programa</li>
                                    <li>Benef&iacute;cios</li>
                                    <ol class="js-romanos">
                                        <li>Incentivo para cada desenvolvimento bem sucedido e documentado</li>
                                        <li>Kit de demonstração</li>
                                        <li>Treinamento não formal - sessões de SEs</li>
                                    </ol>
                                </ol>
                                <li>Formato para documentação do caso de sucesso</li>
                                <p>Todas essas informações devem ser enviadas pelo correio para Marcela Diaz - <a href="mailto:marcela.diaz.saavedra@hpe.com">marcela.diaz.saavedra@hpe.com</a></p>
                            </ol>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button" type="button" onclick="finalizar()">Terminar</button>
                        </div>
					</div>
				</div>
            </div>
        </section>
        <footer class="js-section col-xs-12">
            <div class="js-container">
                <div class="js-contendo col-xs-12 p-0">
                    <div class="col-sm-4">
                        <h2>SIGA-NOS</h2>
                        <ul class="js-redes">
                            <li><a href="https://twitter.com/ArubaEMEA" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/arubanetworks" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/aruba-a-hewlett-packard-enterprise-company/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-8">
                        <div class="col-sm-4">
                            <h2>COMPANHIA</h2>
                            <ul>
                                <li><a href="https://www.arubanetworks.com/es/compania/acerca-de-nosotros/">Quem somos</a></li>
                                <li><a href="https://careers.arubanetworks.com/" target="_blank">Carreiras</a></li>
                                <li><a href="https://www.arubanetworks.com/es/compania/pongase-en-contacto-con-nosotros/">Fale conosco</a></li>
                                <li><a href="https://www.arubanetworks.com/es/compania/centro-de-prensa/">Multimedia</a></li>
                                <li><a href="https://www.arubanetworks.com/es/compania/notas-de-prensa/">Os comunicados de imprensa</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <h2>EXPERIÊNCIA</h2>
                            <ul>
                                <li><a href="https://community.arubanetworks.com/" target="_blank">Comunidade Airheads</a></li>
                                <li><a href="https://community.arubanetworks.com/t5/Blogs/ct-p/news?source=footer" target="_blank">Blogs</a></li>
                                <li><a href="https://www.arubanetworks.com/es/recursos/#wpcf-type=1">Estudos de caso</a></li>
                                <li><a href="https://www.arubanetworks.com/es/compania/eventos/">Eventos</a></li>
                                <li><a href="https://partner.hpe.com/aruba?TYPE=33554433&REALMOID=06-0009a4f6-684b-17f6-b8e5-70ef10c3d05d&GUID=&SMAUTHREASON=0&METHOD=GET&SMAGENTNAME=1X6WKX2K3YgnwZ4JKRWBNAONV95wtWOWI4uByjr6FVDAMEDB0zkkX4EeZVG4GCnp&TARGET=$SM$https%3a%2f%2fpartner%2ehpe%2ecom%2fgroup%2fupp-aruba%2fhome" target="_blank">Partner Ready for Networking</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <h2>APOIO</h2>
                            <ul>
                                <li><a href="https://www.arubanetworks.com/es/servicios-de-apoyo/ponerse-en-contacto-con-el-servicio-tecnico/">Contato o Suporte</a></li>
                                <li><a href="https://cf.passport.hpe.com/hppcf/login.do?cc=US&lang=EN&applandingpage=https%3a%2f%2fh10145.www1.hpe.com%2fhelp%2fhelp_questions.aspx%3fl2id%3d48%26SelectedTab%3d3&hpappid=118682_MYNETWORKING_PRO_HPE" target="_blank">Abrir um caso</a></li>
                                <li><a href="https://www.arubanetworks.com/es/servicios-de-apoyo/servicios-profesionales/">Serviços profissionais</a></li>
                                <li><a href="https://cf.passport.hpe.com/hppcf/login.do?cc=US&lang=EN&applandingpage=https%3a%2f%2fh10145.www1.hpe.com%2flicense%2fGenerateLicense.aspx%3fsmp%3d1&hpappid=118682_MYNETWORKING_PRO_HPE"  target="_blank">Entre licenciada</a></li>
                                <li><a href="https://ase.arubanetworks.com/?source=footer" target="_blank">Aruba Solution Exchange</a></li>
                                <li><a href="https://www.arubanetworks.com/latam/soluciones/servicios-de-ubicacion/" target="_blank">Aruba Solution Exchange</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="js-footer col-xs-12">
                    <div class="col-sm-7 js-politicas">
                        <a href="https://www.hpe.com/es/es/legal/privacy.html" target="_blank">Pol&iacute;tica de privacidade</a>
                        <a href="https://www.arubanetworks.com/es/condiciones-del-servicio/">Termos de serviço</a>
                        <a href="">Cookies</a>
                        <a href="https://www.arubanetworks.com/es/mapa-del-sitio/">Mapa do site</a>
                        <a href="https://www.arubanetworks.com/es/avisos-legales/">Jurídico</a>
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
            $('#step2Pos').css('pointer-events', 'none');
            $('#step3Pos').css('pointer-events', 'none');
            $('#step4Pos').css('pointer-events', 'none');
        </script>
    </body>
</html>