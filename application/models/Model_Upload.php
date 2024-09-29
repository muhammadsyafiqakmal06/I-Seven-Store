<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_Upload extends CI_Model
{


    public function getDataUpload()
    {
        $query = $this->db->get('tb_berkas');
        return $query->result();
    }

    public function insertDataUpload($data)
    {
        $query = $this->db->insert('tb_berkas', $data);
    }
    public function deleteData($kd_berkas)
    {
        $this->db->where('kd_berkas', $kd_berkas);
        $this->db->delete('tb_berkas');
        $this->db->query(" ALTER TABLE tb_berkas DROP kd_berkas");
        $this->db->query(" ALTER TABLE tb_berkas ADD kd_berkas INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
    }

    public function getDatatipe()
    {

        $query = $this->db->query("SELECT * FROM `tb_berkas` WHERE tipe = 1");

        // $query = $this->db->where('tipe', '1');
        return $query->result();
    }

    public function getDatatipe2()
    {

        $query = $this->db->query("SELECT * FROM `tb_berkas` WHERE tipe = 2");

        // $query = $this->db->where('tipe', '1');
        return $query->result();
    }

    public function getDatatipe3()
    {

        $query = $this->db->query("SELECT * FROM `tb_berkas` WHERE tipe = 3");

        // $query = $this->db->where('tipe', '1');
        return $query->result();
    }

    public function getDataFs()
    {

        $query = $this->db->query("SELECT * FROM `tb_berkas` WHERE flashsale = 1");

        // $query = $this->db->where('tipe', '1');
        return $query->result();
    }

    public function detailProduk($kd_berkas)
    {
        $kd = $kd_berkas;
        $query = $this->db->query("SELECT * FROM `tb_berkas` WHERE kd_berkas = $kd");
        // $query = $this->db->where('tipe', '1');
        return $query->result();
    }
    public function updateProduk($data, $kd_berkas)
    {
        $this->db->where('kd_berkas', $kd_berkas);
        $this->db->update('tb_berkas', $data);
    }
}
