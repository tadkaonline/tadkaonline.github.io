<html>
	<head>
		<title>TADKA Online</title>
		<meta name="author" content="shivam">
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

				<a href="<?php echo site_url()?>" class="navbar-brand">TADKA</a>

				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav navbar-left">
						<li class="active"><a href="#">Add Item</a></li>
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
								<h3>Add an Item</h3>
							</div>
							<div class="page-body">
								<form role="form">
									<div class="form-group">
										<label for="name">Name *</label>
										<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
									</div>

									<div class="form-group">
										<label for="room">Room *</label>
										<input type="text" class="form-control" id="room" name="room" placeholder="Enter Room No">
									</div>

									<div class="form-group">
										<label for="hostel">Hostel *</label>
										<select class="form-control">
											<option>B.H 1</option>
											<option>B.H 2</option>
											<option>B.H 3</option>
											<option>G.H</option>
										</select>
									</div>

									<div class="form-group">
										<label for="phone">Phone *</label>
										<input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone No">
									</div>

									<div class="form-group">
										<label for="phone">Time *</label>
										<input type="text" class="form-control" id="time" name="time" placeholder="Enter Hours from now. Ex: 2">
									</div>

									<div class="form-group">
										<label for="phone">Comments</label>
										<textarea class="form-control"></textarea>
									</div>
									<button type="submit" class="btn btn-default">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--le scripts
		===============-->
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="<?php echo site_url('/media/js/bootstrap.js')?>"></script>
	</body>
</html>