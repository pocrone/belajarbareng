<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model', 'mahasiswa');
    }

    public function index()
    {
        $data['title'] = "Mahasiswa";
        $data['users'] = $this->mahasiswa->getAll();

        // load view here
        $this->load->view('mahasiswa/index');
    }

    public function tambahMahasiswa()
    {
        $data['title'] = "Mahasiswa | Tambah Mahasiswa";

        if ($this->form_validation->run() == false) {
            $this->load->view('mahasiswa/tambah', $data);
        } else {
            // validasi foto
            $foto = $_FILES['foto']['name'];

            if (!$foto) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Sertakan foto mahasiswa</div>');
                redirect('mahasiswa/tambahMahasiswa');
            } else {
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/mahasiswa/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    $foto = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                    redirect('mahasiswa/tambahMahasiswa');
                }
            }

            // Store user
            $user = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'program_studi' => htmlspecialchars($this->input->post('program_studi', true)),
                'foto' => $foto
            ];

            if ($this->mahasiswa->insert($user)) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data mahasiswa baru ditambahkan!</div>');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data mahasiswa baru gagal ditambahkan!</div>');
            }

            redirect('mahasiswa');
        }
    }

    public function updateMahasiswa($id)
    {
        $data['title'] = "Mahasiswa | Edit Mahasiswa";
        $data['user'] = $this->mahasiswa->getUser($id);

        if ($this->form_validation->run() == false) {
            $this->load->view('mahasiswa/update', $data);
        } else {
            // validasi foto
            $old_photo = $this->input->post('old_photo', true);
            $foto = $_FILES['foto']['name'];

            if (!$foto) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Sertakan foto mahasiswa</div>');
                redirect('mahasiswa/updateMahasiswa/' . $id);
            } else {
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/mahasiswa/';

                $this->load->library('upload', $config);

                // delete old photo
                unlink(FCPATH . 'assets/img/mahasiswa/' . $old_photo);

                if ($this->upload->do_upload('foto')) {
                    $foto = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                    redirect('mahasiswa/updateMahasiswa/' . $id);
                }
            }

            // Store user
            $user = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'program_studi' => htmlspecialchars($this->input->post('program_studi', true)),
                'foto' => $foto
            ];

            if ($this->mahasiswa->update($id, $user)) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data mahasiswa baru ditambahkan!</div>');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data mahasiswa baru gagal ditambahkan!</div>');
            }

            redirect('mahasiswa');
        }
    }

    public function hapusMahasiswa($id)
    {
        // run query
        if ($this->mahasiswa->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data mahasiswa berhasil dihapus!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data mahasiswa gagal dihapus!</div>');
        }

        redirect('mahasiswa');
    }
}
