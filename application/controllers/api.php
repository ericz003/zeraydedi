<?php
defined('BASEPATH') OR exit ('Akses tidak diizinkan');

require APPPATH.'/libraries/REST_Controller.php';
require APPPATH.'/libraries/Format.php';
use Restserver\Libraries\REST_Controller;

class Api extends REST_Controller {

	function index_get() {
		$user = $this->Model_users->get_all();

		if (isset($user)) {
			$this->response(array('status' => 'sukses', 'data' => $user));
		}
		else {
			$this->response(array('status' => 'gagal', 'data' => 'User Tdiak Ditemukan'), REST_Controller::HTTP_NOT_FOUND);
		}
	}

	function users_put(){
		$this->load->library('form_validation');
		$this->form_validation->set_data($this->put());

		if ($this->form_validation->run('users_put')!=false) {
			// die ('data oke');
			$this->load->Model_users->insert($users);
			if (!$users_id) {
				$this->response(array('status'=>'gagal','data'=>'Terjadi Kesalahan Pada Saat Pembuatan Data'),
				REST_controller::HTTP_INTERNAL_SERVER_ERROR);
			}else {
				// die ('data error');
				$this->response(array('status'=>'sukses','pesan'=>'Data Berhasil Dibuat'));
			}
		}else {
			$this->response(array('status'=>'gagal','data'=>
			$this->form_validation->get_errors_as_array()),
			REST_controller::HTTP_BAD_REQUEST);
		}
	}

}

?>