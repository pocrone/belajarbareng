<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('data_dosen');
    }
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('lihat_dosen');
    }
    public function update_dosen()
    {
        $this->form_validation->set_rules('login-username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = "Login";
            $this->load->view('update-dosen');
        } else {
            echo 'berhasil';
        }
    }

    public function addDosen()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('matakuliah', 'Matakuliah', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = "Login";
            $this->load->view('add-dosen');
        } else {
            $this->data_dosen->add_dosen();
        }
    }
    public function delete()
    {
        $this->form_validation->set_rules('login-username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = "Login";
            $this->load->view('add-dosen');
        } else {
            echo 'berhasil';
        }
    }
}
