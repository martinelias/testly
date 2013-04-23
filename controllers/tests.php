<?php
//class tests
class tests
{

//
	public $requires_auth = TRUE;

	function index()
	{
		$this->scripts[] = 'tests_.js';
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
		$this->scripts[] = 'test_add_edit.js';
		$id=$request->params[0];
		$test=get_all("SELECT * FROM test NATURAL JOIN question WHERE test_id='$id'");
		$test=$test[0];

		require 'views/master_view.php';
	}
	function add() {
		global $request;
		$this->scripts[] = 'test_add_edit.js';
		$test=array(
			'test_id'   =>'',
			'name'   =>'',
			'introduction'   =>'',
			'conclusion'   =>'',
			'passcode'   =>'',
			'question_text'   =>'',
		);
		require'views/master_view.php';
	}
}
