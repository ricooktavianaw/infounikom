<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Msignin extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function validate(){
        // grab user input
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->_salt($this->input->post('password')));
        
        // Prep the query
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('mahasiswa');
        // Let's check if there are any results
        if($query->num_rows == 1){
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(  'nim-mahasiswa' => $row->nim,
                            'nama-mahasiswa' => $row->nama_lengkap,
                            'username-mahasiswa' => $row->username,
                            'validated' => true);
            $this->session->set_userdata($data);
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }

    private function _salt($value){
        $salt =')!@%$AcaKKaduL+^%#';
        $encrypt = md5($salt . $value);
        return $encrypt;
    }
}