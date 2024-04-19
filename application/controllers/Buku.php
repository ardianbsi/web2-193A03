<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

    public function index()
	{
		$this->load->view('buku/tampil_buku');
        //$this->load->model('Bukumodel');
	}

    function create()
    {
        $this->load->view('buku/tambah_buku');
    }


}
