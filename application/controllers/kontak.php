<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kontak extends CI_Controller
{
	function __construct(){
        parent::__construct();
        $this->load->model('mevent');
        $this->load->model('msubevent');
        $this->load->model('mkategori');
        $this->load->model('msubkategori');
        $this->load->model('mkomunitas');
        $this->load->model('msubkomunitas');
        $this->load->model('mteraskampus');
        $this->load->model('msubteraskampus');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('message');
   	}

	public function index(){
        $menu               = array();
        $menu['bijil']      = $this->mevent->bijil();
        $menu['brojol']     = $this->mkategori->tampil();
        $menu['tampil']     = $this->mkomunitas->tampil();
        $menu['tompel']     = $this->mteraskampus->tampil();
        $eusi['news']       = $this->msubkategori->sortir();
        $eusi['randnews']   = $this->msubkategori->random();
		$html             = array();
		$html['header']   = $this->load->view('template/header',null, true);
		$html['menu']     = $this->load->view('template/menu',$menu, true);
		$html['content']  = $this->load->view('kontak',$eusi, true);
        $html['footer']   = $this->load->view('template/footer',null, true);
        $html['js']       = $this->load->view('template/js',null, true);
		$this->load->view('template/template',$html);
	}
}

?>