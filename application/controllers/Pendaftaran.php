<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_pendaftaran');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function index()
    {
        $data['judul'] = 'Pendaftaran';
        $data['mahasiswa'] = $this->Model_pendaftaran->getAllUser();
        $this->load->view('halaman_pendaftaran', $data);
    }

    public function simpan_pendaftaran()
    {
        $this->Model_pendaftaran->simpanPendaftaran();

        redirect('pendaftaran');
    }


    public function validasi()
    {
        $rules = [
            [
                'field' => 'nim',
                'label' => 'NPM',
                'rules' => 'required|is_unique[mahasiswa.nim]'
            ], [
                'field' => 'name',
                'label' => 'Nama',
                'rules' => 'required|is_unique[mahasiswa.name]'
            ], [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required|is_unique[mahasiswa.username]'
            ], [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email|is_unique[mahasiswa.email]'
            ], [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required'
            ], [
                'field' => 'passconf',
                'label' => 'Konfirmasi Password',
                'rules' => 'required|matches[password]'
            ], [
                'field' => 'phone',
                'label' => 'No HP',
                'rules' => 'required|is_unique[mahasiswa.phone]'
            ],

        ];

        $this->form_validation->set_rules($rules);
        $this->form_validation->set_message('valid_email', '{field} Salah!');
        $this->form_validation->set_message('is_unique', '{field} Sudah ada!');
        $this->form_validation->set_message('required', '{field} tidak boleh kosong!');
        if ($this->form_validation->run() == FALSE) {
            # code...
            $data = [
                'nim' => form_error('nim'),
                'name' => form_error('name'),
                'username' => form_error('username'),
                'password' => form_error('password'),
                'passconf' => form_error('passconf'),
                'email' => form_error('email'),
                'phone' => form_error('phone'),
            ];

            echo json_encode($data);
        } else {

            $this->Model_pendaftaran->simpanPendaftaran();
            echo json_encode('sukses');
        }
    }




    public function tambah_berhasil()
    {
        $data['judul'] = 'Berhasil';
        $data['mahasiswa'] = $this->Model_pendaftaran->getAllUser()->result();
        $this->load->view('halaman_pendaftaran', $data);
    }
    public function hapus_berhasil()
    {
        $data['judul'] = 'Berhasil';
        $data['mahasiswa'] = $this->Model_pendaftaran->getAllUser()->result();
        $this->load->view('halaman_pendaftaran', $data);
    }

    function delete($id)
    {
        $where = array('id' => $id);
        $this->Model_pendaftaran->delete($where, 'mahasiswa');
        redirect('pendaftaran/hapus_berhasil');
    }
}
