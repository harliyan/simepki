<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Ruangan_model');
    }

    public function create()
    {
        $data['title'] = 'SIMPATIKK';
        $data['page'] = $this->uri->segment(1);

        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/create', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 80000;
        $config['max_width']            = 80000;
        $config['max_height']           = 80000;
        $config['remove_spaces'] = TRUE;
        $config['encrypt_name'] = FALSE;

        $this->load->library('upload', $config);
        $gambar = '';

        $this->upload->initialize($config);
        if (!empty($_FILES['gambar']['name'])) {

            if ($this->upload->do_upload('gambar')) {
                $gbr = $this->upload->data();
                $gambar = $gbr['file_name'];
                $response['status'] = TRUE;
                $response['pesan'] = 'Sukses Upload Gambar';
            } else {
                $response['status'] = FALSE;
                $response['pesan'] = 'Gagal Upload Gambar';
            }
        } else {
            $response['status'] = FALSE;
            $response['pesan'] = 'Gambar Kosong';
        }


        $data['title'] = 'Edit Profile';
        $session = $this->session->userdata('username');
        $kdlokasi = $this->session->userdata('kdlokasi');
        $data['user'] = $this->db->query("SELECT * FROM tuser INNER JOIN tlokasi ON `tuser`.kdlokasi=`tlokasi`.kdlokasi WHERE `username` = '$session'")->row_array();

        $data['page'] = $this->uri->segment(1);
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('nmlokasi', 'Nmlokasi', 'required');
        $this->form_validation->set_rules('singkatan_lokasi', 'Singkatan_lokasi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $username = $this->input->post('username');
            $nmlokasi = $this->input->post('nmlokasi');
            $singkatan_lokasi = $this->input->post('singkatan_lokasi');

            $this->db->query("UPDATE tuser SET username = '$username', gambar = '$gambar' WHERE username='$session';");
            // $str = $this->db->last_query();
            // echo "<pre>";
            // print_r($str);
            // echo "</pre>";
            // die();

            $this->db->query("UPDATE tlokasi SET nmlokasi = '$nmlokasi', singkatan_lokasi = '$singkatan_lokasi' WHERE kdlokasi='$kdlokasi';");



            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Your profile has been updated</div>');
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('role_id');
            $this->session->unset_userdata('kdlokasi');
            redirect('auth');
        }
    }

    public function changePassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('tuser', ['username' => $this->session->userdata('username')])->row_array();
        $data['page'] = $this->uri->segment(1);

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');

            // var_dump($current_password);
            // die();

            $username = $this->session->userdata('username');
            $myquery = $this->db->query("SELECT * FROM `tuser` WHERE `username` = '$username'");
            $row = $myquery->row();
            $hash = $row->pwd;
            // var_dump($hash);
            // die();

            // if (!password_verify($current_password, $data['tuser']['pwd'])) {
            if (!password_verify($current_password, $hash)) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong Current Password</div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                        New Password Cant not be same</div>');
                    redirect('user/changepassword');
                } else {
                    // password benar
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('pwd', $password_hash);
                    $this->db->where('username', $this->session->userdata('username'));
                    $this->db->update('tuser');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                        Password Change !!!</div>');
                    $this->session->unset_userdata('username');
                    $this->session->unset_userdata('role_id');
                    $this->session->unset_userdata('kdlokasi');
                    redirect('auth');
                }
            }
        }
    }
}
