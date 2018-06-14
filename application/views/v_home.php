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
        <section id="principal">
            <div class="js-container">
                <div class="js-flex">
                    <div class="js-input js-select">
                        <select class="selectpicker" multiple="multiple" data-size="10" id="pais" title="Seleccione su país" onchange="buscarGeneral()" >
                            <?php echo $paises?>
                        </select>
                    </div>
                    <div class="js-input js-select">
                        <select class="selectpicker" multiple="multiple" data-size="10" id="vertical" title="Seleccione su industria" onchange="buscarGeneral();">
                            <?php echo $vertical ?>
                        </select>
                    </div>
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-button--select" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Seleccione su caracteristica <i class="mdi mdi-arrow_drop_down"></i></button>
                </div>
                <div class="collapse" id="collapseExample">
                    <div class="mdl-card">
                        <div class="mdl-card__supporting-text">
                            <?php echo $caracter ?>
                        </div>
                  </div>
                </div>
                <div class="js-cards" id="cardDesarrolladores">
                    <?php echo $html; ?>
                    <!-- <div class="js-card--partner js-card--partner1">
                        <div class="js-card--partner__front">
                            <div class="js-card--partner__imagen">
                                <img src="<?php echo RUTA_IMG?>logo/zoox.png" alt="">
                            </div>
                            <div class="js-hide">
                                <div class="js-card--partner__contenido">
                                    <p>ZOOX se dedica específicamente a brindar soluciones innovadoras a través de la conectividad de WIFI, brindando Social login a través de redes sociales, permitiendo generar campañas de promoción, videos publicitarios, encuestas, encuestas NPS, recolectar data de los usuarios (BigData), people analytics, heatmap, flowmap, etc. Y todo esto utilizando la infraestructura ya instalada de Access Points.</p>
                                    <p><strong>Alcance de la soluci&oacute;n: </strong>Portales cautivos, Analíticas, Marketing, Integración, Reportes, Monitoreo Infraestructura, Integración con CRM, Adquisición de datos.</p>
                                </div>
                                <div class="js-card--partner__footer">
                                    <div class="col-sm-9 col-xs-8 p-l-0">
                                        <div class="js-card--footer__texto">
                                            <p><strong>Industrias: </strong>Centros Comerciales, Educación, Retail, Salud, Aeropuertos, Plazas públicas, Transportes, Hotelería / Restaurantes, Manufactura</p>
                                            <p><strong>Tipo de Licenciamiento: </strong>Por Suscripci&oacute;n</p>
                                        </div> -->
                                                <!-- <div class="js-card--footer__texto">
                                                    <p>Contacto Técnico</p>
                                                    <a href="mailto:demis.cunha@skyfii.com">demis.cunha@skyfii.com</a>
                                                </div> -->
                                    <!-- </div>
                                    <div class="col-sm-3 col-xs-4 js--card--footer__contact">
                                        <a class="mdl-button mdl-js-button mdl-button--icon">
                                            <i class="mdi mdi-email"></i>
                                        </a>
                                        <a class="mdl-button mdl-js-button mdl-button--icon">
                                            <i class="mdi mdi-desktop_mac"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="js-card--partner__button">
                                <button id="buttonzoox" class="mdl-button mdl-js-button mdl-button--icon" onclick="showCard(this.id)">
                                    <i class="mdi mdi-arrow_downward"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="js-card--partner js-card--partner1">
                        <div class="js-card--partner__front">
                            <div class="js-card--partner__imagen">
                                <img id="idelun" src="<?php echo RUTA_IMG?>logo/elun.png" alt="" onclick="showCard(this.id)">
                            </div>
                            <div class="js-hide">
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
                            <div class="js-card--partner__button">
                                <button id="buttonelun" class="mdl-button mdl-js-button mdl-button--icon" onclick="showCard(this.id)">
                                    <i class="mdi mdi-arrow_downward"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="js-card--partner js-card--partner1">
                        <div class="js-card--partner__front">
                            <div class="js-card--partner__imagen">
                                <img id="iddatawifi" src="<?php echo RUTA_IMG?>logo/datawifi.png" alt="" onclick="showCard(this.id)">
                            </div>
                            <div class="js-hide">
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
                            <div class="js-card--partner__button">
                                <button id="buttondatawifi" class="mdl-button mdl-js-button mdl-button--icon" onclick="showCard(this.id)">
                                    <i class="mdi mdi-arrow_downward"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="js-card--partner js-card--partner1">
                        <div class="js-card--partner__front">
                            <div class="js-card--partner__imagen">
                                <img src="<?php echo RUTA_IMG?>logo/skyfii.png" alt="">
                            </div>
                            <div class="js-hide">
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
                            <div class="js-card--partner__button">
                                <button id="buttonskyfii" class="mdl-button mdl-js-button mdl-button--icon" onclick="showCard(this.id)">
                                    <i class="mdi mdi-arrow_downward"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="js-card--partner js-card--partner1">
                        <div class="js-card--partner__front">
                            <div class="js-card--partner__imagen">
                                <img src="<?php echo RUTA_IMG?>logo/ohmyfi.png" alt="">
                            </div>
                            <div class="js-hide">
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
                            <div class="js-card--partner__button">
                                <button id="buttonohmyfi" class="mdl-button mdl-js-button mdl-button--icon" onclick="showCard(this.id)">
                                    <i class="mdi mdi-arrow_downward"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="js-card--partner js-card--partner1">
                        <div class="js-card--partner__front">
                            <div class="js-card--partner__imagen">
                                <img src="<?php echo RUTA_IMG?>logo/lab3.png" alt="">
                            </div>
                            <div class="js-hide">
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
                            <div class="js-card--partner__button">
                                <button id="buttonlab3" class="mdl-button mdl-js-button mdl-button--icon" onclick="showCard(this.id)">
                                    <i class="mdi mdi-arrow_downward"></i>
                                </button>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <section id="contacto" class="js-section">
            <div class="js-container">
                <div class="js-contacto text-center">
                   <h2>¿Eres desarrollador y quieres aparecer en este portal&#63;</h2>
                   <a href="Desarrolladores" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button">&Uacute;nete a nuestro programa</a>
                </div>
            </div>
        </section>
        <footer class="js-section col-xs-12">
            <div class="js-container">
                <div class="js-contendo col-xs-12">
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
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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