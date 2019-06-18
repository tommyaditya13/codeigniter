<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index()
	{
		$comp = array(
			"content" => $this->load->view("content",array(), true),

		);
		$this->load->view("index");
		
	}
}
