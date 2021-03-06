<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Dashboard extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('m_staff');

    }

    public function index()
    {
    	$tanggal	= date("Y/m/d");
    	$data['data']=$this->m_staff->load_data($tanggal)->result();
        $this->load->view('staff/navbar');
        $this->load->view('staff/dashboard',$data);
        $this->load->view('staff/footer');
    }
}
