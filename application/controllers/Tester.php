<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tester extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Index | Base';

		$this->load->view('base/index', $data, FALSE);
	}

}

/* End of file Tester.php */
/* Location: ./application/controllers/Tester.php */