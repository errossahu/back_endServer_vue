<?php

Class Customer_login {

    protected $ci ;

    public function __construct(){
        $this->ci=&get_instance();
		$this->ci->load->model('f_auth');	
    }
    public function login($username , $password)
    {
        $cek = $this->f_auth->loginCustomer();

    }
    
}



?>