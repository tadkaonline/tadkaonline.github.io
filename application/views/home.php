<html>
	<head>
		<title>TADKA Portal</title>
		<meta name="author" content="shivam dixit">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
				<a href="#" class="navbar-brand">Tadka Portal</a>
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav navbar-left">
						<li><a target="_blank" href="<?php echo site_url('/media/img/menu.jpg')?>">Menu</a></li>
					</ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a><strong>&copy; Shivam Dixit</strong></a></li>
                    </ul>
				</div>
			</div>
		</div>

		<div class="container">
            <div class="jumbotron text-center">
                <h2>Hungry? Check out who is going to Tadka...</h2>
                <p>or enter your details if you are going.</p>
                <br>
                <p>
                    <a class="btn btn-success btn-lg" href="<?php echo site_url('add')?>" role="button">I'm going to Tadka</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="btn btn-danger btn-lg" href="<?php echo site_url('view')?>" role="button">Check who is going</a>
                </p>
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

		<script type="text/javascript" src="<?php echo site_url('/media/js/jquery-2.1.1.min.js')?>"></script>
		<script type="text/javascript" src="<?php echo site_url('/media/js/bootstrap.js')?>"></script>
	</body>
</html>