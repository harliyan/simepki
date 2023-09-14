<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cetaklaporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tlokasi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        if ($this->session->userdata('username') == NULL) {
            redirect('auth');
        } else {
            $data['page'] = $this->uri->segment(1);
            $data['instalasi'] = $this->db->query("SELECT `tuser`.*, `tlokasi`.kdlokasi, `tlokasi`.nmlokasi, `tlokasi`.nmlokasi FROM `tuser` LEFT JOIN `tlokasi` ON `tuser`.kdlokasi = `tlokasi`.kdlokasi WHERE `role` != 'ADMINISTRATOR' ORDER BY `tuser`.kdlokasi ASC;")->result_array();

            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('instalasi/cetak_list', $data);
            $this->load->view('templates/footer');
        }
    }

    public function cetak($kdlokasi)
    {

        if ($this->session->userdata('username') == NULL) {
            redirect('auth');
        } else {
            $data['page'] = $this->uri->segment(1);
            // $kdlokasi = $this->session->userdata('kdlokasi');
            $data['tsubindikator'] = $this->db->query("SELECT * FROM `tindikator` LEFT JOIN `tlaporan` ON `tindikator`.`kdindikator` = `tlaporan`.`kdindikator` WHERE `kdlokasi` = '$kdlokasi' ORDER BY `tindikator`.id ASC;")->result_array();
            $data['instalasi'] = $this->db->query("SELECT `nmlokasi` FROM `tlokasi` WHERE  kdlokasi ='$kdlokasi'")->result_array();

            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('cetak/cetaklaporan', $data);
            $this->load->view('templates/footer');
        }
    }
}
