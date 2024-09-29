<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//
		//load session library
		$this->load->library('session');

		//restrict users to go back to login if session has been set
		if ($this->session->userdata('user')) {
			// redirect('admin');

		} else {
			$data['title'] = 'Login Page';
			redirect('auth');
		}
		$this->load->helper('url');
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1000000;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		$this->load->library('upload', $config);
		$this->load->model('Model_upload'); //Memanggil lokasi model
	}
	public function index()
	{
		$this->load->view('auth/dashboardAdmin');
	}

	public function UploadAdmin()
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
			$data['kelengkapan'] = $this->input->post('kelengkapan');
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
			redirect('admin');
		}
	}

	public function editAdmin($kd_berkas)
	{
		$queryAllUpload = $this->Model_upload->detailProduk($kd_berkas);
		$data = array('queryAllupload' => $queryAllUpload);
		$this->load->view('auth/editAdmin', $data);
	}

	public function fungsiEdit()
	{
		if (!$this->upload->do_upload('berkas')) {
			$kd_berkas = $this->input->post('kd_berkas');
			$data['nama'] = $this->input->post('nama');
			$data['kelengkapan'] = $this->input->post('kelengkapan');
			$data['keterangan_berkas'] = $this->input->post('keterangan_berkas');
			$data['harga'] = $this->input->post('harga');
			$data['tipe'] = $this->input->post('tipe');
			$data['spesifikasi'] = $this->input->post('spesifikasi');
			$data['diskon'] = $this->input->post('diskon');
			$data['flashsale'] =  $this->input->post('flashsale');
			$data['tipe_berkas'] = $this->upload->data('file_type');
			$data['ukuran_berkas'] = $this->upload->data('file_size');
			
			$this->Model_upload->updateProduk($data, $kd_berkas);
			redirect('admin');
		} else {
			$image_data = $this->upload->data();
			$imgdata = file_get_contents($image_data['full_path']);
			$file_encode = base64_encode($imgdata);
			$kd_berkas = $this->input->post('kd_berkas');
			$data['nama'] = $this->input->post('nama');
			$data['kelengkapan'] = $this->input->post('kelengkapan');
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

			$this->Model_upload->updateProduk($data, $kd_berkas);
			unlink($image_data['full_path']);
			redirect('admin');
		}
		$this->load->view('admin');
	}
	public function fungsiDelete($kd_berkas)
	{
		$this->Model_upload->deleteData($kd_berkas);
		redirect('admin');
	}

	public function galeriAdmin()
	{
		$queryTipe = $this->Model_upload->getDatatipe();
		$data = array('queryTipe' => $queryTipe);
		$queryTipe2 = $this->Model_upload->getDatatipe2();
		$queryTipe3 = $this->Model_upload->getDatatipe3();
		$data = $data  + array('queryTipe2' => $queryTipe2);
		$data = $data  + array('queryTipe3' => $queryTipe3);
		//dikirim data ke view
		$this->load->view('auth/galeriAdmin', $data);
	}
}
