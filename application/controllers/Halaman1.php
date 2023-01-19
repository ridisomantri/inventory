<?php 

class Halaman1 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['judul_halaman'] = 'Halaman Pertama';
        $this->load->view('halaman1',$data);
    }
}

/* End of file Halaman1.php and path \application\controllers\Halaman1.php */
