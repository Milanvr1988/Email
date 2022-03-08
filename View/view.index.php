<?php require "partials/header.php"; 
?>


<div class="container">
		<form action="register.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="reg_username"  required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="reg_email" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="reg_password"  required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="reg_cpassword" required>
			</div>
			<div class="input-group">
				<button href="register.php" name="reg_submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
		<?php if ( $registerUser->regAlert ):?>
			<div class="alert alert-primary" role="alert">
				<h1 class="success"> Success register </h1>
			</div>
		<?php endif; ?>
		<?php if ( $registerUser->wrongEmail ):?>
			<div class="alert alert-primary" role="alert">
				<h1 class="success"> Email exist. Try agane. </h1>
			</div>
		<?php endif; ?>
		<?php if ( $registerUser->confirmPassword ):?>
			<div class="alert alert-primary" role="alert">
				<h1 class="success"> Confirm passwort is wrong! </h1>
			</div>
		<?php endif; ?>
	</div>


<?php require "partials/footer.php"; ?>

   
