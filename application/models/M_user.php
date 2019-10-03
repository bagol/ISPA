<?php

class M_user extends CI_Model{
    function get_user($user_email){
        return $this->db->query("select * from user where username = '$user_email' or email= '$user_email' or id = '$user_email'");
    }

    function update($id,$data){
        $this->db->where('id',$id);
        $this->db->update('user', $data);


    }

    

}