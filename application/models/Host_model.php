<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Host_model extends CI_Model {

    public $table = 'tbl_disk_space_category';
    public $id = 'id';
    public $order = 'DESC';

    public function get_host_category(){
        return $this->db->get('tbl_disk_space_category')->result();
    }
    public function get_money($id){
        return $this->db->where('category_id',$id)
        ->get($this->table)->row();
    }
    public function insert_post($insert){
        return $this->db->insert('tbl_users', $insert);
    }
    public function get_user_id($email){
       return $this->db->where('email',$email)
        ->get('tbl_users')->row();
    }
    public function save_trans($transaction){
        return $this->db->insert('transaction_status',$transaction);

    }
    public function update_trans_status($user_id,$reference){
        $this->db->set('payment_status','1')
        ->where('reference',$reference)
        ->where('user_id',$user_id)
        ->update('transaction_status');
    }

    public function trans_details($ref){
       return $this->db->select('tbl_disk_space_category.*,transaction_status.*,tbl_users.*')
        ->join('transaction_status','transaction_status.category_id=tbl_disk_space_category.category_id')
        ->join('tbl_users','tbl_users.user_id=transaction_status.user_id')
        ->where('transaction_status.reference',$ref)
        ->get('tbl_disk_space_category')->row();
    }

    public function checkUser($password,$email){
        $this->db->where('email',$email);
        $query=$this->db->get('tbl_users')->row();
        if(password_verify($password,$query->password)){
            return $query;
        }
        else{
            return false;
        }
    }
    // login functioo
    
}
