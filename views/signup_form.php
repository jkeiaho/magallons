		<div class="main clearfix">
			<h1>Sign Up</h1>
			<?=Form::open()?>
				<div class="login_form" action="">
					<div class="row">
						<?=Form::label('first_name', 'First Name:')?><br>
						<?=Form::input('text', 'first_name')?>
					</div>

					<div class="row">
						<?=Form::label('last_name', 'Last Name:')?><br>
						<?=Form::input('text', 'last_name')?>
					</div>

					<div class="row">
						<?=Form::label('email', 'Email:')?><br>
						<?=Form::input('email', 'email')?>
					</div>
					
					<div class="row">
						<?=Form::label('password', 'Password:')?><br>
						<?=Form::input('password', 'password')?>
					</div>

					<div class="row">
						<?=Form::label('confirm_password', 'Confirm Password:')?><br>
						<?=Form::input('password', 'confirm_password')?>
					</div>

					<div class="row">
						<?=Form::submit()?>
					</div>

					<?php if($error): ?>
						<p class="error"><?=$error?></p>
					<?php endif; ?>

				</div>
			<?=Form::close()?>

			<div class="whisper clearfix">
				<h2>Come on, Join us.</h2> 
				<h2>You know you want to.</h2>
			</div>

			<div class="chocolate clearfix">
				<a href="#">
					<img src="assets/images/products/png_image5.png" alt="">
				</a>
			</div>
		</div>