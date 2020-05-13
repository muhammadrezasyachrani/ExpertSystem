<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->load->library('user_agent');
		$data['browser'] = $this->agent->browser();
		$data['browser_version'] = $this->agent->version();
		$data['os'] = $this->agent->platform();
		$data['ip_address'] = $this->input->ip_address();
		$this->load->view('index', $data);
	}

	public function detect_detailed_system_info()
	{
		$this->load->view('sysinfo/xml.php');
	}
}
