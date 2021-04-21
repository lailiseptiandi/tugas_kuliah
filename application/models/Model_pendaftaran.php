<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_pendaftaran extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllUser()
    {
        return $this->db->get('mahasiswa');
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

    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    // function hapus_data($where, $table)
    // {
    //     $this->db->where($where);
    //     $this->db->delete($table);
    // }
}
