<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Budaya extends CI_Controller {

	public function __construct() {
        parent::__construct();
		if($this->session->userdata('username')!=null){
			
		}
		else {
			redirect('admin/home');
		}
        
    }

	public function index() {
		if($this->input->post()){
			
			
		}
			
		else{
			$this->session->set_userdata('content', 'budaya');
		}
		
		
	}
	
}

	


?>
