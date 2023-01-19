<?php
class M_datatype extends CI_Model{

    public function tampil_data()
        {
            return $this->db->get('inv_type')->result_array();
        }
    
    public function addtype()
        {
            $data = [
                "typename" => $this->input->post('typename')
            ];
            $this->db->insert('inv_type',$data);
        }
}