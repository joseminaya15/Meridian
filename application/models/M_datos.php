<?php

class M_datos extends  CI_Model{
    function __construct(){
        parent::__construct();
    }

    function insertarDatos($arrayInsert, $tabla){
        $this->db->insert($tabla, $arrayInsert);
        $sol = $this->db->insert_id();
        if($this->db->affected_rows() != 1) {
            throw new Exception('Error al insertar');
            $data['error'] = EXIT_ERROR;
        }
        return array("error" => EXIT_SUCCESS, "msj" => MSJ_INS, "Id" => $sol);
    }

    function updateDatos($arrayData, $id, $tabla){
        $this->db->where('Id'  , $id);
        $this->db->update($tabla, $arrayData);
        if ($this->db->trans_status() == false) {
            throw new Exception('No se pudo actualizar los datos');
        }
        return array('error' => EXIT_SUCCESS,'msj' => MSJ_UPT);
    }

    function getCaract(){
        $sql = "SELECT c.*
                  FROM caracteristicas c
              ORDER BY name_caract ASC";
        $result = $this->db->query($sql);
        return $result->result();
    }

     function getCaracteristicas(){
        $sql = "SELECT dc.Id,
                       dc.tipo,
                       dc.tipo_pt,
                       c.name_caract,
                       c.name_caract_pt
                  FROM detalle_caract dc,
                       caracteristicas c
                 WHERE dc.id_caract = c.Id
              ORDER BY name_caract ASC";
        $result = $this->db->query($sql);
        return $result->result();
    }

    function getPais() {
        $sql = "SELECT * 
                  FROM pais
              ORDER BY Nombre ASC";
        $result = $this->db->query($sql);
        return $result->result();
    }

    function getVertical() {
        $sql = "SELECT * 
                  FROM vertical
              ORDER BY nombre ASC";
        $result = $this->db->query($sql);
        return $result->result();
    }

    function getDetalleCaract($id) {
        $sql = "SELECT *
                  FROM detalle_caract
                 WHERE id_caract = ?
              ORDER BY tipo ASC";
        $result = $this->db->query($sql, array($id));
        return $result->result();
    }
    
    function filtroGeneral($pais, $vertical, $caracteristica, $admin) {
        $sentPais = (empty($pais)) ? "" : "AND ip.id_pais IN (".$pais.") ";
        $sentVert = (empty($vertical)) ? "" : "AND iv.id_vertical IN (".$vertical.") ";
        $sentCara = (empty($caracteristica)) ? "" : "AND id.id_detalle IN (".$caracteristica.") ";
        $flg      = '';
        if($admin != 'admin'){
          $flg = 'AND co.flg_activo = 1';
        }
        $sql = "SELECT co.*,
                       co.Id AS id_cont,
                       d.Empresa,
                       d.Descripcion,
                       d.Descripcion_pt,
                       d.imagen,
                       GROUP_CONCAT(DISTINCT p.Nombre SEPARATOR ', ') AS pais,
                       GROUP_CONCAT(DISTINCT v.nombre SEPARATOR ', ') AS industrias,
                       GROUP_CONCAT(DISTINCT v.nombre_pt SEPARATOR ', ') AS industrias_pt,
                       GROUP_CONCAT(DISTINCT ca.name_caract SEPARATOR ', ') AS caract,
                       GROUP_CONCAT(DISTINCT ca.name_caract_pt SEPARATOR ', ') AS caract_pt,
                       GROUP_CONCAT(DISTINCT (SELECT dc.tipo 
                                                FROM detalle_caract dc1 
                                               WHERE dc1.Id = id.id_detalle ) SEPARATOR ', ') AS detalle_caract
                  FROM contacto        co,
                       caracteristicas ca,
                       desarrolladores  d,
                       insrt_detalle   id,
                       insrt_pais      ip,
                       insrt_vertical  iv,
                       pais             p,
                       vertical         v,
                       detalle_caract  dc
                 WHERE id.id_contacto = co.Id 
                   AND d.Id = co.id_deps
                   AND ip.id_contacto = co.Id 
                   AND iv.id_contacto = co.Id
                   AND p.Id = ip.id_pais
                   AND v.Id = iv.id_vertical
                   AND dc.id_caract = ca.Id
                   AND dc.Id = id.id_detalle
                   ".$flg."
                   ".$sentPais."
                   ".$sentVert."
                   ".$sentCara."
              GROUP BY co.Id
              ORDER BY co.orden asc, co.id_deps ASC";
        $result = $this->db->query($sql);
        return $result->result();
    }

    function getDatosCaracteristica($ids){
        $sql = "SELECT dc.id_caract
                  FROM detalle_caract dc
                 WHERE dc.Id IN ?
              GROUP BY dc.id_caract";
        $result = $this->db->query($sql, array($ids));
        return $result->result();
    }
}