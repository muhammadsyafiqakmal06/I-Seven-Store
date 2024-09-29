<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Model_upload'); //Memanggil lokasi model
    }

    public function index()
    {
        $queryAllUpload = $this->Model_upload->getDataUpload();
        $data = array('queryAllupload' => $queryAllUpload);
        // $this->load->view('beranda',$data);

        $queryFlashSale = $this->Model_upload->getDataFs();
        $data = $data  + array('queryFlashSale' => $queryFlashSale);


        //dikirim data ke view
        $this->load->view('beranda', $data);
    }

    public function storePro()
    {
        $queryAllUpload = $this->Model_upload->getDatatipe2();
        $data = array('queryAllupload' => $queryAllUpload);
        $this->load->view('storePro', $data);
    }

    public function storeAir()
    {
        $queryAllUpload = $this->Model_upload->getDatatipe();
        $data = array('queryAllupload' => $queryAllUpload);
        $this->load->view('storeAir', $data);
    }

    public function storeRetina()
    {
        $queryAllUpload = $this->Model_upload->getDatatipe3();
        $data = array('queryAllupload' => $queryAllUpload);
        $this->load->view('storeRetina', $data);
    }

    public function detail($kd_berkas)
    {
        $queryAllUpload = $this->Model_upload->detailProduk($kd_berkas);
        $data = array('queryAllupload' => $queryAllUpload);
        $this->load->view('detail', $data);
    }

    public function login()
    {
        $this->load->view('login');
    }
}
