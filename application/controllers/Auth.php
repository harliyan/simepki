<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Opd_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->session->unset_userdata('message');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            // validasi sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tuser', ['username' => $username])->row_array();
        // var_dump($user);
        // die;

        //jika usernya ada
        if ($user) {
            //jika usernya aktif
            if ($user['status'] == 1) {
                //cek password
                if (password_verify($password, $user['pwd'])) {
                    $data = [
                        'username' => $user['username'],
                        'kdlokasi' => $user['kdlokasi'],
                        'role' => $user['role']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role'] == 'ADMINISTRATOR') {
                        redirect('beranda');
                    } else {
                        redirect('beranda');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                        Password yang Anda masukan salah!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
                    User Anda belum aktif!</div>');
                redirect('auth');
            }
        } else {
            // echo "gagal";
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                User yang Anda masukan salah!</div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        $data['dropdown_peserta'] = $this->Opd_model->tampil();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            // echo 'data berhasil ditambahkan';
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'username' => $this->input->post('username'),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'id_user' => $this->input->post('id_user'),
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Selamat akun Anda telah dibuat! Please Login</div>');
            redirect('auth/index');
        }
    }

    public function logout()
    {
        // $this->session->unset_userdata('message');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        // $this->session->unset_userdata('id_user');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Anda telah Logout<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('auth');
    }

    public function blocked()
    {
        $data['title'] = 'Blocked';
        $this->load->view('auth/blocked', $data);
    }
}
