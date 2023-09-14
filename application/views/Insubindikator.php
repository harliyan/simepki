<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Insubindikator extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Subindikator_model');
        $this->load->model('Tlaporan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        if ($this->session->userdata('username') == NULL) {
            redirect('auth');
        } else {
            $data['page'] = $this->uri->segment(1);
            $kdlokasi = $this->session->userdata('kdlokasi');
            $data['tsubindikator'] = $this->db->query("SELECT * FROM `tindikator` WHERE  kdlokasi ='$kdlokasi'")->result_array();

            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('subindikator/tsubindikator_instalasi', $data);
            $this->load->view('templates/footer');
        }
    }

    public function read($id)
    {
        $row = $this->Subindikator_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id' => $row->id,
                'kdindikator' => $row->kdindikator,
                'kdsubindikator' => $row->kdsubindikator,
                'subindikator' => $row->subindikator,
                'date_created' => $row->date_created,
            );
            $data['page'] = $this->uri->segment(1);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('subindikator/tsubindikator_read', $data);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('subindikator'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('subindikator/create_action'),
            'id' => set_value('id'),
            'kdindikator' => set_value('kdindikator'),
            'kdsubindikator' => set_value('kdsubindikator'),
            'subindikator' => set_value('subindikator'),
            'date_created' => set_value('date_created'),
        );
        $data['page'] = $this->uri->segment(1);
        $data['indikator'] = $this->db->query("SELECT * FROM `tindikator`")->result_array();
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('subindikator/tsubindikator_form', $data);
        $this->load->view('templates/footer');
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'kdindikator' => $this->input->post('kdindikator', TRUE),
                'kdsubindikator' => $this->input->post('kdsubindikator', TRUE),
                'subindikator' => $this->input->post('subindikator', TRUE),
                'date_created' => $this->input->post('date_created', TRUE),
            );

            $this->Subindikator_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('subindikator'));
        }
    }

    // public function update($id)
    // {
    //     $row = $this->Subindikator_model->get_by_id($id);

    //     if ($row) {
    //         $data = array(
    //             'button' => 'Update',
    //             'action' => site_url('subindikator/update_action'),
    //             'id' => set_value('id', $row->id),
    //             'kdindikator' => set_value('kdindikator', $row->kdindikator),
    //             'kdsubindikator' => set_value('kdsubindikator', $row->kdsubindikator),
    //             'subindikator' => set_value('subindikator', $row->subindikator),
    //             'date_created' => set_value('date_created', $row->date_created),
    //         );
    //         $data['page'] = $this->uri->segment(1);
    //         $this->load->view('templates/sidebar', $data);
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('templates/topbar', $data);
    //         $this->load->view('subindikator/tsubindikator_update', $data);
    //         $this->load->view('templates/footer');
    //     } else {
    //         $this->session->set_flashdata('message', 'Record Not Found');
    //         redirect(site_url('subindikator'));
    //     }
    // }

    // public function update_action()
    // {
    //     $this->_rules();

    //     if ($this->form_validation->run() == FALSE) {
    //         $this->update($this->input->post('id', TRUE));
    //     } else {
    //         $data = array(
    //             'kdindikator' => $this->input->post('kdindikator', TRUE),
    //             'kdsubindikator' => $this->input->post('kdsubindikator', TRUE),
    //             'subindikator' => $this->input->post('subindikator', TRUE),
    //             'date_created' => $this->input->post('date_created', TRUE),
    //         );

    //         $this->Subindikator_model->update($this->input->post('id', TRUE), $data);
    //         $this->session->set_flashdata('message', 'Update Record Success');
    //         redirect(site_url('subindikator'));
    //     }
    // }

    public function update($kdindikator)
    {
        $row = $this->db->query("SELECT * FROM `tlaporan` WHERE `kdindikator` = '$kdindikator'")->row();
        // $str = $this->db->last_query();
        // echo "<pre>";
        // print_r($str);
        // echo "</pre>";
        // die();

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('insubindikator/update_action'),
                'id' => set_value('id', $row->id),
                'kdindikator' => set_value('kdindikator', $row->kdindikator),
                // 'target' => set_value('target', $row->target),
                'januari1' => set_value('januari1', $row->januari1),
                'januari2' => set_value('januari2', $row->januari2),
                'januarib' => set_value('januarib', $row->januarib),
                'februari1' => set_value('februari1', $row->februari1),
                'februari2' => set_value('februari2', $row->februari2),
                'februarib' => set_value('februarib', $row->februarib),
                'maret1' => set_value('maret1', $row->maret1),
                'maret2' => set_value('maret2', $row->maret2),
                'maretb' => set_value('maretb', $row->maretb),
                'april1' => set_value('april1', $row->april1),
                'april2' => set_value('april2', $row->april2),
                'aprilb' => set_value('aprilb', $row->aprilb),
                'mei1' => set_value('mei1', $row->mei1),
                'mei2' => set_value('mei2', $row->mei2),
                'meib' => set_value('meib', $row->meib),
                'juni1' => set_value('juni1', $row->juni1),
                'juni2' => set_value('juni2', $row->juni2),
                'junib' => set_value('junib', $row->junib),
                'juli1' => set_value('juli1', $row->juli1),
                'juli2' => set_value('juli2', $row->juli2),
                'julib' => set_value('julib', $row->julib),
                'agustus1' => set_value('agustus1', $row->agustus1),
                'agustus2' => set_value('agustus2', $row->agustus2),
                'agustusb' => set_value('agustusb', $row->agustusb),
                'september1' => set_value('september1', $row->september1),
                'september2' => set_value('september2', $row->september2),
                'septemberb' => set_value('septemberb', $row->septemberb),
                'oktober1' => set_value('oktober1', $row->oktober1),
                'oktober2' => set_value('oktober2', $row->oktober2),
                'oktoberb' => set_value('oktoberb', $row->oktoberb),
                'november1' => set_value('november1', $row->november1),
                'november2' => set_value('november2', $row->november2),
                'novemberb' => set_value('novemberb', $row->novemberb),
                'desember1' => set_value('desember1', $row->desember1),
                'desember2' => set_value('desember2', $row->desember2),
                'desemberb' => set_value('desemberb', $row->desemberb),
            );
            $data['page'] = $this->uri->segment(1);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('subindikator/tlaporan_form', $data);
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
        $januari2 = $this->input->post('januari2');
        $januarib = $this->input->post('januarib');
        $februari1 = $this->input->post('februari1');
        $februari2 = $this->input->post('februari2');
        $februarib = $this->input->post('februarib');
        $maret1 = $this->input->post('maret1');
        $maret2 = $this->input->post('maret2');
        $maretb = $this->input->post('maretb');
        $april1 = $this->input->post('april1');
        $april2 = $this->input->post('april2');
        $aprilb = $this->input->post('aprilb');
        $mei1 = $this->input->post('mei1');
        $mei2 = $this->input->post('mei2');
        $meib = $this->input->post('meib');
        $juni1 = $this->input->post('juni1');
        $juni2 = $this->input->post('juni2');
        $junib = $this->input->post('junib');
        $juli1 = $this->input->post('juli1');
        $juli2 = $this->input->post('juli2');
        $julib = $this->input->post('julib');
        $agustus1 = $this->input->post('agustus1');
        $agustus2 = $this->input->post('agustus2');
        $agustusb = $this->input->post('agustusb');
        $september1 = $this->input->post('september1');
        $september2 = $this->input->post('september2');
        $septemberb = $this->input->post('septemberb');
        $oktober1 = $this->input->post('oktober1');
        $oktober2 = $this->input->post('oktober2');
        $oktoberb = $this->input->post('oktoberb');
        $november1 = $this->input->post('november1');
        $november2 = $this->input->post('november2');
        $novemberb = $this->input->post('novemberb');
        $desember1 = $this->input->post('desember1');
        $desember2 = $this->input->post('desember2');
        $desemberb = $this->input->post('desemberb');

        // $this->Tlaporan_model->update($this->input->post('kdindikator', TRUE), $data);

        $this->db->query(
            "UPDATE tlaporan 
            SET  
            `januari1` = '$januari1',
            `januari2` = '$januari2',
            `januarib` = '$januarib',
            `februari1` = '$februari1',
            `februari2` = '$februari2',
            `februarib` = '$februarib',
            `maret1` = '$maret1',
            `maret2` = '$maret2',
            `maretb` = '$maretb',
            `april1` = '$april1',
            `april2` = '$april2',
            `aprilb` = '$aprilb',
            `mei1` = '$mei1',
            `mei2` = '$mei2',
            `meib` = '$meib',
            `juni1` = '$juni1',
            `juni2` = '$juni2',
            `junib` = '$junib',
            `juli1` = '$juli1',
            `juli2` = '$juli2',
            `julib` = '$julib',
            `agustus1` = '$agustus1',
            `agustus2` = '$agustus2',
            `agustusb` = '$agustusb',
            `september1` = '$september1',
            `september2` = '$september2',
            `septemberb` = '$septemberb',
            `oktober1` = '$oktober1',
            `oktober2` = '$oktober2',
            `oktoberb` = '$oktoberb',
            `november1` = '$november1',
            `november2` = '$november2',
            `novemberb` = '$novemberb',
            `desember1` = '$desember1',
            `desember2` = '$desember2',
            `desemberb` = '$desemberb'
            WHERE kdindikator='$kdindikator'"
        );
        // $this->db->last_query();
        // die();

        $this->session->set_flashdata('message', 'Update Record Success');
        redirect(site_url('insubindikator'));
    }

    public function delete($id)
    {
        $row = $this->Subindikator_model->get_by_id($id);

        if ($row) {
            $this->Subindikator_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('subindikator'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('subindikator'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kdindikator', 'kdindikator', 'trim|required');
        $this->form_validation->set_rules('kdsubindikator', 'kdsubindikator', 'trim|required');
        $this->form_validation->set_rules('subindikator', 'subindikator', 'trim|required');
        $this->form_validation->set_rules('date_created', 'date created', 'trim|required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tsubindikator.xls";
        $judul = "tsubindikator";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
        xlsWriteLabel($tablehead, $kolomhead++, "Kdindikator");
        xlsWriteLabel($tablehead, $kolomhead++, "Kdsubindikator");
        xlsWriteLabel($tablehead, $kolomhead++, "Subindikator");
        xlsWriteLabel($tablehead, $kolomhead++, "Date Created");

        foreach ($this->Subindikator_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
            xlsWriteLabel($tablebody, $kolombody++, $data->kdindikator);
            xlsWriteLabel($tablebody, $kolombody++, $data->kdsubindikator);
            xlsWriteLabel($tablebody, $kolombody++, $data->subindikator);
            xlsWriteLabel($tablebody, $kolombody++, $data->date_created);

            $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }
}

/* End of file Subindikator.php */
/* Location: ./application/controllers/Subindikator.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-01-30 02:14:26 */
/* http://harviacode.com */