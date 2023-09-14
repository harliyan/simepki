<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tlaporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tlaporan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'tlaporan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'tlaporan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'tlaporan/index.html';
            $config['first_url'] = base_url() . 'tlaporan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tlaporan_model->total_rows($q);
        $tlaporan = $this->Tlaporan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tlaporan_data' => $tlaporan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('tlaporan/tlaporan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tlaporan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'kdsubindikator' => $row->kdsubindikator,
		'target' => $row->target,
		'januari1' => $row->januari1,
		'januari2' => $row->januari2,
		'februari1' => $row->februari1,
		'februari2' => $row->februari2,
		'maret1' => $row->maret1,
		'maret2' => $row->maret2,
		'april1' => $row->april1,
		'april2' => $row->april2,
		'mei1' => $row->mei1,
		'mei2' => $row->mei2,
		'juni1' => $row->juni1,
		'juni2' => $row->juni2,
		'juli1' => $row->juli1,
		'juli2' => $row->juli2,
		'agustus1' => $row->agustus1,
		'agustus2' => $row->agustus2,
		'september1' => $row->september1,
		'september2' => $row->september2,
		'oktober1' => $row->oktober1,
		'oktober2' => $row->oktober2,
		'november1' => $row->november1,
		'november2' => $row->november2,
		'desember1' => $row->desember1,
		'desember2' => $row->desember2,
	    );
            $this->load->view('tlaporan/tlaporan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tlaporan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tlaporan/create_action'),
	    'id' => set_value('id'),
	    'kdsubindikator' => set_value('kdsubindikator'),
	    'target' => set_value('target'),
	    'januari1' => set_value('januari1'),
	    'januari2' => set_value('januari2'),
	    'februari1' => set_value('februari1'),
	    'februari2' => set_value('februari2'),
	    'maret1' => set_value('maret1'),
	    'maret2' => set_value('maret2'),
	    'april1' => set_value('april1'),
	    'april2' => set_value('april2'),
	    'mei1' => set_value('mei1'),
	    'mei2' => set_value('mei2'),
	    'juni1' => set_value('juni1'),
	    'juni2' => set_value('juni2'),
	    'juli1' => set_value('juli1'),
	    'juli2' => set_value('juli2'),
	    'agustus1' => set_value('agustus1'),
	    'agustus2' => set_value('agustus2'),
	    'september1' => set_value('september1'),
	    'september2' => set_value('september2'),
	    'oktober1' => set_value('oktober1'),
	    'oktober2' => set_value('oktober2'),
	    'november1' => set_value('november1'),
	    'november2' => set_value('november2'),
	    'desember1' => set_value('desember1'),
	    'desember2' => set_value('desember2'),
	);
        $this->load->view('tlaporan/tlaporan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kdsubindikator' => $this->input->post('kdsubindikator',TRUE),
		'target' => $this->input->post('target',TRUE),
		'januari1' => $this->input->post('januari1',TRUE),
		'januari2' => $this->input->post('januari2',TRUE),
		'februari1' => $this->input->post('februari1',TRUE),
		'februari2' => $this->input->post('februari2',TRUE),
		'maret1' => $this->input->post('maret1',TRUE),
		'maret2' => $this->input->post('maret2',TRUE),
		'april1' => $this->input->post('april1',TRUE),
		'april2' => $this->input->post('april2',TRUE),
		'mei1' => $this->input->post('mei1',TRUE),
		'mei2' => $this->input->post('mei2',TRUE),
		'juni1' => $this->input->post('juni1',TRUE),
		'juni2' => $this->input->post('juni2',TRUE),
		'juli1' => $this->input->post('juli1',TRUE),
		'juli2' => $this->input->post('juli2',TRUE),
		'agustus1' => $this->input->post('agustus1',TRUE),
		'agustus2' => $this->input->post('agustus2',TRUE),
		'september1' => $this->input->post('september1',TRUE),
		'september2' => $this->input->post('september2',TRUE),
		'oktober1' => $this->input->post('oktober1',TRUE),
		'oktober2' => $this->input->post('oktober2',TRUE),
		'november1' => $this->input->post('november1',TRUE),
		'november2' => $this->input->post('november2',TRUE),
		'desember1' => $this->input->post('desember1',TRUE),
		'desember2' => $this->input->post('desember2',TRUE),
	    );

            $this->Tlaporan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tlaporan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tlaporan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tlaporan/update_action'),
		'id' => set_value('id', $row->id),
		'kdsubindikator' => set_value('kdsubindikator', $row->kdsubindikator),
		'target' => set_value('target', $row->target),
		'januari1' => set_value('januari1', $row->januari1),
		'januari2' => set_value('januari2', $row->januari2),
		'februari1' => set_value('februari1', $row->februari1),
		'februari2' => set_value('februari2', $row->februari2),
		'maret1' => set_value('maret1', $row->maret1),
		'maret2' => set_value('maret2', $row->maret2),
		'april1' => set_value('april1', $row->april1),
		'april2' => set_value('april2', $row->april2),
		'mei1' => set_value('mei1', $row->mei1),
		'mei2' => set_value('mei2', $row->mei2),
		'juni1' => set_value('juni1', $row->juni1),
		'juni2' => set_value('juni2', $row->juni2),
		'juli1' => set_value('juli1', $row->juli1),
		'juli2' => set_value('juli2', $row->juli2),
		'agustus1' => set_value('agustus1', $row->agustus1),
		'agustus2' => set_value('agustus2', $row->agustus2),
		'september1' => set_value('september1', $row->september1),
		'september2' => set_value('september2', $row->september2),
		'oktober1' => set_value('oktober1', $row->oktober1),
		'oktober2' => set_value('oktober2', $row->oktober2),
		'november1' => set_value('november1', $row->november1),
		'november2' => set_value('november2', $row->november2),
		'desember1' => set_value('desember1', $row->desember1),
		'desember2' => set_value('desember2', $row->desember2),
	    );
            $this->load->view('tlaporan/tlaporan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tlaporan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'kdsubindikator' => $this->input->post('kdsubindikator',TRUE),
		'target' => $this->input->post('target',TRUE),
		'januari1' => $this->input->post('januari1',TRUE),
		'januari2' => $this->input->post('januari2',TRUE),
		'februari1' => $this->input->post('februari1',TRUE),
		'februari2' => $this->input->post('februari2',TRUE),
		'maret1' => $this->input->post('maret1',TRUE),
		'maret2' => $this->input->post('maret2',TRUE),
		'april1' => $this->input->post('april1',TRUE),
		'april2' => $this->input->post('april2',TRUE),
		'mei1' => $this->input->post('mei1',TRUE),
		'mei2' => $this->input->post('mei2',TRUE),
		'juni1' => $this->input->post('juni1',TRUE),
		'juni2' => $this->input->post('juni2',TRUE),
		'juli1' => $this->input->post('juli1',TRUE),
		'juli2' => $this->input->post('juli2',TRUE),
		'agustus1' => $this->input->post('agustus1',TRUE),
		'agustus2' => $this->input->post('agustus2',TRUE),
		'september1' => $this->input->post('september1',TRUE),
		'september2' => $this->input->post('september2',TRUE),
		'oktober1' => $this->input->post('oktober1',TRUE),
		'oktober2' => $this->input->post('oktober2',TRUE),
		'november1' => $this->input->post('november1',TRUE),
		'november2' => $this->input->post('november2',TRUE),
		'desember1' => $this->input->post('desember1',TRUE),
		'desember2' => $this->input->post('desember2',TRUE),
	    );

            $this->Tlaporan_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tlaporan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tlaporan_model->get_by_id($id);

        if ($row) {
            $this->Tlaporan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tlaporan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tlaporan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kdsubindikator', 'kdsubindikator', 'trim|required');
	$this->form_validation->set_rules('target', 'target', 'trim|required');
	$this->form_validation->set_rules('januari1', 'januari1', 'trim|required');
	$this->form_validation->set_rules('januari2', 'januari2', 'trim|required');
	$this->form_validation->set_rules('februari1', 'februari1', 'trim|required');
	$this->form_validation->set_rules('februari2', 'februari2', 'trim|required');
	$this->form_validation->set_rules('maret1', 'maret1', 'trim|required');
	$this->form_validation->set_rules('maret2', 'maret2', 'trim|required');
	$this->form_validation->set_rules('april1', 'april1', 'trim|required');
	$this->form_validation->set_rules('april2', 'april2', 'trim|required');
	$this->form_validation->set_rules('mei1', 'mei1', 'trim|required');
	$this->form_validation->set_rules('mei2', 'mei2', 'trim|required');
	$this->form_validation->set_rules('juni1', 'juni1', 'trim|required');
	$this->form_validation->set_rules('juni2', 'juni2', 'trim|required');
	$this->form_validation->set_rules('juli1', 'juli1', 'trim|required');
	$this->form_validation->set_rules('juli2', 'juli2', 'trim|required');
	$this->form_validation->set_rules('agustus1', 'agustus1', 'trim|required');
	$this->form_validation->set_rules('agustus2', 'agustus2', 'trim|required');
	$this->form_validation->set_rules('september1', 'september1', 'trim|required');
	$this->form_validation->set_rules('september2', 'september2', 'trim|required');
	$this->form_validation->set_rules('oktober1', 'oktober1', 'trim|required');
	$this->form_validation->set_rules('oktober2', 'oktober2', 'trim|required');
	$this->form_validation->set_rules('november1', 'november1', 'trim|required');
	$this->form_validation->set_rules('november2', 'november2', 'trim|required');
	$this->form_validation->set_rules('desember1', 'desember1', 'trim|required');
	$this->form_validation->set_rules('desember2', 'desember2', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tlaporan.php */
/* Location: ./application/controllers/Tlaporan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-01-30 08:19:28 */
/* http://harviacode.com */