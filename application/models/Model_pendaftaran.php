<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_pendaftaran extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function simpanPendaftaran()
    {
        $data = [
            'nim' => $this->input->post('nim'),
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'phone' => $this->input->post('phone'),
            'status_mahasiswa' => "Aktif",
        ];
        $this->db->insert('mahasiswa', $data);
    }
}
