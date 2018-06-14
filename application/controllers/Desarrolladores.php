<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desarrolladores extends CI_Controller {

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
      $html      = '';
      $cont      = 1;
      $cont1     = '';
      $titulo    = '';
      $html_titu = '';
      $i         = 1;
      $datos = $this->M_datos->getCaracteristicas();
      $nombre = $datos[0]->name_caract;
      foreach ($datos as $key) {
          $cont1 = $cont+1;
          $h3    = '';
          if($nombre == $key->name_caract){
            if($i == 1){
              $h3 = '<div class="col-xs-12"><h3 class="text-center">'.$key->name_caract.'</h3></div>';
            }
            $i = 2;
          }
          if($nombre != $key->name_caract) {
            $nombre = $key->name_caract;
            $h3 = '';
            $i = 1;
          }
          $html .= ''.$h3.'
                    <div class="col-sm-6 col-xs-12">
                      <div class="col-xs-12 js-input js-radio">
                          <label>'.$key->tipo.'</label>
                          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="optionsRadios'.$cont.'">
                              <input type="radio" id="optionsRadios'.$cont.'" class="mdl-radio__button" name="optionsRadios'.$cont.'" value="'.$key->Id.'">
                              <span class="mdl-radio__label">Sí</span>
                          </label>
                          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="optionsRadios'.$cont1.'">
                              <input type="radio" id="optionsRadios'.$cont1.'" class="mdl-radio__button" name="optionsRadios'.$cont.'" value="'.$key->Id.'">
                              <span class="mdl-radio__label">No</span>
                          </label>
                      </div>
                      <div class="col-xs-12 js-input js-observacion">
                          <label for="observacion'.$cont.'">Observacion</label>
                          <input type="text" id="observacion'.$cont.'" maxlength="50">
                      </div>
                    </div>';
          $cont = $cont1+1;
      }
      $data['verticales'] = $this->comboVerticales();
      $data['html'] = $html;
		$this->load->view('v_desarrolladores', $data);
	}
    function guardarDesarrolladores(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $empresa  = $this->input->post('empresa');
            $gerente  = $this->input->post('gerente');
            $cont_com = $this->input->post('cont_com');
            $cont_tec = $this->input->post('cont_tec');
            $url      = $this->input->post('url');
            $telefono = $this->input->post('telefono');
            $id_pais  = $this->input->post('id_pais');
            $id_verti = $this->input->post('id_verti');
            $arrInserDep = array('Empresa'     => $empresa,
                                 'Descripcion' => '',
                                 'imagen'      => '');
            $insetDep = $this->M_datos->insertarDatos($arrInserDep, 'desarrolladores');
            $arrayInsert = array('gerente'        => $gerente,
                                 'cont_comercial' => $cont_com,
                                 'cont_tecnico'   => $cont_tec,
                                 'pagina'         => $url,
                                 'id_deps'        => $insetDep['Id']);
            $insetDatos = $this->M_datos->insertarDatos($arrayInsert, 'contacto');
            foreach ($id_verti as $key) {
              $arrayInsert1 = array('id_vertical' => $key,
                                    'id_contacto' => $insetDatos['Id']);
              $insetDatos1   = $this->M_datos->insertarDatos($arrayInsert1, 'insrt_vertical');
            }
            foreach ($id_pais as $val) {
              $arrayInsert2 = array('id_pais'     => $val,
                                    'id_contacto' => $insetDatos['Id']);
              $insetDatos2   = $this->M_datos->insertarDatos($arrayInsert2, 'insrt_pais');
            }
            $session    = array('id_contact' => $insetDatos['Id']);
            $this->session->set_userdata($session);
            $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
    function guardarDatosDeps(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
          $id_detalle = $this->input->post('id_detalle');
          $arr_deta   = $this->input->post('arr_deta');
          $obsChecked = $this->input->post('obsChecked');
          $arrayGeneral = $this->input->post('arrayGeneral');
          foreach ($arrayGeneral as $key) {
            $arrayInsert3 = array('id_detalle'    => $key[0],
                                    'id_contacto' => $this->session->userdata('id_contact'),
                                  'comentario'    => $key[1]);
            $insetDatos   = $this->M_datos->insertarDatos($arrayInsert3, 'insrt_detalle');
          }
          /*foreach ($arr_deta as $value) {
              $arrayInsert3 = array('id_detalle'  => $value,
                                    'id_contacto' => $this->session->userdata('id_contact'));
              $insetDatos   = $this->M_datos->insertarDatos($arrayInsert3, 'insrt_detalle');
          }*/
         /* $datos      = $this->M_datos->getDatosCaracteristica($arr_deta);
          $array_cat  = array();
          foreach ($datos as $key) {
            array_push($array_cat, $key->id_caract);
          }
          $ids_caract = implode(",", $array_cat);
          $arrayUpdate = array('id_detalle_caract' => $id_detalle,
                               'id_caract'         => $ids_caract);
          $this->M_datos->updateDatos($arrayUpdate, $this->session->userdata('id_contact'), 'contacto');*/
          $this->session->unset_userdata('id_detalle');
          $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }

    function comboVerticales(){
      $html = '';
      $datos = $this->M_datos->getVertical();
      foreach ($datos as $key) {
        $html .= '<option value="'.$key->Id.'">'.$key->nombre.'</option>';
      }
      return $html;
    }
}