<html>
	<head>
		<title>TADKA Portal</title>
		<meta name="author" content="shivam">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="<?php echo site_url('/media/css/bootstrap.css')?>">
		<link rel="stylesheet" type="text/css" href="<?php echo site_url('/media/css/style.css')?>">
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript">

			$(document).ready(function(){
				if( !$.trim( $('#errors').html() ).length ) {
					$('#errors').hide();
				}
			});

		</script>
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

				<a href="<?php echo site_url()?>" class="navbar-brand">TADKA</a>

				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav navbar-left">
						<li class="active"><a href="#">I'm going to TADKA!</a></li>
						<li><a target="_blank" href="<?php echo site_url('/media/img/menu.jpg')?>">Menu</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="page-header">
								<h3>Going to TADKA ? Enter details...</h3>
							</div>
							<div class="page-body">
								<?php echo form_open()?>
									<div class="form-group">
										<label for="name">Name *</label>
										<input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" value="<?php echo set_value('name')?>" required>
									</div>

									<div class="form-group">
										<label for="room">Room *</label>
										<input type="text" class="form-control" id="room" name="room" placeholder="Enter Room No" value="<?php echo set_value('room')?>" required>
									</div>

									<div class="form-group">
										<label for="hostel">Hostel *</label>
										<select class="form-control" name="hostel">
											<option value="BH 1">B.H 1</option>
											<option value="BH 2">B.H 2</option>
											<option value="BH 3">B.H 3</option>
											<option value="GH">G.H</option>
										</select>
									</div>

									<div class="form-group">
										<label for="phone">Phone *</label>
										<input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone No" value="<?php echo set_value('phone')?>" required>
									</div>

									<div class="form-group">
										<label for="time">Accepting Orders till *</label>
										<input type="text" class="form-control" id="time" name="time" placeholder="Enter number of Hours from now. Ex: 5" value="<?php echo set_value('time')?>" required>
									</div>

									<div class="form-group">
										<label for="charges">Extra Charges * <small>in Rupees</small></label>
										<div class="row">
											<div class="col-xs-4">
												<input type="text" class="form-control" id="charges" name="full_charge" placeholder="Full" required>
											</div>
											<div class="col-xs-4">
												<input type="text" class="form-control col-xs-2" name="half_charge" placeholder="Half" required>
											</div>
											<div class="col-xs-4">
												<input type="text" class="form-control col-xs-2" name="chapati_charge" placeholder="Chapati" required>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label for="phone">Comments</label>
										<textarea class="form-control" name="comments" value="<?php echo set_value('comments')?>"></textarea>
									</div>
									<button type="submit" class="btn btn-primary">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>


				<div class="col-lg-5">
					<div class="alert alert-danger" id="errors">
						<?php echo validation_errors();?>
					</div>
				</div>

			</div>
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
		<script type="text/javascript" src="<?php echo site_url('/media/js/bootstrap.js')?>"></script>
	</body>
</html>