<?php

    class User extends CI_Controller{
        public function __construct(){
            parent::__construct();
            
            if(!$this->session->userdata('admin')){
                redirect('auth/login');
            }
        }

        public function cart(){
                        
            $log = $this->session->userdata('admin');
            $user = $this->db->where('contact',$log)->get('account')->row();
            $data['user'] = $this->db->where(["contact="=>$log])->get("account")->row();
            // $order = $this->db->get_where('orders',['user_id'=>$user->id,'ordered'=>false])->row();
            $data['order'] = $this->work->joinData('orders','coupon','orders.coupon = coupon.id',['user_id'=>$user->id]);
            $data['items'] = $this->work->joinData('item','order_item','order_item.item_id = item.id',['user_id'=>$user->id]);
            $data['category'] = $this->work->calling('category');
            $this->load->view('public/include/header', $data);
            $this->load->view('public/cart');
            $this->load->view('public/include/footer');
        }

        public function remove_item($id =null){
            if($id!=null){
                $this->work->deleteData('order_item',['id'=>$id]);
                $this->session->set_flashdata('msg', 'Item successfully removed');
                redirect('user/cart');
            }
        }

        /*public function addToCart($item_id=null){
            $log = $this->session->userdata('admin');
            $user = $this->db->where('contact',$log)->get('account')->row();
            if($item_id != null){
              $item = $this->work->calling("item",["id"=>$item_id]);
                 if(count($item) > 0 ){
                    $item = $item['0'];

                    $order = $this->work->calling("orders",['ordered'=>false, 'user_id'=>$user->id]);

                    if(count($order) > 0){
                        // if exist
                        $cond = ["ordered"=>false, "user_id"=>$user_id, "order_id"=>$order['0']->order_id];
                        $orderitem = $this->db->where($cond)->get('order_item')->row();
                        if(!empty($orderitem)){
                            $this->db->update("order_item",["qty" => $orderitem->qty+=1],$cond);
                        }
                        else{
                            $this->db->insert("order_item",$cond);
                        }
                        redirect('user/cart');

                    }
                    else{
                        // if not exist
                        $order = $this->db->insert_id("orders",["ordered" => false, "user_id" =>$user->id]);
                        $orderitem = $this->db->insert("order_item",["ordered" => false, "user_id" =>$user->id, "order_id"=>$order]);
                    }
                    redirect('user/cart');
                }
            }
        }*/

        public function minus($item_id=null){
                $log = $this->session->userdata('admin');
                $user = $this->db->where('contact',$log)->get('account')->row();
            if($item_id!= null){
                $item = $this->work->calling("item",["id"=>$item_id]);
                
                if(count($item) > 0){
                        $item = $item[0];
                        $order = $this->work->calling("orders",['ordered'=>false,'user_id'=>$user->id]);
                    if(count($order) > 0){
                            //if exist
                            $cond = ["ordered"=>false,"user_id"=>$user->id,"order_id"=>$order[0]->order_id,"item_id"=>$item_id];
                            $orderitem = $this->db->where($cond)->get('order_item')->result();

                        if($orderitem[0]->qty > 1){
                                $this->db->update("order_item",["qty"=>$orderitem[0]->qty-=1],$cond);
                                
                        }
                        else{
                            $this->work->deleteData('order_item',$cond);
                            $this->session->set_flashdata('msg', 'Item successfully removed');
                            
                        }
                        redirect('user/cart');
                    }
                }
            }
        }

        public function addToCart($item_id=null){
            $log = $this->session->userdata('admin');
            $user = $this->db->where('contact',$log)->get('account')->row();
    
            if($item_id != null){
                $item = $this->work->calling("item",["id"=>$item_id]);
    
                if(count($item) > 0){
                    $item = $item[0];
                    $order = $this->work->calling("orders",['ordered'=>false,'user_id'=>$user->id]);
                    if(count($order) > 0){
                        //if exist
                        $cond = ["ordered"=>false,"user_id"=>$user->id,"order_id"=>$order[0]->order_id,"item_id"=>$item_id];
                        $orderitem = $this->db->where($cond)->get('order_item')->result();
    
                        if(count($orderitem) > 0){
                            $this->db->update("order_item",["qty"=>$orderitem[0]->qty+=1],$cond);
                        }
                        else{
                            $this->db->insert("order_item",$cond);
                            $this->session->set_flashdata('msg', 'Item successfully added to cart');
                        }
                    }
                    else{
                        //if not exist
                        $order = $this->db->insert("orders",["ordered"=>false,"user_id"=>$user->id]);
                        echo $last_id = $this->db->insert_id();
    
                        $orderitem = $this->db->insert("order_item",["ordered"=>false,"user_id"=>$user->id,"order_id"=>$last_id,'item_id'=>$item_id]);
                        $this->session->set_flashdata('msg', 'Item successfully added to cart');
                    }
                    redirect("user/cart");
                }
            }
        }

        public function coupon($id =null){
            $log = $this->session->userdata('admin');
            $user = $this->db->where('contact',$log)->get('account')->row();

            if($id!=null){
                $order = $this->db->get_where('orders',['user_id'=>$user->id,'ordered'=>false])->row();
                $this->db->update('orders',['coupon'=>0],['order_id'=>$id]); 
                $this->session->set_flashdata('msg', 'Coupon successfully removed');
                    
            }else{

    
            $this->form_validation->set_rules('code','code','required');

            if($this->form_validation->run()){
                if($this->work->checkData('coupon',['code'=> $_POST['code']])){
                    $coupon = $this->db->get_where('coupon',['code'=> $_POST['code']])->row();
                    $order = $this->db->get_where('orders',['user_id'=>$user->id,'ordered'=>false])->row();
                    $this->db->update('orders',['coupon'=>$coupon->id],['order_id'=>$order->order_id]);
                    $this->session->set_flashdata('msg', 'Coupon successfully added');
                }
                else{
                    $this->session->set_flashdata('error', 'Coupon not valid');
                    
                }
                redirect('user/cart');
    
            }
        }
                redirect('user/cart');
        }
    
    }