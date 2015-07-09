<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Subkategori extends CI_Controller{
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
        //$eusi['tampil']   = $this->mteraskampus->tampil();
        $html             = array();
        $html['header']   = $this->load->view('admin/template/header',null, true);
        $html['topbar']   = $this->load->view('admin/template/topbar',null, true);
        $html['menu']     = $this->load->view('admin/template/menu',$menu, true);
        $html['content']  = $this->load->view('admin/tambah-subkategori',null, true);
        $html['js']       = $this->load->view('admin/template/js',null, true);
        $this->load->view('admin/template/template',$html);
    }
    
    public function tambah_teraskampus()
    { 
        $config['file_name'] = 'pict_'.date('Y_m_d_H_i_s');
        $config['upload_path'] = './pict/kategori/';
        $config['allowed_types'] = 'gif|GIF|jpg|JPG|jpeg|JPEG|png|PNG';
        $config['max_size'] = '8000';
        $config['max_width']  = '1366';
        $config['max_height']  = '1024';
        $this->load->library('upload', $config);
        if($_FILES['userfile']['name'] == "") {                                 
            $datanya = array( 
                            'id_kategori'          => $this->input->post('id_kategori'),
                            'id'                      => $this->input->post('id'),
                            'waktu_post'              => $this->input->post('waktu_post'),
                            'nama_sub_kategori'    => $this->input->post('nama_sub_kategori'),
                            'deskripsi'               => $this->input->post('deskripsi')
            );
            $this->msubkategori->tambah($datanya);
            redirect('secuser/home');
        }else{
            if (!$this->upload->do_upload()){
                echo 'Error Bos';
                echo $this->upload->display_errors();
            }else{
                $data = $this->upload->data();
//              $this->_create_thumbnail($data["file_name"]); 
                $datanya = array( 
                            'id_kategori'          => $this->input->post('id_kategori'),
                            'id'                      => $this->input->post('id'),
                            'waktu_post'              => $this->input->post('waktu_post'),
                            'nama_sub_kategori'    => $this->input->post('nama_sub_kategori'),
                            'deskripsi'               => $this->input->post('deskripsi'),
                            'pict'                    => $data['file_name']
                           );
                $this->msubkategori->tambah($datanya);
                redirect('secuser/home');
            }
        }
    }

    public function detail($id=null)
    {
        $menu = array();       
        $menu['bijil']    = $this->mevent->bijil();
        $menu['brojol']   = $this->mkategori->tampil();
        $menu['tampil']   = $this->mkomunitas->tampil();
        $menu['tompel']   = $this->mteraskampus->tampil();
        $data['detail']   = $this->msubkategori->get_id($id);
        $html             = array();
        $html['header']   = $this->load->view('admin/template/header',null, true);
        $html['topbar']   = $this->load->view('admin/template/topbar',null, true);
        $html['menu']     = $this->load->view('admin/template/menu',$menu, true);
        $html['content']  = $this->load->view('admin/detail-subkategori',$data, true);
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
        return "$tggl $bln $thn".date(", G:i:s ");         
    }

    public function ubah($id){
        $menu = array();       
        $menu['bijil']    = $this->mevent->bijil();
        $menu['tampil']   = $this->mkomunitas->tampil();
        $menu['tompel']   = $this->mteraskampus->tampil();
        $data['tampil']   = $this->mkategori->tampil();
        $data['detail']   = $this->msubkategori->get_id($id);
        $html             = array();
        $html['header']   = $this->load->view('admin/template/header',null, true);
        $html['topbar']   = $this->load->view('admin/template/topbar',null, true);
        $html['menu']     = $this->load->view('admin/template/menu',$menu, true);
        $html['content']  = $this->load->view('admin/ubah-subkategori',$data, true);
        $html['js']       = $this->load->view('admin/template/js',null, true);
        $this->load->view('admin/template/template',$html);   
    }

    public function ubah_kategori(){
        $config['file_name'] = 'pict_'.date('Y_m_d_H_i_s');
        $config['upload_path'] = './pict/kategori/';
        $config['allowed_types'] = 'gif|GIF|jpg|JPG|jpeg|JPEG|png|PNG';
        $config['max_size'] = '8000';
        $config['max_width']  = '1366';
        $config['max_height']  = '1024';
        $this->load->library('upload', $config);
        if($_FILES['userfile']['name'] == "") {                                 
            $datanya = array( 
                            'id_kategori'          => $this->input->post('id_kategori'),
                            'id'                      => $this->input->post('id'),
                            'waktu_post'              => $this->input->post('waktu_post'),
                            'nama_sub_kategori'    => $this->input->post('nama_sub_kategori'),
                            'deskripsi'               => $this->input->post('deskripsi')
            );
            $condition['id_sub_kategori'] = $this->input->post('id_sub_kategori'); 
            $this->msubkategori->ubah_data($datanya, $condition);
            redirect('secuser/home');
        }else{
            if (!$this->upload->do_upload()){
                echo 'Error Bos';
                echo $this->upload->display_errors();
            }else{
                $data = $this->upload->data();
                $datanya = array( 
                            'id_kategori'          => $this->input->post('id_kategori'),
                            'id'                      => $this->input->post('id'),
                            'waktu_post'              => $this->input->post('waktu_post'),
                            'nama_sub_kategori'    => $this->input->post('nama_sub_kategori'),
                            'deskripsi'               => $this->input->post('deskripsi'),
                            'pict'                    => $data['file_name']
                           );
                $condition['id_sub_kategori'] = $this->input->post('id_sub_kategori');
                $this->msubkategori->ubah_data($datanya, $condition);
                redirect(base_url().'secuser/home');
            }
        }
    }

    public function hapus()
    {
        $id = $this->uri->segment(4); 
        $h=$this->msubkategori->hapus($id); 
        if($h==1451)
            $this->session->set_flashdata('message', $this->message->message_error('Gagal menghapus. Data tersebut sudah digunakan pada data lainnya'));
        else
            $this->session->set_flashdata('message', $this->message->message_success('Berhasil menghapus Data'));
            redirect(base_url()."secuser/home");
    }

}
