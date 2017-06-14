<?php

class Controller_404 extends Controller
{
    function action_index()
    {
        echo 'controller 404';
        $this->view->generate('404.php', 'layout.php');
    }
}