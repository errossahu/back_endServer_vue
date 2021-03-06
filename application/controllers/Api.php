<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;

class Api extends RestController {

    function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, OPTIONS, POST, DELETE");
        header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
       
        parent::__construct();
        $this->load->model('m_api');
        

        
        
    }
    // menampilkan user yang telah login 
    public function index_get()
    {
        $id = $this->get('id');
        if($id==null)
        {
            $data = $this->m_api->list_makanan();
            return $this->response($data ,200);
            
            
        }
        else
        {

        }
    }
    public function limit_get()
    {
        $data = $this->m_api->limit_makanan();
        return $this->response($data ,200); 

    }   
}

?>