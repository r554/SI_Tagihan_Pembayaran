<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->model('M_admin');
        $this->load->library(array('form_validation', 'session'));
    }

    public function index()
    {
        $this->load->view('admin/V_dasboard');
    }
}
