<?php

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

//To Solve File REST_Controller not found
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

//require APPPATH . '/libraries/REST_Controller.php';

class Test extends REST_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
            parent::__construct();

            $this->load->model('DAO/Buffle_ii_state_dao','buffleDAO',TRUE);
            $this->load->model('DAO/Buffle_ii_mailing_dao','mailDAO',TRUE);
            $this->load->model('DAO/Sms_dao','smsDAO',TRUE);
            $this->load->library('email');

	}
	public function index_get()
	{
            $result = array("text"=>"bonjour", "msg"=>"Requete recu");
            $this->set_response($result, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
	}
        
        
     
}


