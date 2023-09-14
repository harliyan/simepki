<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Surat_model');
    }

    public function index()
    {
        $data['title'] = 'SIMPATIKK';
        $data['page'] = $this->uri->segment(1);
        $data['draft'] = $this->Surat_model->tampil();

        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('surat/index', $data);
        $this->load->view('templates/footer');
    }

    public function verified()
    {
        $data['title'] = 'SIMPATIKK';
        $data['page'] = $this->uri->segment(1);
        $data['draft'] = $this->Surat_model->verified();

        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('surat/verified', $data);
        $this->load->view('templates/footer');
    }

    public function print()
    {
        $data['title'] = 'SIMPATIKK';
        $data['page'] = $this->uri->segment(1);
        $data['draft'] = $this->Surat_model->print();

        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('surat/print', $data);
        $this->load->view('templates/footer');
    }

    public function reject()
    {
        $data['title'] = 'SIMPATIKK';
        $data['page'] = $this->uri->segment(1);
        $data['draft'] = $this->Surat_model->reject();

        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('surat/reject', $data);
        $this->load->view('templates/footer');
    }

    public function cancel()
    {
        $data['title'] = 'SIMPATIKK';
        $data['page'] = $this->uri->segment(1);
        $data['draft'] = $this->Surat_model->cancel();

        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('surat/cancel', $data);
        $this->load->view('templates/footer');
    }
}
