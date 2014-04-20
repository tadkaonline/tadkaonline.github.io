<html>
	<head>
		<title>TADKA Portal</title>
		<meta name="author" content="shivam dixit">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="refresh" content="30">
		<link rel="stylesheet" type="text/css" href="<?php echo site_url('/media/css/bootstrap.css')?>">
		<link rel="stylesheet" type="text/css" href="<?php echo site_url('/media/css/style.css')?>">
	</head>

	<body>

		<!--le navbar
		===============-->
		<div class="navbar navbar-inverse navbar-static-top">
			<div class="container">

				<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a href="#" class="navbar-brand">TADKA</a>

				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav navbar-left">
						<li><a href="<?php echo site_url('add')?>">I'm going to TADKA!</a></li>
						<li><a target="_blank" href="<?php echo site_url('/media/img/menu.jpg')?>">Menu</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="container">
			<center><h2>Hungry? <small>These people are going to TADKA...</small></h2></center>

			<?php
				if(isset($error))
				{
					echo '<h2>No one is going TADKA ! :( </h2>';
					echo '<p>Click on "I\'m going to TADKA" to enter your details !</p>';
				}
				else
				{
					foreach ($result as $key => $item) {

						$timeNow = time();
						$timeRemaining = $item['time'] - $timeNow;
						$timeRemaining = floatval($timeRemaining);

						if($timeRemaining > 3600)
						{
							$time = round(($timeRemaining/3600), 1)." hour(s) remaining";
						}
						else
						{
							$time = round(($timeRemaining/60), 1)." minute(s) remaining";
						}
						echo '<div class="row">
						<div class="col-lg-8 col-lg-offset-2">
							<div class="panel panel-default">
								<div class="panel-body">
									<div class="page-header text-center">
										<h3 class="text-danger sender-name">'.$item['name'].'</h3>
										<span class="glyphicon glyphicon-time text-left"></span>
										<span class="text-success">'.$time.'</span>
									</div>

									<div class="page-body">
										<table class="table table-striped">
											<tbody>
												<tr>
													<th>Room No</th>
													<td class="col-lg-7">'.$item['room_no'].'</td>
												</tr>
												<tr>
													<th>Hostel</th>
													<td class="col-lg-7">'.$item['hostel'].'</td>
												</tr>
												<tr>
													<th>Phone</th>
													<td class="col-lg-7">'.$item['phone'].'</td>
												</tr>
												<tr>
													<th>Accepting Orders</th>
													<td class="col-lg-7">'.$time.'</td>
												</tr>
												<tr>
													<th>Extra Charges</th>
													<td class="col-lg-7">Full: '.$item['full_charge'].', Half: '.$item['half_charge'].', Chapati: '.$item['chapati_charge'].'</td>
												</tr>
												<tr>
													<th>Comments</th>
													<td class="col-lg-7">'.$item['comments'].'</td>
												</tr>
											</tbody>
										</table>

										<div class="text-right">
											<small class="text-primary">Recorded From :'.$item['ip'].' </small>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>';

					}
				}
			?>
		</div>

		<div class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
				<p class="navbar-text pull-left">&copy; Shivam Dixit - 2014</p>.
			</div>
		</div>

		<!--le scripts
		===============-->
		<script type="text/javascript">
	  		var _gaq = _gaq || [];
	  		_gaq.push(['_setAccount', 'UA-47304954-1']);
	  		_gaq.push(['_trackPageview']);

	  		(function() {
			    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();
		</script>

		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="<?php echo site_url('/media/js/bootstrap.js')?>"></script>
	</body>
</html>