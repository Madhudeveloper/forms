<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>Responsive Forms</title>
</head>
<body>
<h1 class="text-center">Responsive Forms Using Bootstrap 4</h1>
<hr>
<br>
<form action="function.php" method="POST">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
				    <label for="fname" style="color: orange; font-weight: bold;">First Name</label>
				    <input type="text" class="form-control" name="firstname" placeholder="Enter firstname" required>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
				    <label for="lname" style="color: orange; font-weight: bold;">Last Name</label>
				    <input type="text" class="form-control" name="lastname" placeholder="Enter lastname" required>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
				    <label for="email" style="color: orange; font-weight: bold;">Email Address</label>
				    <input type="email" class="form-control" name="email" placeholder="Enter emailaddress.." required>
				  </div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
				    <label for="mobileno" style="color: orange; font-weight: bold;">Mobile Number</label>
				    <input type="tel" class="form-control" name="mobileno" placeholder="Enter mobileno" required>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
				    <label for="country" style="color: orange; font-weight: bold;">Country</label>
				    <select class="form-control" name="country" required>
				    	<option>Select Our Country</option>
				    	<option>America</option>
				    	<option>Australia</option>
				    	<option>India</option>
				    	<option>England</option>
				    	<option>France</option>
				    </select>
				  </div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
				    <label for="message" style="color: orange; font-weight: bold;">Message</label>
				    <textarea class="form-control" name="message"></textarea>
				</div>
			</div>
		</div>
		<div class="form-group">
			<button class="btn btn-primary" name="submit">Submit</button>
		</div>
	</div>
</form>
</body>
</html>