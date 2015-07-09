<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Msubevent extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    
    public function tampil(){
        $query = $this->db->get('sub_event');
        return $query->result(); 
    }

    public function tambah($data){
        $this->db->insert('sub_event', $data);
    }

    public function get_id($id){
        $sql= "select a.*, se.*, e.* from administrator a, event e, sub_event se where a.id=se.id and e.id_event=se.id_event and se.id_sub_event = '".$id."'";
        return $this->db->query($sql)->result();
    }

    public function ubah_data($data, $condition){
        $this->db->where($condition);
        $this->db->update('sub_event',$data);
    }
    
    public function hapus($id)
    {
        $db_debug = $this->db->db_debug;
        $this->db->db_debug = true;
        $this->db->where('id_sub_event',$id);
        $this->db->delete('sub_event');
        return $this->db->_error_number();
    }

    //mhs
    public function sortir(){
        $sql="select * from sub_event order by id_sub_event desc limit 1";
        return $this->db->query($sql)->result();
    }

    public function bijilngan2(){
        $sql="select * from sub_event order by id_sub_event desc limit 2";
        return $this->db->query($sql)->result();
    }

    //endmhs
}