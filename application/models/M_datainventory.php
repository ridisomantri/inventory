<?php
class M_datainventory extends CI_Model{

    public function tampil_data()
        {
            return $this->db->get('comp01')->result_array();
        }
    
}