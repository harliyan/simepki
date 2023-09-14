<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cetak extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Subindikator_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        if ($this->session->userdata('username') == NULL) {
            redirect('auth');
        } else {
            $data['page'] = $this->uri->segment(1);
            $kdlokasi = $this->session->userdata('kdlokasi');
            $data['tsubindikator'] = $this->db->query("SELECT * FROM `tindikator` LEFT JOIN `tlaporan` ON `tindikator`.`kdindikator` = `tlaporan`.`kdindikator` WHERE `kdlokasi` = '$kdlokasi' ORDER BY `tindikator`.id ASC;")->result_array();
            $data['instalasi'] = $this->db->query("SELECT `nmlokasi` FROM `tlokasi` WHERE  kdlokasi ='$kdlokasi'")->result_array();

            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('cetak/index', $data);
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

    public function update($id)
    {
        $row = $this->Subindikator_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('subindikator/update_action'),
                'id' => set_value('id', $row->id),
                'kdindikator' => set_value('kdindikator', $row->kdindikator),
                'kdsubindikator' => set_value('kdsubindikator', $row->kdsubindikator),
                'subindikator' => set_value('subindikator', $row->subindikator),
                'date_created' => set_value('date_created', $row->date_created),
            );
            $data['page'] = $this->uri->segment(1);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('subindikator/tsubindikator_update', $data);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('subindikator'));
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
                'kdsubindikator' => $this->input->post('kdsubindikator', TRUE),
                'subindikator' => $this->input->post('subindikator', TRUE),
                'date_created' => $this->input->post('date_created', TRUE),
            );

            $this->Subindikator_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('subindikator'));
        }
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