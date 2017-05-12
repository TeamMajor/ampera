<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Budaya extends CI_Controller {

	public function __construct() {
        parent::__construct();
		if($this->session->userdata('username')!=null){
			
		}
		else {
			redirect('admin/home');
		}
		$config['upload_path'] = './file/';
		$config['allowed_types'] = '*';
		$this->load->library('upload', $config);
        
    }

	public function index() {
		if($this->input->post()){
			$this->upload->do_upload('pdfFile');
			$upload_data1 = $this->upload->data();
			$nama=$this->input->post('nim');
			$lokasi=$this->input->post('judul');
			$kategori=$this->input->post('topik');
			$keterangan=$this->input->post('keterangan');
			$input = array (
					'nama'=>$nim,
					'lokasi' => $lokasi,
					'kategori' => $kategori,
					'name' => $upload_data1['file_name'],
					'keterangan'=>$keterangan,
					);
			$this->Model_stemming->insert_doc($input);
		}
			
		else{
			$this->session->set_userdata('content', 'budaya');
			$this->load->view('admin/home');
		}
		
		
	}
	
}

	


?>
