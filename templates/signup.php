<div class="container ">
	<div class="row w-100 signup-container">
		<div class="col-12 col-md-8 col-xxl-4">
			<div class="card pb-3 px-2">

				<!-- Category User Restaurant -->
				<div class="signup-category">
					<div class="user-form-button"><p>User</p></div>
					<div class="restaurant-form-button"><p>Restaurant</p></div>
				</div>

				<!-- Food Image -->
				<div class="signup-food-image">
					<div class="food-image">
						<img src="assets/loginlogo.svg" alt="LoginLogo" />
					</div>
				</div>

				<!-- User Login Page -->
				<div class="form user-signup-container <?php echo($restaurantDisplay) ?>" id="user-signup">
					<div class="signup-title">
						<h4>User Signup</h4>
					</div>
					<form class="row g-3 needs-validation" id="user-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
						<div class="mb-3">
  							<label for="user-name" class="form-label">Name</label>
  							<input type="text" class="form-control" id="user-name" name="name" placeholder="Your Name..." value="<?php echo($name) ?>">
  							<div class="invalid-feedback" id="name-error" style="display: block">
    						</div>
						</div>

						<div class="mb-2">
  							<label for="user-email" class="form-label">Email address</label>
  							<input type="email" class="form-control" id="user-email" name="email" placeholder="name@example.com" value="<?php echo($email) ?>" >
  							<div class="invalid-feedback"id="email-error" style="display: block">
      							<?php echo($emailError) ?>
    						</div>

						</div>

						<div class="mb-2">
  							<label for="exampleFormControlInput1" class="form-label">Your Choice</label>

  							<div>
  							<label class="form-check-label" for="veg">
    							Veg
  							</label>
  							<input class="form-check-input food-choice" type="radio" name="foodChoice" value="veg" id="veg" checked>

  							<label class="form-check-label ml-3" for="nonveg">
  							   Non-Veg
  							 </label>

  							 <input class="form-check-input food-choice" type="radio" name="foodChoice" value="nonveg" id="nonveg" >
  							</div>

  							<div class="invalid-feedback" id="food-select-error" style="display: block">
    						</div>
  							   							
						</div>

						<div class="mb-3">
  							<label for="user-password" class="form-label">Password</label>
  							<input type="password" class="form-control" id="user-password" 
  							name="password" placeholder="password..." value="<?php echo($password) ?>" >
  							<div class="invalid-feedback" id="password-error" style="display: block">
    						</div>
						</div>

						 <div class="col-12">
    						<button class="btn submit-button" id="user-submit-button" type="submit" name="user-submit">Signup Now</button>
  						 </div>
						
					</form>
				</div>


				<!-- Restaurant Login Page -->
				<div  id="restaurant-signup" class="form restaurant-signup-container
				<?php echo($restaurantDisplay) ?>">
					<div class="signup-title">
						<h4>Restaurant Signup</h4>
					</div>
					<form class="row g-3 needs-validation" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
						<div class="mb-3">
  							<label for="restaurant-name" class="form-label">Name</label>
  							<input type="text" class="form-control" id="restaurant-name" name="name" placeholder="Your Name..." value="<?php echo($name) ?>">
  							<div class="invalid-feedback"id="restaurant-name-error" style="display: block">
      							
    						</div>
						</div>

						<div class="mb-3">
  							<label for="restaurant-number" class="form-label">Number</label>
  							<input type="number" class="form-control" id="restaurant-number" name="number" placeholder="Your Number..." inputmode="number" value="<?php echo($number) ?>">
  							<div class="invalid-feedback"id="restaurant-number-error" style="display: block">
      							<?php echo($numberError) ?>
    						</div>
						</div>

						<div class="mb-3">
  							<label for="restaurant-email" class="form-label">Email address</label>
  							<input type="email" class="form-control" id="restaurant-email" name="email" placeholder="name@example.com" value="<?php echo($email) ?>">
  							<div class="invalid-feedback"id="restaurant-email-error" style="display: block">
      							<?php echo($emailError) ?>
    						</div>
						</div>

						<div class="mb-3">
  							<label for="restaurant-password" class="form-label">Password</label>
  							<input type="password" class="form-control" id="restaurant-password" name="password" placeholder="password..." value="<?php echo($password) ?>">
  							<div class="invalid-feedback"id="restaurant-password-error" style="display: block">
    						</div>
						</div>
						 <div class="col-12">
    						<button class="btn submit-button" id="restaurant-submit-button" name="restaurant-submit" type="submit">Signup Now</button>
  						 </div>
						
					</form>
				</div>
				
			</div>
		</div>
	</div>
</div>