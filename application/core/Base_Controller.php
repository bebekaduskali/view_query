<?php

class Base_Controller extends CI_Controller
{
    public function __construct() {
        parent::__construct();
     }
    function renderView($content, $slide = false) {
    
        $this->view->data($this->data);

        $this->view->layout = 'layout/default';
        $this->view_items['header'] = 'layout/head';
        $this->view_items['menu'] = 'layout/nav';
        if ($slide){
        $this->view_items['slide'] = 'layout/slide';}
        $this->view_items['content']  = $content;
        $this->view_items['footer']  = 'layout/footer';
    
        $this->view->load($this->view_items);
        $this->view->render();
    }
}