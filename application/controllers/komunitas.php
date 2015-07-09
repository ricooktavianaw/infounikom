<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Komunitas extends CI_Controller
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
        $this->load->helper(array("form", "date", "url"));
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
        $eusi['tampil']     = $this->msubkomunitas->tampilkanberurutan();
        $eusi['news']       = $this->msubkategori->sortir();
        $eusi['randnews']   = $this->msubkategori->random();
		$html             = array();
		$html['header']   = $this->load->view('template/header',null, true);
		$html['menu']     = $this->load->view('template/menu',$menu, true);
		$html['content']  = $this->load->view('komunitas',$eusi, true);
        $html['footer']   = $this->load->view('template/footer',null, true);
        $html['js']       = $this->load->view('template/js',null, true);
		$this->load->view('template/template',$html);
	}

    public function tambah()
    {
        $menu               = array();
        $menu['bijil']      = $this->mevent->bijil();
        $menu['brojol']     = $this->mkategori->tampil();
        $menu['tampil']     = $this->mkomunitas->tampil();
        $menu['tompel']     = $this->mteraskampus->tampil();
        $eusi['tampil']     = $this->msubkomunitas->tampil();
        $eusi['news']       = $this->msubkategori->sortir();
        $eusi['randnews']   = $this->msubkategori->random();
        $html             = array();
        $html['header']   = $this->load->view('template/header',null, true);
        $html['menu']     = $this->load->view('template/menu',$menu, true);
        $html['content']  = $this->load->view('tambah-komunitas',$eusi, true);
        $html['footer']   = $this->load->view('template/footer',null, true);
        $html['js']       = $this->load->view('template/js',null, true);
        $this->load->view('template/template',$html);
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
            redirect('komunitas');
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
                redirect('komunitas');
            }
        }
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

    public function kategori($id=null){
        $menu               = array();
        $menu['bijil']      = $this->mevent->bijil();
        $menu['brojol']     = $this->mkategori->tampil();
        $menu['tampil']     = $this->mkomunitas->tampil();
        $menu['tompel']     = $this->mteraskampus->tampil();
        $eusi['tampil']     = $this->mkomunitas->get_id($id);
        $eusi['news']       = $this->msubkategori->sortir();
        $eusi['randnews']   = $this->msubkategori->random();
        $html             = array();
        $html['header']   = $this->load->view('template/header',null, true);
        $html['menu']     = $this->load->view('template/menu',$menu, true);
        $html['content']  = $this->load->view('komunitas',$eusi, true);
        $html['footer']   = $this->load->view('template/footer',null, true);
        $html['js']       = $this->load->view('template/js',null, true);
        $this->load->view('template/template',$html);
    }

    public function detail($id=null){
        $menu               = array();
        $menu['bijil']      = $this->mevent->bijil();
        $menu['brojol']     = $this->mkategori->tampil();
        $menu['tampil']     = $this->mkomunitas->tampil();
        $menu['tompel']     = $this->mteraskampus->tampil();
        $eusi['tampil']     = $this->msubkomunitas->get_id($id);
        $eusi['news']       = $this->msubkategori->sortir();
        $eusi['randnews']   = $this->msubkategori->random();
        $html             = array();
        $html['header']   = $this->load->view('template/header',null, true);
        $html['menu']     = $this->load->view('template/menu',$menu, true);
        $html['content']  = $this->load->view('detail-komunitas',$eusi, true);
        $html['footer']   = $this->load->view('template/footer',null, true);
        $html['js']       = $this->load->view('template/js',null, true);
        $this->load->view('template/template',$html);
    }
}

?>