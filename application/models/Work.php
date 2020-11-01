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

    public function deleteData($table, $id){
        $data = $this->db->delete($table,$id);
        return $data;
    }

    public function joinData($table, $table2, $cond, $cond1=null){
        if($cond1 =null){
            $this->db->join($table2, $cond);
            $this->db->where($cond1);
            $data = $this->db->select('*')->from($table)->get()->result();
        }else{
            $this->db->join($table2, $cond);
            $data = $this->db->select('*')->from($table)->get()->result();
        }
        return $data;
    }
    

    
}

?>