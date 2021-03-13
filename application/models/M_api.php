<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_api extends CI_Model {

    public function tampilData()
    {
        $this->db->select('*');
        $this->db->from('tbl_pesan');
        $this->db->join('tbl_menu', 'tbl_menu.id_menu = tbl_pesan.id_menu', 'left');
        return $this->db->get()->result();
        
        
    }
    public function listPesanan()
    {
        $this->db->select('*');
        $this->db->from('tbl_pesan');
        $this->db->join('tbl_menu', 'tbl_menu.id_menu = tbl_pesan.id_menu', 'left');
        return $this->db->count_all_results();
        
        
        
        
    }
    public function list_makanan()
    {
        $this->db->select('*');
        $this->db->from('tbl_menu');
        return $this->db->get()->result();
        
        
    }
    public function pesanMakanan($data)
    {
        $this->db->insert('tbl_pesan', $data);
        return  $this->db->affected_rows();
        
        
    }
    public function detailMakanan($id_menu)
    {
        $this->db->select('*');
        $this->db->from('tbl_menu');
        $this->db->where('id_menu', $id_menu);
        return $this->db->get()->row();
        
        
    }
    public function detail_makanan($nama_menu)
    {
        // echo $nama_menu ;
        // die();
        $this->db->select('*');
        $this->db->from('tbl_menu');
        $this->db->where('nama_menu',$nama_menu);
        return $this->db->get()->result();
        
        
        
    }
    public function limit_makanan()
    {
        $this->db->select('*');
        $this->db->from('tbl_menu');
        $this->db->limit(3);
        
        
        
   
        return $this->db->get()->result() ; 
        
    }
    public function login($n  , $p)
    {
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('email', $n);
        $this->db->where('password', $p);
        return $this->db->get()->row(); 
        
        
    }
}

/* End of file M_api.php */

?>