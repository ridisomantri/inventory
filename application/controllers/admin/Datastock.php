<?php

class Datastock extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_datastock');
    }
    public function index()
    {
        $data['judul_halaman'] = 'Data Stock';
        $data['invstock'] = $this->M_datastock->tampil_data();
        $this->load->view('backend/datastock',$data);

        
    }
    
}