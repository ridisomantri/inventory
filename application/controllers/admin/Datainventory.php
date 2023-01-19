<?php

class Datainventory extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_datainventory');
    }
    public function index()
    {
        $data['judul_halaman'] = 'Data Inventory';
        $data['inventory'] = $this->m_datainventory->tampil_data();
        $this->load->view('backend/datainventory/index',$data);
       
    }

    public function viewdata()
    {
        $data['judul_halaman'] = 'Data Inventory';
        $data['inventory'] = $this->m_datainventory->tampil_data();
        $this->load->view('backend/datainventory/view',$data);
       
    }
    
}