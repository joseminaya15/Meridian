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
              $h3 = '<h3 class="text-center">'.$key->name_caract.'</h3>';
            }
            $i = 2;
          }
          if($nombre != $key->name_caract) {
            $nombre = $key->name_caract;
            $h3 = '';
            $i = 1;
          }
          $html .= '  '.$h3.'
                      <h3>'.$key->tipo.'</h3>
                      <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="optionsRadios'.$cont.'">
                        <input type="radio" id="optionsRadios'.$cont.'" class="mdl-radio__button" name="optionsRadios'.$cont.'" value="'.$key->tipo.'">
                        <span class="mdl-radio__label">Sí</span>
                      </label>
                      <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="optionsRadios'.$cont1.'">
                        <input type="radio" id="optionsRadios'.$cont1.'" class="mdl-radio__button" name="optionsRadios'.$cont.'" value="">
                        <span class="mdl-radio__label">No</span>
                      </label>
                      <div class="form-group row">
                        <label for="example-text-input" class="col-xs-12 col-form-label">Observacion</label>
                        <div class="col-xs-5">
                          <input class="form-control" type="text" placeholder="Observación" id="observacion1" maxlength="50">
                        </div>
                      </div>';
          $cont++;
      }
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
            $arrInserDep = array('Empresa'     => $empresa,
                                 'Descripcion' => '',
                                 'imagen'      => '');
            $insetDep = $this->M_datos->insertarDatos($arrInserDep, 'desarrolladores');
            $arrayInsert = array('gerente'        => $gerente,
                                 'cont_comercial' => $cont_com,
                                 'cont_tecnico'   => $cont_tec,
                                 'pagina'         => $url,
                                 'id_deps'        => $insetDep['Id'],
                                 'id_vertical'    => '',
                                 'id_pais'        => intval($id_pais));
            $insetDatos = $this->M_datos->insertarDatos($arrayInsert, 'contacto');
            $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
}