<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends Base_Controller {
    function __construct() {
		parent::__construct();
        $this->load->model('mahasiswa_model', 'mahasiswa');
    }

	public function index()
	{
        $this->renderView('mahasiswa/search_result', false);
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
        
        $this->data['mahasiswa'] = $query;
        $this->renderView('mahasiswa/search_result', false);
    }
}
