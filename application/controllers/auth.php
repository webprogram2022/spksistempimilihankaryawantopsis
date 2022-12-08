<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('auth/login');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $username1 = $this->db->get('user')->result_array();
        foreach ($username1 as $user) {
            if ($user['username'] == $username) {
                if ($user['password'] == $password) {
                    redirect('admin');
                } else {
                    redirect('auth');
                }
            }
        }
    }
}
