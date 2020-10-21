<?php

class Work extends CI_Model{
    
    public function calling($table,$cond=null){
        if($cond==null){
            $data = $this->db->get($table);
        }
        else{
        $data = $this->db->where($cond)->get($table);
        }
        return $data->result();
    }
    public function checkData($table,$cond){
        $data = $this->db->where($cond)->get($table);

        $result = $data->num_rows();
        if($result > 0){
            return true;
        }
        else{
            return false;
        }
        return $data;

    }
    
    
}

?>