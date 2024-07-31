<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Madmin');
        $this->load->library('upload');
    }

    public function index(){
        if (empty($this->session->userdata('username'))) {
            redirect('admin');
        } 
        $data['penduduk'] = $this->Madmin->get_all_data('data_penduduk')->result();
        $this->load->view('admin/layout/header');
		$this->load->view('admin/penduduk/tampil',$data);
		$this->load->view('admin/layout/footer');
    }

    public function addViewPenduduk(){
        if (empty($this->session->userdata('username'))) {
            redirect('admin');
        } 
        $this->load->view('admin/layout/header');
		$this->load->view('admin/penduduk/tambah');
		$this->load->view('admin/layout/footer');
    }

    public function createPenduduk() {
        if (empty($this->session->userdata('username'))) {
            redirect('admin');
        } 
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama_lengkap');
        $jenKel = $this->input->post('jenis_kelamin');
        $tmptLahir = $this->input->post('tempat_lahir');
        $tglLahir = $this->input->post('tgl_lahir');
        $pekerjaan = $this->input->post('pekerjaan');
        $agama = $this->input->post('agama');
        $alamat = $this->input->post('alamat');
        $no_telp = $this->input->post('no_telp');

        $config['upload_path'] = './assets/foto_penduduk/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 1000; // kilobytes
        $config['file_name'] = uniqid();

        $this->upload->initialize($config);

        if ($this->upload->do_upload('gambar')) {
            $data_file = $this->upload->data();

            $dataInput = array(
                'nik' => $nik,
                'nama_lengkap' => $nama,
                'jenis_kelamin' => $jenKel,
                'tempat_lahir' => $tmptLahir,
                'tgl_lahir' => $tglLahir,
                'pekerjaan' => $pekerjaan,
                'agama' => $agama,
                'alamat' => $alamat,
                'no_telp'=> $no_telp,
                'gambar' => $data_file['file_name'],
            );
            $this->Madmin->insert('data_penduduk', $dataInput);
            $this->session->set_flashdata("pesan", "simpan_sukses");
            redirect('penduduk');
        } else {
            $this->session->set_flashdata('penduduk', 'Data tidak valid!');
            redirect('penduduk/addViewPenduduk');
        }
    }

    //tampil edit
	public function get_by_id($id){
		if(empty($this->session->userdata('username'))){
			redirect('admin');
		}
		$dataWhere = array('nik'=>$id);
		$data['penduduk'] = $this->Madmin->get_by_id('data_penduduk', $dataWhere)->row_object();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/penduduk/edit', $data);
		$this->load->view('admin/layout/footer');
	}

    public function editPenduduk(){
        if (empty($this->session->userdata('username'))) {
            redirect('admin');
        } 
        $id = $this->input->post('id_penduduk');
		$nik = $this->input->post('nik');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$jenKel = $this->input->post('jenis_kelamin');
		$tmptLahir = $this->input->post('tempat_lahir');
		$tglLahir = $this->input->post('tgl_lahir');
		$pekerjaan = $this->input->post('pekerjaan');
		$agama = $this->input->post('agama');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$gambar_lama = $this->input->post('gambar_lama'); 
	
		// Membersihkan input dari XSS
		$nik = $this->security->xss_clean($nik);
		$nama_lengkap = $this->security->xss_clean($nama_lengkap);
		$jenKel = $this->security->xss_clean($jenKel);
		$tmptLahir = $this->security->xss_clean($tmptLahir);
		$tglLahir = $this->security->xss_clean($tglLahir);
		$pekerjaan = $this->security->xss_clean($pekerjaan);
		$agama = $this->security->xss_clean($agama);
		$alamat = $this->security->xss_clean($alamat);
		$no_telp = $this->security->xss_clean($no_telp);
	
		$config['upload_path'] = './assets/foto_penduduk/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = 1000; // kilobytes
		$config['file_name'] = uniqid();
		$this->load->library('upload', $config);
	
		// Jika ada file yang diunggah
		if(!empty($_FILES['gambar']['name'])) {
			if($this->upload->do_upload('gambar')){
				$data_file = $this->upload->data();
				$gambar_baru = $data_file['file_name'];
			} else {
				// Penanganan jika gagal mengunggah gambar baru
				redirect('penduduk/get_by_id');
			}
		} else {
			// Jika tidak ada file yang diunggah, gunakan gambar lama
			$gambar_baru = $gambar_lama;
		}

		$dataUpdate = array(
			'nik'=>$nik,
			'nama_lengkap'=>$nama_lengkap,
			'jenis_kelamin'=>$jenKel,
			'tempat_lahir'=>$tmptLahir,
			'tgl_lahir'=>$tglLahir,
			'pekerjaan'=>$pekerjaan,
			'agama'=>$agama,
			'alamat'=>$alamat,
            'no_telp' =>$no_telp,
			'gambar'=>$gambar_baru,
		);
		$this->Madmin->update('data_penduduk', $dataUpdate, 'id_penduduk', $id);
		$this->session->set_flashdata("pesan", "update_sukses");
		redirect('penduduk');

    }

    public function detail($id)
	{
		if(empty($this->session->userdata('username'))){
			redirect('admin');
		}
		$dataWhere = array('nik'=>$id);
		$data['penduduk'] = $this->Madmin->get_by_id('data_penduduk', $dataWhere)->row_object();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/penduduk/detail', $data);
		$this->load->view('admin/layout/footer');
	}

    ///delete
	public function delete($id){
        if (empty($this->session->userdata('username'))) {
            redirect('admin');
        } 
        $this->Madmin->delete('data_penduduk', 'id_penduduk', $id);
		$this->session->set_flashdata("pesan", "hapus_sukses");
        redirect('penduduk/index');
    }
}