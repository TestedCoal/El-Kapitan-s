<?php require views_path('partials/header');?>

	<div class="container-fluid border col-lg-4 col-md-5 mt-5 p-4 shadow-lg">
		
		<form method="post">
			<center>
				<h3><i class="fa fa-user"></i> Add User</h3>
				<div><?=esc(APP_NAME)?></div>
			</center>
			<br>
		 
			<div class="form-floating mb-3">
			  <input name="username" type="text" class="form-control" id="floatingInput" placeholder=" " autofocus>
			  <label for="floatingInput">Username</label>
			</div>
			
			<div class="form-floating mb-3">
			  <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
			  <label for="floatingEmail" class="form-label">Email address</label>
			</div>

			<div class="form-floating mb-3">
				<input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
				<label for="floatingPassword">Password</label>
			</div>

			<div class="form-floating mb-3">
			  <input name="password_retype" type="password" class="form-control" id="floatingPassword"placeholder="Retype Password">
			  <label for="floatingPassword">Retype Passwordasdsadsada</label>
			</div>

			<br>
			<button class="btn btn-primary float-end">Signup</button>
			<button class="btn btn-danger">Cancel</button>
		</form>
	</div>

<?php require views_path('partials/footer');?>
