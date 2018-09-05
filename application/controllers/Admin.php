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
            $respuestas     = '';

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
                // $optionCarac .= '<tr>';
                foreach ($datos as $key) {
                    $img     = '';
                    if($key->imagen == null || $key->imagen == ''){
                        $img = 'nouser.png';
                    }else {
                        $img = $key->imagen;
                    }
                    $html .= '<tr>
                                  <td><img src="'.RUTA_ARCHIVOS.''.$img.'" style="width:  100%;max-width: 100px;min-width: 100px;padding: 5px;"></td>
                                  <td>'.$key->name_cont_comer.'</td>
                                  <td>'.$key->cont_comercial.'</td>
                                  <td>'.$key->cont_tecnico.'</td>
                                  <td>'.$key->pagina.'</td>
                                  <td>'.$key->pais.'</td>
                                  <td>'.$key->industrias.'</td>
                                  <td>'.$key->Descripcion.'</td>
                              </tr>';

                    $cabecera .= '<th class="text-left"></th>
                                  <th class="text-left"></th>
                                  <th class="text-left"></th>';

                    $empresa       .= '<td><strong>Empresa: </strong></td>
                                       <td>'.$key->Empresa.'</td>
                                       <td></td>';
                    $gerente       .= '<td><strong>Gerente: </strong></td>
                                       <td>'.$key->name_cont_comer.'</td>
                                       <td></td>';
                    $ContactoComer .= '<td><strong>Contacto Comercial: </strong></td>
                                       <td>'.$key->cont_comercial.'</td>
                                       <td></td>';
                    $ContactoTecni .= '<td><strong>Contacto Técnico: </strong></td>
                                       <td>'.$key->cont_tecnico.'</td>
                                       <td></td>';
                    $pagina        .= '<td><strong>Pagina web: </strong></td>
                                       <td>'.$key->pagina.'</td>
                                       <td></td>';
                    $pais          .= '<td><strong>País: </strong></td>
                                       <td>'.$key->pais.'</td>
                                       <td></td>';
                    $verticales    .= '<td><strong>Verticales: </strong></td>
                                       <td>'.$key->industrias.'</td>
                                       <td></td>';
                    $descripcion   .= '<td><strong>Descripción: </strong></td>
                                       <td>'.(($key->Descripcion == "") ? "-": $key->Descripcion).'</td>
                                       <td></td>';
                    foreach ($datosCarac as $key2) {
                        $detalleCarac = $this->M_datos->getDetalleCaract($key2->Id);
                        $respuestas .= '<tr>
                                             <td>'.$key2->name_caract.'</td>
                                             <td></td>
                                         </tr>';
                        foreach ($detalleCarac as $value) {
                            $rpta = ( strpos($datos[$i]->detalle_caract, $value->tipo) !== false ) ? 'Si' : 'No' ;
                            $respuestas .= '<tr>
                                                 <td>'.$value->tipo.'</td>
                                                 <td>'.$rpta.'</td>
                                             </tr>';
                        }
                    }
                    // if($cambio == 0){
                    //     $optionCarac .= '<tr>
                    //                          <td>
                    //                              <table>';
                    //     foreach ($datosCarac as $key2) {
                    //         $detalleCarac = $this->M_datos->getDetalleCaract($key2->Id);
                    //         // <td colspan="3" style="background-color: #FFFFFF; color: #000000; font-size: 16px;padding: 10px 5px;font-family: MetricBold">'.$key2->name_caract.'</td>
                    //         $optionCarac .= '<tr>
                    //                              <td>'.$key2->name_caract.'</td>
                    //                              <td></td>
                    //                              <td></td>
                    //                          </tr>';
                    //         foreach ($detalleCarac as $value) {
                    //             $rpta = ( strpos($key->detalle_caract, $value->tipo) !== false ) ? 'Si' : 'No' ;
                    //             $optionCarac .= '<tr>
                    //                                  <td>'.$value->tipo.'</td>
                    //                                  <td>'.$rpta.'</td>
                    //                                  <td></td>
                    //                              </tr>';
                    //             if($value->tipo == 'Reportes Históricos'){
                    //                 $cambio = 1;
                    //             }
                    //         }
                    //     }
                    //     $optionCarac .= '        </table>
                    //                          </td>
                    //                      </tr>';
                    // }
                }
                /*
                for($i; $i < sizeof($datos); $i++) {
                    $optionCarac .= '<td>
                                         <table>
                                             <tbody>';
                    foreach ($datosCarac as $key2) {
                        $detalleCarac = $this->M_datos->getDetalleCaract($key2->Id);
                        $optionCarac .= '<tr>
                                             <td>'.$key2->name_caract.'</td>
                                             <td></td>
                                         </tr>';
                        foreach ($detalleCarac as $value) {
                            $rpta = ( strpos($datos[$i]->detalle_caract, $value->tipo) !== false ) ? 'Si' : 'No' ;
                            $optionCarac .= '<tr>
                                                 <td>'.$value->tipo.'</td>
                                                 <td>'.$rpta.'</td>
                                             </tr>';
                        }
                    }
                    $optionCarac .= '            </tbody>
                                             </table>
                                         </td>';
                }
                $optionCarac .= '</tr>';
                */
            }
            $optionCarac .='<tr>'.$empresa.'</tr>
                            <tr>'.$gerente.'</tr>
                            <tr>'.$ContactoComer.'</tr>
                            <tr>'.$ContactoTecni.'</tr>
                            <tr>'.$pagina.'</tr>
                            <tr>'.$pais.'</tr>
                            <tr>'.$verticales.'</tr>
                            <tr>'.$descripcion.'</tr>';
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
}