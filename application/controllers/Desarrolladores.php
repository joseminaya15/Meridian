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
      $optionPaises = '';
      $i         = 1;
      $idioma    = ( $this->session->userdata('idioma') != '' ) ? $this->session->userdata('idioma') : 'es';
      $datosPaises = $this->M_datos->getPais();
      foreach($datosPaises as $key) {
          $optionPaises .= '<option value="'.$key->Id.'" >'.$key->Nombre.'</option>';
      }
      $data['paises'] = $optionPaises;
      $datos = $this->M_datos->getCaracteristicas();
      $nombre = $datos[0]->name_caract;
      foreach ($datos as $key) {
          $cont1 = $cont+1;
          $h3    = '';
          if($nombre == $key->name_caract){
            if($i == 1){
              $h3 = '<div class="col-xs-12"><h3>'.$key->name_caract_pt.'</h3></div>';
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
                          <label>'.$key->tipo_pt.'</label>
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
                          <label for="observacion'.$cont.'">Observação</label>
                          <input type="text" id="observacion'.$cont.'" maxlength="50">
                      </div>
                    </div>';
          $cont = $cont1+1;
      }
      $data['verticales'] = $this->comboVerticales();
      $data['html'] = $html;
		$this->load->view($idioma.'/v_desarrolladores', $data);
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
            $mov_comercial = $this->input->post('mov_comercial');
            $nom_tecnico = $this->input->post('nom_tecnico');
            $descripcion = $this->input->post('descripcion');
            $arrInserDep = array('Empresa'     => $empresa,
                                 'Descripcion' => $descripcion,
                                 'imagen'      => '');
            $insetDep = $this->M_datos->insertarDatos($arrInserDep, 'desarrolladores');
            $arrayInsert = array('name_cont_comer'=> $gerente,
                                 'cont_comercial' => $cont_com,
                                 'cont_tecnico'   => $cont_tec,
                                 'pagina'         => $url,
                                 'id_deps'        => $insetDep['Id'],
                                 'flg_activo'     => 0,
                                 'celular_cont_comer' => $mov_comercial,
                                 'name_cont_tec' => $nom_tecnico,
                                 'telefono' => $telefono);
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
            $session    = array('id_contact' => $insetDatos['Id'],
                                'id_deps'    => $insetDep['Id']);
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
      $idioma    = ( $this->session->userdata('idioma') != '' ) ? $this->session->userdata('idioma') : 'es';
      foreach ($datos as $key) {
          if ($idioma == 'es') {
              $html .= '<option value="'.$key->Id.'">'.$key->nombre.'</option>';
          } else if ($idioma == 'pt') {
              $html .= '<option value="'.$key->Id.'">'.$key->nombre_pt.'</option>';
          }
      }
      return $html;
    }

    function cargarFact(){
        $respuesta = new stdClass();
        $respuesta->mensaje = "";
        if(count($_FILES) == 0){
            $respuesta->mensaje = 'Seleccione su factura';
        }else {
            $tipo = $_FILES['archivo']['type']; 
            $tamanio = $_FILES['archivo']['size']; 
            $archivotmp = $_FILES['archivo']['tmp_name'];
            $namearch = $_FILES['archivo']['name'];
            $nuevo = explode(".",$namearch);
            if($tamanio > '2000000'){
                $respuesta->mensaje = 'El tamaño de su pdf debe ser menor';
            }else {
                if($nuevo[1] == 'pdf' || $nuevo[1] == 'jpeg' || $nuevo[1] == 'jpg' || $nuevo[1] == 'png'){
                    $target = getcwd().DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'archivos'.DIRECTORY_SEPARATOR.basename($_FILES['archivo']['name']);
                    if(move_uploaded_file($archivotmp, $target) ){
                       $arrUpdt = array('imagen' => $namearch);
                       $this->M_datos->updateDatos($arrUpdt, $this->session->userdata('id_deps'), 'desarrolladores');
                       $respuesta->mensaje = 'Su logo se subió correctamente';
                    } else {
                       $respuesta->mensaje = 'Hubo un problema en la subida de su logo';
                    }
                }else {
                    $respuesta->mensaje = 'El formato del logo es incorrecto';
                }
            }
            echo json_encode($respuesta);
        }
    }
}