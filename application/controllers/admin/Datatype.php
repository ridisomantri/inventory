<?php

class Datatype extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_datatype');
    }
    public function index()
    {
        $data['judul_halaman'] = 'Data Type';
        $data['invtype'] = $this->M_datatype->tampil_data();
        $this->load->view('backend/datatype/index',$data);

        
    }

    public function tambahdata()
    {
        $data['judul_halaman'] = 'Add Type Data';
        
        $this->form_validation->set_rules('typename','Type Name','required');

        if ($this->form_validation->run()== FALSE)
        {
            $data['typename'] = $this->M_datatype->tampil_data();
            $this->load->view('backend/datatype/adddata',$data);
        }
        else 
        {
                $this->M_datatype->addtype();
                redirect('admin/Datatype');
        }
        
    }
}