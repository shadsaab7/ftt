<?= $this->extend('layout') ?>


<?= $this->section('content') ?>
<div class="main_slider js_height">
    <div class="slider_wrap" id="main_slider_wrap">
        <div class="slide">
            <div class="bg-img" style="background-image: url(/public/img/flight5.jpg)"></div>
            <div class="wrap">
                <div class="wrap_float js_height">
                    <div class="slide_content">
                        <div class="title_wrap">
                            <h2 class="slide_title">Contact Us</h2>
                        </div>
                        <div class="next_title">Dubai</div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="arrows">
        <div class="arrow prev"></div>
        <div class="arrow next"></div>
    </div>
</div>
<div class="page contacts-page full-width mt-5">
    <div class="wrap">
        <div class="wrap_float">
            <div class="page_head">
                <h1 class="title">
                    Let’s have a talk together
                </h1>
                <p class="subtitle">
                    But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.
                </p>
            </div>
            <div class="page_body">
                <div class="contacts-left">
                    <div class="tel">
                        <a href="#">01141071222</a>
                        <p>Round the clock support</p>
                    </div>
                    <div class="email">
                        <a href="#">info@fttonline.in</a>
                        <p>For any questions</p>
                    </div>
                    <p class="address">
                        D-88 3rd Floor Cv Raman Marh Opp: Escort Hospital Sarai Jullena, Delhi, <br>India 110025
                    </p>
                    <div class="socials social-links">
                        <a href="#" class="link facebook"><span></span></a>
                        <a href="#" class="link instagram"><span></span></a>
                        <a href="#" class="link pinterest"><span></span></a>
                        <a href="#" class="link twitter"><span></span></a>
                        <a href="#" class="link youtube"><span></span></a>
                    </div>
                    <a class="btn button js-popup-open" data-href="#contact-us">Contact Us</a>
                </div>
                <div class="contacts-right">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.391967922845!2d77.27077031442604!3d28.559667982446612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3ed32ab4aef%3A0x8ffa6e629279964b!2sAllrite%20International!5e1!3m2!1sen!2sin!4v1641968813839!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

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
                <div class="form">
                    <input type="email" class="input" placeholder="Email">
                    <button class="submit button js-submit">Reset password</button>
                </div>
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
                    <input type="text" class="input" placeholder="Username" value="Victor777">
                    <input type="text" class="input" placeholder="Name" value="Victor">
                    <input type="text" class="input" placeholder="Surename" value="Shibut">
                    <input type="email" class="input" placeholder="Email" value="test@test.com">
                    <div class="label">Change password</div>
                    <input type="password" class="input" placeholder="Current password">
                    <input type="password" class="input" placeholder="Enter new password">
                    <input type="password" class="input" placeholder="New password repeat">
                    <div class="label">Authorization through social networks</div>
                    <div class="social-links">
                        <a href="#" class="link facebook active"><span></span></a>
                        <a href="#" class="link twitter"><span></span></a>
                    </div>
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
                    <form action="<?= route_to('enquiry') ?>" method="post">
                        <input type="hidden" class="input" name="enquiry_for" value="contact us">
                        <input type="text" class="input" name="name" placeholder="Name">
                        <input type="email" class="input" name="email" placeholder="Email">
                        <input type="text" class="input" name="phone" placeholder="Phone">
                        <textarea class="textarea" name="message" placeholder="Your Massage"></textarea>
                        <button type="submit" class="btn btn-danger submit button">Send Massage</button>
                    </form>
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
                        <img src="img/demo-bg.jpg" alt="">
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

<div class="popup success-popup" id="contect-success">
    <div class="scroll">
        <div class="scroll_wrap">
            <div class="popup-head">
                <div class="title">Success</div>
            </div>
            <div class="popup-body">
                <div class="subtitle">
                    Your message successfully sent.
                </div>
            </div>
        </div>
    </div>
    <div class="close"></div>
</div>
<?= $this->endSection() ?>
<?= $this->section('javascript') ?>
<script>

	<?php if (session()->getFlashdata("message_contect")) { ?>
		$(".popup").removeClass("opened"), $("#contect-success").addClass("opened");

	<?php } ?>



</script>
<?= $this->endSection() ?>
