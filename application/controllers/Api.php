<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;

class Api extends RestController {

    function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, OPTIONS, POST, DELETE");
        header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");     
        if ( "OPTIONS" === $_SERVER['REQUEST_METHOD'] ) {
            die();
        }

        parent::__construct();
        $this->load->model('m_api');
        

        
        
    }
    // menampilkan user yang telah login 
    public function pesan_post()
    {
        $data = array(
            'id_menu' => $this->post('id_menu'),
            'jumlah_pesan'=>$this->post('jumlah_pesan'),
            'keterangan'=>$this->post('keterangan') );
            $data = $this->m_api->pesanMakanan($data);
            if($data)
            {
             return  $this->response( 200);
            }
            else{
               return $this->response( 404);
            }
            
    }
    public function index_get()
    {
        $id_menu= $this->get('id_menu');
        if($id_menu==null)
        {
            $data = $this->m_api->list_makanan();
            return $this->response($data , 200) ;
        }
        else{
            $data = $this->m_api->detailMakanan($id_menu);
            return $this->response($data , 200);
        }



        
    }
    public function search_get()
    {
        $nama_menu = $this->get('nama_menu');
        if(empty($nama_menu))
        {
            $data = $this->m_api->list_makanan();
            return $this->response($data , 200);
        }
        else{
            $data = $this->m_api->detail_makanan($nama_menu);
            return $this->response($data , 200);
        }

    }
    public function limit_get()
    {
        $data = $this->m_api->limit_makanan();
        return $this->response($data ,200); 

    }   
}

?>