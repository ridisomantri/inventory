<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_datadepartment extends CI_Model 
{
    public function getdepartment()
    {
        
        return $this->db->get('department')->result_array();
    }                        
                        
}


/* End of file M_datadepartment_model.php and path /application/models/M_datadepartment_model.php */
