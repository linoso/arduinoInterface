<!DOCTYPE html>
<!--[if IEMobile 7 ]> <html id="iem7" lang="it"class="no-js no-document-ready iem7"> <![endif]-->
<!--[if lt IE 7 ]><html id="ie6" lang="it" class="no-js no-document-ready ie ie6 lt-ie7 lt-ie8 lt-ie9"><![endif]-->
<!--[if IE 7 ]><html id="ie7" lang="it" class="no-js no-document-ready ie ie7 lt-ie8 lt-ie9"><![endif]-->
<!--[if IE 8 ]><html id="ie8" lang="it" class="no-js no-document-ready ie ie8 lt-ie9"><![endif]-->
<!--[if IE 9 ]><html id="ie9" lang="it" class="no-js no-document-ready ie ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="it" class="no-js no-document-ready"><!--<![endif]-->
<head>
	<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> -->
	<meta charset="utf-8">

	<!-- Google Chrome Frame for IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Genoastirling / dashboard </title>
	<meta name="description" content="Activity dashboard">

	<!-- Head common stuff and CSS -->
	<?php include('inc/head.php') ?>

	<!-- HTML5 elements to be styled and contain children while being printed in IE 6-8. - https://github.com/aFarkas/html5shiv/archive/master.zip -->
	<!--[if lt IE 9]>
		<script src="/dev/js/vendor/html5shiv-printshiv.js"></script>
		<![endif]-->

		<!-- This script prevents links from opening in Mobile Safari. https://gist.github.com/1042026 -->
		<script>
			(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")
		</script>
		<!-- modernizr-2.6.2.min load before body -->
		<script type="text/javascript" src="js/vendor/modernizr-2.6.2.min.js"></script>
		<!--require -->
		<script data-main="js/custom.js" src="js/vendor/require.min.js"></script>

	</head>


	<body>

		<div id="main" role="main">

			<article class="login-box clearfix">
				<h1 id="logo" class="icon-logo"><img alt="Welcome to the admin login" src="images/logo.png"></h1>
				<div class="form-filtra clearfix">
					<form id="login_form" method="post" action="">
						<div class="row-fluid control-group">
							<label class="txt-firstletter">Username</label>
							<input type="text" id="login_username" name="login_username" placeholder="Inserisci Username" class="username " data-error-message="<small>Inserire l'username corretta</small> " autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" required>
						</div><!-- /control-group -->
						<div class="row-fluid control-group">
							<label class="txt-firstletter">Password</label>
							<input type="password" id="login_password" name="login_password" placeholder="Inserisci Password" class="password" data-error-message="<small>Inserire la password </small> " autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" required>
						</div><!-- /control-group -->
						<button class="btn-1 pull-right" type="submit" value="login">Login</button>
					</form>
				</div>
			</article>
		</div><!-- /main -->

		<!-- dialog or modal -->

		<!-- no script javascript libray -->
		<?php include('inc/no-scripts.php') ?>



	</body>
</html>


