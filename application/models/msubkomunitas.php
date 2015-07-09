<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Msubkomunitas extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    
    public function tampil(){
        $query = $this->db->get('sub_komunitas');
        return $query->result(); 
    }

    public function tambah($data){
        $this->db->insert('sub_komunitas', $data);
    }

    public function get_id($id){
        $sql= "select sk.*, k.* from komunitas k, sub_komunitas sk where k.id_komunitas=sk.id_komunitas and sk.id_sub_komunitas = '".$id."'";
        return $this->db->query($sql)->result();
    }

    public function ubah_data($data, $condition){
        $this->db->where($condition);
        $this->db->update('sub_komunitas',$data);
    }
    
    public function hapus($id)
    {
        $db_debug = $this->db->db_debug;
        $this->db->db_debug = true;
        $this->db->where('id_sub_komunitas',$id);
        $this->db->delete('sub_komunitas');
        return $this->db->_error_number();
    }

    public function random(){
        $sql = "select * from sub_komunitas order by rand() limit 1";
        return $this->db->query($sql)->result();
    }

    //tampil halaman mhs
    public function tampilkanberurutan(){
        $sql = "select * from sub_komunitas order by id_sub_komunitas desc";
        return $this->db->query($sql)->result();
    }
}