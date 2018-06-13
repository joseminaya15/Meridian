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
    function getCaracteristicas(){
        $sql = "SELECT dc.Id,
                       dc.tipo,
                       c.name_caract
                  FROM detalle_caract dc,
                       caracteristicas c
                 WHERE dc.id_caract = c.Id";
        $result = $this->db->query($sql);
        return $result->result();
    }


    function getPais(){
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
    function getCaract(){
        $sql = "SELECT * 
                  FROM caracteristicas
              ORDER BY name_caract ASC" ;
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
    function filtroPais($pais) {
        $sql = "SELECT * 
                  FROM contacto
                 WHERE id_pais IN (?)";
        $result = $this->db->query($sql, array($pais));
        print_r($this->db->last_query());
        return $result->result();
    }

//_________________________________________________________________

    function getPartners($industria){
        $sql = "SELECT contenido,
                       imagenes
                  FROM partners
                 WHERE industria LIKE '%".$industria."%'";
        $result = $this->db->query($sql);
        return $result->result();
    }

    function getPartnersByGeo($geografia){
        $sql = "SELECT p.contenido,
                       p.imagenes
                  FROM partners p 
                 WHERE p.geografia LIKE '%".$geografia."%'";
        $result = $this->db->query($sql);
        return $result->result();
    }

    function searchPartners($industria, $geografia){
        $sql = "SELECT p.*
                  FROM partners p 
                 WHERE p.geografia LIKE '%".$geografia."%'
                    OR p.industria LIKE '%".$industria."%'";
        $result = $this->db->query($sql);
        return $result->result();
    }

    function getPartnersBuscador($buscador){
        $sql = "SELECT p.*
                  FROM partners p 
                 WHERE p.geografia LIKE '%".$buscador."%'
                    OR p.industria LIKE '%".$buscador."%'";
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
    function getVerticales(){
        $sql = "SELECT * FROM vertical";
        $result = $this->db->query($sql);
        return $result->result();
    }
    /*
    function getIdByNameCate($cate){
      $sql = "SELECT c.Id
                FROM categorias c
               WHERE (c.Nombre LIKE '%".$cate."%')";
      $result = $this->db->query($sql);
      return $result->row()->Id;
    }*/
}