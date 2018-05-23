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
                        <div class="form-group m-0">
                            <input type="text" class="form-control" placeholder="Search" id="buscador">
                        </div>
                        <button type="submit" class="btn btn-default" onclick="buscadorPartner()">Submit</button>
                        <div class="js-select">
                            <select class="selectpicker" title="Español" id="geografia" onchange="filtroGeografia()">
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
        </nav>
        <section id="principal">
            <div class="js-container">
                <div class="js-contenido">
                    <div class="js-contenido__left">
                        <h2>Partners del Programa Meridian Engage</h2>
                        <p>Si usted está creando una app m&oacute;vil desde cero, comenzando con un Meridian AppMaker, o integrando datos de servicios de ubicaci&oacute;n en una plataforma existente, nuestros partners de clase mundial est&aacute;n aqu&iacute; para ayudarle.</p>
                    </div>
                    <div class="js-contenido__right">
                        <div class="js-contenido--imagen">
                            <img src="<?php echo RUTA_IMG?>fondo/fondo_meridian.jpg" alt="">
                        </div>
                        <div class="js-contenido--texto">
                            <p>Cont&aacute;ctenos para conocer m&aacute;s</p>
                            <div class="js-contenido--filtro">
                                <div class="js-select">
                                    <select class="selectpicker" title="Por cobertura geográfica" id="geografia" onchange="filtroGeografia()">
                                        <option value="">Por cobertura geográfica</option>
                                        <option value="Latinoamérica">Latinoam&eacute;rica</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Panamá">Panam&aacute;</option>
                                        <option value="Américas">Am&eacute;ricas</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Brasil">Brasil</option>
                                        <option value="Remoto">Remoto</option>
                                    </select>
                                </div>
                                <div class="js-select">
                                    <select class="selectpicker" title="Por indutria" id="industria" onchange="filtrarIndustria()">
                                        <option value="">Por indutria</option>
                                        <option value="Centros Comerciales">Centros Comerciales</option>
                                        <option value="Educación">Educaci&oacute;n</option>
                                        <option value="Retail">Retail</option>
                                        <option value="Salud">Salud</option>
                                        <option value="Aeropuertos">Aeropuertos</option>
                                        <option value="Plazas públicas">Plazas p&uacute;blicas</option>
                                        <option value="Transportes">Transportes</option>
                                        <option value="Hotelería / Restaurantes">Hoteler&iacute;a / Restaurantes</option>
                                        <option value="Manufactura">Manufactura</option>
                                    </select>
                                </div>
                                <button class="mdl-button mdl-js-button mdl-button--icon" onclick="buscarPartners()">
                                    <i class="mdi mdi-search"></i>
                                </button>   
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-cards">
                    <div class="js-card--partner js-card--partner1">
                        <div class="js-card--partner__front">
                            <div class="js-card--partner__imagen">
                                <img src="<?php echo RUTA_IMG?>logo/zoox.png" alt="">
                            </div>
                            <div class="js-card--partner__contenido">
                                <p>ZOOX se dedica específicamente a brindar soluciones innovadoras a través de la conectividad de WIFI, brindando Social login a través de redes sociales, permitiendo generar campañas de promoción, videos publicitarios, encuestas, encuestas NPS, recolectar data de los usuarios (BigData), people analytics, heatmap, flowmap, etc. Y todo esto utilizando la infraestructura ya instalada de Access Points.</p>
                                <!-- <a href="">Alcance</a> -->
                            </div>
                            <div class="col-xs-12 p-0 js-card--partner__footer">
                                <div class="col-sm-9 col-xs-8 p-l-0">
                                    <div class="js-card--footer__texto">
                                        <p>Contacto Comercial</p>
                                        <a href="mailto:marcelo.cardenuto@skyfii.com">marcelo.cardenuto@skyfii.com</a>
                                    </div>
                                    <div class="js-card--footer__texto">
                                        <p>Contacto Técnico</p>
                                        <a href="mailto:demis.cunha@skyfii.com">demis.cunha@skyfii.com</a>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-4 js--card--footer__contact">
                                    <button class="mdl-button mdl-js-button mdl-button--icon">
                                        <i class="mdi mdi-email"></i>
                                    </button>
                                    <button class="mdl-button mdl-js-button mdl-button--icon">
                                        <i class="mdi mdi-chat"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="js-card--partner__back">
                            <h2>Alcance de la Soluci&oacute;n</h2>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Portales Cautivos</td>
                                        <td><i class="mdi mdi-done"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Analítica</td>
                                        <td><i class="mdi mdi-close"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Marketing</td>
                                        <td><i class="mdi mdi-done"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Integración</td>
                                        <td><i class="mdi mdi-done"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Reportes</td>
                                        <td><i class="mdi mdi-close"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Monitoreo infraestructura</td>
                                        <td><i class="mdi mdi-done"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Integración con POS / CRM</td>
                                        <td><i class="mdi mdi-done"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Adquisición de datos</td>
                                        <td><i class="mdi mdi-done"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Verticalización</td>
                                        <td><i class="mdi mdi-done"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="js-card--partner js-card--partner1">
                        <div class="js-card--partner__front">
                            <div class="js-card--partner__imagen">
                                <img src="<?php echo RUTA_IMG?>logo/elun.png" alt="">
                            </div>
                            <div class="js-card--partner__contenido">
                                <p>SINÓPTICO es una plataforma móvil de monitoreo oportuna y simple, de indicadores relativos al conteo de personas y estadísticas relacionadas. La aplicación está orientado a usuarios de Banca, Retail, Minería e Industria que requieran conocer la cantidad de personas que se encuentran en los espacios de su compañía.</p>
                            </div>
                            <div class="col-xs-12 p-0 js-card--partner__footer">
                                <div class="col-sm-9 col-xs-8 p-l-0">
                                    <div class="js-card--footer__texto">
                                        <p>Contacto Comercial</p>
                                        <a href="mailto:marcelo.cardenuto@skyfii.com">marcelo.cardenuto@skyfii.com</a>
                                    </div>
                                    <div class="js-card--footer__texto">
                                        <p>Contacto Técnico</p>
                                        <a href="mailto:demis.cunha@skyfii.com">demis.cunha@skyfii.com</a>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-4 js--card--footer__contact">
                                    <button class="mdl-button mdl-js-button mdl-button--icon">
                                        <i class="mdi mdi-email"></i>
                                    </button>
                                    <button class="mdl-button mdl-js-button mdl-button--icon">
                                        <i class="mdi mdi-chat"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="js-card--partner__back">
                            <div class="js-card--par">
                                <h2>Alcance de la Soluci&oacute;n</h2>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Portales Cautivos</td>
                                            <td><i class="mdi mdi-done"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Analítica</td>
                                            <td><i class="mdi mdi-close"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Marketing</td>
                                            <td><i class="mdi mdi-done"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Integración</td>
                                            <td><i class="mdi mdi-done"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Reportes</td>
                                            <td><i class="mdi mdi-close"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Monitoreo infraestructura</td>
                                            <td><i class="mdi mdi-done"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Integración con POS / CRM</td>
                                            <td><i class="mdi mdi-done"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Adquisición de datos</td>
                                            <td><i class="mdi mdi-done"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Verticalización</td>
                                            <td><i class="mdi mdi-done"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="js-card--partner js-card--partner1">
                        <div class="js-card--partner__front">
                            <div class="js-card--partner__imagen">
                                <img src="<?php echo RUTA_IMG?>logo/datawifi.png" alt="">
                            </div>
                            <div class="js-card--partner__contenido">
                                <p>DataWifi es la plataforma de alta capacidad para soluciones de Autenticación, Análisis y Marketing más usada en Colombia, nuestra tecnología utiliza las redes Wi-Fi para Atraer, retener y recompensar a sus consumidores.</p>
                            </div>
                            <div class="col-xs-12 p-0 js-card--partner__footer">
                                <div class="col-sm-9 col-xs-8 p-l-0">
                                    <div class="js-card--footer__texto">
                                        <p>Contacto Comercial</p>
                                        <a href="mailto:marcelo.cardenuto@skyfii.com">marcelo.cardenuto@skyfii.com</a>
                                    </div>
                                    <div class="js-card--footer__texto">
                                        <p>Contacto Técnico</p>
                                        <a href="mailto:demis.cunha@skyfii.com">demis.cunha@skyfii.com</a>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-4 js--card--footer__contact">
                                    <button class="mdl-button mdl-js-button mdl-button--icon">
                                        <i class="mdi mdi-email"></i>
                                    </button>
                                    <button class="mdl-button mdl-js-button mdl-button--icon">
                                        <i class="mdi mdi-chat"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="js-card--partner__back">
                            <h2>Alcance de la Soluci&oacute;n</h2>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Portales Cautivos</td>
                                        <td><i class="mdi mdi-done"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Analítica</td>
                                        <td><i class="mdi mdi-close"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Marketing</td>
                                        <td><i class="mdi mdi-done"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Integración</td>
                                        <td><i class="mdi mdi-done"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Reportes</td>
                                        <td><i class="mdi mdi-close"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Monitoreo infraestructura</td>
                                        <td><i class="mdi mdi-done"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Integración con POS / CRM</td>
                                        <td><i class="mdi mdi-done"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Adquisición de datos</td>
                                        <td><i class="mdi mdi-done"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Verticalización</td>
                                        <td><i class="mdi mdi-done"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="js-card--partner js-card--partner2">
                        <div class="js-card--partner__front">
                            <div class="js-card--partner__imagen">
                                <img src="<?php echo RUTA_IMG?>logo/skyfii.png" alt="">
                            </div>
                            <div class="js-card--partner__contenido">
                                <p>Skyfii es una plataforma analítica para redes WiFi que recoge datos y analiza el comportamiento de los visitantes en lugares con WiFi público. Estos datos se utilizan para agrupar a los visitantes basados en sus intereses y facilitar la comunicación a través de canales de comunicación como vídeo, correo electrónico o SMS.</p>
                            </div>
                            <div class="col-xs-12 p-0 js-card--partner__footer">
                                <div class="col-sm-9 col-xs-8 p-l-0">
                                    <div class="js-card--footer__texto">
                                        <p>Contacto Comercial</p>
                                        <a href="mailto:marcelo.cardenuto@skyfii.com">marcelo.cardenuto@skyfii.com</a>
                                    </div>
                                    <div class="js-card--footer__texto">
                                        <p>Contacto Técnico</p>
                                        <a href="mailto:demis.cunha@skyfii.com">demis.cunha@skyfii.com</a>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-4 js--card--footer__contact">
                                    <button class="mdl-button mdl-js-button mdl-button--icon">
                                        <i class="mdi mdi-email"></i>
                                    </button>
                                    <button class="mdl-button mdl-js-button mdl-button--icon">
                                        <i class="mdi mdi-chat"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="js-card--partner__back">
                            <div class="js-card--par">
                                <h2>Alcance de la Soluci&oacute;n</h2>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Portales Cautivos</td>
                                            <td><i class="mdi mdi-done"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Analítica</td>
                                            <td><i class="mdi mdi-close"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Marketing</td>
                                            <td><i class="mdi mdi-done"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Integración</td>
                                            <td><i class="mdi mdi-done"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Reportes</td>
                                            <td><i class="mdi mdi-close"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Monitoreo infraestructura</td>
                                            <td><i class="mdi mdi-done"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Integración con POS / CRM</td>
                                            <td><i class="mdi mdi-done"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Adquisición de datos</td>
                                            <td><i class="mdi mdi-done"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Verticalización</td>
                                            <td><i class="mdi mdi-done"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="js-card--partner js-card--partner2">
                        <div class="js-card--partner__front">
                            <div class="js-card--partner__imagen">
                                <img src="<?php echo RUTA_IMG?>logo/ohmyfi.png" alt="">
                            </div>
                            <div class="js-card--partner__contenido">
                                <p>Convierte el WiFi gratis que ofreces a tus clientes en estrategias de venta, comunicación, fidelización y entretenimiento, logrando así aumentar tus ventas promedio, tiempo de permanencia, atrae nuevos clientes y fideliza a los actuales sacándole todo el provecho al Internet en tus puntos de venta.</p>
                            </div>
                            <div class="col-xs-12 p-0 js-card--partner__footer">
                                <div class="col-sm-9 col-xs-8 p-l-0">
                                    <div class="js-card--footer__texto">
                                        <p>Contacto Comercial</p>
                                        <a href="mailto:marcelo.cardenuto@skyfii.com">marcelo.cardenuto@skyfii.com</a>
                                    </div>
                                    <div class="js-card--footer__texto">
                                        <p>Contacto Técnico</p>
                                        <a href="mailto:demis.cunha@skyfii.com">demis.cunha@skyfii.com</a>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-4 js--card--footer__contact">
                                    <button class="mdl-button mdl-js-button mdl-button--icon">
                                        <i class="mdi mdi-email"></i>
                                    </button>
                                    <button class="mdl-button mdl-js-button mdl-button--icon">
                                        <i class="mdi mdi-chat"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="js-card--partner__back">
                            <div class="js-card--par">
                                <h2>Alcance de la Soluci&oacute;n</h2>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Portales Cautivos</td>
                                            <td><i class="mdi mdi-done"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Analítica</td>
                                            <td><i class="mdi mdi-close"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Marketing</td>
                                            <td><i class="mdi mdi-done"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Integración</td>
                                            <td><i class="mdi mdi-done"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Reportes</td>
                                            <td><i class="mdi mdi-close"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Monitoreo infraestructura</td>
                                            <td><i class="mdi mdi-done"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Integración con POS / CRM</td>
                                            <td><i class="mdi mdi-done"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Adquisición de datos</td>
                                            <td><i class="mdi mdi-done"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Verticalización</td>
                                            <td><i class="mdi mdi-done"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="js-card--partner js-card--partner2">
                        <div class="js-card--partner__front">
                            <div class="js-card--partner__imagen">
                                <img src="<?php echo RUTA_IMG?>logo/lab3.png" alt="">
                            </div>
                            <div class="js-card--partner__contenido">
                                <p>Las soluciones de Lab3 están diseñadas para promover la integración real entre los datos, la infraestructura y los dispositivos del usuario, creando un entorno verdaderamente de movilidad centrado en la productividad, la seguridad y la experiencia del usuario. BYOD, usuarios móviles, redes programables, BLE y UX son el foco de nuestros productos.</p>
                            </div>
                            <div class="col-xs-12 p-0 js-card--partner__footer">
                                <div class="col-sm-9 col-xs-8 p-l-0">
                                    <div class="js-card--footer__texto">
                                        <p>Contacto Comercial</p>
                                        <a href="mailto:marcelo.cardenuto@skyfii.com">marcelo.cardenuto@skyfii.com</a>
                                    </div>
                                    <div class="js-card--footer__texto">
                                        <p>Contacto Técnico</p>
                                        <a href="mailto:demis.cunha@skyfii.com">demis.cunha@skyfii.com</a>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-4 js--card--footer__contact">
                                    <button class="mdl-button mdl-js-button mdl-button--icon">
                                        <i class="mdi mdi-email"></i>
                                    </button>
                                    <button class="mdl-button mdl-js-button mdl-button--icon">
                                        <i class="mdi mdi-chat"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="js-card--partner__back">
                            <div class="js-card--par">
                                <h2>Alcance de la Soluci&oacute;n</h2>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Portales Cautivos</td>
                                            <td><i class="mdi mdi-done"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Analítica</td>
                                            <td><i class="mdi mdi-close"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Marketing</td>
                                            <td><i class="mdi mdi-done"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Integración</td>
                                            <td><i class="mdi mdi-done"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Reportes</td>
                                            <td><i class="mdi mdi-close"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Monitoreo infraestructura</td>
                                            <td><i class="mdi mdi-done"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Integración con POS / CRM</td>
                                            <td><i class="mdi mdi-done"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Adquisición de datos</td>
                                            <td><i class="mdi mdi-done"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Verticalización</td>
                                            <td><i class="mdi mdi-done"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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