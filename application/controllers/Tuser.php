<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tuser extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tuser_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        if ($this->session->userdata('username') == NULL) {
            redirect('auth');
        } else {
            $data['page'] = $this->uri->segment(1);
            $data['tuser_data'] = $this->db->query("SELECT `tuser`.*, `tlokasi`.kdlokasi, `tlokasi`.nmlokasi, `tlokasi`.nmlokasi  FROM `tuser` LEFT JOIN `tlokasi` ON `tuser`.kdlokasi = `tlokasi`.kdlokasi ")->result_array();

            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('tuser/tuser_list', $data);
            $this->load->view('templates/footer');
        }
    }

    public function read($id)
    {
        $row = $this->Tuser_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id' => $row->id,
                'username' => $row->username,
                'username_dump' => $row->username_dump,
                'pwd' => $row->pwd,
                'role' => $row->role,
                'kdlokasi' => $row->kdlokasi,
                'status' => $row->status,
                'created_by' => $row->created_by,
                'created_at' => $row->created_at,
                'last_updated_by' => $row->last_updated_by,
                'last_updated_at' => $row->last_updated_at,
            );
            $data['page'] = $this->uri->segment(1);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('tuser/tuser_read', $data);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tuser'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tuser/create_action'),
            'id' => set_value('id'),
            'username' => set_value('username'),
            'username_dump' => set_value('username_dump'),
            'pwd' => set_value('pwd'),
            'role' => set_value('role'),
            'kdlokasi' => set_value('kdlokasi'),
            'status' => set_value('status'),
            'created_by' => set_value('created_by'),
            'created_at' => set_value('created_at'),
            'last_updated_by' => set_value('last_updated_by'),
            'last_updated_at' => set_value('last_updated_at'),
        );

        $data['tlokasi_data'] = $this->db->query("SELECT * FROM `tlokasi`")->result_array();

        $data['page'] = $this->uri->segment(1);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('tuser/tuser_form', $data);
        $this->load->view('templates/footer');
    }

    public function create_action()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'username' => $this->input->post('username', TRUE),
                'username_dump' => $this->input->post('username_dump', TRUE),
                'pwd' => $this->input->post('pwd', TRUE),
                'role' => $this->input->post('role', TRUE),
                'kdlokasi' => $this->input->post('kdlokasi', TRUE),
                'status' => $this->input->post('status', TRUE),
                'created_by' => $this->input->post('created_by', TRUE),
                'created_at' => $this->input->post('created_at', TRUE),
                'last_updated_by' => $this->input->post('last_updated_by', TRUE),
                'last_updated_at' => $this->input->post('last_updated_at', TRUE),
            );

            $this->Tuser_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tuser'));
        }
    }

    public function update($id)
    {
        $row = $this->Tuser_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tuser/update_action'),
                'id' => set_value('id', $row->id),
                'username' => set_value('username', $row->username),
                'username_dump' => set_value('username_dump', $row->username_dump),
                // 'pwd' => set_value('pwd', $row->pwd),
                'role' => set_value('role', $row->role),
                'kdlokasi' => set_value('kdlokasi', $row->kdlokasi),
                'status' => set_value('status', $row->status),
                'created_by' => set_value('created_by', $row->created_by),
                'created_at' => set_value('created_at', $row->created_at),
                'last_updated_by' => set_value('last_updated_by', $row->last_updated_by),
                'last_updated_at' => set_value('last_updated_at', $row->last_updated_at),
            );
            $data['page'] = $this->uri->segment(1);
            $data['tlokasi_data'] = $this->db->query("SELECT * FROM `tlokasi`")->result_array();
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('tuser/tuser_update', $data);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tuser'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                'username' => $this->input->post('username', TRUE),
                'username_dump' => $this->input->post('username_dump', TRUE),
                // 'pwd' => password_hash($this->input->post('pwd', TRUE), PASSWORD_DEFAULT),
                'role' => $this->input->post('role', TRUE),
                'kdlokasi' => $this->input->post('kdlokasi', TRUE),
                'status' => $this->input->post('status', TRUE),
                'created_by' => $this->input->post('created_by', TRUE),
                'created_at' => $this->input->post('created_at', TRUE),
                'last_updated_by' => $this->input->post('last_updated_by', TRUE),
                'last_updated_at' => $this->input->post('last_updated_at', TRUE),
            );

            $this->Tuser_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tuser'));
        }
    }

    public function resetpassword($id)
    {
        $pwd = '$2y$10$hnH0G0tSpiRKhPXghcvopO7Vc/rmXDggXLkmUYM4f1NLSQBvw8L3W';
        $this->db->query("UPDATE `tuser` SET pwd = '$pwd' WHERE id = '$id';");
        $this->session->set_flashdata('message', 'Password sukses direset');
        redirect(site_url('tuser'));
    }

    public function delete($id)
    {
        $row = $this->Tuser_model->get_by_id($id);

        if ($row) {
            $this->Tuser_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tuser'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tuser'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('username_dump', 'username dump', 'trim|required');
        // $this->form_validation->set_rules('pwd', 'pwd', 'trim|required');
        $this->form_validation->set_rules('role', 'role', 'trim|required');
        $this->form_validation->set_rules('kdlokasi', 'kdlokasi', 'trim|required');
        $this->form_validation->set_rules('status', 'status', 'trim|required');
        $this->form_validation->set_rules('created_by', 'created by', 'trim|required');
        $this->form_validation->set_rules('created_at', 'created at', 'trim|required');
        $this->form_validation->set_rules('last_updated_by', 'last updated by', 'trim|required');
        $this->form_validation->set_rules('last_updated_at', 'last updated at', 'trim|required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tuser.xls";
        $judul = "tuser";
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
        xlsWriteLabel($tablehead, $kolomhead++, "Username");
        xlsWriteLabel($tablehead, $kolomhead++, "Username Dump");
        xlsWriteLabel($tablehead, $kolomhead++, "Pwd");
        xlsWriteLabel($tablehead, $kolomhead++, "Role");
        xlsWriteLabel($tablehead, $kolomhead++, "Kdlokasi");
        xlsWriteLabel($tablehead, $kolomhead++, "Status");
        xlsWriteLabel($tablehead, $kolomhead++, "Created By");
        xlsWriteLabel($tablehead, $kolomhead++, "Created At");
        xlsWriteLabel($tablehead, $kolomhead++, "Last Updated By");
        xlsWriteLabel($tablehead, $kolomhead++, "Last Updated At");

        foreach ($this->Tuser_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
            xlsWriteLabel($tablebody, $kolombody++, $data->username);
            xlsWriteLabel($tablebody, $kolombody++, $data->username_dump);
            xlsWriteLabel($tablebody, $kolombody++, $data->pwd);
            xlsWriteLabel($tablebody, $kolombody++, $data->role);
            xlsWriteLabel($tablebody, $kolombody++, $data->kdlokasi);
            xlsWriteLabel($tablebody, $kolombody++, $data->status);
            xlsWriteLabel($tablebody, $kolombody++, $data->created_by);
            xlsWriteLabel($tablebody, $kolombody++, $data->created_at);
            xlsWriteLabel($tablebody, $kolombody++, $data->last_updated_by);
            xlsWriteLabel($tablebody, $kolombody++, $data->last_updated_at);

            $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }
}

/* End of file Tuser.php */
/* Location: ./application/controllers/Tuser.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-02-01 07:19:11 */
/* http://harviacode.com */