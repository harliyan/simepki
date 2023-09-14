<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Instalasi extends CI_Controller
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
            $this->load->view('instalasi/instalasi_list', $data);
            $this->load->view('templates/footer');
        }
    }

    public function read($kdlokasi)
    {

        if ($this->session->userdata('username') == NULL) {
            redirect('auth');
        } else {
            $data['page'] = $this->uri->segment(1);
            $data['instalasi'] = $this->db->query("SELECT * FROM `tindikator`  WHERE `kdlokasi` = '$kdlokasi' ORDER BY id ASC;")->result_array();
            $data['lokasi'] = $this->db->query("SELECT * FROM `tlokasi`  WHERE `kdlokasi` = '$kdlokasi'")->result_array();

            // var_dump($data['lokasi']);
            // die();

            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('instalasi/instalasi_read', $data);
            $this->load->view('templates/footer');
        }
    }

    public function update($kdindikator)
    {
        $row = $this->db->query("SELECT * FROM `tlaporan` WHERE `kdindikator` = '$kdindikator'")->row();

        // var_dump($data['getindikator']);
        // die();
        // $str = $this->db->last_query();
        // echo "<pre>";
        // print_r($str);
        // echo "</pre>";
        // die();

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('instalasi/update_action'),
                'id' => set_value('id', $row->id),
                'kdindikator' => set_value('kdindikator', $row->kdindikator),
                'target' => set_value('target', $row->target),
                'januari1' => set_value('januari1', $row->januari1),
                'januari1a' => set_value('januari1a', $row->januari1a),
                'januari1b' => set_value('januari1b', $row->januari1b),
                'januari2' => set_value('januari2', $row->januari2),
                'januarib' => set_value('januarib', $row->januarib),
                'januaric' => set_value('januarib', $row->januaric),
                'februari1' => set_value('februari1', $row->februari1),
                'februari1a' => set_value('februari1a', $row->februari1a),
                'februari1b' => set_value('februari1b', $row->februari1b),
                'februari2' => set_value('februari2', $row->februari2),
                'februarib' => set_value('februarib', $row->februarib),
                'februaric' => set_value('februaric', $row->februaric),
                'maret1' => set_value('maret1', $row->maret1),
                'maret1a' => set_value('maret1a', $row->maret1a),
                'maret1b' => set_value('maret1b', $row->maret1b),
                'maret2' => set_value('maret2', $row->maret2),
                'maretb' => set_value('maretb', $row->maretb),
                'maretc' => set_value('maretc', $row->maretc),
                'april1' => set_value('april1', $row->april1),
                'april1a' => set_value('april1a', $row->april1a),
                'april1b' => set_value('april1b', $row->april1b),
                'april2' => set_value('april2', $row->april2),
                'aprilb' => set_value('aprilb', $row->aprilb),
                'aprilc' => set_value('aprilc', $row->aprilc),
                'mei1' => set_value('mei1', $row->mei1),
                'mei1a' => set_value('mei1a', $row->mei1a),
                'mei1b' => set_value('mei1b', $row->mei1b),
                'mei2' => set_value('mei2', $row->mei2),
                'meib' => set_value('meib', $row->meib),
                'meic' => set_value('meic', $row->meic),
                'juni1' => set_value('juni1', $row->juni1),
                'juni1a' => set_value('juni1a', $row->juni1a),
                'juni1b' => set_value('juni1b', $row->juni1b),
                'juni2' => set_value('juni2', $row->juni2),
                'junib' => set_value('junib', $row->junib),
                'junic' => set_value('junic', $row->junic),
                'juli1' => set_value('juli1', $row->juli1),
                'juli1a' => set_value('juli1a', $row->juli1a),
                'juli1b' => set_value('juli1b', $row->juli1b),
                'juli2' => set_value('juli2', $row->juli2),
                'julib' => set_value('julib', $row->julib),
                'julic' => set_value('julic', $row->julic),
                'agustus1' => set_value('agustus1', $row->agustus1),
                'agustus1a' => set_value('agustus1a', $row->agustus1a),
                'agustus1b' => set_value('agustus1b', $row->agustus1b),
                'agustus2' => set_value('agustus2', $row->agustus2),
                'agustusb' => set_value('agustusb', $row->agustusb),
                'agustusc' => set_value('agustusc', $row->agustusc),
                'september1' => set_value('september1', $row->september1),
                'september1a' => set_value('september1a', $row->september1a),
                'september1b' => set_value('september1b', $row->september1b),
                'september2' => set_value('september2', $row->september2),
                'septemberb' => set_value('septemberb', $row->septemberb),
                'septemberc' => set_value('septemberc', $row->septemberc),
                'oktober1' => set_value('oktober1', $row->oktober1),
                'oktober1a' => set_value('oktober1a', $row->oktober1a),
                'oktober1b' => set_value('oktober1b', $row->oktober1b),
                'oktober2' => set_value('oktober2', $row->oktober2),
                'oktoberb' => set_value('oktoberb', $row->oktoberb),
                'oktoberc' => set_value('oktoberc', $row->oktoberc),
                'november1' => set_value('november1', $row->november1),
                'november1a' => set_value('november1a', $row->november1a),
                'november1b' => set_value('november1b', $row->november1b),
                'november2' => set_value('november2', $row->november2),
                'novemberb' => set_value('novemberb', $row->novemberb),
                'novemberc' => set_value('novemberc', $row->novemberc),
                'desember1' => set_value('desember1', $row->desember1),
                'desember1a' => set_value('desember1a', $row->desember1a),
                'desember1b' => set_value('desember1b', $row->desember1b),
                'desember2' => set_value('desember2', $row->desember2),
                'desemberb' => set_value('desemberb', $row->desemberb),
                'desemberc' => set_value('desemberc', $row->desemberc),
            );
            $data['page'] = $this->uri->segment(1);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('instalasi/tlaporan_form', $data);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('insubindikator'));
        }
    }

    public function update_action()
    {

        $kdindikator = $this->input->post('kdindikator');
        // $target = $this->input->post('target');
        $januari1 = $this->input->post('januari1');
        $januari1a = $this->input->post('januari1a');
        $januari1b = $this->input->post('januari1b');
        $januari2 = $this->input->post('januari2');
        $januarib = $this->input->post('januarib');
        $januaric = $this->input->post('januaric');
        $februari1 = $this->input->post('februari1');
        $februari1a = $this->input->post('februari1a');
        $februari1b = $this->input->post('februari1b');
        $februari2 = $this->input->post('februari2');
        $februarib = $this->input->post('februarib');
        $februaric = $this->input->post('februaric');
        $maret1 = $this->input->post('maret1');
        $maret1a = $this->input->post('maret1a');
        $maret1b = $this->input->post('maret1b');
        $maret2 = $this->input->post('maret2');
        $maretb = $this->input->post('maretb');
        $maretc = $this->input->post('maretc');
        $april1 = $this->input->post('april1');
        $april1a = $this->input->post('april1a');
        $april1b = $this->input->post('april1b');
        $april2 = $this->input->post('april2');
        $aprilb = $this->input->post('aprilb');
        $aprilc = $this->input->post('aprilc');
        $mei1 = $this->input->post('mei1');
        $mei1a = $this->input->post('mei1a');
        $mei1b = $this->input->post('mei1b');
        $mei2 = $this->input->post('mei2');
        $meib = $this->input->post('meib');
        $meic = $this->input->post('meic');
        $juni1 = $this->input->post('juni1');
        $juni1a = $this->input->post('juni1a');
        $juni1b = $this->input->post('juni1b');
        $juni2 = $this->input->post('juni2');
        $junib = $this->input->post('junib');
        $junic = $this->input->post('junic');
        $juli1 = $this->input->post('juli1');
        $juli1a = $this->input->post('juli1a');
        $juli1b = $this->input->post('juli1b');
        $juli2 = $this->input->post('juli2');
        $julib = $this->input->post('julib');
        $julic = $this->input->post('julic');
        $agustus1 = $this->input->post('agustus1');
        $agustus1a = $this->input->post('agustus1a');
        $agustus1b = $this->input->post('agustus1b');
        $agustus2 = $this->input->post('agustus2');
        $agustusb = $this->input->post('agustusb');
        $agustusc = $this->input->post('agustusc');
        $september1 = $this->input->post('september1');
        $september1a = $this->input->post('september1a');
        $september1b = $this->input->post('september1b');
        $september2 = $this->input->post('september2');
        $septemberb = $this->input->post('septemberb');
        $septemberc = $this->input->post('septemberc');
        $oktober1 = $this->input->post('oktober1');
        $oktober1a = $this->input->post('oktober1a');
        $oktober1b = $this->input->post('oktober1b');
        $oktober2 = $this->input->post('oktober2');
        $oktoberb = $this->input->post('oktoberb');
        $oktoberc = $this->input->post('oktoberc');
        $november1 = $this->input->post('november1');
        $november1a = $this->input->post('november1a');
        $november1b = $this->input->post('november1b');
        $november2 = $this->input->post('november2');
        $novemberb = $this->input->post('novemberb');
        $novemberc = $this->input->post('novemberc');
        $desember1 = $this->input->post('desember1');
        $desember1a = $this->input->post('desember1a');
        $desember1b = $this->input->post('desember1b');
        $desember2 = $this->input->post('desember2');
        $desemberb = $this->input->post('desemberb');
        $desemberc = $this->input->post('desemberc');

        // $this->Tlaporan_model->update($this->input->post('kdindikator', TRUE), $data);

        $this->db->query(
            "UPDATE tlaporan 
            SET  
            `januari1` = '$januari1',
            `januari1a` = '$januari1a',
            `januari1b` = '$januari1b',
            `januari2` = '$januari2',
            `januarib` = '$januarib',
            `januaric` = '$januaric',
            `februari1` = '$februari1',
            `februari1a` = '$februari1a',
            `februari1b` = '$februari1b',
            `februari2` = '$februari2',
            `februarib` = '$februarib',
            `februaric` = '$februaric',
            `maret1` = '$maret1',
            `maret1a` = '$maret1a',
            `maret1b` = '$maret1b',
            `maret2` = '$maret2',
            `maretb` = '$maretb',
            `maretc` = '$maretc',
            `april1` = '$april1',
            `april1a` = '$april1a',
            `april1b` = '$april1b',
            `april2` = '$april2',
            `aprilb` = '$aprilb',
            `aprilc` = '$aprilc',
            `mei1` = '$mei1',
            `mei1a` = '$mei1a',
            `mei1b` = '$mei1b',
            `mei2` = '$mei2',
            `meib` = '$meib',
            `meic` = '$meic',
            `juni1` = '$juni1',
            `juni1a` = '$juni1a',
            `juni1b` = '$juni1b',
            `juni2` = '$juni2',
            `junib` = '$junib',
            `junic` = '$junic',
            `juli1` = '$juli1',
            `juli1a` = '$juli1a',
            `juli1b` = '$juli1b',
            `juli2` = '$juli2',
            `julib` = '$julib',
            `julic` = '$julic',
            `agustus1` = '$agustus1',
            `agustus1a` = '$agustus1a',
            `agustus1b` = '$agustus1b',
            `agustus2` = '$agustus2',
            `agustusb` = '$agustusb',
            `agustusc` = '$agustusc',
            `september1` = '$september1',
            `september1a` = '$september1a',
            `september1b` = '$september1b',
            `september2` = '$september2',
            `septemberb` = '$septemberb',
            `septemberc` = '$septemberc',
            `oktober1` = '$oktober1',
            `oktober1a` = '$oktober1a',
            `oktober1b` = '$oktober1b',
            `oktober2` = '$oktober2',
            `oktoberb` = '$oktoberb',
            `oktoberc` = '$oktoberc',
            `november1` = '$november1',
            `november1a` = '$november1a',
            `november1b` = '$november1b',
            `november2` = '$november2',
            `novemberb` = '$novemberb',
            `novemberc` = '$novemberc',
            `desember1` = '$desember1',
            `desember1a` = '$desember1a',
            `desember1b` = '$desember1b',
            `desember2` = '$desember2',
            `desemberb` = '$desemberb',
            `desemberc` = '$desemberc'
            WHERE kdindikator='$kdindikator'"
        );
        // $this->db->last_query();
        // die();

        $this->session->set_flashdata('message', 'Update Record Success');
        redirect(site_url('instalasi'));
    }
}
