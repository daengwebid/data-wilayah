<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_wilayah extends CI_Model {

	public function get_provinsi() {
		return $this->db->get('provinsi');
	}

	public function get_kabupaten() {
		$provinsi_id = $this->input->get('provinsi_id');
		$this->db->where('provinsi_id', $provinsi_id);
		return $this->db->get('kabupaten');
	}

	public function get_kecamatan() {
		$kabupaten_id = $this->input->get('kabupaten_id');
		$this->db->where('kabupaten_id', $kabupaten_id);
		return $this->db->get('kecamatan');
	}
}