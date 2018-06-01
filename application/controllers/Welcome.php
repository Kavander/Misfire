<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->database();
		$this->load->library('session');
		// load the library

		$this->load->library('SimpleLoginSecure/SimpleLoginSecure');
		$this->load->view('welcome_message');
	}
	public function login()
	{
		$this->load->database();
		$this->load->library('session');
		$this->load->library('SimpleLoginSecure/SimpleLoginSecure');

		    $this->load->view('login');

	}

	public function parsedown()
	{
		$this->load->database();
		$this->load->library('session');
		$this->load->library('Parsedown/Parsedown');
		$data['Parsedown'] = new Parsedown();
		$this->load->view('parsedown', $data);

	}
}
