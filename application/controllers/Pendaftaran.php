<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{


    public function index()
    {
        $data['judul'] = 'Pendaftaran';
        $data['mahasiswa'] = $this->Model_pendaftaran->getAllUser()->result();
        $this->load->view('index', $data);
    }

    public function simpan_pendaftaran()
    {
        $this->Model_pendaftaran->simpanPendaftaran();

        redirect('pendaftaran/tambah_berhasil');
    }

    public function tambah_berhasil()
    {
        $data['judul'] = 'Berhasil';
        $data['mahasiswa'] = $this->Model_pendaftaran->getAllUser()->result();
        $this->load->view('index', $data);
    }
    public function hapus_berhasil()
    {
        $data['judul'] = 'Berhasil';
        $data['mahasiswa'] = $this->Model_pendaftaran->getAllUser()->result();
        $this->load->view('index', $data);
    }

    function delete($id)
    {
        $where = array('id' => $id);
        $this->Model_pendaftaran->delete($where, 'mahasiswa');
        redirect('pendaftaran/hapus_berhasil');
    }
}
