<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct() {
        parent::__construct();
        // $this->load->helper('url');
        // $this->load->model('Complaint_model', 'complaint');
        $this->load->model('AdminModel', 'a_model');
     }

	public function AdminView(){

		$this->load->view('AdminModule/AdminView');
	}
    public function loadUsers(){

        $data['result'] = $this->a_model->getAllUsers();

        echo json_encode($data);
    }
}
