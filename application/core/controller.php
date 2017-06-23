<?php

class Controller {
	
	public $model;
	public $view;
	public $sidebar;
	public $charset = 'utf8';
	
	function __construct()
	{
		$this->view = new View();
	}
	
	// действие (action), вызываемое по умолчанию
	function action_index()
	{
		// todo	
	}
}
