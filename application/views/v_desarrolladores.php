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
            	<ul class="nav nav-tabs" role="tablist">
				    <li class="nav-item">
				      <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link" data-toggle="tab" href="#menu1">Menu 1</a>
				    </li>
				</ul>
            	<div class="tab-content">
    				<div id="home" class="container tab-pane active"><br>
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
							<label for="example-text-input" class="col-2 col-form-label">País</label>
							<div class="col-10">
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
				        </div>
						<div class="form-group row">
						  <label for="example-text-input" class="col-2 col-form-label">Gerente</label>
						  <div class="col-10">
						    <input class="form-control" type="text" placeholder="Nombre del gerente" id="gerente" maxlength="50" onkeypress="return soloLetras(event);">
						  </div>
						</div>
						<div class="form-group row">
						  <label for="example-text-input" class="col-2 col-form-label">Contacto Comercial</label>
						  <div class="col-10">
						    <input class="form-control" type="email" placeholder="Email del contacto comercial" id="cont_comercial">
						  </div>
						</div>
						<div class="form-group row">
						  <label for="example-text-input" class="col-2 col-form-label">Contacto técnico</label>
						  <div class="col-10">
						    <input class="form-control" type="email" placeholder="Email del contacto técnico" id="cont_tecnico">
						  </div>
						</div>
						<div class="form-group row">
						  <label for="example-url-input" class="col-2 col-form-label">URL</label>
						  <div class="col-10">
						    <input class="form-control" type="url" placeholder="URL de su página web" id="url">
						  </div>
						</div>
						<div class="form-group row">
						  <label for="example-tel-input" class="col-2 col-form-label">Teléfono</label>
						  <div class="col-10">
						    <input class="form-control" type="tel" placeholder="1-(555)-555-5555" id="telefono">
						  </div>
						</div>
						<div class="form-group row">
							<button class="mdl-button mdl-js-button btn-primary btn-guardar" onclick="guardarDesarrolladores()">
			                    Guardar
			                </button>
		            	</div>
    				</div>
    				<div id="menu1" class="container tab-pane fade"><br>
				      <form>
				      	  <h3>Portales Cautivos</h3>
						  <fieldset class="form-group">
						    <legend>Multiples idiomas</legend>
						    <div class="form-check">
						      <label class="form-check-label">
						        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1">
						        Sí
						      </label>
						    </div>
						    <div class="form-check">
						      <label class="form-check-label">
						        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
						        No
						      </label>
						    </div>
						    <div class="form-group row">
							  <label for="example-text-input" class="col-xs-12 col-form-label">Observacion</label>
							  <div class="col-xs-5">
							    <input class="form-control" type="text" placeholder="Observación" id="observacion1" maxlength="50">
							  </div>
							</div>
						    <legend>Multiples portales</legend>
						    <div class="form-check">
						    <label class="form-check-label">
						        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3">
						        Sí
						      </label>
						    </div>
						    <div class="form-check">
						    <label class="form-check-label">
						        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios4" value="option4">
						        No
						      </label>
						    </div>
						    <div class="form-group row">
							  <label for="example-text-input" class="col-xs-12 col-form-label">Observacion</label>
							  <div class="col-xs-5">
							    <input class="form-control" type="text" placeholder="Observación" id="observacion2" maxlength="50">
							  </div>
							</div>
						    <legend>E-mail de Bienvenido</legend>
						    <div class="form-check">
						    <label class="form-check-label">
						        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios5" value="option5" >
						        Sí
						      </label>
						    </div>
						    <div class="form-check">
						    <label class="form-check-label">
						        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios6" value="option6" >
						        No
						      </label>
						    </div>
						    <div class="form-group row">
							  <label for="example-text-input" class="col-xs-12 col-form-label">Observacion</label>
							  <div class="col-xs-5">
							    <input class="form-control" type="text" placeholder="Observación" id="observacion3" maxlength="50">
							  </div>
							</div>
						    <legend>Modelos de portales predefinidos</legend>
						    <div class="form-check">
						    <label class="form-check-label">
						        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios7" value="option7" >
						        Sí
						      </label>
						    </div>
						    <div class="form-check">
						    <label class="form-check-label">
						        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios8" value="option8" >
						        No
						      </label>
						    </div>
						    <div class="form-group row">
							  <label for="example-text-input" class="col-xs-12 col-form-label">Observacion</label>
							  <div class="col-xs-5">
							    <input class="form-control" type="text" placeholder="Observación" id="observacion4" maxlength="50">
							  </div>
							</div>
						    <legend>Configurables</legend>
						    <div class="form-check">
						    <label class="form-check-label">
						        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios9" value="option9" >
						        Sí
						      </label>
						    </div>
						    <div class="form-check">
						    <label class="form-check-label">
						        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios10" value="option10" >
						        No
						      </label>
						    </div>
						    <div class="form-group row">
							  <label for="example-text-input" class="col-xs-12 col-form-label">Observacion</label>
							  <div class="col-xs-5">
							    <input class="form-control" type="text" placeholder="Observación" id="observacion5" maxlength="50">
							  </div>
							</div>
						    <legend>Portal responsivo</legend>
						    <div class="form-check">
						    <label class="form-check-label">
						        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios11" value="option11" >
						        Sí
						      </label>
						    </div>
						    <div class="form-check">
						    <label class="form-check-label">
						        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios12" value="option12" >
						        No
						      </label>
						    </div>
						    <div class="form-group row">
							  <label for="example-text-input" class="col-xs-12 col-form-label">Observacion</label>
							  <div class="col-xs-5">
							    <input class="form-control" type="text" placeholder="Observación" id="observacion6" maxlength="50">
							  </div>
							</div>
						    <legend>Bienvenido de vuelta</legend>
						    <div class="form-check">
						    <label class="form-check-label">
						        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios13" value="option13" >
						        Sí
						      </label>
						    </div>
						    <div class="form-check">
						    <label class="form-check-label">
						        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios14" value="option14" >
						        No
						      </label>
						    </div>
						    <div class="form-group row">
							  <label for="example-text-input" class="col-xs-12 col-form-label">Observacion</label>
							  <div class="col-xs-5">
							    <input class="form-control" type="text" placeholder="Observación" id="observacion7" maxlength="50">
							  </div>
							</div>
						    <legend>Perfil Progresivo</legend>
						    <div class="form-check ">
						    <label class="form-check-label">
						        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios15" value="option15" >
						        Sí
						      </label>
						    </div>
						    <div class="form-check">
						    <label class="form-check-label">
						        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios16" value="option16" >
						        No
						      </label>
						    </div>
						    <div class="form-group row">
							  <label for="example-text-input" class="col-xs-12 col-form-label">Observacion</label>
							  <div class="col-xs-5">
							    <input class="form-control" type="text" placeholder="Observación" id="observacion8" maxlength="50">
							  </div>
							</div>
						    <legend>Preguntas Personalizadas</legend>
						    <div class="form-check">
						    <label class="form-check-label">
						        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios17" value="option17" >
						        Sí
						      </label>
						    </div>
						    <div class="form-check">
						    <label class="form-check-label">
						        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios18" value="option18" >
						        No
						      </label>
						    </div>
						    <div class="form-group row">
							  <label for="example-text-input" class="col-xs-12 col-form-label">Observacion</label>
							  <div class="col-xs-5">
							    <input class="form-control" type="text" placeholder="Observación" id="observacion9" maxlength="50">
							  </div>
							</div>
						  </fieldset>
						  <button type="submit" class="btn btn-primary">Guardar</button>
						</form>
				    </div>
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