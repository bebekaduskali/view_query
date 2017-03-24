
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function renderView($content) {
    
    //$this->view->data($this->data);

    $this->view->layout = 'layout/default';
    $this->view_items['header'] = 'layout/head';
    $this->view_items['menu'] = 'layout/nav';
    $this->view_items['content']  = $content;

    $this->view->load($this->view_items);
    $this->view->render();
}