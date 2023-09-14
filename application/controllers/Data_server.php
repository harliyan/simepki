<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_server extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_server_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'data_server/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'data_server/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'data_server/index.html';
            $config['first_url'] = base_url() . 'data_server/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Data_server_model->total_rows($q);
        $data_server = $this->Data_server_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'data_server_data' => $data_server,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('data_server/data_server_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Data_server_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_server' => $row->id_server,
		'id_server_child' => $row->id_server_child,
		'ip_server' => $row->ip_server,
		'ip_server_public' => $row->ip_server_public,
		'port' => $row->port,
		'name_server' => $row->name_server,
		'os_username' => $row->os_username,
		'os_password' => $row->os_password,
		'db_username' => $row->db_username,
		'db_password' => $row->db_password,
		'portal_username' => $row->portal_username,
		'portal_password' => $row->portal_password,
		'type_server' => $row->type_server,
		'level_server' => $row->level_server,
		'os_server' => $row->os_server,
		'hdd_server' => $row->hdd_server,
		'ram_server' => $row->ram_server,
		'cpu_server' => $row->cpu_server,
		'cpu_detail' => $row->cpu_detail,
		'hdd_detail' => $row->hdd_detail,
		'note_server' => $row->note_server,
		'status' => $row->status,
	    );
            $this->load->view('data_server/data_server_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_server'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('data_server/create_action'),
	    'id_server' => set_value('id_server'),
	    'id_server_child' => set_value('id_server_child'),
	    'ip_server' => set_value('ip_server'),
	    'ip_server_public' => set_value('ip_server_public'),
	    'port' => set_value('port'),
	    'name_server' => set_value('name_server'),
	    'os_username' => set_value('os_username'),
	    'os_password' => set_value('os_password'),
	    'db_username' => set_value('db_username'),
	    'db_password' => set_value('db_password'),
	    'portal_username' => set_value('portal_username'),
	    'portal_password' => set_value('portal_password'),
	    'type_server' => set_value('type_server'),
	    'level_server' => set_value('level_server'),
	    'os_server' => set_value('os_server'),
	    'hdd_server' => set_value('hdd_server'),
	    'ram_server' => set_value('ram_server'),
	    'cpu_server' => set_value('cpu_server'),
	    'cpu_detail' => set_value('cpu_detail'),
	    'hdd_detail' => set_value('hdd_detail'),
	    'note_server' => set_value('note_server'),
	    'status' => set_value('status'),
	);
        $this->load->view('data_server/data_server_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_server_child' => $this->input->post('id_server_child',TRUE),
		'ip_server' => $this->input->post('ip_server',TRUE),
		'ip_server_public' => $this->input->post('ip_server_public',TRUE),
		'port' => $this->input->post('port',TRUE),
		'name_server' => $this->input->post('name_server',TRUE),
		'os_username' => $this->input->post('os_username',TRUE),
		'os_password' => $this->input->post('os_password',TRUE),
		'db_username' => $this->input->post('db_username',TRUE),
		'db_password' => $this->input->post('db_password',TRUE),
		'portal_username' => $this->input->post('portal_username',TRUE),
		'portal_password' => $this->input->post('portal_password',TRUE),
		'type_server' => $this->input->post('type_server',TRUE),
		'level_server' => $this->input->post('level_server',TRUE),
		'os_server' => $this->input->post('os_server',TRUE),
		'hdd_server' => $this->input->post('hdd_server',TRUE),
		'ram_server' => $this->input->post('ram_server',TRUE),
		'cpu_server' => $this->input->post('cpu_server',TRUE),
		'cpu_detail' => $this->input->post('cpu_detail',TRUE),
		'hdd_detail' => $this->input->post('hdd_detail',TRUE),
		'note_server' => $this->input->post('note_server',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Data_server_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('data_server'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Data_server_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('data_server/update_action'),
		'id_server' => set_value('id_server', $row->id_server),
		'id_server_child' => set_value('id_server_child', $row->id_server_child),
		'ip_server' => set_value('ip_server', $row->ip_server),
		'ip_server_public' => set_value('ip_server_public', $row->ip_server_public),
		'port' => set_value('port', $row->port),
		'name_server' => set_value('name_server', $row->name_server),
		'os_username' => set_value('os_username', $row->os_username),
		'os_password' => set_value('os_password', $row->os_password),
		'db_username' => set_value('db_username', $row->db_username),
		'db_password' => set_value('db_password', $row->db_password),
		'portal_username' => set_value('portal_username', $row->portal_username),
		'portal_password' => set_value('portal_password', $row->portal_password),
		'type_server' => set_value('type_server', $row->type_server),
		'level_server' => set_value('level_server', $row->level_server),
		'os_server' => set_value('os_server', $row->os_server),
		'hdd_server' => set_value('hdd_server', $row->hdd_server),
		'ram_server' => set_value('ram_server', $row->ram_server),
		'cpu_server' => set_value('cpu_server', $row->cpu_server),
		'cpu_detail' => set_value('cpu_detail', $row->cpu_detail),
		'hdd_detail' => set_value('hdd_detail', $row->hdd_detail),
		'note_server' => set_value('note_server', $row->note_server),
		'status' => set_value('status', $row->status),
	    );
            $this->load->view('data_server/data_server_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_server'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_server', TRUE));
        } else {
            $data = array(
		'id_server_child' => $this->input->post('id_server_child',TRUE),
		'ip_server' => $this->input->post('ip_server',TRUE),
		'ip_server_public' => $this->input->post('ip_server_public',TRUE),
		'port' => $this->input->post('port',TRUE),
		'name_server' => $this->input->post('name_server',TRUE),
		'os_username' => $this->input->post('os_username',TRUE),
		'os_password' => $this->input->post('os_password',TRUE),
		'db_username' => $this->input->post('db_username',TRUE),
		'db_password' => $this->input->post('db_password',TRUE),
		'portal_username' => $this->input->post('portal_username',TRUE),
		'portal_password' => $this->input->post('portal_password',TRUE),
		'type_server' => $this->input->post('type_server',TRUE),
		'level_server' => $this->input->post('level_server',TRUE),
		'os_server' => $this->input->post('os_server',TRUE),
		'hdd_server' => $this->input->post('hdd_server',TRUE),
		'ram_server' => $this->input->post('ram_server',TRUE),
		'cpu_server' => $this->input->post('cpu_server',TRUE),
		'cpu_detail' => $this->input->post('cpu_detail',TRUE),
		'hdd_detail' => $this->input->post('hdd_detail',TRUE),
		'note_server' => $this->input->post('note_server',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Data_server_model->update($this->input->post('id_server', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('data_server'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Data_server_model->get_by_id($id);

        if ($row) {
            $this->Data_server_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('data_server'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_server'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_server_child', 'id server child', 'trim|required');
	$this->form_validation->set_rules('ip_server', 'ip server', 'trim|required');
	$this->form_validation->set_rules('ip_server_public', 'ip server public', 'trim|required');
	$this->form_validation->set_rules('port', 'port', 'trim|required');
	$this->form_validation->set_rules('name_server', 'name server', 'trim|required');
	$this->form_validation->set_rules('os_username', 'os username', 'trim|required');
	$this->form_validation->set_rules('os_password', 'os password', 'trim|required');
	$this->form_validation->set_rules('db_username', 'db username', 'trim|required');
	$this->form_validation->set_rules('db_password', 'db password', 'trim|required');
	$this->form_validation->set_rules('portal_username', 'portal username', 'trim|required');
	$this->form_validation->set_rules('portal_password', 'portal password', 'trim|required');
	$this->form_validation->set_rules('type_server', 'type server', 'trim|required');
	$this->form_validation->set_rules('level_server', 'level server', 'trim|required');
	$this->form_validation->set_rules('os_server', 'os server', 'trim|required');
	$this->form_validation->set_rules('hdd_server', 'hdd server', 'trim|required');
	$this->form_validation->set_rules('ram_server', 'ram server', 'trim|required');
	$this->form_validation->set_rules('cpu_server', 'cpu server', 'trim|required');
	$this->form_validation->set_rules('cpu_detail', 'cpu detail', 'trim|required');
	$this->form_validation->set_rules('hdd_detail', 'hdd detail', 'trim|required');
	$this->form_validation->set_rules('note_server', 'note server', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');

	$this->form_validation->set_rules('id_server', 'id_server', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Data_server.php */
/* Location: ./application/controllers/Data_server.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-02-10 03:51:26 */
/* http://harviacode.com */