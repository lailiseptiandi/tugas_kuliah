<?php

defined('BASEPATH') or exit('no direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $session = $this->session->userdata('mhsLogin');
        if ($session == FALSE) {
            # code...

            redirect('login');
        }
    }

    public function index()
    {
        $data['judul'] = 'Selamat Datang';
        // $data['isi'] = 'index';
        $this->load->view('index', $data);
    }
}
