<?= $this->extend('layout') ?>


<?= $this->section('content') ?>

<div class="main_slider js_height">
	<div class="slider_wrap" id="main_slider_wrap">
		<div class="slide">
			<div class="bg-img" style="background-image: url(/public/img/about-us.jpg)"></div>
			<div class="wrap">
				<div class="wrap_float js_height">
					<div class="slide_content">
						<div class="title_wrap">
							<h2 class="slide_title">About Us</h2>
						</div>
						<!-- <div class="buttons">
							<a href="/" class="btn button" data-bs-toggle="modal" data-bs-target="#exampleModal">Book now</a>
							<a href="/" class="link" data-bs-toggle="modal" data-bs-target="#exampleModal"><span>Choose Flight</span></a>
						</div> -->
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


<div class="subscribe_section">
	<div class="wrap">
		<div class="wrap_float">
			<div class="subscribe_block" style="background-image: url(/public/img/dubai1.jpg)">
				<div class="wrap_float text-white">
					<h1 class="title text-center">
						About Us
					</h1>
					<p class="description text-center text-white">
						Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur
					</p>
					<p class="text text-center">
						Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit
					</p>
					<p class="text-center">
					<a href="http://fttonline.in/"><strong>fttonline.in</strong></a> is the fast growing India based online flight ticket booking portal that is developed with the intention of providing superior travel experience at low costs.

						Our travel portal will assist you to get flight tickets instantly with E Ticket. Besides online ticket booking and checking flight status, our travel portal has added other travel related products to our website.

						You can make perfect planning and take sensible decisions on your travel in both India and abroad. <a href="http://fttonline.in/"><strong>fttonline.in</strong></a> will help you to cater the basic needs required to enjoy the trip.

						Many travel agents all over the world have joined and more are joining as our partners, this empowers us to provide quality travel services with great efficiency at affordable prices.

						The motive of providing personal service to our customers makes our travel website unique from others. Our travel portal is built in with customer service help desk and an efficient technical team with which we obtain the knowledge of business related travel requirements & distinct needs required for individual customers. This assures the consistency and quality in our ticket booking services that include booking Flight Tickets.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-center" id="exampleModalLabel"><b>UAE Visa Buy Now!!</b></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body px-5">
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Name</label>
					<input type="text" class="form-control" id="name" name="name" placeholder="Name">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Mobile</label>
					<input type="number" class="form-control" id="mobile" name="mobile" placeholder="Mobile">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Passport Copy</label>
					<input type="file" class="form-control" id="passport_copy" name="passport_copy" placeholder="Passport Copy">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Country</label>
					<input type="text" class="form-control" id="country" name="country" placeholder="Country">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Date</label>
					<input type="date" class="form-control" id="date" name="date" placeholder="Date">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Buy Now</button>
			</div>
		</div>
	</div>
</div>


<?= $this->endSection() ?>