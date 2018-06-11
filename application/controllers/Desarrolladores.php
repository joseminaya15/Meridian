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
		$this->load->view('v_desarrolladores');
	}
    function guardarDesarrolladores(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $empresa  = $_POST('empresa');
            $gerente  = $_POST('gerente');
            $cont_com = $_POST('cont_com');
            $cont_tec = $_POST('cont_tec');
            $url      = $_POST('url');
            $telefono = $_POST('telefono');
            $arrInserDep = array('Empresa' => $empresa,
                                 'Descripcion' => '',
                                 'imagen' => '');
            $insetDep = $this->M_datos->insertarDatos($arrInserDep, 'desarrolladores');
            $arrayInsert = array('gerente'        => $gerente,
                                 'cont_comercial' => $cont_com,
                                 'cont_tecnico'   => $cont_tec,
                                 'pagina'         => $url,
                                 'id_deps'        => $insetDep['Id'],
                                 'id_vertical'    => '',
                                 'id_pais'        => 1);
            $insetDatos = $this->M_datos->insertarDatos($arrayInsert, 'contacto');
            $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
}