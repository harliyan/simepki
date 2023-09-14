<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Ruangan_model');
    }

    public function index()
    {
        $data['title'] = 'SIMPATIKK';
        $getUser = $this->session->userdata('username');
        $data['getKdlokasi'] =  $this->db->query("SELECT * FROM `tuser` JOIN `tlokasi` ON `tlokasi`.kdlokasi = `tuser`.kdlokasi WHERE username ='$getUser'")->result_array();
        $data['page'] = $this->uri->segment(1);

        if ($this->session->userdata('username') == NULL) {
            redirect('auth');
        } else {
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('profil/index', $data);
            $this->load->view('templates/footer');
        }
    }

    public function user()
    {
        $data['title'] = 'SIMPATIKK';
        // $data['page'] = 'beranda';
        // $data['page'] = $this->uri->uri_string();
        $data['page'] = $this->uri->segment(1);

        // $data['query2'] = $this->db->query( "SELECT ")->result_array();

        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('profil/index', $data);
        $this->load->view('templates/footer');
    }
}
