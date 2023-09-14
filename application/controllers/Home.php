<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Ruangan_model');
    }

    public function index(){
        $data['title'] = 'Layanan';

        $this->load->view('templates/home_header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/home_footer');
    }

    public function layanan(){
        $data['title'] = 'Layanan';
        $this->load->view('templates/home_header', $data);
        $this->load->view('home/layanan');
        $this->load->view('templates/home_footer');
    }

}
