<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_Model extends CI_Model
{
    public function getAll()
    {
        return $this->db->get();
    }

    public function getUser($id)
    {
        return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
    }

    public function insert($user)
    {
        $this->db->insert('mahasiswa', $user);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('mahasiswa', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('mahasiswa');
    }
}
