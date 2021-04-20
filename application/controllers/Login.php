<?php

defined('BASEPATH') or exit('No direcct script access allowed');


class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        // $data['judul'] = 'login';
        $this->load->view('login');
    }


    public function login_user()
    {
        $this->validasi_login();
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $cek_username_password = count($this->Model_login->cek_username_password($username, $password));

        $tampilkan = $this->Model_login->cek_username_password($username, $password);

        if ($cek_username_password == 1) {
            # code...
            foreach ($tampilkan as $show) {
                # code...
                $id = $show['id'];
                $username = $show['username'];
                $password = $show['password'];
                // $nim = $show['nim'];
                // $name = $show['name'];
                // $email = $show['email'];
                // $phone = $show['phone'];
            }

            $this->session->get_userdata([
                'mhsLogin' => TRUE,
                'id' => $id,
                'username' => $username,
                'password' => $password,
                // 'nim' => $nim,
                // 'name' => $name,
                // 'email' => $email,
                // 'phone' => $phone,
            ]);
        }

        echo json_encode([
            "status" => True,
            'message ' => "success"
        ]);
    }


    public function validasi_login()
    {
        $data = [];
        $data['error_string'] = [];
        $data['input_error'] = [];
        $data['status'] = TRUE;


        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $cek_username = count($this->Model_login->cek_username_password($username, $password));

        if ($cek_username == 0) {
            $data['input_error'][] = 'password';
            $data['error_string'][] = 'Username/password tidak sesuai';
            $data['status'] = FALSE;
        } else if ($this->input->post('username') == '') {
            $data['input_error'][] = 'username';
            $data['error_string'][] = 'Username tidak boleh kosong';
            $data['status'] = FALSE;
        } else if ($this->input->post('password') == '') {
            $data['input_error'][] = 'password';
            $data['error_string'][] = 'password tidak boleh kosong';
            $data['status'] = FALSE;
        } else if ($data['status'] === false) {
            echo json_encode($data);
            exit;
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('mhsLogin');
        $this->session->unset_userdata('id');
        // $this->session->unset_userdata('name');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        // $this->session->unset_userdata('nim');
        // $this->session->unset_userdata('email');
        // $this->session->unset_userdata('phone');

        redirect('login');
    }
}
