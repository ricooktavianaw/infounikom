<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mevent extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function tambah($data){
        $this->db->insert('event', $data);
    }

    public function bijil(){
        $query = $this->db->get("event");
        return $query->result_array(); 
    }

    public function get_id($id){
        $sql= "select a.*, se.* from event e, sub_event se, administrator a where a.id=se.id and e.id_event=se.id_event and e.id_event = '".$id."'";
        return $this->db->query($sql)->result();
    }

    public function get_id2($id){
        $sql= "select id_event,nama_event from event where id_event = '".$id. "'";
        return $this->db->query($sql)->row();
    }

    public function ubah_data($id,$data){
        $query = $this->db->query("UPDATE event SET nama_event = '$data' WHERE id_event = '$id'");
        return $query;
    }

    public function hapus($id)
    {
        $db_debug = $this->db->db_debug;
        $this->db->db_debug = true;
        $this->db->where('id_event',$id);
        $this->db->delete('event');
        return $this->db->_error_number();
    }
}
?>