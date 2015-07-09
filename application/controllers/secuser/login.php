<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct() {        
	    parent::__construct();
	    $this->load->model('mlogin');
	}

	public function index(){
		$data = array();
        if(isset($msg))
		$data['messages'] = $msg; 
		$this->load->view('admin/login');
	}

	public function process(){
        // Validate the user can login
        $result = $this->mlogin->validate();
        // Now we verify the result
        if(! $result){
            // If user did not validate, then show them login page again
            $data=array();
            $data['messages'] = '<font color=red>Invalid username and/or password.</font><br />';
            $this->load->view('admin/login', $data);
        }else{
            redirect(base_url().'secuser/home');
        }        
    }
}

?>