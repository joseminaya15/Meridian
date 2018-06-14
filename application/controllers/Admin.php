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
        $html    = '';
        $datos   = $this->M_datos->filtroGeneral();
        $arr_pais = array();
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
        }
        foreach ($datos as $key) {
        	array_push($arr_pais, explode(',', $key->id_pais));
            $html .= '<tr>
                        <td>'.$key->gerente.'</td>
                        <td>'.$key->cont_comercial.'</td>
                        <td>'.$key->cont_tecnico.'</td>
                        <td>'.$key->pagina.'</td>
                    </tr>';
        }
        $data['html'] = $html;
		$this->load->view('v_admin', $data);
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