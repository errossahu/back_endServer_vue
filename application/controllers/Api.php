<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;

class Api extends RestController {

    function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, OPTIONS, POST, DELETE");
        header("Access-Control-Allow-Headers:Authorization, Content-Type, Content-Length, Accept-Encoding");     
       

        if ( "OPTIONS" === $_SERVER['REQUEST_METHOD'] ) {
            die();
        }

        parent::__construct();
        $this->load->model('m_api');

        

        
        
    }
    public function login_post()
    {
    $nama = $this->post('email');
    $password= $this->post('password');
    $login= $this->m_api->login($nama , $password);
       
       if(!empty($login))
       {
          $data= $this->load->library('Authorization_Token');
         
          $token_data['id_user']=$login->id_user;
          $token_data['email']=$login->email ;
          $token_data['password']=$login->password ;
          $user_token= $this->authorization_token->generateToken($token_data);
          $value=[
            'data'=>$login, 
            'token'=>$user_token,
          ];
           return $this->response($value,200);
       }

    }
    // menampilkan user yang telah login 
    public function listPesanan_get()
    {

        $data = $this->m_api->tampilData();
        if($data)
        {
            return $this->response($data , 200);
        }
            
        
    }
    public function totalPesanan_get()
    {
        $data = $this->m_api->listPesanan();
        if($data)
        {
            return $this->response($data , 200);
        }
        if (empty($data))
        {
            $data = 0 ;
            return $this->response($data,0);
        }

    }
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
        // $id_menu= $this->get('id_menu');
         $this->load->library('Authorization_Token');
        $cek =  $this->authorization_token->userData();
      
        if($cek->id_user !=null){
      
                $data = $this->m_api->list_makanan();
                return $this->response($data , 200) ;
       
       
         }
       else {
            return $this->response($cek  , 404);
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