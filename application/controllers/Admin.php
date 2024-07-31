<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Madmin');
    }
    
	public function index()
	{
		$this->load->view('admin/login');
	}

    public function registerView()
    {
        $this->load->view('admin/register');
    }

    public function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
       // Ambil data pengguna berdasarkan username
       $user = $this->Madmin->get_where('admin', array('username' => $username));
    
       if ($user) {
           // Verifikasi password
           if (password_verify($password, $user->password)) {
               $data_session = array(
                   'id'       => $user->id,
                   'username' => $user->username,
                   'password' => $password,
                   'role'     => $user->role,
               );
               $this->session->set_userdata($data_session);
               redirect('admin/dashboard');
           } else {
               $this->session->set_flashdata('error', 'Password salah.');
               redirect('admin');
           }
        }
    }

    public function register(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password_confirm', 'Password Konfirmasi', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');
        $this->form_validation->set_message('required', 'Kolom {field} harus diisi.');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/register');
        } else {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $password_confirm = $this->input->post('password_confirm');
        $r = $this->input->post('role');
        // Cek apakah username sudah ada di database
        $existing_user = $this->Madmin->get_where('admin', array('username' => $username));
    
        if ($existing_user) {
            $this->session->set_flashdata('error', 'Username sudah digunakan.');
            redirect('admin/registerView');
            return;
        }
    
        if($password != $password_confirm){
            $this->session->set_flashdata('error', 'Password dan konfirmasi password tidak cocok.');
            redirect('admin/registerView');
            return;
        }

            // Hashing password 
            $password_hashed = password_hash($password, PASSWORD_BCRYPT);
            $data_input = array(
                'username' => $username,
                'password' => $password_hashed,
                'role' => $r,
            );
            $this->Madmin->insert('admin', $data_input);
                redirect('admin');
        }
    }

	public function dashboard()
	{
        if (empty($this->session->userdata('username'))) {
            redirect('admin');
        } 
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/menu');
		$this->load->view('admin/layout/footer');
	}

    //logout
    public function logout(){
        $this->session->sess_destroy();
        redirect('admin');
    }
}
