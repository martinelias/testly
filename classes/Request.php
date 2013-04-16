<?php

class Request {
	public $controller;
	public $action = 'Index';
	public $params = array();

	function __construct()
	{
		if (isset($_SERVER['PATH_INFO'])) {
			if ($path_info = explode('/', $_SERVER['PATH_INFO'])) {
				array_shift($path_info);
				$this->controller = isset($path_info[0]) ? array_shift($path_info) : 'welcome';
				$this->action = isset($path_info[0]) && !empty($path_info[0]) ? array_shift($path_info) : 'index';
				$this->params = isset($path_info[0]) ? $path_info : null;
			}
		}
	}
}

$_request = new Request;