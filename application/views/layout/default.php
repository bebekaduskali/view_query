<?php

    $header->render();
    $menu->render();
    if(isset($slide)){
    $slide->render();}
    $content->render();
    $footer->render();
    
?>