<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function login()
    {
        $this->load->view('admin/v_login');
    }

    public function dash()
    {
        $this->load->view('admin/contoh');
    }
}
