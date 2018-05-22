<?php

class M_datos extends  CI_Model{
    function __construct(){
        parent::__construct();
    }
    function getPartners($industria){
      $sql = "SELECT p.*
                  FROM partners p 
               WHERE p.industria LIKE '%".$industria."%'";
      $result = $this->db->query($sql);
      //print_r($this->db->last_query());
      return $result->result();
    }/*
    function getIdByNameCate($cate){
      $sql = "SELECT c.Id
                FROM categorias c
               WHERE (c.Nombre LIKE '%".$cate."%')";
      $result = $this->db->query($sql);
      return $result->row()->Id;
    }*/
}