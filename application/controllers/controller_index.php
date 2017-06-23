<?php
class Controller_Index extends Controller
{
    function __construct()
    {
        //$this->model = new Model_Sidebar();
        $this->view = new View;
    }

    function action_index()
    {

        $this->view->generate('index.php', 'layout.php');

    }
}