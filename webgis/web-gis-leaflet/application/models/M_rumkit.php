<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_rumkit extends CI_Model {

    public function lists(){
        $this->db->select('*');
        $this->db->from('tbl_rs');
        $this->db->order_by('id_rs', 'desc');
        return $this->db->get()->result();
        
        
        
    }

    

}

/* End of file m_rumkit.php */
