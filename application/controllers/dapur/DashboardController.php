<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{

	public function index()
	{
		$data = [
			"page" => "./pages/dapur/dashboard",
		];
		$this->load->view('./pages/dapur/main', $data);
	}
}
