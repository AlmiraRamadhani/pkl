<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_crud extends CI_Model
{
  public function tampil()
  {
    $this->db->select('*');
    $this->db->from('buletin');
    $this->db->order_by('edisi', 'asc');
    $this->db->order_by('tahun', 'asc');
    $data = $this->db->get('');
    return $data;
  }
  public function delete()
  {
    $this->db->where('id', $this->uri->segment(3));
    return $this->db->delete('buletin');
  }
  public function m_edit()
  {
    $this->db->select('*');
    $this->db->where('id', $this->uri->segment(3));
    return $this->db->get('buletin');
  }
  public function m_update()
  {
    $data = array(
      'halaman' => $this->input->post('halaman'),
      'edisi' => $this->input->post('edisi'),
      'tahun' => $this->input->post('tahun'),
      'gambar' => $this->input->post('gambar')
    );
    $this->db->where('id', $this->uri->segment(3));
    return $this->db->update('buletin', $data);
  }
  public function gambar()
  {
    $this->db->select('gambar');
    $this->db->from('buletin');
    $this->db->order_by('edisi', 'asc');
    $this->db->order_by('tahun', 'asc');
    $data = $this->db->get('');
    return $data;
  }

  // Fungsi untuk melakukan proses upload file
  public function upload()
  {
    $config['upload_path'] = './gambar/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size']  = '2048';
    $config['remove_space'] = TRUE;

    $this->load->library('upload', $config); // Load konfigurasi uploadnya
    if ($this->upload->do_upload('gambar')) { // Lakukan upload dan Cek jika proses upload berhasil
      // Jika berhasil :
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      return $return;
    } else {
      // Jika gagal :
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
  }
  public function input($upload)
  {
    $data = array(
      'halaman' => $this->input->post('halaman'),
      'edisi' => $this->input->post('edisi'),
      'tahun' => $this->input->post('tahun'),
      'gambar' => $upload['file']['file_type']
    );
    return $this->db->insert('buletin', $data);
  }
}
/* End of file M_crud.php */
/* Location: ./application/models/M_crud.php */
