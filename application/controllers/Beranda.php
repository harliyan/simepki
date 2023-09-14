<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Beranda_model');
    }

    public function index()
    {
        $data['title'] = 'SIMPATIKK';
        $data['page'] = $this->uri->segment(1);

        $getUser = $this->session->userdata('username');
        // $data['getKdlokasi'] =  $this->db->query("SELECT `tuser`.id, `tuser`.`username`, `tuser`.`role`, `tuser`.`kdlokasi`, `tlokasi`.`nmlokasi`, `tlokasi`.`singkatan_lokasi` FROM `tuser` JOIN `tlokasi` ON `tlokasi`.kdlokasi = `tuser`.kdlokasi;")->result_array();
        $data['getKdlokasi'] =  $this->db->query("SELECT * FROM `tuser` JOIN `tlokasi` ON `tuser`.kdlokasi = `tlokasi`.kdlokasi WHERE username = '$getUser';")->result_array();

        $kdlokasi = $this->session->userdata('kdlokasi');
        $data['januari'] = $this->db->query("SELECT `tlaporan`.`januaric` FROM `tindikator` LEFT JOIN `tlaporan` ON `tindikator`.`kdindikator` = `tlaporan`.`kdindikator` WHERE `kdlokasi` = '$kdlokasi';")->row();

        // var_dump($data['januari']);
        // die();

        if ($this->session->userdata('username') == NULL) {
            redirect('auth');
        } else {
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('beranda/index', $data);
            $this->load->view('templates/footer');
        }
    }
}
