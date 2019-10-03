<?php

class M_Saran extends CI_Model{
    function insert($data){
        $this->db->insert('saran',$data);
    }

    function get_all(){
        return $this->db->get('saran');
    }
    function get_notif(){
        return $this->db->query('select * from saran where status = 0');
    }
    
}