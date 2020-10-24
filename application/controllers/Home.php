<?php

class Home extends CI_Controller{
    
    private $data;
    public function __construct(){
        parent::__construct();
        $id = $this->session->userdata('admin');
        $this->data['category'] = $this->work->calling('category');
        $user = $this->data['user'] = $this->db->where(["contact="=>$id])->get("account")->row();
        if($id):
        $this->data['items'] = $this->work->joinData('item','order_item','order_item.item_id = item.id',['user_id'=>$user->id]);
        endif;
        
    }
    
     public function commanView($data){
        $this->load->view('public/include/header',$this->data);
        $this->load->view('public/home',$data);
        $this->load->view('public/include/footer');
        
    }
    
    public function index(){
        $this->data['product'] = $this->work->calling('item');
        $this->commanView($this->data);
        
    }
    
    public function category($cat_id){
        $this->data['product'] = $this->work->calling('item',array("category"=>$cat_id));
        $this->load->view('public/include/header',$this->data);
        $this->load->view('public/category_wise',$this->data);
        $this->load->view('public/include/footer');
    }
 
     public function search(){
        $this->commanView($this->data);
    }
    
     public function product($id){
        //$this->data['product] = $this->db->where(["id"=$id])->get("item")->row();
        $this->data['product'] = $this->work->calling('item',array("id"=>$id));
        $this->load->view('public/include/header',$this->data);
        $this->load->view('public/product', $this->data);
        $this->load->view('public/include/footer');
    }
    
}
?>