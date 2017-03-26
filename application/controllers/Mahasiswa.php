<?php

/**
 * @author Anggi Mardiyono
 * @copyright 2017
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {
    public function __contruct(){
        parent::__construct();
		
		$this->load->database();
		
		$this->load->library('pagination');
        
        $this->load->model('mahasiswa_model','mahasiswa');
        $this->load->model('dosen_model','dosen');    
    }
    
    public function index(){
        $this->load->helper('url');
        
        $this->load->view('header');
        $this->load->view('mahasiswa_view');
        $this->load->view('footer');
    }
    
    public function ajax_list(){
        $list = $this->mahasiswa->get_mhstable();
        //$data =
    }
    
        
        
}


?>