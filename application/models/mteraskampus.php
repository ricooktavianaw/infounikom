<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mteraskampus extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function tampil(){
        $query = $this->db->get("teraskampus");
        return $query->result_array(); 
    }

    public function get_id($id){
        $sql= "select st.* from teraskampus t, sub_teraskampus st where t.id_teraskampus=st.id_teraskampus and t.id_teraskampus = '".$id."'";
        return $this->db->query($sql)->result();
    }
}