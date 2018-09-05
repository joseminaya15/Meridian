<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('M_datos');
        $this->load->helper("url");
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
    }

    public function index(){
        if($this->session->userdata('usuario') == null){
            header("location: Login");
        }else {
            $html    = '';
            $datos   = $this->M_datos->filtroGeneral(null, null, null, 'admin');
            $datosCarac = $this->M_datos->getCaract();
            $rpta    = '';
            $optionCarac= '';
            $cabecera = '';
            $i = 0;
            //NO BORRAR
            $empresa        = '';
            $gerente        = ''; 
            $ContactoComer  = '';
            $ContactoTecni  = ''; 
            $pagina         = '';
            $pais           = ''; 
            $verticales     = '';
            $descripcion    = '';
            $respuestasGen  = '';
            $respuestas     = '';
            $disabled       = '';

            if(count($datos) == 0){
                $html = '<tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>';
            }else {
                for($i = 0; $i<sizeof($datos); $i++){
                    $img     = '';
                    $disabled       = '';
                    if($datos[$i]->imagen == null || $datos[$i]->imagen == ''){
                        $img = 'nouser.png';
                    }else {
                        $img = $datos[$i]->imagen;
                    }
                    if($datos[$i]->flg_activo == 1){
                        $disabled = 'disabled';
                    }
                    $html .= '<tr>
                                  <td><img src="'.RUTA_ARCHIVOS.''.$img.'" style="width:  100%;max-width: 100px;min-width: 100px;padding: 5px;"></td>
                                  <td>'.$datos[$i]->name_cont_comer.'</td>
                                  <td>'.$datos[$i]->cont_comercial.'</td>
                                  <td>'.$datos[$i]->cont_tecnico.'</td>
                                  <td>'.$datos[$i]->pagina.'</td>
                                  <td>'.$datos[$i]->pais.'</td>
                                  <td>'.$datos[$i]->industrias.'</td>
                                  <td>'.$datos[$i]->Descripcion.'</td>
                                  <td><button type="button" class="btn btn-default" onclick="aceptar('.$datos[$i]->id_cont.')" '.$disabled.'>
                                        <span class="glyphicon glyphicon-search"></span> Publicar
                                      </button>
                                  </td>
                              </tr>';

                    $cabecera .= '<th class="text-left"></th>
                                  <th class="text-left"></th>
                                  <th class="text-left"></th>';
                    $empresa       .= '<td><strong>Empresa: </strong></td>
                                       <td>'.$datos[$i]->Empresa.'</td>
                                       <td></td>';
                    $gerente       .= '<td><strong>Gerente: </strong></td>
                                       <td>'.$datos[$i]->name_cont_comer.'</td>
                                       <td></td>';
                    $ContactoComer .= '<td><strong>Contacto Comercial: </strong></td>
                                       <td>'.$datos[$i]->cont_comercial.'</td>
                                       <td></td>';
                    $ContactoTecni .= '<td><strong>Contacto Técnico: </strong></td>
                                       <td>'.$datos[$i]->cont_tecnico.'</td>
                                       <td></td>';
                    $pagina        .= '<td><strong>Pagina web: </strong></td>
                                       <td>'.$datos[$i]->pagina.'</td>
                                       <td></td>';
                    $pais          .= '<td><strong>País: </strong></td>
                                       <td>'.$datos[$i]->pais.'</td>
                                       <td></td>';
                    $verticales    .= '<td><strong>Verticales: </strong></td>
                                       <td>'.$datos[$i]->industrias.'</td>
                                       <td></td>';
                    $descripcion   .= '<td><strong>Descripción: </strong></td>
                                       <td>'.(($datos[$i]->Descripcion == "") ? "-": $datos[$i]->Descripcion).'</td>
                                       <td></td>';
                    
                }
            }
            foreach ($datosCarac as $key2) {
                $detalleCarac = $this->M_datos->getDetalleCaract($key2->Id);
                $respuestasGen .= '<tr>';
                for($j = 0; $j<sizeof($datos); $j++){
                    $respuestasGen .= '<td colspan="2">'.$key2->name_caract.'</td>
                                       <td style="display:none"></td>
                                       <td></td>';
                }
                $respuestasGen .= '</tr>';
                $respuestasGen .= '<tr>';
                foreach ($detalleCarac as $value) {
                    for($m = 0; $m<sizeof($datos); $m++) {
                        $rpta = ( strpos($datos[$m]->detalle_caract, $value->tipo) !== false ) ? 'Si' : 'No' ;
                        $respuestasGen .= '<td>'.$value->tipo.'</td>
                                           <td>'.$rpta.'</td>
                                           <td></td>';
                    }
                $respuestasGen .= '</tr>';
                }
            }
            $optionCarac .='<tr>'.$empresa.'</tr>
                            <tr>'.$gerente.'</tr>
                            <tr>'.$ContactoComer.'</tr>
                            <tr>'.$ContactoTecni.'</tr>
                            <tr>'.$pagina.'</tr>
                            <tr>'.$pais.'</tr>
                            <tr>'.$verticales.'</tr>
                            <tr>'.$descripcion.'</tr>
                            '.$respuestasGen;
            $data['html']  = $html;
            $data['html1'] = $cabecera;
            $data['html2'] = $optionCarac;
            $this->load->view('v_admin', $data);
        }
    }
    function cerrarCesion(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $this->session->unset_userdata('usuario');
            $this->session->unset_userdata('Id_user');
            $data['error'] = EXIT_SUCCESS;
        }catch (Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
    function aceptarCliente(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $id_cliente  = $this->input->post('id_cliente');
            $orden       = $this->M_datos->getLastOrden();
            $orden2      = $orden[0]->orden+1;
            $arrayUpdate = array("flg_activo"  => 1,
                                 "orden"       => $orden2);
            $this->M_datos->updateDatos($arrayUpdate, $id_cliente, 'contacto');
            $html    = '';
            $datos   = $this->M_datos->filtroGeneral(null, null, null, 'admin');
            $datosCarac = $this->M_datos->getCaract();
            if(count($datos) == 0){
                $html = '<tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>';
            }else {
                for($i = 0; $i<sizeof($datos); $i++){
                    $img     = '';
                    $disabled       = '';
                    if($datos[$i]->imagen == null || $datos[$i]->imagen == ''){
                        $img = 'nouser.png';
                    }else {
                        $img = $datos[$i]->imagen;
                    }
                    if($datos[$i]->flg_activo == 1){
                        $disabled = 'disabled';
                    }
                    $html .= '<tr>
                                  <td><img src="'.RUTA_ARCHIVOS.''.$img.'" style="width:  100%;max-width: 100px;min-width: 100px;padding: 5px;"></td>
                                  <td>'.$datos[$i]->name_cont_comer.'</td>
                                  <td>'.$datos[$i]->cont_comercial.'</td>
                                  <td>'.$datos[$i]->cont_tecnico.'</td>
                                  <td>'.$datos[$i]->pagina.'</td>
                                  <td>'.$datos[$i]->pais.'</td>
                                  <td>'.$datos[$i]->industrias.'</td>
                                  <td>'.$datos[$i]->Descripcion.'</td>
                                  <td><button type="button" class="btn btn-default" onclick="aceptar('.$datos[$i]->id_cont.')" '.$disabled.'>
                                        <span class="glyphicon glyphicon-search"></span> Publicar
                                      </button>
                                  </td>
                              </tr>';
                }
            }
            $data['html']  = $html; 
            $data['error'] = EXIT_SUCCESS;
        }catch (Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
}