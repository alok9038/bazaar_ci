<?php

class Home extends CI_Controller{
    
    private $data;
    public function __construct(){
        parent::__construct();
        $this->data['category'] = $this->work->calling('category');
    }
    
     public function commanView($data){
        $this->load->view('public/include/header');
        $this->load->view('public/home',$data);
        $this->load->view('public/include/footer');
        
    }
    
    public function index(){
        $this->commanView($this->data);
        
    }
    
    public function category(){
        $this->commanView($this->data);
    }
        
     public function search(){
        $this->commanView($this->data);
    }
    
     public function product(){
        $this->load->view('public/include/header');
        $this->load->view('public/product', $this->data);
        $this->load->view('public/include/footer');
    }
    
}
?>