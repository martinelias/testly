<?php
/** Created by Jetbrains Phpstorm .... */
class Request
{
	public $controller;
	public $action = 'index';
	public $params = array();
	public function __construct()
	{
		if (isset($_SERVER ['PATH_INFO'])) {
			if ($path_info = explode('/', $_SERVER['PATH_INFO'])){ //remove first number of exploded array
			array_shift($path_info);
			$this->controller = isset($path_info[0]) ? array_shift($path_info) : 'welcome';
			$this->action = isset($path_info[0]) && ! empty ($path_info[0]) ? array_shift($path_info) : 'index';
			$this->params = isset($path_info[0]) ? $path_info : NULL;
			}
		}

	}
}
$request = new Request;
