
    <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Beranda_model extends CI_Model
    {
        public function asn()
        {
            $db2 = $this->load->database('db_pegawai', TRUE);
            $query = " SELECT * FROM `view_simpatikk_all` WHERE nik = '3375033090139000'";
            return $db2->query($query)->row();
        }
    }
