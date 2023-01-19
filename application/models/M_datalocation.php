<?php
class M_datalocation extends CI_Model{

    public function index()
        {
            return $this->db->get('location')->result_array();
        }
    public function addlocation()
        {
            $data = [
                "LOCATIONNAME" => $this->input->post('locationname')
            ];
            $this->db->insert('location',$data);
        }
}