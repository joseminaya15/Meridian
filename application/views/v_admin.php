<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="description"            content="Aruba Meridian">
    <meta name="keywords"               content="Aruba Meridian">
    <meta name="robots"                 content="Index,Follow">
    <meta name="date"                   content="January 25, 2018"/>
    <meta name="language"               content="es">
    <meta name="theme-color"            content="#000000">
    <title>Aruba | Meridian</title>
    <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/favicon.png">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>openSans.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet"    href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.bootstrap.min.css">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
    <style type="text/css">
        body{
            overflow-y: scroll;
            background-color: #FFFFFF;
        }
    </style>
<body>
    <div class="js-header js-fixed">
        <div class="js-header--left">
            <img class="js-partner" src="<?php echo RUTA_IMG?>logo/logo_aruba.svg">
        </div>
        <div class="js-header--right">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button" onclick="cerrarCesion()">Cerrar Sesi&oacute;n</button>
        </div>
    </div>
    <section class="js-section js-section--admin">
        <div class="js-container">
            <div class="mdl-card">
                <div class="table-responsive">
                    <table id="example" class="display nowrap table table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr class="tr-header-reporte">
                                <th class="text-left">Logo</th>
                                <th class="text-left">Gerente</th>
                                <th class="text-left">Contacto Comercial</th>
                                <th class="text-left">Contacto Técnico</th>
                                <th class="text-left">Página web</th>
                                <th class="text-left">País</th>
                                <th class="text-left">Verticales</th>
                                <th class="text-left">Descripción</th>
                            </tr>
                        </thead>
                      <tbody>
                          <?php echo $html ?>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
    <script type="text/javascript" src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
    <script type="text/javascript" src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
    <script type="text/javascript" src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
    <script type="text/javascript" src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
    <script type="text/javascript" src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
    <script type="text/javascript" src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.5/jszip.min.js"></script>
    <script src="<?php echo RUTA_JS?>login.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jsutils.js?v=<?php echo time();?>"></script>
    <script type="text/javascript">
      $(document).ready(function() {
          $('#example').DataTable( {
                searching : false,
                dom: 'Bfrtip',
                language:{
                    "emptyTable":     "Aucune donnée disponible",
                    "info" : "Mostrando _END_ de _TOTAL_ resultados"
                },
                lengthMenu: [
                    [ 10, 25, 50, -1 ],
                    [ '10 resultados', '25 resultados', '50 resultados']
                ],
                buttons: [{
                        text: 'Mostrar 10 resultados',
                        extend: 'pageLength'
                    },
                    {
                        extend:'excel',
                        text: 'Exportar a Excel'
                    }
                ]
            });
          $('.buttons-excel').empty();
          $('.buttons-print').empty();
          $('.buttons-excel').append('<i class="fa fa-file-excel" style="font-size: 18px; vertical-align: middle;"></i>');
          $('.buttons-print').append('<i class="fa fa-print"></i>');
      });
    </script>
</body>
</html>