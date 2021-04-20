<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_login extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
    }

    public function cek_username($username)
    {
        $data = [];
        $this->db->select('*');
        $this->db->Where('username', $username);
        $q = $this->db->get('mahasiswa');
        if (count($q->num_rows() > 0)) {
            # code...
            foreach ($q->result_array() as $row) {
                $data[] = $row;
                # code...
            }
        }
        $q->free_result();
        return $data;
    }

    public function cek_username_password($username, $password)
    {
        $data = [];
        $this->db->select('*');
        $this->db->Where('username', $username);
        $this->db->Where('password', $password);
        $q = $this->db->get('mahasiswa');
        if (count($q->num_rows() > 0)) {
            # code...
            foreach ($q->result_array() as $row) {
                $data[] = $row;
                # code...
            }
        }
        $q->free_result();
        return $data;
    }
}
