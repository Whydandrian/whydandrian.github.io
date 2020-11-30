<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * ! TEST PT INTALOGI Jakarta
 * ! Aliases whydandrian
 * ! email whydandrian@gmail.com
 */

class Home extends CI_Controller
{

	public function index()
	{
		$data['input_kata'] = $this->input->post('kata');

		$this->load->view('Home', $data);
	}

	public function hitung()
	{
		echo "tes";
	}
}
