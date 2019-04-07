<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('partials/header.php');
		$this->load->view('pages/home.php');
		$this->load->view('partials/modal.php');
		$this->load->view('partials/footer.php');
	}
}
