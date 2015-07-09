<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mkomunitas extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function tampil(){
        $query = $this->db->get("komunitas");
        return $query->result_array(); 
    }

    public function ngan1jeung2(){
        $sql = "select * from komunitas where id_komunitas!=3";
        return $this->db->query($sql)->result();
    }

    public function get_id($id){
        $sql= "select sk.* from komunitas k, sub_komunitas sk where k.id_komunitas=sk.id_komunitas and k.id_komunitas = '".$id."'";
        return $this->db->query($sql)->result();
    }
}