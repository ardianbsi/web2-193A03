<?php
class Autentifikasi extends CI_Controller
{
    public function index()
    {
        $this->load->view('autentifikasi/login');
    }

    public function register()
    {
        $this->load->view('autentifikasi/register');
    }
}