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

	public function __construct(){
		parent::__construct();
		$DatabaseCheck = $this->load->database();
		//print_r($DatabaseCheck);
	}


	public function index()
	{
		$this->load->view('BatchView');

		echo '<pre>';
		print_r($_POST);
		
		//echo 'reaches the action file .333.';	
		

		$BatchData = array(
			array(
				'name' => 'Name21',
				'phone' => '9040474'
			),
			array('name' => 'Name2455',
				'phone' => '62356352'
			),
		);



		// $this->load->model('BatchModel');
		// $this->BatchModel->batchInsertAction($BatchData);
		// echo '<br>This Line Is From Control File..<br>';
	}


}
