<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_model extends CI_Model
{

    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('tsurat');
        $this->db->join('tidentitas', 'tidentitas.id = tsurat.identitas_id');
        $this->db->WHERE('status', 'NEW');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function verified()
    {
        $this->db->select('*');
        $this->db->from('tsurat');
        $this->db->join('tidentitas', 'tidentitas.id = tsurat.identitas_id');
        $this->db->WHERE('status', 'VERIFIED');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function print()
    {
        $this->db->select('*');
        $this->db->from('tsurat');
        $this->db->join('tidentitas', 'tidentitas.id = tsurat.identitas_id');
        $this->db->WHERE('status', 'DONE');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function reject()
    {
        $this->db->select('*');
        $this->db->from('tsurat');
        $this->db->join('tidentitas', 'tidentitas.id = tsurat.identitas_id');
        $this->db->WHERE('status', 'REJECTED');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function cancel()
    {
        $this->db->select('*');
        $this->db->from('tsurat');
        $this->db->join('tidentitas', 'tidentitas.id = tsurat.identitas_id');
        $this->db->WHERE('status', 'CANCELED');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function edit_opd($id_opd, $opd)
    {
        $hasil = $this->db->query("UPDATE opd SET opd='$opd' WHERE id_opd='$id_opd'");
        return $hasil;
    }
}
