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
                    $html .= '<div class="js-card--partner">
                                <div class="js-card--partner__front">
                                    <div class="js-card--partner__imagen">
                                        <img src="" alt="">
                                    </div>
                                    <div class="js-card--partner__contenido">
                                        <p>'.$key->contenido.'</p>
                                    </div>
                                    <div class="js-card--partner__footer">
                                        
                                    </div>
                                </div>
                                <div class="js-card--partner__back">
                                    <div class="js-card--par">
                                        
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
                    $html .= '<div class="js-card--partner">
                                <div class="js-card--partner__front">
                                    <div class="js-card--partner__imagen">
                                        <img src="" alt="">
                                    </div>
                                    <div class="js-card--partner__contenido">
                                        <p>'.$key->contenido.'</p>
                                    </div>
                                    <div class="js-card--partner__footer">
                                        
                                    </div>
                                </div>
                                <div class="js-card--partner__back">
                                    <div class="js-card--par">
                                        
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
                    $html .= '<div class="js-card--partner">
                                <div class="js-card--partner__front">
                                    <div class="js-card--partner__imagen">
                                        <img src="" alt="">
                                    </div>
                                    <div class="js-card--partner__contenido">
                                        <p>'.$key->contenido.'</p>
                                    </div>
                                    <div class="js-card--partner__footer">
                                        
                                    </div>
                                </div>
                                <div class="js-card--partner__back">
                                    <div class="js-card--par">
                                        
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