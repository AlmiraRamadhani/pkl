<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_buletin extends CI_Model
{
    public function tampilprofil()
    {
        $this->db->select('gambar');
        $this->db->from('buletin');
        $this->db->where('edisi=profil');
        $data = $this->db->get('');
        return $data;
    }
}
