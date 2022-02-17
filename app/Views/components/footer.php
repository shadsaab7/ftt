<div class="overlay" id="overlay"></div>

<div class="popup login" id="login">
	<div class="scroll">
		<div class="scroll_wrap">
			<div class="popup-head">
				<div class="title">Sign In</div>
				<a class="link js-popup-open" data-href="#registration">Sign Up</a>

			</div>
			<div class="popup-body">
				<div class="subtitle">
					Use the e-mail and password that you specified when registering on the site
				</div>
				<div class="form">
					<form action="<?= route_to('user_index') ?>" method="post">
						<input type="email" name="email" class="input" placeholder="Email">
						<input type="password" name="password" class="input" placeholder="Password">
						<button type="submit" class="submit button">Sign In</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="close"></div>
</div>





<div class="popup forgot-pass" id="recovery-pass">
	<div class="scroll">
		<div class="scroll_wrap">
			<div class="popup-head">
				<div class="title">Forgot password?</div>
			</div>
			<div class="popup-body">
				<div class="subtitle">
					Use the e-mail and password that you specified when registering on the site
				</div>
				<form action="<?= route_to('forget_password') ?>" class="form" method="post">
					<input type="email" class="input" name="email" placeholder="Email">
					<button type="submit" class="submit button">Reset password</button>
				</form>
			</div>
		</div>
	</div>
	<div class="close"></div>
</div>


<div class="popup profile-setting" id="profile-setting">
	<div class="scroll">
		<div class="scroll_wrap">
			<div class="select-userpic">
				<div class="userpic">V</div>
				<div class="select">
					<input type="file" id="profile-pic">
					<label for="profile-pic">Select photo</label>
				</div>
			</div>
			<div class="popup-head">
				<div class="title">Setting</div>
			</div>
			<div class="popup-body">
				<div class="form">
					<input type="text" class="input" placeholder="Username" value="<?= session()->get('user.user_name') ?>">
					<input type="text" class="input" placeholder="Name" value="<?= session()->get('user.name') ?>">
					<input type="text" class="input" placeholder="Surename" value="<?= session()->get('user.user_name') ?>">
					<input type="email" class="input" placeholder="Email" value="<?= session()->get('user.user_name') ?>">
					<div class="label">Change password</div>
					<input type="password" class="input" placeholder="Current password">
					<input type="password" class="input" placeholder="Enter new password">
					<input type="password" class="input" placeholder="New password repeat">
					
					<button class="submit button js-submit">Save Setting</button>
				</div>
			</div>
		</div>
	</div>
	<div class="close"></div>
</div>


<div class="popup contact-us" id="contact-us">
	<div class="scroll">
		<div class="scroll_wrap">
			<div class="popup-head">
				<div class="title">Contact Us</div>
			</div>
			<div class="popup-body">
				<div class="subtitle">
					But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
				</div>
				<div class="form">
					<input type="text" class="input" placeholder="Name">
					<input type="email" class="input" placeholder="Email">
					<input type="text" class="input" placeholder="Phone">
					<textarea class="textarea" placeholder="Your Massage"></textarea>
					<button class="submit button js-submit">Send Massage</button>
				</div>
			</div>
		</div>
	</div>
	<div class="close"></div>
</div>

<div class="popup book-now-popup" id="book-now">
	<div class="scroll">
		<div class="scroll_wrap">
			<div class="popup-head">
				<div class="title">Book Now</div>
			</div>
			<div class="popup-body">
				<div class="tour-title">
					<div class="img">
						<img src="/public/img/demo-bg.jpg" alt="">
					</div>
					<div class="tour-name">
						Tour to the Arctic is an exotic journey on the verge of extreme
					</div>
				</div>
				<div class="tour-info">
					<div class="col">
						<div class="label">Check In</div>
						<div class="date">
							<div class="day">09</div>
							<div class="month">May</div>
							<div class="year">2019</div>
						</div>
						<div class="label">Aduld: <span>3</span></div>
					</div>
					<div class="col">
						<div class="label">Check Out</div>
						<div class="date">
							<div class="day">09</div>
							<div class="month">May</div>
							<div class="year">2019</div>
						</div>
						<div class="label">Children: <span>0</span></div>
					</div>
				</div>
				<div class="form">
					<input type="text" class="input" placeholder="Your First Name">
					<input type="text" class="input" placeholder="Your Last Name">
					<input type="email" class="input" placeholder="Your Email">
					<input type="tel" class="input" placeholder="Your Number Phone">
					<textarea class="textarea" placeholder="Where are your address?"></textarea>
					<textarea class="textarea" placeholder="Note:"></textarea>
					<button class="submit button js-submit">Book Now | <b>$356</b></button>
				</div>
			</div>
		</div>
	</div>
	<div class="close"></div>
</div>

<div class="popup registration" id="registration">
	<div class="scroll">
		<div class="scroll_wrap">
			<div class="popup-head">
				<div class="title">Sign Up</div>
				<a class="link js-popup-open" data-href="#login">Sign In</a>

			</div>
			<div class="popup-body">
				<div class="subtitle">
					Fill in the registration form and save your details.
				</div>
				<form action="<?= route_to('user_login') ?>" method="post">
					<div class="form">
						<input type="text" class="input" name="user_name" placeholder="Username">
						<input type="text" class="input" name="name" placeholder="Name">
						<input type="text" class="input" name="sure_name" placeholder="Surname">
						<input type="email" class="input" name="email" placeholder="Email">
						<input type="password" class="input" name="password" placeholder="Password">
						<input type="password" class="input" name="repeate_password" placeholder="Password Repeat">
						<button type="submit" class="submit button">Registration</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="close"></div>
</div>

<div class="popup success-popup" id="contact-us-success">
	<div class="scroll">
		<div class="scroll_wrap">
			<div class="popup-head">
				<div class="title">Success</div>
			</div>
			<div class="popup-body">
				<div class="subtitle">
					Your message was successfully sent.
				</div>
			</div>
		</div>
	</div>
	<div class="close"></div>
</div>
<div class="popup success-popup" id="register-success">
	<div class="scroll">
		<div class="scroll_wrap">
			<div class="popup-head">
				<div class="title">Success</div>
			</div>
			<div class="popup-body">
				<div class="subtitle">
					Your registration submitted successfully.
				</div>
			</div>
		</div>
	</div>
	<div class="close"></div>
</div>
<div class="popup success-popup" id="forget-password">
	<div class="scroll">
		<div class="scroll_wrap">
			<div class="popup-head">
				<div class="title">Success</div>
			</div>
			<div class="popup-body">
				<div class="subtitle">
					Your request successfully sent. Check your email.
				</div>
			</div>
		</div>
	</div>
	<div class="close"></div>
</div>
<div class="popup success-popup" id="password-changed">
	<div class="scroll">
		<div class="scroll_wrap">
			<div class="popup-head">
				<div class="title">Success</div>
			</div>
			<div class="popup-body">
				<div class="subtitle">
					Your password successfully changed.
				</div>
			</div>
		</div>
	</div>
	<div class="close"></div>
</div>
<div class="popup success-popup" id="password-not-match">
	<div class="scroll">
		<div class="scroll_wrap">
			<div class="popup-head">
				<div class="title text-danger notexist">Error</div>
			</div>
			<div class="popup-body">
				<div class="subtitle">
					User not exist.
				</div>
			</div>
		</div>
	</div>
	<div class="close"></div>
</div>





<script src="/public/js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="/public/js/jquery-ui.min.js"></script>
<script src="/public/js/lightgallery.js"></script>
<script src="/public/js/jquery.mousewheel.min.js"></script>
<script src="/public/js/slick.min.js"></script>
<script src="/public/js/hammer.js"></script>
<script src="/public/js/scripts.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>