<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Msubkategori extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    
    public function tampil(){
        $query = $this->db->get('sub_kategori');
        return $query->result(); 
    }

    public function tambah($data){
        $this->db->insert('sub_kategori', $data);
    }

    public function get_id($id){
        $sql= "select a.*, sk.*, k.* from administrator a, kategori k, sub_kategori sk where a.id=sk.id and k.id_kategori=sk.id_kategori and sk.id_sub_kategori = '".$id."'";
        return $this->db->query($sql)->result();
    }

    public function ubah_data($data, $condition){
        $this->db->where($condition);
        $this->db->update('sub_kategori',$data);
    }
    
    public function hapus($id)
    {
        $db_debug = $this->db->db_debug;
        $this->db->db_debug = true;
        $this->db->where('id_sub_kategori',$id);
        $this->db->delete('sub_kategori');
        return $this->db->_error_number();
    }

    //mhs
    public function sortir(){
        $sql="select a.*, sk.*, k.* from administrator a, sub_kategori sk, kategori k where sk.id=a.id and k.id_kategori=sk.id_kategori order by id_sub_kategori desc limit 4";
        return $this->db->query($sql)->result();
    }

    public function random(){
        $sql = "select sk.*, k.*, a.* from administrator a, sub_kategori sk, kategori k where k.id_kategori=sk.id_kategori and a.id=sk.id order by rand() limit 4";
        return $this->db->query($sql)->result();
    }
    //endmhs
}