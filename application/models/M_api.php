<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_api extends CI_Model {

    public function list_makanan()
    {
        $this->db->select('*');
        $this->db->from('tbl_menu');
        return $this->db->get()->result();
        
        
    }
    public function limit_makanan()
    {
        $this->db->select('*');
        $this->db->from('tbl_menu');
        $this->db->limit(3);
        
        
        
   
        return $this->db->get()->result() ; 
        
    }
}

/* End of file M_api.php */

?>