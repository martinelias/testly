<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="<?= ASSETS_URL ?>css/normalize.css">
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
	<script src="<?= ASSETS_URL ?>/js/vendor/modernizr-2.6.2.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?= ASSETS_URL ?>css/normalize.css">
	<script src="<?= ASSETS_URL ?>js/vendor/modernizr-2.6.2.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?=ASSETS_URL?>js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
	<script src="<?= ASSETS_URL ?>/js/plugins.js"></script>
	<script src="<?= ASSETS_URL ?>/js/main.js"></script>

	<script>BASE_URL = '<?=BASE_URL?>'</script>
	<? if (! empty($this->scripts)) : ?>
		<? foreach ($this->scripts as $script) : ?>
			<script src="<?= ASSETS_URL ?>js/<?= $script ?>"></script>
		<? endforeach ?>
	<? endif ?>
	<style>

		body {
			padding-top: 60px;
		}

		body, html {
			background: url(http://www.wallpapersforest.com/files/mordor-1.jpg) no-repeat center center fixed;
			background-size: 100%;
			background-color: #000000;
		}

		table.table-bordered tr {
			background-color: #f9f9f9;
		}

		;
	</style>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="brand" href="#">Mt. Doom Ring Depository</a>

			<div class="nav-collapse collapse">
				<ul class="nav">
					<li class="active"><a href="<?= BASE_URL ?>tests">Home</a></li>
					<li><a href="<?= BASE_URL ?>auth/logout">Walk out from Mordor</a></li>
					<!--  <li><a href="<?//=BASE_URL ?>tests">Contact</a></li>-->
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
</div>
<?php
/*Ask controller and action attribute from my $request instance, glue it an " _view.php" ending and
merge a view file with that name*/
require '/views/'.$request->controller.'_'.$request->action.'_view.php';?>


</body>
</html>
