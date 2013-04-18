<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>testly</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script>


		$(document).ready(function() {

			setTimeout(function () {
				$(".alert-success").hide(500)
			}, 5000);

			var interval = 10;
			var shake = 40;
			var vibrateIndex = 0;
			var selector = $('.shake');
			/* Your own container ID*/
			$(selector).each(function () {
				var elem = this;
				$(this).ready(/* The button ID */

					function () {
						vibrateIndex = setInterval(function () {
							vibrate(elem);
						}, interval);
					},
					function () {
						clearInterval(vibrateIndex);
						$(this).stop(true, false)
							.css({position: 'static', left: '0px', top: '0px'});
					}
				);
			})

			var vibrate = function (elem) {
				$(elem).stop(true, false)
					.css({position: 'relative',
						left      : Math.round(Math.random() * shake) - ((shake + 1) / 2) + 'px',
						top       : Math.round(Math.random() * shake) - ((shake + 1) / 2) + 'px'
					});
			}
		});

	</script>
	<style type="text/css">
		html, body {
			height: 100%;
			background-color: #000000;
		}
		body {
			padding-top: 40px;
			padding-bottom: 40px;
			background-color: #000000;
		}

		.form-signin {
			max-width: 300px;
			padding: 19px 29px 29px;
			margin: 0 auto 20px;
			background-color: #fff;
			border: 1px solid #e5e5e5;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
			-webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
			-moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
			box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
		}

		.form-signin .form-signin-heading,
		.form-signin .checkbox {
			margin-bottom: 10px;
		}

		.form-signin input[type="text"],
		.form-signin input[type="password"] {
			font-size: 16px;
			height: auto;
			margin-bottom: 15px;
			padding: 7px 9px;
		}

	</style>
	<link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="../assets/js/html5shiv.js"></script>
	<![endif]-->

	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="../assets/ico/favicon.png">
</head>
<body style="background:url(http://2.bp.blogspot.com/-jSLk8BvSfIE/UH47n_4gRJI/AAAAAAAAADA/muQBAlhwhmA/s1600/Gandalf.jpg)
no-repeat center center fixed; background-size:100%;">
<body>

<div class="container">

	<form class="form-signin" style="opacity: 0.6" method="POST">
		<h2 class="form-signin-heading">You shall not pass!</h2>
		<input name="username" type="text" class="input-block-level" placeholder="Middle Earth ID">
		<input name="password" type="password" class="input-block-level" placeholder="Speak friend and enter">
		<label class="checkbox">
			<input type="checkbox" value="remember-me"> From Shire
		</label>
		<center><button class="btn btn-large btn-primary " type="submit">Simply walk into Mordor</button></center>
	</form>
<?php
if(isset($errors)) {
	?>
	<img style="margin-top: -250;margin-left: 480px;" class="shake" src="http://img845.imageshack.us/img845/1976/sauronj.png" />
	<center><h2 style="color: red; margin-top: 180px">You did not pass - The Eye is upon you!</h2></center>
	<?php
}
?>
</div>
<!-- /container -->



</body>
</html>
