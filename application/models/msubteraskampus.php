<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Msubteraskampus extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    
    public function tampil(){
        $query = $this->db->get('sub_teraskampus');
        return $query->result(); 
    }

    public function tambah($data){
        $this->db->insert('sub_teraskampus', $data);
    }

    public function get_id($id){
        $sql= "select a.*, st.*, t.* from administrator a, teraskampus t, sub_teraskampus st where a.id=st.id and t.id_teraskampus=st.id_teraskampus and st.id_sub_teraskampus = '".$id."'";
        return $this->db->query($sql)->result();
    }

    public function ubah_data($data, $condition){
        $this->db->where($condition);
        $this->db->update('sub_teraskampus',$data);
    }
    
    public function hapus($id)
    {
        $db_debug = $this->db->db_debug;
        $this->db->db_debug = true;
        $this->db->where('id_sub_teraskampus',$id);
        $this->db->delete('sub_teraskampus');
        return $this->db->_error_number();
    }

    public function sortir(){
        $sql="select *from sub_teraskampus order by id_sub_teraskampus desc limit 4";
        return $this->db->query($sql)->result();
    }
}