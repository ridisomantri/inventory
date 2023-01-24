<?php
class M_datainventory extends CI_Model{

    public function tampil_data()
        {
            return $this->db->get('comp01')->result_array();
        }
    
        public function getdatabyid($idcomp)
        {
            return $this->db->get_where('comp01',['IDCOMP01' => $idcomp])->row_array();
            
        }
        public function getdetaildatabyid($idcomp)
        {
        return $this->db->get_where('comp02',['IDCOMP01' => $idcomp])->result_array();
        }

        public function addasset()
        {
            $data = [
                "CODE" => $this->input->post('CODE'),
                "DEPARTMENT" => $this->input->post('DEPARTMENT'),
                "IPCOMP" => $this->input->post('IPCOMP'),
                "LOCATION" => $this->input->post('LOCATION'),
                "TYPECOMP" => $this->input->post('TYPECOMP'),
                "USERCOMP" => $this->input->post('USERCOMP')
            ];
            $this->db->insert('comp01',$data);
        }
}