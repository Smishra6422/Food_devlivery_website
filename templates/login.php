<div class="container ">
	<div class="row w-100 login-container">
		<div class="col-12 col-md-8 col-xxl-4">
			<div class="card pb-3 px-2">

				<!-- Category User Restaurant -->
				<div class="login-category">
					<div class="user-form-button"><p>User</p></div>
					<div class="restaurant-form-button"><p>Restaurant</p></div>
				</div>

				<!-- Food Image -->
				<div class="login-food-image">
					<div class="food-image">
						<img src="assets/loginlogo.svg" alt="LoginLogo" />
					</div>
				</div>

				<!-- User Login Page -->
				<div class="form user-login-container <?php echo($restaurantDisplay) ?>" id="user-login">
					<div class="login-title">
						<h4>User Login</h4>
					</div>
					<form class="row g-3 needs-validation" method="post" 
					action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

						<div class="invalid-feedback"id="restaurant-number-error" style="display: block">
      							<?php echo($error) ?>
    					</div>

						<div class="mb-3">
  							<label for="user-email" class="form-label">Email address</label>
  							<input type="email" class="form-control" id="user-email" placeholder="name@example.com" name="email" >
						</div>
						<div class="mb-3">
  							<label for="user-password" class="form-label">Password</label>
  							<input type="password" class="form-control" id="user-password" placeholder="password..." name="password" >
						</div>
						 <div class="col-12">
    						<button class="btn submit-button" name="user-login-button" type="submit">Login Now</button>
  						 </div>
						
					</form>
				</div>

				<!-- Restaurant Login Page -->
				<div class="form restaurant-login-container <?php echo($restaurantDisplay) ?>" id="restaurant-login">
					<div class="login-title">
						<h4>Restaurant Login</h4>
					</div>
					<form class="row g-3 needs-validation" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
						<div class="invalid-feedback"id="restaurant-number-error" style="display: block">
      							<?php echo($error) ?>
    					</div>
						<div class="mb-3">
  							<label for="restaurant-email" class="form-label">Email address</label>
  							<input type="email" class="form-control" name="email" id="restaurant-email" placeholder="name@example.com">
						</div>
						<div class="mb-3">
  							<label for="restaurant-password" class="form-label">Password</label>
  							<input type="password" class="form-control" id="restaurant-password" name="password" placeholder="password...">
						</div>
						 <div class="col-12">
    						<button class="btn submit-button" name="restaurant-login-button" type="submit">Login Now</button>
  						 </div>
						
					</form>
				</div>
				
			</div>
		</div>
	</div>
</div>