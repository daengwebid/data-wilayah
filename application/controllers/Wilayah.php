<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wilayah extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('model_wilayah');
	}

	public function index() {
		$data['provinsi'] = $this->model_wilayah->get_provinsi();
		$this->load->view('wilayah', $data);
	}

	public function data_kabupaten() {
		$data = $this->model_wilayah->get_kabupaten();
		foreach ($data->result() as $d) {
			echo "<option value=$d->kabupaten_id>$d->nama_kabupaten</option>";
		}
	}

	public function data_kecamatan() {
		$data = $this->model_wilayah->get_kecamatan();
		foreach ($data->result() as $k) {
			echo "<option value=$k->kecamatan_id>$k->nama_kecamatan</option>";
		}
	}
}