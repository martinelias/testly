<?php
//class tests
class tests
{

//
	public $requires_auth = TRUE;

	function index()
	{
		$this->scripts[]='tests.js';
		$this->scripts[] = 'tests.js';
		global $request;
		global $_user;
		$tests = get_all("SELECT * FROM test NATURAL JOIN user WHERE test.deleted=0");

		//merge master view which decides which body to put
		require 'views/master_view.php';


	}
	function remove()
	{
		global $request;

		$id = $request->params[0];
		$result = q("UPDATE test SET deleted=1 WHERE test_id='$id'");
		require 'views/master_view.php';
	}
	function edit(){
		global $request;
		$id=$request->params[0];
		$test=get_all("SELECT * FROM test WHERE test_id='$id'");
		$test=$test[0];

		require 'views/master_view.php';
	}

}
