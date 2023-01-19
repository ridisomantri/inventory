<?php

class Workorder extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_datainventory');
    }
    public function index()
    {
        $data['judul_halaman'] = 'Work Order Ticket';
        $data['inventory'] = $this->M_datainventory->tampil_data();
        $this->load->view('backend/workorder/index',$data);

        
    }
    
}