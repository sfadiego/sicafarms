<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{	
		$data['navbar'] = $this->load->view('templates/navbar',"", TRUE);
		$data['slider'] = $this->load->view('templates/slider',"", TRUE);
		$data['mapa'] = $this->load->view('templates/mapa',"", TRUE);
		$data['contacto'] = $this->load->view('templates/contacto',"", TRUE);
		$data['footer'] = $this->load->view('templates/footer',"", TRUE);
		$this->load->view('sicafarms',$data);
	}
}
