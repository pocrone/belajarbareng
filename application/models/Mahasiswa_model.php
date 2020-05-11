<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_Model extends CI_Model
{
    public function getAll()
    {
        return $this->db->get();
    }
}
