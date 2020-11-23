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
		$input = "informatika jogjakarta";
		$Uppercase = strtoupper($input);
		$convert = explode(" ", $Uppercase);
		$kata = implode("", $convert);

		foreach (count_chars($kata, 1) as $res => $val) {
			if ($val > 1) {
				$x = chr($res);
				$x .= $val;
				echo $x;
			}
		}
		foreach (count_chars($kata, 1) as $res => $val) {
			if ($val == 1) {
				$y = chr($res);
				echo $y;
			}
		}
		return $this->load->view('home');
	}
}
