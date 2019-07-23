<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>PHP MODAL</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container text-center">
		<h1>Welcome to our website</h1>
			<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signin-modal">
		  Login
		</button>
  	<?php
  		// here your php validation & functions
  		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  			$email = $_POST['email'];
  			$pass = $_POST['pass'];
  			
  			if (! empty($email)) {
  			?>
  				<div class="alert alert-danger">
  					<?php echo $email; ?>
  				</div>
  			<?php 
				}
			}
  	?>
	</div>


	<!-- Modal -->
	<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">
	        	Modal title
	        </h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	      	  <div class="form-group">
					    <label for="exampleInputEmail1">
					    	Email address
					    </label>
					    <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">
					    	Password
					    </label>
					    <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  </div>
					  <div class="form-control">
					  	<input type="submit" class="btn btn-primary" value="submit">
					  	<input type="reset" class="btn btn-danger float-right" value="reset &amp; close" data-dismiss="modal">
					  </div>
					</form>
	      </div>
	    </div>
	  </div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>