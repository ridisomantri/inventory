<?php
class M_datastock extends CI_Model{

    public function tampil_data()
        {
            return $this->db->get('invstock')->result_array();
        }
    
}