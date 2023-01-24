<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_detailasset extends CI_Model 
{
    public function select()
    {

    }                        
    public function adddetailasset()
    {
        $data = [
            "IDCOMP01" => $this->input->post('test')
            // "SPBRAND" => $this->input->post('SPBRAND'),
            // "SPNAME" => $this->input->post('SPNAME'),
            // "SPNO" => $this->input->post('SPNO'),
            // "SPSERIAL" => $this->input->post('SPSERIAL'),
            // "SPTYPE" => $this->input->post('SPTYPE'),
            // "SPSIZE" => $this->input->post('SPSIZE'),
            // "SPUPDATE" => $this->input->post('SPUPDATE')
        ];
        $this->db->insert('comp02',$data);
    }                 
}


/* End of file M_detailasset_model.php and path /application/models/M_detailasset_model.php */
