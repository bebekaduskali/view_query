<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Base_Controller {
    function __construct() {
		parent::__construct();
        //$this->load->model('mahasiswa_model', 'mahasiswa');
    }

	public function index()
	{
        /*$query = $this->mahasiswa->get_data_basic('erwin yulis setiawan');
        foreach($query as $row)
        {
            echo $row->nm_pd;
        }
        exit;*/
        //var_dump($query);
		//$this->load->view('layout/content');
        $this->renderView('page', true);
	}
}
