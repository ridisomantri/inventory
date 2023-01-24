<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct()
     {
         parent:: __construct();
         $this->load->model('M_datainventory');
     }

    public function index()
    {
        $data['judul_halaman'] = 'Dashboard';
        $this->load->view('backend/dashboard/index',$data);
    }
}

/* End of file Dashboard.php.php and path \application\controllers\admin\Dashboard.php.php */
