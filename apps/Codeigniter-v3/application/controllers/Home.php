<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * ! TEST PT INTALOGI Jakarta
 * ! Aliases whydandrian
 * ! email whydandrian@gmail.com
 */

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->load->view('welcome_message');
	}
}
