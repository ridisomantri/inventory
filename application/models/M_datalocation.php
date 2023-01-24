<?php
class M_datalocation extends CI_Model{

    public function getlocation()
        {
            return $this->db->get('location')->result_array();
        }
    public function addlocation()
        {
            $data = [
                "locationname" => $this->input->post('locationname')
            ];
            $this->db->insert('location',$data);
        }
}