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
		<script type="text/javascript" src="../public/js/vendor/modernizr-2.6.2.min.js"></script>
		<!--require -->
		<script data-main="js/custom.js" src="../public/js/vendor/require.min.js"></script>

	</head>


	<body>

		<div id="main" role="main">
			<?php include('inc/header.php') ?>

			<article class="content clearfix">

				<div class="content-top clearfix">
					<h1>Dashboard</h1>
				</div>
				<div class="row-fluid">
					<div class="span7">
						<div class="panel">
							<img class="default" src="images/engine.jpg">
							<div class="dotdata info" style="top:11%;left:13%;"><div class="dotdatabadge"><label><abbr title="Watt">W<sub>E</sub></abbr></label><div><?php echo $this->lastMesure->getPower(); ?></div></div></div>
							<div class="dotdata info" style="top:25%;left:7.5%;"><div class="dotdatabadge"><label>Volt</label><div><?php echo $this->lastMesure->getVoltage(); ?></div></div></div>
							<div class="dotdata info" style="top:25%;left:18.5%;"><div class="dotdatabadge"><label>Amp</label><div><?php echo $this->lastMesure->getCurrent(); ?></div></div></div>
							<div class="dotdata warning" style="top:65%;left:83%;"><div class="dotdatabadge"><label><abbr title="Temp 1">T<sub>w1</sub></abbr></label><div><?php echo $this->lastMesure->getTemp1(); ?></div></div></div>
							<div class="dotdata error" style="top:80%;left:83%;"><div class="dotdatabadge"><label><abbr title="Temp 2">T<sub>w2</sub></abbr></label><div><?php echo $this->lastMesure->getTemp2(); ?></div></div></div>
							<div class="dotdata success" style="top:50%;left:53%;"><div class="dotdatabadge"><label><abbr title="Temp 3">T<sub>C</sub></abbr></label><div><?php echo $this->lastMesure->getTemp3(); ?></div></div></div>
							<div class="dotdata error" style="top:65%;left:53%;"><div class="dotdatabadge"><label><abbr title="Temp 4">C<sub>H</sub></abbr></label><div><?php echo $this->lastMesure->getTemp4(); ?></div></div></div>
						</div><!-- /panel -->
					</div><!-- /span -->
					<div class="span5">
						<table class="table-striped wnp-xl">
							<thead>
								<tr>
									<th>Sec</th>
									<th>Temp 1</th>
									<th>Temp 2</th>
									<th>Temp 3</th>
									<th>Temp 4</th>
									<th>Volt</th>
									<th>Amp</th>
									<th>Watt</th>
								</tr>
							</thead>
							<tbody>

                            <?php
                            /** @type $mesurament \domain\Measurement*/
                            foreach ($this->todaysMesure as $mesurament) { ?>

                                <tr>
                                    <td><?php echo $mesurament->getTime();?></td>
                                    <td><?php echo $mesurament->getTemp1();?></td>
                                    <td><?php echo $mesurament->getTemp2();?></td>
                                    <td><?php echo $mesurament->getTemp3();?></td>
                                    <td><?php echo $mesurament->getTemp4();?></td>
                                    <td><?php echo $mesurament->getVoltage();?></td>
                                    <td><?php echo $mesurament->getCurrent();?></td>
                                    <td><?php echo $mesurament->getPower();?></td>
                                </tr>

                            <?php } ?>

							</tbody>
						</table>
					</div><!-- /span -->
				</div><!-- /row -->

			</article>

			<?php include('inc/footer.php') ?>
		</div><!-- /main -->

		<!-- dialog or modal -->

		<!-- no script javascript libray -->
		<?php include('inc/no-scripts.php') ?>



	</body>
	</html>


