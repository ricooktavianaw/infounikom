<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mkategori extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function tambah($data){
        $this->db->insert('kategori', $data);
    }

    public function tampil(){
        $query = $this->db->get("kategori");
        return $query->result_array(); 
    }

    public function get_id($id){
        $sql= "select a.*, sk.* from kategori k, sub_kategori sk, administrator a where a.id=sk.id and k.id_kategori=sk.id_kategori and k.id_kategori = '".$id."'";
        return $this->db->query($sql)->result();
    }

    public function get_id2($id){
        $sql= "select id_kategori,nama_kategori from kategori where id_kategori = '".$id. "'";
        return $this->db->query($sql)->row();
    }

    public function ubah_data($id,$data){
        $query = $this->db->query("UPDATE kategori SET nama_kategori = '$data' WHERE id_kategori = '$id'");
        return $query;
    }

    public function hapus($id)
    {
        $db_debug = $this->db->db_debug;
        $this->db->db_debug = true;
        $this->db->where('id_kategori',$id);
        $this->db->delete('kategori');
        return $this->db->_error_number();
    }
}