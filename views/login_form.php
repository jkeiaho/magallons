		<div class="main clearfix">
			<h1>Login</h1>
			<?=Form::open()?>
				<div class="login_form" action="">
					<div class="row">
						<?=Form::label('email', 'Email:')?><br>
						<?=Form::input('email', 'email')?>
					</div>
					
					<div class="row">
						<?=Form::label('password', 'Password:')?><br>
						<?=Form::input('password', 'password')?>
					</div>

					<?php if($error): ?>
						<div class="row error">
							<p><?=$error?></p>
						</div>
					<?php endif; ?>

					<div class="row">
						<?=Form::submit()?>
					</div>

					
					
				</div>
			<?=Form::close()?>

			<div class="whisper clearfix">
				<h2>Come on in. There's so much we have to show you.</h2>
			</div>

			<div class="chocolate clearfix">
				<a href="#">
					<img src="assets/images/products/png_image2.png" alt="">
				</a>
			</div>
		</div>