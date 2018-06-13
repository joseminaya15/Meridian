<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model('M_datos');
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
    }

	public function index(){
        $data['paises']   = '';
        $data['vertical'] = '';
        $datosPaises      = $this->M_datos->getPais();
        $datosVertical    = $this->M_datos->getVertical();
        $datosCarac       = $this->M_datos->getCaract();
        $optionPaises     = '';
        $optionVertical   = '';
        $optionCarac      = '';
        foreach($datosPaises as $key) {
            $optionPaises .= '<option value="'.$key->Id.'" >'.$key->Nombre.'</option>';
        }
        foreach ($datosVertical as $key) {
            $optionVertical .= '<option value="'.$key->Id.'">'.$key->nombre.'</option>';
        }
        foreach ($datosCarac as $key) {
            $detalleCarac = $this->M_datos->getDetalleCaract($key->Id);
            $optionCarac .= '<optgroup label="'.$key->name_caract.'">';
            foreach ($detalleCarac as $value) {
                $optionCarac .= '<option value="'.$value->Id.'">'.$value->tipo.'</option>';
            }
            $optionCarac .= '</optgroup>';
        }
        $data['paises']   = $optionPaises;
        $data['vertical'] = $optionVertical;
        $data['caracter'] = $optionCarac;
		$this->load->view('v_home', $data);
	}

    function busquedaGeneral () {
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try { 
            $pais           = $this->input->post('pais');
            $vertical       = $this->input->post('vertical');
            $caracteristica = $this->input->post('caracteristica');

            $datos          = $this->M_datos->filtroGeneral();
            $arr_pais       = array();
            $arr_pais2      = array();
            $arr_pais3      = array();
            $arr_pais_final = array();
            $arr_pais_finalito = array();

            $arr_vert       = array();
            $arr_vert2      = array();
            $arr_vert_final = array();

            $arr_cara       = array();
            $arr_cara2      = array();
            $arr_cara_final = array();

            foreach($datos as $key) {
                array_push($arr_pais, explode(',', $key->id_pais));
                array_push($arr_vert, explode(',', $key->id_vertical));
                array_push($arr_cara, explode(',', $key->id_detalle_caract));
            }

            if(!empty($pais)) {
                foreach ($pais as $val) {
                    array_push($arr_pais2, $val);
                }
                foreach ($arr_pais as $value) {
                    array_push($arr_pais_final,array_intersect($arr_pais2, $value));
                    // foreach ($arr_pais_final as $valor) {
                    //     if (sizeof($valor) != 0) {
                    //         array_push($arr_pais_finalito, $valor);
                    //     }
                    // }
                }
                print_r($arr_pais_final);
            }
            exit;

            if(!empty($vertical)) {
                foreach ($vertical as $val) {
                    array_push($arr_vert2 , $val);
                }
                foreach ($arr_vert as $value) {
                    $array_push($arr_vert_final,array_intersect($arr_vert2, $value));
                }
            }
            
            if(!empty($caracteristica)) {
                foreach ($caracteristica as $val) {
                    array_push($arr_cara2, $val);
                }
                foreach ($arr_cara as $value) {
                    array_push($arr_cara_final,array_intersect($arr_cara2, $value));
                }
            }

            // foreach ($datos as $valor) {
            //     var_dump($arr_pais_final);
            //     print_r("   ");
            //     var_dump($valor);
            //     // if (sizeof(array_intersect($arr_pais_final, $valor)) > 0) {
            //     //     print_r(array_intersect($arr_pais_final, $valor));
            //     // } 
            // }
            print_r($arr_pais_final);
            print_r("   ");
            print_r($arr_vert_final);
            print_r("   ");
            print_r($arr_cara_final);
            exit;
            
        } catch (Exception $ex){
            $data['msj'] = $ex->getMessage();
        }
        echo json_encode($data);
    }
//________________________________________________________________________________________________________________________________________

    function filtrarIndustria(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $html    = '';
            $industr = $this->input->post('industria');
            $datos   = $this->M_datos->getPartners($industr);
            if(count($datos) == 0){
                return;
            }else {
                foreach ($datos as $key) {
                    $html .= '<div class="js-card--partner js-card--partner1">
                                <div class="js-card--partner__front">
                                    <div class="js-card--partner__imagen">
                                        <img src="'.RUTA_IMG.'logo/'.$key->imagenes.'.png" alt="">
                                    </div>
                                    <div class="js-card--partner__contenido">
                                        <p>'.$key->contenido.'</p>
                                    </div>
                                    <div class="col-xs-12 p-0 js-card--partner__footer">
                                        <div class="col-xs-9 p-l-0">
                                            <div class="js-card--footer__texto">
                                                <p>Contacto Comercial</p>
                                                <a href="mailto:marcelo.cardenuto@skyfii.com">marcelo.cardenuto@skyfii.com</a>
                                            </div>
                                            <div class="js-card--footer__texto">
                                                <p>Contacto Técnico</p>
                                                <a href="mailto:demis.cunha@skyfii.com">demis.cunha@skyfii.com</a>
                                            </div>
                                        </div>
                                        <div class="col-xs-3 js--card--footer__contact">
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
                            </div>';
                }
            }
            $data['partners'] = $html;
            $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
    function filtroGeografia(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $html    = '';
            $geograf = $this->input->post('geografia');
            $datos   = $this->M_datos->getPartnersByGeo($geograf);
            if(count($datos) == 0){
                return;
            }else {
                foreach ($datos as $key) {
                    $html .= '<div class="js-card--partner js-card--partner1">
                                <div class="js-card--partner__front">
                                    <div class="js-card--partner__imagen">
                                        <img src="'.RUTA_IMG.'logo/'.$key->imagenes.'.png" alt="">
                                    </div>
                                    <div class="js-card--partner__contenido">
                                        <p>'.$key->contenido.'</p>
                                    </div>
                                    <div class="col-xs-12 p-0 js-card--partner__footer">
                                        <div class="col-xs-9 p-l-0">
                                            <div class="js-card--footer__texto">
                                                <p>Contacto Comercial</p>
                                                <a href="mailto:marcelo.cardenuto@skyfii.com">marcelo.cardenuto@skyfii.com</a>
                                            </div>
                                            <div class="js-card--footer__texto">
                                                <p>Contacto Técnico</p>
                                                <a href="mailto:demis.cunha@skyfii.com">demis.cunha@skyfii.com</a>
                                            </div>
                                        </div>
                                        <div class="col-xs-3 js--card--footer__contact">
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
                            </div>';
                }
            }
            $data['partners'] = $html;
            $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
    function buscarPartners(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $html    = '';
            $industr = $this->input->post('industria');
            $geograf = $this->input->post('geografia');
            $datos   = $this->M_datos->searchPartners($industr, $geograf);
            if(count($datos) == 0){
                return;
            }else {
                foreach ($datos as $key) {
                    $html .= '<div class="js-card--partner js-card--partner1">
                                <div class="js-card--partner__front">
                                    <div class="js-card--partner__imagen">
                                        <img src="'.RUTA_IMG.'logo/'.$key->imagenes.'.png" alt="">
                                    </div>
                                    <div class="js-card--partner__contenido">
                                        <p>'.$key->contenido.'</p>
                                    </div>
                                    <div class="col-xs-12 p-0 js-card--partner__footer">
                                        <div class="col-xs-9 p-l-0">
                                            <div class="js-card--footer__texto">
                                                <p>Contacto Comercial</p>
                                                <a href="mailto:marcelo.cardenuto@skyfii.com">marcelo.cardenuto@skyfii.com</a>
                                            </div>
                                            <div class="js-card--footer__texto">
                                                <p>Contacto Técnico</p>
                                                <a href="mailto:demis.cunha@skyfii.com">demis.cunha@skyfii.com</a>
                                            </div>
                                        </div>
                                        <div class="col-xs-3 js--card--footer__contact">
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
                            </div>';
                }
            }
            $data['partners'] = $html;
            $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
    function buscadorPartner(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $html    = '';
            $buscador = $this->input->post('buscador');
            $datos   = $this->M_datos->getPartnersBuscador($buscador);
            if(count($datos) == 0){
                return;
            }else {
                foreach ($datos as $key) {
                    $html .= '<div class="js-card--partner js-card--partner1">
                                <div class="js-card--partner__front">
                                    <div class="js-card--partner__imagen">
                                        <img src="'.RUTA_IMG.'logo/'.$key->imagenes.'.png" alt="">
                                    </div>
                                    <div class="js-card--partner__contenido">
                                        <p>'.$key->contenido.'</p>
                                    </div>
                                    <div class="col-xs-12 p-0 js-card--partner__footer">
                                        <div class="col-xs-9 p-l-0">
                                            <div class="js-card--footer__texto">
                                                <p>Contacto Comercial</p>
                                                <a href="mailto:marcelo.cardenuto@skyfii.com">marcelo.cardenuto@skyfii.com</a>
                                            </div>
                                            <div class="js-card--footer__texto">
                                                <p>Contacto Técnico</p>
                                                <a href="mailto:demis.cunha@skyfii.com">demis.cunha@skyfii.com</a>
                                            </div>
                                        </div>
                                        <div class="col-xs-3 js--card--footer__contact">
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
                            </div>';
                }
            }
            $data['partners'] = $html;
            $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
}