<?php

class Auth extends CI_Controller{
    public function login(){
        $this->data['category'] = $this->work->calling('category');
        $id = $this->session->userdata('admin');
        $this->data['user'] = $this->db->where(["contact="=>$id])->get("account")->row();
        $this->form_validation->set_rules('contact','contact','required');
        $this->form_validation->set_rules('password','password','required');

        if($this->form_validation->run()){
            $data = [
                'contact' => $_POST['contact'],
                'password' => sha1($_POST['password']),
            ];
            if($this->work->checkData("account",$data)){
                $this->session->set_userdata("admin",$_POST['contact']);
                redirect("home/index");

            }else{
                $this->session->set_flashdata('error', 'Contact and Password is incorrect');
                redirect('auth/login'); 
            }
        }

        $this->load->view("public/include/header",$this->data);
        $this->load->view("auth/login");
        $this->load->view("public/include/footer");
    }

    public function logout(){
        $this->session->unset_userdata("admin");
        redirect("auth/login");
    }

    public function signUp(){
        $this->data['category'] = $this->work->calling('category');
        $id = $this->session->userdata('admin');
        $this->data['user'] = $this->db->where(["contact="=>$id])->get("account")->row();

        $this->form_validation->set_rules('name','name','required');
        $this->form_validation->set_rules('contact','contact','required');
        $this->form_validation->set_rules('email','email','required');
        $this->form_validation->set_rules('password','password','required');

        if($this->form_validation->run()){
            $data = [
                'name' => $_POST['name'],
                'contact' => $_POST['contact'],
                'email' => $_POST['email'],
                'password' => sha1($_POST['password']),
            ];

            if($this->db->insert('account',$data)){
            redirect('auth/login');
            }
        }
        else{

        $this->load->view("public/include/header",$this->data);
        $this->load->view("auth/signup");
        $this->load->view("public/include/footer");
    }
}
    
}
?>