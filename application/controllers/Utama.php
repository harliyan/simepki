<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Utama extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Utama_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        if ($this->session->userdata('username') == NULL) {
            redirect('auth');
        } else {
            $data['page'] = $this->uri->segment(1);
            $getUser = $this->session->userdata('username');
            $data['getKdlokasi'] =  $this->db->query("SELECT * FROM `tuser` JOIN `tlokasi` ON `tlokasi`.kdlokasi = `tuser`.kdlokasi WHERE username ='$getUser'")->result_array();
            $data['tutama'] = $this->Utama_model->tampil();

            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('utama/tutama_list', $data);
            $this->load->view('templates/footer');
        }
    }

    public function read($id)
    {
        $row = $this->Utama_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id' => $row->id,
                'kode_jabatan' => $row->kode_jabatan,
                'nama_jabatan' => $row->nama_jabatan,
                'jpt_utama' => $row->jpt_utama,
                'jpt_madya' => $row->jpt_madya,
                'jpt_pratama' => $row->jpt_pratama,
                'administrator' => $row->administrator,
                'pengawas' => $row->pengawas,
                'pelaksana' => $row->pelaksana,
                'jabatan_fungsional' => $row->jabatan_fungsional,
                'ikhtisar_jabatan' => $row->ikhtisar_jabatan,
                'pend_formal' => $row->pend_formal,
                'pend_pelatihan' => $row->pend_pelatihan,
                'pengalaman_kerja' => $row->pengalaman_kerja,
                'prestasi' => $row->prestasi,
                'kelas_jabatan' => $row->kelas_jabatan,
                'date_created' => $row->date_created,
            );
            $data['page'] = $this->uri->segment(1);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('utama/tutama_read', $data);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('utama'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('utama/create_action'),
            'id' => set_value('id'),
            'kode_jabatan' => set_value('kode_jabatan'),
            'nama_jabatan' => set_value('nama_jabatan'),
            'jpt_utama' => set_value('jpt_utama'),
            'jpt_madya' => set_value('jpt_madya'),
            'jpt_pratama' => set_value('jpt_pratama'),
            'administrator' => set_value('administrator'),
            'pengawas' => set_value('pengawas'),
            'pelaksana' => set_value('pelaksana'),
            'jabatan_fungsional' => set_value('jabatan_fungsional'),
            'ikhtisar_jabatan' => set_value('ikhtisar_jabatan'),
            'pend_formal' => set_value('pend_formal'),
            'pend_pelatihan' => set_value('pend_pelatihan'),
            'pengalaman_kerja' => set_value('pengalaman_kerja'),
            'prestasi' => set_value('prestasi'),
            'kelas_jabatan' => set_value('kelas_jabatan'),
            'date_created' => set_value('date_created'),
        );
        $data['page'] = $this->uri->segment(1);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('utama/tutama_form', $data);
        $this->load->view('templates/footer');
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'kode_jabatan' => $this->input->post('kode_jabatan', TRUE),
                'nama_jabatan' => $this->input->post('nama_jabatan', TRUE),
                'jpt_utama' => $this->input->post('jpt_utama', TRUE),
                'jpt_madya' => $this->input->post('jpt_madya', TRUE),
                'jpt_pratama' => $this->input->post('jpt_pratama', TRUE),
                'administrator' => $this->input->post('administrator', TRUE),
                'pengawas' => $this->input->post('pengawas', TRUE),
                'pelaksana' => $this->input->post('pelaksana', TRUE),
                'jabatan_fungsional' => $this->input->post('jabatan_fungsional', TRUE),
                'ikhtisar_jabatan' => $this->input->post('ikhtisar_jabatan', TRUE),
                'pend_formal' => $this->input->post('pend_formal', TRUE),
                'pend_pelatihan' => $this->input->post('pend_pelatihan', TRUE),
                'pengalaman_kerja' => $this->input->post('pengalaman_kerja', TRUE),
                'prestasi' => $this->input->post('prestasi', TRUE),
                'kelas_jabatan' => $this->input->post('kelas_jabatan', TRUE),
                'date_created' => $this->input->post('date_created', TRUE),
            );

            $this->Utama_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('utama'));
        }
    }

    public function update($id)
    {
        $row = $this->Utama_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('utama/update_action'),
                'id' => set_value('id', $row->id),
                'kode_jabatan' => set_value('kode_jabatan', $row->kode_jabatan),
                'nama_jabatan' => set_value('nama_jabatan', $row->nama_jabatan),
                'jpt_utama' => set_value('jpt_utama', $row->jpt_utama),
                'jpt_madya' => set_value('jpt_madya', $row->jpt_madya),
                'jpt_pratama' => set_value('jpt_pratama', $row->jpt_pratama),
                'administrator' => set_value('administrator', $row->administrator),
                'pengawas' => set_value('pengawas', $row->pengawas),
                'pelaksana' => set_value('pelaksana', $row->pelaksana),
                'jabatan_fungsional' => set_value('jabatan_fungsional', $row->jabatan_fungsional),
                'ikhtisar_jabatan' => set_value('ikhtisar_jabatan', $row->ikhtisar_jabatan),
                'pend_formal' => set_value('pend_formal', $row->pend_formal),
                'pend_pelatihan' => set_value('pend_pelatihan', $row->pend_pelatihan),
                'pengalaman_kerja' => set_value('pengalaman_kerja', $row->pengalaman_kerja),
                'prestasi' => set_value('prestasi', $row->prestasi),
                'kelas_jabatan' => set_value('kelas_jabatan', $row->kelas_jabatan),
                'date_created' => set_value('date_created', $row->date_created),
            );
            $data['page'] = $this->uri->segment(1);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('utama/tutama_form', $data);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('utama'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                'kode_jabatan' => $this->input->post('kode_jabatan', TRUE),
                'nama_jabatan' => $this->input->post('nama_jabatan', TRUE),
                'jpt_utama' => $this->input->post('jpt_utama', TRUE),
                'jpt_madya' => $this->input->post('jpt_madya', TRUE),
                'jpt_pratama' => $this->input->post('jpt_pratama', TRUE),
                'administrator' => $this->input->post('administrator', TRUE),
                'pengawas' => $this->input->post('pengawas', TRUE),
                'pelaksana' => $this->input->post('pelaksana', TRUE),
                'jabatan_fungsional' => $this->input->post('jabatan_fungsional', TRUE),
                'ikhtisar_jabatan' => $this->input->post('ikhtisar_jabatan', TRUE),
                'pend_formal' => $this->input->post('pend_formal', TRUE),
                'pend_pelatihan' => $this->input->post('pend_pelatihan', TRUE),
                'pengalaman_kerja' => $this->input->post('pengalaman_kerja', TRUE),
                'prestasi' => $this->input->post('prestasi', TRUE),
                'kelas_jabatan' => $this->input->post('kelas_jabatan', TRUE),
                'date_created' => $this->input->post('date_created', TRUE),
            );

            $this->Utama_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('utama'));
        }
    }

    public function delete($id)
    {
        $row = $this->Utama_model->get_by_id($id);

        if ($row) {
            $this->Utama_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('utama'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('utama'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_jabatan', 'kode jabatan', 'trim|required');
        $this->form_validation->set_rules('nama_jabatan', 'nama jabatan', 'trim|required');
        $this->form_validation->set_rules('jpt_utama', 'jpt utama', 'trim|required');
        $this->form_validation->set_rules('jpt_madya', 'jpt madya', 'trim|required');
        $this->form_validation->set_rules('jpt_pratama', 'jpt pratama', 'trim|required');
        $this->form_validation->set_rules('administrator', 'administrator', 'trim|required');
        $this->form_validation->set_rules('pengawas', 'pengawas', 'trim|required');
        $this->form_validation->set_rules('pelaksana', 'pelaksana', 'trim|required');
        $this->form_validation->set_rules('jabatan_fungsional', 'jabatan fungsional', 'trim|required');
        $this->form_validation->set_rules('ikhtisar_jabatan', 'ikhtisar jabatan', 'trim|required');
        $this->form_validation->set_rules('pend_formal', 'pend formal', 'trim|required');
        $this->form_validation->set_rules('pend_pelatihan', 'pend pelatihan', 'trim|required');
        $this->form_validation->set_rules('pengalaman_kerja', 'pengalaman kerja', 'trim|required');
        $this->form_validation->set_rules('prestasi', 'prestasi', 'trim|required');
        $this->form_validation->set_rules('kelas_jabatan', 'kelas jabatan', 'trim|required');
        $this->form_validation->set_rules('date_created', 'date created', 'trim|required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tutama.xls";
        $judul = "tutama";
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
        xlsWriteLabel($tablehead, $kolomhead++, "Kode Jabatan");
        xlsWriteLabel($tablehead, $kolomhead++, "Nama Jabatan");
        xlsWriteLabel($tablehead, $kolomhead++, "Jpt Utama");
        xlsWriteLabel($tablehead, $kolomhead++, "Jpt Madya");
        xlsWriteLabel($tablehead, $kolomhead++, "Jpt Pratama");
        xlsWriteLabel($tablehead, $kolomhead++, "Administrator");
        xlsWriteLabel($tablehead, $kolomhead++, "Pengawas");
        xlsWriteLabel($tablehead, $kolomhead++, "Pelaksana");
        xlsWriteLabel($tablehead, $kolomhead++, "Jabatan Fungsional");
        xlsWriteLabel($tablehead, $kolomhead++, "Ikhtisar Jabatan");
        xlsWriteLabel($tablehead, $kolomhead++, "Pend Formal");
        xlsWriteLabel($tablehead, $kolomhead++, "Pend Pelatihan");
        xlsWriteLabel($tablehead, $kolomhead++, "Pengalaman Kerja");
        xlsWriteLabel($tablehead, $kolomhead++, "Prestasi");
        xlsWriteLabel($tablehead, $kolomhead++, "Kelas Jabatan");
        xlsWriteLabel($tablehead, $kolomhead++, "Date Created");

        foreach ($this->Utama_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
            xlsWriteLabel($tablebody, $kolombody++, $data->kode_jabatan);
            xlsWriteLabel($tablebody, $kolombody++, $data->nama_jabatan);
            xlsWriteLabel($tablebody, $kolombody++, $data->jpt_utama);
            xlsWriteLabel($tablebody, $kolombody++, $data->jpt_madya);
            xlsWriteLabel($tablebody, $kolombody++, $data->jpt_pratama);
            xlsWriteLabel($tablebody, $kolombody++, $data->administrator);
            xlsWriteLabel($tablebody, $kolombody++, $data->pengawas);
            xlsWriteLabel($tablebody, $kolombody++, $data->pelaksana);
            xlsWriteLabel($tablebody, $kolombody++, $data->jabatan_fungsional);
            xlsWriteLabel($tablebody, $kolombody++, $data->ikhtisar_jabatan);
            xlsWriteLabel($tablebody, $kolombody++, $data->pend_formal);
            xlsWriteLabel($tablebody, $kolombody++, $data->pend_pelatihan);
            xlsWriteLabel($tablebody, $kolombody++, $data->pengalaman_kerja);
            xlsWriteLabel($tablebody, $kolombody++, $data->prestasi);
            xlsWriteNumber($tablebody, $kolombody++, $data->kelas_jabatan);
            xlsWriteLabel($tablebody, $kolombody++, $data->date_created);

            $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }
}

/* End of file Utama.php */
/* Location: ./application/controllers/Utama.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-01-24 07:37:15 */
/* http://harviacode.com */