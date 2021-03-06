<?php
if (!empty($success_msg)) {
	echo '<p class="status-msg success">' . $success_msg . '</p>';
} elseif (!empty($error_msg)) {
	echo '<p class="status-msg error">' . $error_msg . '</p>';
}
?>

<div class="container-fluid text-center p-2" style="color:#ceaa63">
	<div class="d-flex h-100">
		<div class="m-auto">
			<h2>Rejestracja</h2>
			<form action="" method="post">
				<div class="form-group">
					<input type="text" name="first_name" class="form-control" placeholder="Imię"
						   value="<?php echo !empty($user['first_name']) ? $user['first_name'] : ''; ?>" required>
					<?php echo form_error('first_name', '<p class="alert-warning">', '</p>'); ?>
				</div>
				<div class="form-group">
					<input type="text" name="login" class="form-control" placeholder="Login"
						   value="<?php echo !empty($user['login']) ? $user['login'] : ''; ?>" required>
					<?php echo form_error('login', '<p class="alert-warning">', '</p>'); ?>
				</div>
				<div class="form-group">
					<input type="email" name="email" placeholder="Email" required="" class="form-control">
					<?php echo form_error('email', '<p class="alert-warning">', '</p>'); ?>
				</div>
				<div class="form-group d-inline-flex">
					<input type="password" name="password" placeholder="Password" required="" class="form-control">
					<?php echo form_error('password', '<p class="alert-warning">', '</p>'); ?>
				</div>
				<div class="form-group d-inline-flex">
					<input type="password" name="conf_password" placeholder="Powtórz hasło" class="form-control"
						   required>
					<?php echo form_error('conf_password', '<p class="alert-warning">', '</p>'); ?>
				</div>
				<div class="form-group">
					<input type="text" name="phone" placeholder="Numer telefonu" class="form-control" required>
					<?php echo form_error('phone', '<p class="alert-warning">', '</p>'); ?>
				</div>
				<div class="form-group d-inline-flex">
					<input type="text" name="academic" placeholder="Akademik" class="form-control" required>
					<?php echo form_error('academic', '<p class="alert-warning">', '</p>'); ?>
				</div>
				<div class="form-group d-inline-flex">
					<input type="text" name="room" placeholder="Pokoj" class="form-control" required>
					<?php echo form_error('room', '<p class="alert-warning">', '</p>'); ?>
				</div>
				<input type="submit" name="signupSubmit" value="Zarejestruj" class="form-control w-25 btn btn-dark">
			</form>
			<p>Masz już konto? <a href="<?php echo base_url('user/login'); ?>">Zaloguj się</a></p>
		</div>
	</div>
</div>
