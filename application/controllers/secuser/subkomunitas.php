<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Subkomunitas extends CI_Controller{
    function __construct(){
        parent::__construct(); 
        $this->load->model('mevent');
        $this->load->model('msubevent');
        $this->load->model('mkategori');
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
        $html['content']  = $this->load->view('admin/tambah-subkomunitas',$data, true);
        $html['js']       = $this->load->view('admin/template/js',null, true);
        $this->load->view('admin/template/template',$html);
    }
    
    public function tambah_komunitas()
    { 
        $config['file_name'] = 'pict_'.date('Y_m_d_H_i_s');
        $config['upload_path'] = './pict/komunitas/';
        $config['allowed_types'] = 'gif|GIF|jpg|JPG|jpeg|JPEG|png|PNG';
        $config['max_size'] = '8000';
        $config['max_width']  = '1366';
        $config['max_height']  = '1024';
        $this->load->library('upload', $config);
        if($_FILES['userfile']['name'] == "") {                                 
            $datanya = array( 
                            'id_komunitas'          => $this->input->post('id_komunitas'),
                            'nama_sub_komunitas'    => $this->input->post('nama_sub_komunitas'),
                            'deskripsi_singkat'     => $this->input->post('deskripsi_singkat'),
                            'kegiatan'              => $this->input->post('kegiatan'),
                            'web'                   => $this->input->post('web'),
                            'facebook'              => $this->input->post('facebook'),
                            'twitter'               => $this->input->post('twitter'),
                            'cp'                    => $this->input->post('cp')
            );
            $this->msubkomunitas->tambah($datanya);
            redirect('secuser/home');
        }else{
            if (!$this->upload->do_upload()){
                echo 'Error Bos';
                echo $this->upload->display_errors();
            }else{
                $data = $this->upload->data();
//              $this->_create_thumbnail($data["file_name"]); 
                $datanya = array( 
                            'id_komunitas'          => $this->input->post('id_komunitas'),
                            'nama_sub_komunitas'    => $this->input->post('nama_sub_komunitas'),
                            'deskripsi_singkat'     => $this->input->post('deskripsi_singkat'),
                            'kegiatan'              => $this->input->post('kegiatan'),
                            'web'                   => $this->input->post('web'),
                            'facebook'              => $this->input->post('facebook'),
                            'twitter'               => $this->input->post('twitter'),
                            'cp'                    => $this->input->post('cp'),
                            'logo'          => $data['file_name']
                           );
                $this->msubkomunitas->tambah($datanya);
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
        $data['detail']   = $this->msubkomunitas->get_id($id);
        $html             = array();
        $html['header']   = $this->load->view('admin/template/header',null, true);
        $html['topbar']   = $this->load->view('admin/template/topbar',null, true);
        $html['menu']     = $this->load->view('admin/template/menu',$menu, true);
        $html['content']  = $this->load->view('admin/detail-subkomunitas',$data, true);
        $html['js']       = $this->load->view('admin/template/js',null, true);
        $this->load->view('admin/template/template',$html);
    }

    public function ubah($id){
        $menu = array();       
        $menu['bijil']    = $this->mevent->bijil();
        $menu['brojol']   = $this->mkategori->tampil();
        $menu['tampil']   = $this->mkomunitas->tampil();
        $menu['tompel']   = $this->mteraskampus->tampil();
        $data['detail']   = $this->msubkomunitas->get_id($id);
        $data['hijidua']  = $this->mkomunitas->ngan1jeung2();
        $html             = array();
        $html['header']   = $this->load->view('admin/template/header',null, true);
        $html['topbar']   = $this->load->view('admin/template/topbar',null, true);
        $html['menu']     = $this->load->view('admin/template/menu',$menu, true);
        $html['content']  = $this->load->view('admin/ubah_komunitas',$data, true);
        $html['js']       = $this->load->view('admin/template/js',null, true);
        $this->load->view('admin/template/template',$html);   
    }

    public function ubah_komunitas(){
        $config['file_name'] = 'pict_'.date('Y_m_d_H_i_s');
        $config['upload_path'] = './pict/komunitas/';
        $config['allowed_types'] = 'gif|GIF|jpg|JPG|jpeg|JPEG|png|PNG';
        $config['max_size'] = '8000';
        $config['max_width']  = '1366';
        $config['max_height']  = '1024';
        $this->load->library('upload', $config);
        if($_FILES['userfile']['name'] == "") {                                 
            $datanya = array( 
                            'id_komunitas'          => $this->input->post('id_komunitas'),
                            'nama_sub_komunitas'    => $this->input->post('nama_sub_komunitas'),
                            'deskripsi_singkat'     => $this->input->post('deskripsi_singkat'),
                            'kegiatan'              => $this->input->post('kegiatan'),
                            'web'                   => $this->input->post('web'),
                            'facebook'              => $this->input->post('facebook'),
                            'twitter'               => $this->input->post('twitter'),
                            'cp'                    => $this->input->post('cp')
            );
            $condition['id_sub_komunitas'] = $this->input->post('id_sub_komunitas'); 
            $this->msubkomunitas->ubah_data($datanya, $condition);
            redirect('secuser/home');
        }else{
            if (!$this->upload->do_upload()){
                echo 'Error Bos';
                echo $this->upload->display_errors();
            }else{
                $data = $this->upload->data();
                $datanya = array( 
                            'id_komunitas'          => $this->input->post('id_komunitas'),
                            'nama_sub_komunitas'    => $this->input->post('nama_sub_komunitas'),
                            'deskripsi_singkat'     => $this->input->post('deskripsi_singkat'),
                            'kegiatan'              => $this->input->post('kegiatan'),
                            'web'                   => $this->input->post('web'),
                            'facebook'              => $this->input->post('facebook'),
                            'twitter'               => $this->input->post('twitter'),
                            'cp'                    => $this->input->post('cp'),
                            'logo'                  => $data['file_name']
                           );
                $condition['id_sub_komunitas'] = $this->input->post('id_sub_komunitas');
                $this->msubkomunitas->ubah_data($datanya, $condition);
                redirect(base_url().'secuser/home');
            }
        }
    }

    public function hapus()
    {
        $id = $this->uri->segment(4); 
        $h=$this->msubkomunitas->hapus($id); 
        if($h==1451)
            $this->session->set_flashdata('message', $this->message->message_error('Gagal menghapus. Data tersebut sudah digunakan pada data lainnya'));
        else
            $this->session->set_flashdata('message', $this->message->message_success('Berhasil menghapus Data'));
            redirect(base_url()."secuser/home");
    }

}
