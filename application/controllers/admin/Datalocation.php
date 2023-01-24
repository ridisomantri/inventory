<?php

class Datalocation extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_datalocation');
    }
    public function index()
    {
        $data['judul_halaman'] = 'Location Data';
        $data['location'] = $this->M_datalocation->getlocation();
        $this->load->view('backend/datalocation/index',$data);

        
    }
    
    public function adddata()
    {
        $data['judul_halaman'] = 'Add Location Data';
        
        $this->form_validation->set_rules('locationname','Location','required');

        if ($this->form_validation->run()== FALSE)
        {
            $data['locationname'] = $this->M_datalocation->getlocation();
        $this->load->view('backend/datalocation/adddata',$data);
        }
        else 
        {
                $this->M_datalocation->addlocation();
                redirect('admin/Datalocation');
        }
        
    }
}