<?php
//fefined(''BASEPATH) OR exit('No direct script access allowed');
class Index extends CI_Controller{

   function __construct(){
        parent::__construct();

        
    }

    public function index(){
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('dashboard');
        $this->load->view('template/footer');   
    }
}
?>