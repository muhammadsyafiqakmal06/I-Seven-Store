<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1000000;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		$this->load->library('upload', $config);
		$this->load->model('Model_upload'); //Memanggil lokasi model
	}

	function create()
	{
		$this->load->view('auth/uploadAdmin');
	}

	function proses()
	{
		if (!$this->upload->do_upload('berkas')) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('auth/uploadAdmin', $error);
		} else {
			$image_data = $this->upload->data();
			$imgdata = file_get_contents($image_data['full_path']);
			$file_encode = base64_encode($imgdata);

			$data['nama'] = $this->input->post('nama');
			$data['keterangan_berkas'] = $this->input->post('keterangan_berkas');
			$data['harga'] = $this->input->post('harga');
			$data['tipe'] = $this->input->post('tipe');
			$data['spesifikasi'] = $this->input->post('spesifikasi');
			$data['diskon'] = $this->input->post('diskon');
			$data['flashsale'] =  $this->input->post('flashsale');
			$data['tipe_berkas'] = $this->upload->data('file_type');
			$data['ukuran_berkas'] = $this->upload->data('file_size');
			$data['berkas'] = $file_encode;
			//foto 2
			$this->upload->do_upload('berkas2');
			$file2 = $this->upload->data();
			$imgdata2 = file_get_contents($file2['full_path']);
			$file_encode2 = base64_encode($imgdata2);
			$data['berkas2'] = $file_encode2;

			//foto3
			$this->upload->do_upload('berkas3');
			$file3 = $this->upload->data();
			$imgdata3 = file_get_contents($file3['full_path']);
			$file_encode3 = base64_encode($imgdata3);
			$data['berkas3'] = $file_encode3;
			$data['nama_berkas'] =  $this->upload->data('file_name');

			$this->Model_upload->insertDataUpload($data);
			unlink($image_data['full_path']);
			redirect('home');
		}
	}

	public function index()
	{

		$queryAllUpload = $this->Model_upload->getDataUpload();
		$data = array('queryAllupload' => $queryAllUpload);
		$this->load->view('home', $data);
	}

	public function fungsiDelete($kd_berkas)
	{
		$this->Model_upload->deleteData($kd_berkas);
		redirect(base_url('index.php/upload'));
	}

	public function detailProduk($kd_berkas)
	{
		$queryAllUpload = $this->Model_upload->detailProduk($kd_berkas);
		$data = array('queryAllupload' => $queryAllUpload);
		$this->load->view('detail', $data);
	}
}
