<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhs extends CI_Controller {
    function __construct() {
		parent::__construct();
        $this->load->model('mahasiswa_model', 'mahasiswa');
    }

	public function index()
	{
        $query = $this->mahasiswa->get_data_basic('erwin yulis setiawan');
        foreach($query as $row)
        {
            echo $row->nm_pd;
        }
        exit;
        //var_dump($query);
		//$this->load->view('dashboard');
	}
    
    public function search()
    {  
        $record = $this->input->post(); 
        if(empty($record))
        {
            redirect('welcome');
        }
        $keyword = $record['keyword'];
        $query = $this->mahasiswa->get_data_basic($keyword);
        foreach($query as $row)
        {
            echo $row->nm_pd;
        }
        exit; 
    }
}
