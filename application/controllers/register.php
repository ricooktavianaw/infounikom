<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller
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
        $this->load->model('mmahasiswa');
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
    		$html['content']  = $this->load->view('register',$eusi, true);
        $html['footer']   = $this->load->view('template/footer',null, true);
        $html['js']       = $this->load->view('template/js',null, true);
		$this->load->view('template/template',$html);
	}

    public function anjing()
    { 
        if($this->_validation()===FALSE){
            //$this->session->set_flashdata('message', $this->message->message_error('Gagal Menambah Data'));
            redirect(base_url()."main");
        }else{
            $data = array( 'nim' => null,
                           'username' => $this->input->post('username'),
                           'password' => $this->_salt($this->input->post('password')),
                           'email' => $this->input->post('email'),
                           'nama_lengkap' => $this->input->post('nama_lengkap'),
                           'fakultas' => $this->input->post('fakultas'),
                           'jurusan' => $this->input->post('jurusan'),
                           'angkatan' => $this->input->post('angkatan'),
                           'photo' => $this->input->post('photo')
                         );
            var_dump($data);
            $this->mmahasiswa->tambah($data);
            //$this->session->set_flashdata('message', $this->message->message_success('Berhasil Menambah Data'));
            redirect(base_url()."login");
        }
    }

    public function daftar()
    { 
        $config['file_name'] = 'pict_'.date('Y_m_d_H_i_s');
        $config['upload_path'] = './pict/mahasiswa/';
        $config['allowed_types'] = 'gif|GIF|jpg|JPG|jpeg|JPEG|png|PNG';
        $config['max_size'] = '8000';
        $config['max_width']  = '1366';
        $config['max_height']  = '1024';
        $this->load->library('upload', $config);
        if($_FILES['userfile']['name'] == "") {                                 
            $datanya = array( 'nim'         => $this->input->post('nim'),
                              'username'    => $this->input->post('username'),
                              'password'    => $this->_salt($this->input->post('password')),
                              'email'       => $this->input->post('email'),
                              'nama_lengkap'=> $this->input->post('nama_lengkap'),
                              'fakultas'    => $this->input->post('fakultas'),
                              'jurusan'     => $this->input->post('jurusan'),
                              'angkatan'    => $this->input->post('angkatan')
            );
            $this->mmahasiswa->tambah($datanya);
            redirect('login');
        }else{
            if (!$this->upload->do_upload()){
                echo 'Error Bos';
                echo $this->upload->display_errors();
            }else{
                $data = $this->upload->data();
//              $this->_create_thumbnail($data["file_name"]); 
                $datanya = array( 'nim'         => $this->input->post('nim'),
                                  'username'    => $this->input->post('username'),
                                  'password'    => $this->_salt($this->input->post('password')),
                                  'email'       => $this->input->post('email'),
                                  'nama_lengkap'=> $this->input->post('nama_lengkap'),
                                  'fakultas'    => $this->input->post('fakultas'),
                                  'jurusan'     => $this->input->post('jurusan'),
                                  'angkatan'    => $this->input->post('angkatan'),
                                  'photo'       => $data['file_name']
                                );
                $this->mmahasiswa->tambah($datanya);
                redirect('login');
            }
        }
    }

    public function _validation(){
        $this->form_validation->set_rules('username','Nama Panggilan', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password','Password', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email','Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('nama_lengkap','Nama Lengkap', 'trim|required|xss_clean');
        $this->form_validation->set_rules('fakultas','Fakultas', 'trim|xss_clean');
        $this->form_validation->set_rules('jurusan','Jurusan', 'trim|required|xss_clean');
        $this->form_validation->set_rules('angkatan','Angkatan', 'trim|required|xss_clean');
        $this->form_validation->set_rules('photo','Photo', 'trim|required|xss_clean');
        //$this->form_validation->set_message('required', "Field %s belum Anda isi");
        return $this->form_validation->run();
    }
    
     private function _salt($value){
        $salt =')!@%$AcaKKaduL+^%#';
        $encrypt = md5($salt . $value);
        return $encrypt;
    }
}

?>