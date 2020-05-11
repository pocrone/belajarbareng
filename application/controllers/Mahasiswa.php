<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Mahasiswa_model');
    }

    public function index()
    {
        // load view here

        echo 'Mahasiswa';
    }

    public function tambahMahasiswa()
    {
        // load view here
    }

    public function updateMahasiswa()
    {
        // load view here
    }

    public function hapusMahasiswa()
    {
        // run query
    }
}
