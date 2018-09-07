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
            $optionVertical .= '<option value="'.$key->Id.'">'.$key->nombre_pt.'</option>';
        }
        foreach ($datosCarac as $key) {
            $detalleCarac = $this->M_datos->getDetalleCaract($key->Id);
            $optionCarac .= '<div class="col-xs-12">
                                <div class="js-checkbox__title">'.$key->name_caract_pt.'</div>';
            foreach ($detalleCarac as $value) {
                $optionCarac .= '<div class="js-checbox col-xs-12 col-sm-6 col-md-4">
                                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-'.$value->Id.'" >
                                        <input type="checkbox" id="checkbox-'.$value->Id.'" class="mdl-checkbox__input" value="'.$value->Id.'" onclick="buscarGeneral(this.id);" >
                                        <span class="mdl-checkbox__label">'.$value->tipo_pt.'</span>
                                    </label>
                                </div>';
            }
            $optionCarac .= '</div>';
        }

        $html           = '';
        $datos          = $this->M_datos->filtroGeneral(null, null, null, null);
        foreach ($datos as $key) {
                $html .= '<div class="js-card--partner">
                              <div class="js-card--partner__front">
                                  <div class="js-card--partner__imagen">
                                      <img src="'.RUTA_ARCHIVOS.$key->imagen.'" alt="">
                                  </div>
                                  <div class="js-hide">
                                      <div class="js-card--partner__contenido">
                                          <p>'.(($key->Descripcion_pt == '') ? $key->Descripcion : $key->Descripcion_pt).'</p>
                                          <p><strong>Escopo da solução: </strong>'.$key->caract_pt.'</p>
                                      </div>
                                      <div class="js-card--partner__footer">
                                          <div class="col-sm-9 col-xs-8 p-l-0">
                                              <div class="js-card--footer__texto">
                                                  <p><strong>Setor: </strong>'.$key->industrias_pt.'</p>
                                                  <p><strong>Tipo de Licenciamento: </strong> Por Assinatura</p>
                                              </div>
                                          </div>
                                          <div class="col-sm-3 col-xs-4 js--card--footer__contact">
                                              <a href="mailto:'.$key->cont_comercial.'" class="mdl-button mdl-js-button mdl-button--icon">
                                                  <i class="mdi mdi-email"></i>
                                              </a>
                                              <a href="'.$key->pagina.'" target="_blank" class="mdl-button mdl-js-button mdl-button--icon">
                                                  <i class="mdi mdi-desktop_mac"></i>
                                              </a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="js-card--partner__button">
                                      <button id="button'.(str_replace(',','_',str_replace('.','_',str_replace(' ', '_', $key->Empresa)))).'" class="mdl-button mdl-js-button mdl-button--icon" onclick="showCard(this.id)">
                                        <i class="mdi mdi-arrow_downward"></i>
                                      </button>
                                  </div>
                              </div>
                          </div>';            
        }
        $data['html'] = $html;
        $data['paises']   = $optionPaises;
        $data['vertical'] = $optionVertical;
        $data['caracter'] = $optionCarac;
		$this->load->view('pt/v_home', $data);
	}

    function busquedaGeneral () {
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $html           = '';
            $pais           = $this->input->post('pais');
            $vertical       = $this->input->post('vertical');
            $caracteristica = $this->input->post('caracteristica');
            $datos          = $this->M_datos->filtroGeneral($pais, $vertical, $caracteristica, null);
            foreach ($datos as $key) {
                $html .= '<div class="js-card--partner">
                              <div class="js-card--partner__front">
                                  <div class="js-card--partner__imagen">
                                      <img src="'.RUTA_ARCHIVOS.$key->imagen.'" alt="">
                                  </div>
                                  <div class="js-hide">
                                      <div class="js-card--partner__contenido">
                                          <p>'.$key->Descripcion_pt.'</p>
                                          <p><strong>Escopo da solução: </strong>'.$key->caract_pt.'</p>
                                      </div>
                                      <div class="js-card--partner__footer">
                                          <div class="col-sm-9 col-xs-8 p-l-0">
                                              <div class="js-card--footer__texto">
                                                  <p><strong>Setor: </strong>'.$key->industrias_pt.'</p>
                                                  <p><strong>Tipo de Licenciamento: </strong> Por Assinatura</p>
                                              </div>
                                          </div>
                                          <div class="col-sm-3 col-xs-4 js--card--footer__contact">
                                              <a href="mailto:'.$key->cont_comercial.'" class="mdl-button mdl-js-button mdl-button--icon">
                                                  <i class="mdi mdi-email"></i>
                                              </a>
                                              <a href="'.$key->pagina.'" target="_blank" class="mdl-button mdl-js-button mdl-button--icon">
                                                  <i class="mdi mdi-desktop_mac"></i>
                                              </a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="js-card--partner__button">
                                      <button id="button'.$key->Empresa.'" class="mdl-button mdl-js-button mdl-button--icon" onclick="showCard(this.id)">
                                        <i class="mdi mdi-arrow_downward"></i>
                                      </button>
                                  </div>
                              </div>
                          </div>';
        }
            $data['html'] = $html;
            $data['error'] = EXIT_SUCCESS;
        } catch (Exception $ex){
            $data['msj'] = $ex->getMessage();
        }
        echo json_encode($data);
    }
    function goTo(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $idioma  = $this->input->post('idioma');
            $this->session->unset_userdata('usuario');
            $this->session->unset_userdata('Id_user');
            $data['idioma'] = $idioma;
            $data['error'] = EXIT_SUCCESS;
        } catch (Exception $e) {
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
}