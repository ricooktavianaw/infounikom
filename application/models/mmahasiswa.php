<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mmahasiswa extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function tambah($data){
        $this->db->insert('mahasiswa', $data);
    }

    public function bijil(){
        $query = $this->db->get("mahasiswa");
        return $query->result_array(); 
    }

    public function get_id ($id){
        $sql= "select * from mahasiswa where nim = '".$id. "'";
        return $this->db->query($sql)->row();
    }

    public function ubah_data($id,$data){
        $query = $this->db->query("UPDATE mahasiswa SET nama_mahasiswa = '$data' WHERE nim = '$id'");
        return $query;
    }

    public function hapus($id)
    {
        $db_debug = $this->db->db_debug;
        $this->db->db_debug = true;
        $this->db->where('nim',$id);
        $this->db->delete('mahasiswa');
        return $this->db->_error_number();
    }
}
?>