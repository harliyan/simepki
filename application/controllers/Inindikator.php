<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Inindikator extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Indikator_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        if ($this->session->userdata('username') == NULL) {
            redirect('auth');
        } else {
            $data['page'] = $this->uri->segment(1);
            $kdlokasi = $this->session->userdata('kdlokasi');
            $data['tindikator'] = $this->db->query("SELECT * FROM `tindikator` WHERE `kdlokasi` = '$kdlokasi' ")->result_array();

            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('indikator/tindikator_instalasi', $data);
            $this->load->view('templates/footer');
        }
    }

    public function read($id)
    {
        $row = $this->Indikator_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id' => $row->id,
                'kdindikator' => $row->kdindikator,
                'indikator' => $row->indikator,
                'date_created' => $row->date_created,
            );
            $data['page'] = $this->uri->segment(1);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('indikator/tindikator_read', $data);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('indikator'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('indikator/create_action'),
            'id' => set_value('id'),
            'kdindikator' => set_value('kdindikator'),
            'indikator' => set_value('indikator'),
            'date_created' => set_value('date_created'),
        );
        $data['page'] = $this->uri->segment(1);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('indikator/tindikator_form', $data);
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
                'indikator' => $this->input->post('indikator', TRUE),
                'date_created' => $this->input->post('date_created', TRUE),
            );

            $this->Indikator_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('indikator'));
        }
    }

    public function update($id)
    {
        $row = $this->Indikator_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('indikator/update_action'),
                'id' => set_value('id', $row->id),
                'kdindikator' => set_value('kdindikator', $row->kdindikator),
                'indikator' => set_value('indikator', $row->indikator),
                'date_created' => set_value('date_created', $row->date_created),
            );
            $data['page'] = $this->uri->segment(1);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('indikator/tindikator_update', $data);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('indikator'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                'kdindikator' => $this->input->post('kdindikator', TRUE),
                'indikator' => $this->input->post('indikator', TRUE),
                'date_created' => $this->input->post('date_created', TRUE),
            );

            $this->Indikator_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('indikator'));
        }
    }

    public function delete($id)
    {
        $row = $this->Indikator_model->get_by_id($id);

        if ($row) {
            $this->Indikator_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('indikator'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('indikator'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kdindikator', 'kdindikator', 'trim|required');
        $this->form_validation->set_rules('indikator', 'indikator', 'trim|required');
        $this->form_validation->set_rules('date_created', 'date created', 'trim|required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tindikator.xls";
        $judul = "tindikator";
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
        xlsWriteLabel($tablehead, $kolomhead++, "Indikator");
        xlsWriteLabel($tablehead, $kolomhead++, "Date Created");

        foreach ($this->Indikator_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
            xlsWriteLabel($tablebody, $kolombody++, $data->kdindikator);
            xlsWriteLabel($tablebody, $kolombody++, $data->indikator);
            xlsWriteLabel($tablebody, $kolombody++, $data->date_created);

            $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }
}

/* End of file Indikator.php */
/* Location: ./application/controllers/Indikator.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-01-30 01:22:31 */
/* http://harviacode.com */