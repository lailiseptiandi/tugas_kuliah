<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{


    public function index()
    {
        $data['judul'] = 'Pendaftaran';
        $this->load->view('pendaftaran_mahasiswa', $data);
    }

    public function simpan_pendaftaran()
    {
        $this->Model_pendaftaran->simpanPendaftaran();

        redirect('keterangan_berhasil');
    }

    public function keterangan_berhasil()
    {
        $data['judul'] = 'Berhasil';
        $this->load->view('pendaftaran_berhasil', $data);
    }
}
