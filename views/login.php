<div class="row" style="margin-top: 125px;">

	<div class="col-md-4"></div>

	<div class="col-md-4">

		<h1 class="text-center">Feedback System</h1>

	    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" role="form">

			<legend><h2 class="text-center">Admin Login</h2></legend>

			<div class="form-group">

				<label for="username">Username</label>

				<div class="input-group">

					<span class="input-group-addon"><i class="fa fa-user"></i></span>

					<input type="text" class="form-control" id="username" name="username" placeholder="Enter Your Username" value="<?php if(isset($username)){echo $username;}?>" required="required" />

				</div>

			</div>

			<div class="form-group">

				<label for="password">Password</label>

				<div class="input-group">

					<span class="input-group-addon"><i class="fa fa-lock"></i></span>

					<input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password" required="required" />

				</div>

			</div>

			<center>

				<button type="submit" name="submit" class="btn btn-info">Let me in</button>

			</center>

		</form>

	</div>

	<div class="col-md-4"></div>

</div>

