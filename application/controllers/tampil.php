<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tampil extends CI_Controller {

	public function index() {
		$sumber = file_get_contents('http://localhost/zeray/api/');
		$data = json_decode($sumber, true);
		$data['result'] = $data["data"];
		$this->load->view('json/tampil_json', $data);
	}

}
?>