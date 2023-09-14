<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tlokasi extends CI_Controller
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
            $data['tlokasi_data'] = $this->db->query("SELECT * FROM `tlokasi` ORDER BY `kdlokasi` ASC ")->result_array();

            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('tlokasi/tlokasi_list', $data);
            $this->load->view('templates/footer');
        }
    }

    public function read($id)
    {
        $row = $this->Tlokasi_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id' => $row->id,
                'kdlokasi' => $row->kdlokasi,
                'nmlokasi' => $row->nmlokasi,
                'singkatan_lokasi' => $row->singkatan_lokasi,
                'almt_kantor' => $row->almt_kantor,
                'no_telp_kantor' => $row->no_telp_kantor,
                'email_kantor' => $row->email_kantor,
                'website_kantor' => $row->website_kantor,
            );
            $data['page'] = $this->uri->segment(1);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('tlokasi/tlokasi_read', $data);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tlokasi'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tlokasi/create_action'),
            'id' => set_value('id'),
            'kdlokasi' => set_value('kdlokasi'),
            'nmlokasi' => set_value('nmlokasi'),
            'singkatan_lokasi' => set_value('singkatan_lokasi'),
            'almt_kantor' => set_value('almt_kantor'),
            'no_telp_kantor' => set_value('no_telp_kantor'),
            'email_kantor' => set_value('email_kantor'),
            'website_kantor' => set_value('website_kantor'),
        );
        $data['page'] = $this->uri->segment(1);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('tlokasi/tlokasi_form', $data);
        $this->load->view('templates/footer');
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'kdlokasi' => $this->input->post('kdlokasi', TRUE),
                'nmlokasi' => $this->input->post('nmlokasi', TRUE),
                'singkatan_lokasi' => $this->input->post('singkatan_lokasi', TRUE),
                'almt_kantor' => $this->input->post('almt_kantor'),
                'no_telp_kantor' => $this->input->post('no_telp_kantor'),
                'email_kantor' => $this->input->post('email_kantor'),
                'website_kantor' => $this->input->post('website_kantor'),
            );

            $this->Tlokasi_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tlokasi'));
        }
    }

    public function update($id)
    {
        $row = $this->Tlokasi_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tlokasi/update_action'),
                'id' => set_value('id', $row->id),
                'kdlokasi' => set_value('kdlokasi', $row->kdlokasi),
                'nmlokasi' => set_value('nmlokasi', $row->nmlokasi),
                'singkatan_lokasi' => set_value('singkatan_lokasi', $row->singkatan_lokasi),
                'almt_kantor' => set_value('almt_kantor', $row->almt_kantor),
                'no_telp_kantor' => set_value('no_telp_kantor', $row->no_telp_kantor),
                'email_kantor' => set_value('email_kantor', $row->email_kantor),
                'website_kantor' => set_value('website_kantor', $row->website_kantor),
            );
            $data['page'] = $this->uri->segment(1);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('tlokasi/tlokasi_form', $data);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tlokasi'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                'kdlokasi' => $this->input->post('kdlokasi', TRUE),
                'nmlokasi' => $this->input->post('nmlokasi', TRUE),
                'singkatan_lokasi' => $this->input->post('singkatan_lokasi', TRUE),
                'almt_kantor' => $this->input->post('almt_kantor', TRUE),
                'no_telp_kantor' => $this->input->post('no_telp_kantor', TRUE),
                'email_kantor' => $this->input->post('email_kantor', TRUE),
                'website_kantor' => $this->input->post('website_kantor', TRUE),
            );

            $this->Tlokasi_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tlokasi'));
        }
    }

    public function delete($id)
    {
        $row = $this->Tlokasi_model->get_by_id($id);

        if ($row) {
            $this->Tlokasi_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tlokasi'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tlokasi'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kdlokasi', 'kdlokasi', 'trim|required');
        $this->form_validation->set_rules('nmlokasi', 'nmlokasi', 'trim|required');
        $this->form_validation->set_rules('singkatan_lokasi', 'singkatan lokasi', 'trim|required');
        $this->form_validation->set_rules('almt_kantor', 'almt kantor', 'trim|required');
        $this->form_validation->set_rules('no_telp_kantor', 'no telp kantor', 'trim|required');
        $this->form_validation->set_rules('email_kantor', 'email kantor', 'trim|required');
        $this->form_validation->set_rules('website_kantor', 'website kantor', 'trim|required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tlokasi.xls";
        $judul = "tlokasi";
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
        xlsWriteLabel($tablehead, $kolomhead++, "Kdlokasi");
        xlsWriteLabel($tablehead, $kolomhead++, "Nmlokasi");
        xlsWriteLabel($tablehead, $kolomhead++, "Singkatan Lokasi");
        xlsWriteLabel($tablehead, $kolomhead++, "Almt Kantor");
        xlsWriteLabel($tablehead, $kolomhead++, "No Telp Kantor");
        xlsWriteLabel($tablehead, $kolomhead++, "Email Kantor");
        xlsWriteLabel($tablehead, $kolomhead++, "Website Kantor");

        foreach ($this->Tlokasi_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
            xlsWriteLabel($tablebody, $kolombody++, $data->kdlokasi);
            xlsWriteLabel($tablebody, $kolombody++, $data->nmlokasi);
            xlsWriteLabel($tablebody, $kolombody++, $data->singkatan_lokasi);
            xlsWriteLabel($tablebody, $kolombody++, $data->almt_kantor);
            xlsWriteLabel($tablebody, $kolombody++, $data->no_telp_kantor);
            xlsWriteLabel($tablebody, $kolombody++, $data->email_kantor);
            xlsWriteLabel($tablebody, $kolombody++, $data->website_kantor);

            $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }
}

/* End of file Tlokasi.php */
/* Location: ./application/controllers/Tlokasi.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-02-01 07:50:54 */
/* http://harviacode.com */