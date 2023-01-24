<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Datainventory extends CI_Controller 
 {
     public function __construct()
     {
         parent:: __construct();
         $this->load->model('M_datainventory');
         $this->load->model('M_datadepartment');
         $this->load->model('M_datalocation');
         $this->load->model('M_datatype');
         $this->load->model('M_datastock');
         $this->load->model('M_detailasset');
     }
     public function index()
     {
      
        $data['judul_halaman'] = 'Data Inventory';
        $data['inventory'] = $this->M_datainventory->tampil_data();
        $data['department'] = $this->M_datadepartment->getdepartment();
        $data['location'] = $this->M_datalocation->getlocation();
        $data['type'] = $this->M_datatype->tampil_data();
        
         $this->load->view('backend/datainventory/index',$data);
       
     }
    

    public function detail($idcomp)
     {
    
        $data['judul_halaman'] = 'Data Inventory';
        $data['inventory'] = $this->M_datainventory->getdatabyid($idcomp);
        $data['sparepart'] = $this->M_datastock->tampil_data();
        $data['inventorydetail'] = $this->M_datainventory->getdetaildatabyid($idcomp);

        $this->load->view('backend/datainventory/detail',$data);
       
    }

   public function tambahdata()
    {
        $data['judul_halaman'] = 'Add Asset Data';
        
                $this->M_datainventory->addasset();
                // $this->M_datatype->addtype();
                redirect('admin/Datainventory');
                
        }

        public function adddetailasset()
        {
        
                $this->M_detailasset->adddetailasset();
                redirect('admin/Datainventory/detail',$data);
           
                    
        }
        
}



// }