<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller
{
	function __construct(){
        parent::__construct();
        /*
        $this->check_isvalidated();
        $this->load->model('maccount');
        */
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
        $menu             = array();
        $menu['bijil']    = $this->mevent->bijil();
        $menu['tampil']   = $this->mkomunitas->tampil();
        $menu['brojol']   = $this->mkategori->tampil();
        $menu['tompel']   = $this->mteraskampus->tampil();
        $eusi             = array();
        $eusi['terkam']   = $this->msubteraskampus->sortir();
        $eusi['news']     = $this->msubkategori->sortir();
        $eusi['randnews'] = $this->msubkategori->random();
        $eusi['event']    = $this->msubevent->sortir();
        $eusi['nulaina']  = $this->msubevent->bijilngan2();
        $eusi['randko']   = $this->msubkomunitas->random();
        $eusi['subkom']   = $this->msubkomunitas->tampil(); 
        $eusi['sortir']   = $this->msubteraskampus->tampil();
		$html             = array();
		$html['header']   = $this->load->view('template/header',null, true);
		$html['menu']     = $this->load->view('template/menu',$menu, true);
		$html['content']  = $this->load->view('template/content',$eusi, true);
        $html['footer']   = $this->load->view('template/footer',null, true);
        $html['js']       = $this->load->view('template/js',null, true);
		$this->load->view('template/template',$html);
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
        return "$tggl $bln $thn".date(", H:i:s ");         
    }

    function dateevent($tgl){
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

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url().'login');
    }
}
?>