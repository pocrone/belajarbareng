<?php

class Data_dosen extends CI_Model
{
    public function add_dosen()
    {
        $data = [
            'name' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'mata_kuliah' => $this->input->post('matakuliah'),
            'foto' => "file1.png",
        ];
        $this->db->insert('dosen', $data);
    }
    public function upd_dosen($id)
    {
        $this->db->where('id', $id);
        $data = [
            'name' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'mata_kuliah' => $this->input->post('matakuliah'),
            'foto' => "file1.png",
        ];
        $this->db->insert('dosen', $data);
    }

    function show_dosen()
    {
        $data = $this->db->get('dosen');
        return $data->result();
    }
}
