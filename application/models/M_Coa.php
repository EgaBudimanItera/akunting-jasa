<?php


class M_Coa extends CI_Model {
    function listcoa(){
        $this->db->select('*');
        $this->db->from('coa');
       
        return $query=$this->db->get()->result();
   }

}