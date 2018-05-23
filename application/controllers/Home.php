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
		$this->load->view('v_home');
	}
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