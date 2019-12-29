<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend_controller extends CI_Controller {

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
    public function __construct()
	{
		parent::__construct();
		// $this->load->model(array(
		// 	'felmerald_model'
		// 	));
		$this->load->library(array(
			"Includes"
			));
		// load upload_controller
	 	// $this->load->controller('upload_controller');

	}
	public function index()
	{
        $this->includes->header("Welcome to Felmerald Besario CV");
        $this->load->view('index');
        $this->includes->footer('includes/footer');
	}
}
