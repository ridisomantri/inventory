<?php

class Datalocation extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_datalocation');
    }
    public function index()
    {
        $data['judul_halaman'] = 'Location Data';
        $data['location'] = $this->m_datalocation->index();
        $this->load->view('backend/datalocation/index',$data);

        
    }
    
    public function adddata()
    {
        $data['judul_halaman'] = 'Add Location Data';
        
        $this->form_validation->set_rules('locationname','Location','required');

        if ($this->form_validation->run()== FALSE)
        {
            $data['locationname'] = $this->m_datalocation->index();
        $this->load->view('backend/datalocation/adddata',$data);
        }
        else 
        {
                $this->m_datalocation->addlocation();
                redirect('admin/Datalocation');
        }
        
    }
}