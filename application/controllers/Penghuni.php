<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penghuni extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Madmin');
        $this->load->library('upload');

    }
    
	public function index()
	{
        if (empty($this->session->userdata('username'))) {
            redirect('admin');
        } 
        $data['penghuni'] = $this->Madmin->join_penghuni();
        $this->load->view('admin/layout/header');
		$this->load->view('admin/penghuni/tampil', $data);
        $this->load->view('admin/layout/footer');
	}

    public function addViewPenghuni(){
        if (empty($this->session->userdata('username'))) {
            redirect('admin');
        } 
        $data['penghuni'] = $this->Madmin->get_all_data('data_penduduk')->result();
        $this->load->view('admin/layout/header');
		$this->load->view('admin/penghuni/tambah', $data);
		$this->load->view('admin/layout/footer');
    }

    public function createPenghuni() {
        if (empty($this->session->userdata('username'))) {
            redirect('admin');
        } 
        $id_penduduk = $this->input->post('id_penduduk'); 
        $blok = $this->input->post('blok');
        $nomor = $this->input->post('nomor');
        $status_hunian = $this->input->post('status_hunian');
        $gambar = $this->input->post('gambar');

        $config['upload_path'] = './assets/foto_penghuni/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 1000; // kilobytes
        $config['file_name'] = uniqid();

        $this->upload->initialize($config);

        if ($this->upload->do_upload('gambar')) {
            $data_file = $this->upload->data();

            $dataInput = array(
                'id_penduduk' => $id_penduduk,
                'blok' => $blok,
                'nomor' => $nomor,
                'status_hunian' => $status_hunian,
                'gambar' => $data_file['file_name'],
            );

            $this->Madmin->insert('data_penghuni', $dataInput);

            $this->session->set_flashdata("pesan", "simpan_sukses");
            redirect('penghuni');
        } else {
            $this->session->set_flashdata('penghuni', 'Data tidak valid!');
            redirect('penghuni/addViewpenghuni');
        }
    }

    
    //tampil edit
	public function get_by_id($id){
		if(empty($this->session->userdata('username'))){
			redirect('admin');
		}
        $data['penduduk'] = $this->Madmin->get_all_data('data_penduduk')->result();
        $data['penghuni'] = $this->Madmin->get_penghuni_by_id_penduduk($id);

        if (!$data['penghuni']) {
            echo "Data penghuni untuk penduduk dengan ID $id tidak ditemukan."; 
            return;
        }
        $this->load->view('admin/layout/header');
        $this->load->view('admin/penghuni/edit', $data);
		$this->load->view('admin/layout/footer');
	}

    public function editPenghuni() {
        // Ambil data dari form
        $id_penghuni = $this->input->post('id_penghuni');
        $id_penduduk = $this->input->post('id_penduduk');
        $blok = $this->input->post('blok');
        $nomor = $this->input->post('nomor');
        $status_hunian = $this->input->post('status_hunian');
        $gambar_baru = $_FILES['gambar']['name'];
        $gambar_lama = $this->input->post('gambar_lama');
    
        // Data yang akan diupdate
        $dataUpdate = array(
            'id_penduduk' => $id_penduduk,
            'blok' => $blok,
            'nomor' => $nomor,
            'status_hunian' => $status_hunian,
            'gambar' => $gambar_baru ? $gambar_baru : $gambar_lama
        );
    
        // Jika ada gambar baru, upload gambar
        if ($gambar_baru) {
            $config['upload_path'] = FCPATH . 'assets/foto_penghuni/';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = 1000; // Ukuran file maksimum dalam KB
    
            $this->load->library('upload', $config);
    
            // Periksa apakah path upload valid
            if (!is_dir($config['upload_path'])) {
                echo "Upload path is not valid: " . $config['upload_path'];
                return;
            }
    
            if (!$this->upload->do_upload('gambar')) {
                $error = $this->upload->display_errors();
                echo "Error uploading file: $error";
                return;
            } else {
                // Hapus gambar lama jika ada
                if ($gambar_lama) {
                    $path_lama = FCPATH . 'assets/foto_penghuni/' . $gambar_lama;
                    if (file_exists($path_lama)) {
                        unlink($path_lama);
                    }
                }
            }
        }
    
        // Update data penghuni
        $this->Madmin->update('data_penghuni', $dataUpdate, 'id_penghuni', $id_penghuni);
    
        // Redirect ke halaman lain
        redirect('Penghuni');
    }
    
    
    
    


}