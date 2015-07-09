<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct(){
        parent::__construct();
        $this->check_isvalidated();
        $this->load->model('maccount');
        $this->load->model('mkomunitas');
        $this->load->model('msubkomunitas');
        $this->load->model('mevent');
        $this->load->model('msubevent');
        $this->load->model('mkategori');
        $this->load->model('msubkategori');
        $this->load->model('mteraskampus');
        $this->load->model('msubteraskampus');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('message');
   	}

	public function index(){
        $data['tampil']   = $this->mkomunitas->tampil();
        $data['bijil']    = $this->mevent->bijil();
        $data['brojol']   = $this->mkategori->tampil();
        $data['tompel']   = $this->mteraskampus->tampil();
		$html             = array();
		$html['header']   = $this->load->view('admin/template/header',null, true);
		$html['topbar']   = $this->load->view('admin/template/topbar',null, true);
		$html['menu']     = $this->load->view('admin/template/menu',$data, true);
		$html['content']  = $this->load->view('admin/template/content',null, true);
        $html['js']       = $this->load->view('admin/template/js',null, true);
		$this->load->view('admin/template/template',$html);
	}

    public function event($id=null){
        $menu = array();        
        $menu['bijil']    = $this->mevent->bijil();
        $menu['brojol']   = $this->mkategori->tampil();
        $menu['tampil']   = $this->mkomunitas->tampil();
        $menu['tompel']   = $this->mteraskampus->tampil();
        $eusi['detail']   = $this->mkomunitas->get_id($id);
        $html             = array();
        $html['header']   = $this->load->view('admin/template/header',null, true);
        $html['topbar']   = $this->load->view('admin/template/topbar',null, true);
        $html['menu']     = $this->load->view('admin/template/menu',$menu, true);
        $html['content']  = $this->load->view('admin/event',$eusi, true);
        $html['js']       = $this->load->view('admin/template/js',null, true);
        $this->load->view('admin/template/template',$html);  
    }

    public function subevent($id=null){
        $menu = array();               
        $menu['bijil']    = $this->mevent->bijil();
        $menu['brojol']   = $this->mkategori->tampil();
        $menu['tampil']   = $this->mkomunitas->tampil();
        $menu['tompel']   = $this->mteraskampus->tampil();        
        $eusi['detail']   = $this->mevent->get_id($id);
        $html             = array();
        $html['header']   = $this->load->view('admin/template/header',null, true);
        $html['topbar']   = $this->load->view('admin/template/topbar',null, true);
        $html['menu']     = $this->load->view('admin/template/menu',$menu, true);
        $html['content']  = $this->load->view('admin/subevent',$eusi, true);
        $html['js']       = $this->load->view('admin/template/js',null, true);
        $this->load->view('admin/template/template',$html);  
    }

    public function kategori($id=null){
        $menu = array();        
        $menu['bijil']    = $this->mevent->bijil();
        $menu['brojol']   = $this->mkategori->tampil();
        $menu['tampil']   = $this->mkomunitas->tampil();
        $menu['tompel']   = $this->mteraskampus->tampil();
        $eusi['detail']   = $this->mkomunitas->get_id($id);
        $html             = array();
        $html['header']   = $this->load->view('admin/template/header',null, true);
        $html['topbar']   = $this->load->view('admin/template/topbar',null, true);
        $html['menu']     = $this->load->view('admin/template/menu',$menu, true);
        $html['content']  = $this->load->view('admin/kategori',$eusi, true);
        $html['js']       = $this->load->view('admin/template/js',null, true);
        $this->load->view('admin/template/template',$html);  
    }

    public function subkategori($id=null){
        $menu = array();       
        $menu['bijil']    = $this->mevent->bijil();
        $menu['brojol']   = $this->mkategori->tampil();
        $menu['tampil']   = $this->mkomunitas->tampil();
        $menu['tompel']   = $this->mteraskampus->tampil();
        $data['detol']    = $this->mkategori->get_id($id);
        $html             = array();
        $html['header']   = $this->load->view('admin/template/header',null, true);
        $html['topbar']   = $this->load->view('admin/template/topbar',null, true);
        $html['menu']     = $this->load->view('admin/template/menu',$menu, true);
        $html['content']  = $this->load->view('admin/subkategori',$data, true);
        $html['js']       = $this->load->view('admin/template/js',null, true);
        $this->load->view('admin/template/template',$html);  
    }

    public function subkomunitas($id=null){
        $menu = array();       
        $menu['bijil']    = $this->mevent->bijil();
        $menu['brojol']   = $this->mkategori->tampil();
        $menu['tampil']   = $this->mkomunitas->tampil();
        $menu['tompel']   = $this->mteraskampus->tampil();       
        $eusi['detail']   = $this->mkomunitas->get_id($id);
        $html             = array();
        $html['header']   = $this->load->view('admin/template/header',null, true);
        $html['topbar']   = $this->load->view('admin/template/topbar',null, true);
        $html['menu']     = $this->load->view('admin/template/menu',$menu, true);
        $html['content']  = $this->load->view('admin/subkomunitas',$eusi, true);
        $html['js']       = $this->load->view('admin/template/js',null, true);
        $this->load->view('admin/template/template',$html);  
    }

    public function subteraskampus($id=null){
        $menu = array();       
        $menu['bijil']    = $this->mevent->bijil();
        $menu['brojol']   = $this->mkategori->tampil();
        $menu['tampil']   = $this->mkomunitas->tampil();
        $menu['tompel']   = $this->mteraskampus->tampil();
        $data['detol']    = $this->mteraskampus->get_id($id);
        $html             = array();
        $html['header']   = $this->load->view('admin/template/header',null, true);
        $html['topbar']   = $this->load->view('admin/template/topbar',null, true);
        $html['menu']     = $this->load->view('admin/template/menu',$menu, true);
        $html['content']  = $this->load->view('admin/subteraskampus',$data, true);
        $html['js']       = $this->load->view('admin/template/js',null, true);
        $this->load->view('admin/template/template',$html);  
    }

    function dateindo($tgl){
        //Contoh Format : 2007-08-15 01:27:45        
        $tanggal = strtotime($tgl);
        $bln_array = array (
                    '01'=>'Januari',
                    '02'=>'Februari',
                    '03'=>'Maret',
                    '04'=>'April',
                    '05'=>'Mei',
                    '06'=>'Juni',
                    '07'=>'Juli',
                    '08'=>'Agustus',
                    '09'=>'September',
                    '10'=>'Oktober',
                    '11'=>'November',
                    '12'=>'Desember'
                    );
        $hari_arr = array (
                    '0'=>'Minggu',
                    '1'=>'Senin',
                    '2'=>'Selasa',
                    '3'=>'Rabu',
                    '4'=>'Kamis',
                    '5'=>'Jum`at',
                    '6'=>'Sabtu'
                    );
        $tggl = date('j',$tanggal);
        $bln = $bln_array[date('m',$tanggal)];
        $thn = date('Y',$tanggal);
        return "$tggl $bln $thn";         
    }

	private function check_isvalidated(){
        if(! $this->session->userdata('validated')){
            redirect(base_url().'secuser/login');
        }
    }

    public function account($id=null){
        $data = array();
        $data['admin']    = $this->maccount->getAdmin();
        $data['tampil']   = $this->mkomunitas->tampil();
        $data['bijil']    = $this->mevent->bijil();
        $data['detail']   = $this->mevent->get_id($id);
        $html             = array();
        $html['header']   = $this->load->view('admin/template/header',null, true);
        $html['topbar']   = $this->load->view('admin/template/topbar',null, true);
        $html['menu']     = $this->load->view('admin/template/menu',$data, true);
        $html['content']  = $this->load->view('admin/account',$data, true);
        $html['js']       = $this->load->view('admin/template/js',null, true);
        $this->load->view('admin/template/template',$html);
    }

    public function update($id = null){
        $data = array();
        $data['admin']    = $this->maccount->getAdmin();
        $data['tampil']   = $this->mkomunitas->tampil();
        $data['bijil']    = $this->mevent->bijil();
        $data['detail']   = $this->mevent->get_id($id);
        $msg="";
        $html             = array();
        $html['header']   = $this->load->view('admin/template/header',null, true);
        $html['topbar']   = $this->load->view('admin/template/topbar',null, true);
        $html['menu']     = $this->load->view('admin/template/menu',$data, true);
        $html['content']  = $this->load->view('admin/ubah-account',$data, true);
        $html['js']       = $this->load->view('admin/template/js',null, true);
        $this->load->view('admin/template/template',$html);
    }

    public function update_proccess($id = null){
        $namaLengkap    = $this->input->post('namaLengkap');
        $username       = $this->input->post('username');
        $email          = $this->input->post('email');
        $password       = $this->input->post('password');
        $tlp            = $this->input->post('tlp');
        $alamat         = $this->input->post('alamat');

        if ($this->_validation() === FALSE){
            $this->session->set_flashdata('message', $this->message->message_error('Data Gagal Diupdate'));
            redirect(base_url()."secuser/home/account");
        }else{
            if(empty ($password)){
              $this->maccount->updateAdmin($id,$namaLengkap,$username,$email,$tlp,$alamat);
                $data = array();
                $data['admin'] = $this->maccount->getAdmin();
                $this->session->set_flashdata('message', $this->message->message_success('Data Berhasil Diupdate'));
                redirect(base_url()."secuser/home/account");
            }else{
              $this->maccount->update_password($id,$namaLengkap,$username,$email,$password,$tlp,$alamat);
                $data = array();
                $data['admin'] = $this->maccount->getAdmin();
                $this->session->set_flashdata('message', $this->message->message_success('Data Berhasil Diupdate'));
                redirect(base_url()."secuser/home/account");
            }
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url().'secuser/login');
    }

    public function _validation(){
        $this->form_validation->set_rules('username','Username', 'trim|required|min_length[6]|xss_clean');
        $this->form_validation->set_rules('password','Password', 'trim|min_length[6]|xss_clean');
        return $this->form_validation->run();
    }
}

?>