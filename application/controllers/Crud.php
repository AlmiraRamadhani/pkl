<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Crud extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_crud');
		$this->load->library('upload');
	}
	// List all data
	public function index()
	{
		$data['tmp'] = $this->m_crud->tampil()->result_array();
		$this->template->load('role', 'crud/view', $data);
	}
	// Add a form item
	public function form_add()
	{
		$this->template->load('role', 'crud/create');
	}
	// ada data proses input
	public function add()
	{
		// cara 1
		// if (isset($_FILES["gambar"]["name"])) {
		// 	$this->load->library('upload');
		// 	$gambar = "file_" . time();
		// 	//membuat konfigurasi
		// 	$config['upload_path'] = 'gambar/';
		// 	$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		// 	$config['max_size'] = 204800; //200kb
		// 	$config['max_width'] = 10240;
		// 	$config['max_height'] = 10240;
		// 	$config['file_name'] = $this->id;
		// 	$this->load->library('upload', $config);
		// 	$halaman = $this->input->post('halaman');
		// 	$edisi = $this->input->post('edisi');
		// 	$tahun = $this->input->post('tahun');
		// 	$gambar = $this->library->upload('gambar');
		// 	if (!empty($_FILES) && $_FILES['gambar']['name'] > 0 && $_FILES['gambar']['error'] == 0) {
		// 		if ($this->upload->do_upload($gambar)) {
		// 			$gambar = $this->upload->data('file_name');
		// 			$data = $gambar['file_name'];
		// 			$query = "INSERT INTO buletin ('halaman', 'edisi', 'tahun', 'gambar')VALUES
		// 			('" . $halaman . "','" . $edisi . "','" . $tahun . "','" . $data . "') ";
		// 			$input = $this->db->query($query);
		// 			$this->session->set_flashdata('Sukses', "× Data Berhasil Diubah.");
		// 			redirect('crud/view');
		// 		} else {
		// 			$this->session->set_flashdata('Sukses', "× Data Berhasil Diubah.");
		// 			redirect('crud/view');
		// 		}
		// 	} else {
		// 		$querysimpantanpafoto = "INSERT INTO buletin ('halaman','edisi', 'tahun')VALUES
		// 		('" . $halaman . "','" . $edisi . "','" . $tahun . "') ";
		// 		$simpandatasiswatanpafoto = $this->db->query($querysimpantanpafoto);
		// 		if ($simpandatasiswatanpafoto) {
		// 			$this->session->set_flashdata('Sukses', " × Data Berhasil Diubah.");
		// 			redirect('crud/view');
		// 		} else {
		// 			$this->session->set_flashdata('Sukses', " × Data Berhasil Diubah.");
		// 			redirect('crud/view');
		// 		}
		// 	}
		// }
		// $data['halaman'] = set_value('halaman');
		// $data['edisi']  = set_value('edisi');
		// $data['tahun']  = set_value('tahun');
		// $data['gambar']	= set_value('gambar');
		// $this->session->set_userdata($data);
		// $this->m_crud->input($data); //memasukan data ke database
		// redirect('crud/index'); //mengalihkan halaman

		//cara 2
		// $halaman = $this->input->post('halaman');
		// $edisi = $this->input->post('edisi');
		// $tahun = $this->input->post('tahun');
		// //upload gambar
		// $config['max_size'] = 2048;
		// $config['allowed_types'] = "png|jpg|gif|jpeg";
		// $config['remove_spaces'] = TRUE;
		// $config['overwrite'] = TRUE;
		// $config['upload_path'] = FCPATH . 'gambar';
		// $this->load->library('upload');
		// $this->upload->initialize($config);
		// //ambil data image
		// $this->upload->do_upload('gambar');
		// $data_image = $this->upload->data('file_name');
		// $location = base_url() . 'gambar/';
		// $gambar = $location . $data_image;
		// $data = array('halaman' => $halaman, 'edisi' => $edisi, 'tahun' => $tahun, 'gambar' => $gambar);
		// //simpan data
		// $this->m_crud->input($buletin);
		// redirect('crud/index');

		//cara 3
		// $config['upload_path'] = "./gambar";									//path folder file upload
		// $config['allowed_types'] = "gif|png|jpg|jpeg";							//type file yang boleh di upload
		// $config['encrypt_name'] = TRUE;											//enkripsi file name upload
		// $this->load->library('upload', $config);								//call library upload
		// if ($this->upload->do_upload('file')) {									//upload file
		// 	$data = array('upload_data' => $this->upload->data());				//ambil file name yang di upload

		// 	$halaman = $this->input->post('halaman');							//get halaman
		// 	$edisi = $this->input->post('edisi');								//get edisi
		// 	$tahun = $this->input->post('tahun');								//get tahun 
		// 	$gambar = $data['upload_data']['file_name'];						//set file name ke variable image

		// 	$result = $this->m_crud->input($halaman, $edisi, $tahun, $gambar);	//kirim value ke model m_crud
		// 	// echo json_decode($result);										//
		// 	redirect('crud/index');
		// }

		// cara 4
		$data = array();
		if ($this->input->post('submit')) { // Jika user menekan tombol Submit (Simpan) pada form
			// lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
			$upload = $this->m_crud->upload();

			if ($upload['result'] == "success") { // Jika proses upload sukses
				// Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
				$this->m_crud->input($upload);

				redirect('gambar'); // Redirect kembali ke halaman awal / halaman view data
			} else { // Jika proses upload gagal
				$data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			}
		}
		$this->template->load('role', 'crud/view', $data);
	}
	public function edit()
	{
		$data['tmp'] = $this->m_crud->m_edit()->row();
		$this->template->load('role', 'crud/edit', $data);
	}
	//Update one item
	public function update()
	{
		$this->form_validation->set_rules('halaman', 'halaman', 'trim|required|min_length[1]|max_length[2]');
		$this->form_validation->set_rules('edisi', 'edisi', 'trim|required|min_length[1]|max_length[1]');
		$this->form_validation->set_rules('tahun', 'tahun', 'trim|required|min_length[1]|max_length[4]');
		$this->form_validation->set_rules('gambar', 'gambar', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			if ($this->m_crud->m_update()) {
				$this->session->set_flashdata('pesan', 'Update data succesfuly!');
				redirect('/', 'refresh');
			} else {
				$this->session->set_flashdata('pesan', 'Update data failed');
				redirect('/', 'refresh');
			}
		} else {
			$data['tmp'] = $this->m_crud->m_edit()->row();
			$this->template->load('role', 'crud/edit', $data);
		}
	}
	//Delete one item
	public function del()
	{
		if ($this->m_crud->delete()) {
			$this->session->set_flashdata('pesan', 'Delete data succesfuly!');
			redirect('crud', 'refresh');
		} else {
			$this->session->set_flashdata('pesan', 'Delete data failed');
			redirect('crud', 'refresh');
		}
	}
}
/* End of file Crud.php */
/* Location: ./application/controllers/Crud.php */
