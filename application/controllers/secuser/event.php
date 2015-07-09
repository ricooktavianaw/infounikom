<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Event extends CI_Controller{
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

    public function tambah()
    {
        $menu = array();       
        $menu['bijil']    = $this->mevent->bijil();
        $menu['brojol']   = $this->mkategori->tampil();
        $menu['tampil']   = $this->mkomunitas->tampil();
        $menu['tompel']   = $this->mteraskampus->tampil();
        $data['hijidua']  = $this->mkomunitas->ngan1jeung2();
        $html             = array();
        $html['header']   = $this->load->view('admin/template/header',null, true);
        $html['topbar']   = $this->load->view('admin/template/topbar',null, true);
        $html['menu']     = $this->load->view('admin/template/menu',$menu, true);
        $html['content']  = $this->load->view('admin/tambah-event',$data, true);
        $html['js']       = $this->load->view('admin/template/js',null, true);
        $this->load->view('admin/template/template',$html);
    }
    
    public function tambah_kategori_event()
    { 
        if($this->_validation()===FALSE){
            //$this->session->set_flashdata('message', $this->message->message_error('Gagal Menambah Data'));
            redirect(base_url()."secuser/home/event");
        }else{
            $data = array('nama_event' => $this->input->post('nama_event'));
            $this->mevent->tambah($data);
            //$this->session->set_flashdata('message', $this->message->message_success('Berhasil Menambah Data'));
            redirect(base_url()."secuser/home/event");
        }
    }

    public function ubah($id=null){
        $menu = array();       
        $menu['bijil']    = $this->mevent->bijil();
        $menu['brojol']   = $this->mkategori->tampil();
        $menu['tampil']   = $this->mkomunitas->tampil();
        $menu['tompel']   = $this->mteraskampus->tampil();
        $data['detail']   = $this->mevent->get_id2($id);
        $html             = array();
        $html['header']   = $this->load->view('admin/template/header',null, true);
        $html['topbar']   = $this->load->view('admin/template/topbar',null, true);
        $html['menu']     = $this->load->view('admin/template/menu',$menu, true);
        $html['content']  = $this->load->view('admin/ubah-event',$data, true);
        $html['js']       = $this->load->view('admin/template/js',null, true);
        $this->load->view('admin/template/template',$html);   
    }

    public function ubah_event($id=null){
        $data = $this->input->post('nama_event');
        if($this->_validation()===FALSE){
            //$this->session->set_flashdata('message', $this->message->message_error('Gagal Meng Update Data'));
            redirect(base_url()."secuser/home/event");
        }else{
            $this->mevent->ubah_data($id,$data);
            //$this->session->set_flashdata('message', $this->message->message_success('Berhasil Mengubah Data'));
            redirect(base_url()."secuser/home/event");
        }
    }

    public function hapus()
    {
        $id = $this->uri->segment(4); 
        $h=$this->mevent->hapus($id); 
        if($h==1451)
            $this->session->set_flashdata('message', $this->message->message_error('Gagal menghapus. Data tersebut sudah digunakan pada data lainnya'));
        else
            $this->session->set_flashdata('message', $this->message->message_success('Berhasil menghapus Data'));
            redirect(base_url()."secuser/home/event");
    }

    public function _validation(){
        $this->form_validation->set_rules('nama_event','Nama Kategori Event', 'trim|required|xss_clean');
        return $this->form_validation->run();
    }

}
