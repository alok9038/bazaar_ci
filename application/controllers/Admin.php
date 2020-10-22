<?php

class Admin extends CI_Controller{
    
    private $data;
    public function __construct(){
        parent::__construct();
        $this->data['category'] = $this->work->calling('category');
        $this->data['product'] = $this->work->calling('item');
    }
        
    public function index(){
        
        // $this->data['product'] = $this->work->calling('item');
        $this->load->view('admin/include/header');
        $this->load->view('admin/dashboard',$this->data);
        $this->load->view('admin/include/footer');
        
    }
    
    public function category(){
        $this->form_validation->set_rules('title','title','required');
        $this->form_validation->set_rules('description','description','required');
        if($this->form_validation->run()){
            $data = [
                'title' => $_POST['title'],
                'description' => $_POST['description'],
            ];
            
            $this->db->insert('category',$data);
            redirect('admin/category');
        }else{
        $this->load->view('admin/include/header');
        $this->load->view('admin/category', $this->data);
        $this->load->view('admin/include/footer');
        }
    }
        
     public function product(){
        $this->load->view('admin/include/header');
        $this->load->view('admin/products', $this->data);
        $this->load->view('admin/include/footer');
    }
    
    public function addProduct(){
        $this->form_validation->set_rules('title','title','required');
        $this->form_validation->set_rules('price','price','required');
        $this->form_validation->set_rules('discount_price','discount_price','required');
        $this->form_validation->set_rules('brand','brand','required');
        $this->form_validation->set_rules('model','model','required');
        $this->form_validation->set_rules('category','category','required');
        $this->form_validation->set_rules('description','description','required');
        $this->form_validation->set_rules('summary','summary','required');
             
             if($this->form_validation->run()){
            $config['upload_path']          = './assets/upload/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';


            $this->load->library('upload',$config);

                if(!$this->upload->do_upload("image")){
                $this->data['error '] = $this->upload->display_errors();
            }
            else{
                 $data = [
                     'title' => $_POST['title'],
                     'price' => $_POST['price'],
                     'discount_price' => $_POST['discount_price'],
                     'brand' => $_POST['brand'],
                     'model' => $_POST['model'],
                     'category' => $_POST['category'],
                     'image' => $_FILES['image']['name'],
                     'description' => $_POST['description'],
                     'summary' => $_POST['summary'],
                 ];
                 $this->db->insert("item",$data);
                 redirect('admin/addProduct');
             }
             }
        else{
                $this->load->view('admin/include/header');
                $this->load->view('admin/add_product', $this->data);
                $this->load->view('admin/include/footer');
            }
          
         }
    
}
?>
