<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome');
	}
	
	public function token(){
		$data=$this->input->get("search");
		$data1 = preg_replace('/\s+/', ' ', $data); 
		$kalimat=strtolower($data1);
		$data = array( 
		'budaya'=> $this->M_data->kebudayaan()
		);
		//print_r($data['budaya']);
    foreach($data['budaya'] as $value){ 
	//print_r($value);
      if(preg_match('/\s/',$value['nama'])==1){ 
       $replacedata = preg_replace('/\s+/', '@', $value['nama']); 
       $kalimat = str_replace($value['nama'],$replacedata,$kalimat);
      }
    }
	
    $tanda['informasi']=preg_split("/ +/ ",$kalimat);
	
    foreach ($tanda['informasi'] as $value) { 
    $value = str_replace("@"," ",$value);
    $tanda['newinformasi'][] = $value;
   }
		//$this->getpos($tanda);
	print_r($tanda['newinformasi']);
	}
}

