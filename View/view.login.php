<?php require "Partials/header.php"; ?>

<body>
	<div class="container">
		<form action="login.php" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="log_email" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="log_password" required>
			</div>
			<div class="input-group">
				<button name="log_submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="index.php">Register Here</a>.</p>
		</form>
		<?php if ( $logedUser->wrongLogPassword ):?>
			<div class="alert alert-primary" role="alert">
				<h1 class="success"> Wrong Email or Password. Try agane! </h1>
			</div>
		<?php endif; ?>
	</div>
</body>



<?php require "Partials/footer.php"; ?>