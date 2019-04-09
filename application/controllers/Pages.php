<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function home()
	{
		$this->load->view('partials/header.php');
		$this->load->view('pages/home.php');
		$this->load->view('partials/modal.php');
		$this->load->view('partials/footer.php');
	}
	public function daftar()
	{
		$this->load->view('partials/header.php');
		$this->load->view('pages/daftar.php');
		$this->load->view('partials/modal.php');
		$this->load->view('partials/footer.php');	
	}
	public function registrasi()
	{
		$this->load->view('partials/header.php');
		$this->load->view('pages/registrasi.php');
		$this->load->view('partials/modal.php');
		$this->load->view('partials/footer.php');
	}
	public function kode()
	{
		$this->load->view('partials/header.php');
		$this->load->view('pages/kode.php');
		$this->load->view('partials/modal.php');
		$this->load->view('partials/footer.php');
	}
}
