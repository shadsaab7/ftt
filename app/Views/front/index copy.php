<?= $this->extend('layout') ?>


<?= $this->section('content') ?>

<div class="main_slider js_height">
	<div class="slider_wrap" id="main_slider_wrap">
		<div class="slide">
			<div class="bg-img" style="background-image: url(/public/img/dubai1.jpg)"></div>
			<div class="wrap">
				<div class="wrap_float js_height">
					<div class="slide_content">
						<div class="title_wrap">
							<p class="country">United Arab Emirates</p>
							<h2 class="slide_title" id="visa">UAE Visa</h2>
						</div>
						<p class="text">
							The 48th state, which became part of the United States. Located in the South-West of the country
						</p>
						<div class="buttons">
							<a href="<?= route_to('uae_visa') ?>" class="btn button">Buy Now</a>
							<a  href="javascript:void(0);" onclick="enquiryVisa()" class="link" data-bs-toggle="modal" data-bs-target="#exampleModal" tabindex="-1"><span>Enquiry Now</span></a>

						</div>
						<div class="next_title">Dubai</div>
					</div>
				</div>
			</div>
		</div>

		<div class="slide">
			<div class="bg-img" style="background-image: url(/public/img/banner2.jpg)"></div>
			<div class="wrap">
				<div class="wrap_float js_height">
					<div class="slide_content">
						<div class="title_wrap">
							<h2 class="slide_title" id="flight">Flight Booking</h2>
						</div>
						<p class="text">
							The largest part of the world, both in territory and in population
						</p>
						<div class="buttons">
							<a href="<?= route_to('flights') ?>" class="btn button">Book Now</a>
							<a href="javascript:void(0);" class="link" onclick="enquiryFlight()" data-bs-toggle="modal" data-bs-target="#exampleModal"><span>Enquiry Now</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="slide">
			<div class="bg-img" style="background-image: url(/public/img/hotel3.jpg)"></div>
			<div class="wrap">
				<div class="wrap_float js_height">
					<div class="slide_content">
						<div class="title_wrap">
							<h2 class="slide_title" id="hotel">Hotel Booking</h2>
						</div>
						<p class="text">
							The capital and largest city as well as the community of Iceland
						</p>
						<div class="buttons">
							<a href="<?= route_to('hotels') ?>" class="btn button">Book Now</a>
							<a href="javascript:void(0);" class="link" onclick="enquiryHotel()" data-bs-toggle="modal" data-bs-target="#exampleModal"><span>Enquiry Now</span></a>
						</div>
						<div class="next_title"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="slide">
			<div class="bg-img" style="background-image: url(/public/img/tour1.jpg)"></div>
			<div class="wrap">
				<div class="wrap_float js_height">
					<div class="slide_content">
						<div class="title_wrap">
							<h2 class="slide_title" id="tourPackages">Tour Packages</h2>
						</div>
						<p class="text">
							The capital and largest city as well as the community of Iceland
						</p>
						<div class="buttons">
							<a href="<?= route_to('tour_packeges') ?>" class="btn button">Choose Now</a>
							<a href="javascript:void(0);" class="link" onclick="enquiryTourPackages()" data-bs-toggle="modal" data-bs-target="#exampleModal"><span>Enquiry Now</span></a>
						</div>
						<div class="next_title"></div>
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
			<div style="background-image: url(/public/img/tour.jpg)">
				<div class="wrap_float text-white mt-5 mb-5">
					<h1 class="title text-center">
						About Us
					</h1>
					<div class="row justify-content-md-center">
						<p class="col-md-2"></p>
						<p class="text-center col-md-8">
							Selectmyflight.com is the fast growing India based online flight ticket booking
							portal that is developed with the intention of providing superior travel experience
							at low costs. Our travel portal will assist you to get flight tickets in both domestic
							and international sectors without any striving. Besides online ticket booking and
							checking flight status, our travel portal has added other travel related products
							to our website.

						</p>
						<p class="col-md-2"></p>
						<div class="col-md-5">
						</div>
						<div class="col-md-2 mt-3 text-center">

							<a href="<?= route_to('about_us') ?>" class="btn btn-danger">Read More</a>
						</div>
						<div class="col-md-5">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="most_popular">
	<div class="wrap">
		<div class="wrap_float">
			<div class="title_wrap">
				<h2 class="title">Most Popular UAE Visa</h2>
				<p class="subtitle">
					Latin literature from 45 BC, making it over 2000 years old
				</p>
				<div class="controls">
					<a href="/" class="link">View All Visas</a>
					<div class="arrows">
						<div class="arrow prev"></div>
						<div class="arrow next"></div>
					</div>
				</div>
			</div>
			<div class="section_content">
				<div class="tour-slider" id="tour-slider">

					<a href="<?= route_to('uae_visa') ?>" class="tour_item" style="background-image: url(/public/img/visa1.jpg)">
						<div class="tour_item_top">
							<p class="country">
								<span>Transit visa</span>
								<span>2-5 Working Days
									Transit ticket is must with EK</span>
								<span>AED 300*</span>
							</p>
							<div class="add_bookmark fav-button">
								<i class="is-added bouncy"></i>
								<i class="not-added bouncy"></i>
								<span class="fav-overlay"></span>
							</div>
						</div>
						<div class="tour_item_bottom">
							<h3 class="_title">United Arab of Emirates</h3>
							<div class="_info">
								<div class="_info_left">
									<div class="days">4 days |</div>
									<div class="cost">Buy Now</div>
								</div>
								<div class="_info_right">
									<div class="rating-stars">
										<div class="star filled"></div>
										<div class="star filled"></div>
										<div class="star filled"></div>
										<div class="star"></div>
										<div class="star"></div>
									</div>
									<p class="rating-text">10 reviews</p>
								</div>
							</div>
						</div>
						<div class="shadow js-shadow"></div>
					</a>


					<a href="<?= route_to('uae_visa') ?>" class="tour_item" style="background-image: url(/public/img/visa2.jpg)">
						<div class="tour_item_top">
							<p class="country">
								<span>Tourist visa</span>
								<span>2-5 Working Days</span>
								<span>AED 300*</span>
							</p>
							<div class="add_bookmark fav-button">
								<i class="is-added bouncy"></i>
								<i class="not-added bouncy"></i>
								<span class="fav-overlay"></span>
							</div>
						</div>
						<div class="tour_item_bottom">
							<h3 class="_title">Antelope canyon in Arizona USA exclusive tour</h3>
							<div class="_info">
								<div class="_info_left">
									<div class="days">14 days |</div>
									<div class="cost">Buy Now</div>
								</div>
								<div class="_info_right">
									<div class="rating-stars">
										<div class="star filled"></div>
										<div class="star filled"></div>
										<div class="star filled"></div>
										<div class="star"></div>
										<div class="star"></div>
									</div>
									<p class="rating-text">5 reviews</p>
								</div>
							</div>
						</div>
						<div class="shadow js-shadow"></div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="destinations">
	<div class="wrap">
		<div class="wrap_float">
			<div class="title_wrap">
				<h2 class="title">Tour Destinations</h2>
				<p class="subtitle">
					This is the most popular destination in the last month
				</p>
				<div class="controls">
					<a href="/" class="link">View All Tour Destinations</a>
				</div>
			</div>
			<div class="section_content">
				<div class="scroll">
					<a href="#" class="destinations_item" style="background-image: url(/public/img/destination-1.jpg)">
						<div class="sq_parent">
							<div class="sq_wrap">
								<div class="sq_content">
									<div class="_content">
										<h3 class="_title">Abu Dhabi</h3>
										<p class="_info">45 tours | 62 hotels</p>
									</div>
								</div>
							</div>
						</div>
						<div class="shadow js-shadow"></div>
					</a>

					<a href="#" class="destinations_item" style="background-image: url(/public/img/destination-2.jpg)">
						<div class="sq_parent">
							<div class="sq_wrap">
								<div class="sq_content">
									<div class="_content">
										<h3 class="_title">Dubai</h3>
										<p class="_info">45 tours | 62 hotels</p>
									</div>
								</div>
							</div>
						</div>
						<div class="shadow js-shadow"></div>
					</a>

					<a href="#" class="destinations_item" style="background-image: url(/public/img/destination-3.jpg)">
						<div class="sq_parent">
							<div class="sq_wrap">
								<div class="sq_content">
									<div class="_content">
										<h3 class="_title">Portugal</h3>
										<p class="_info">45 tours | 62 hotels</p>
									</div>
								</div>
							</div>
						</div>
						<div class="shadow js-shadow"></div>
					</a>

					<a href="#" class="destinations_item" style="background-image: url(/public/img/destination-4.jpg)">
						<div class="sq_parent">
							<div class="sq_wrap">
								<div class="sq_content">
									<div class="_content">
										<h3 class="_title">Sharjah</h3>
										<p class="_info">45 tours | 62 hotels</p>
									</div>
								</div>
							</div>
						</div>
						<div class="shadow js-shadow"></div>
					</a>
				</div>
			</div>
		</div>

	</div>
</div>
<div class="stories">
	<div class="wrap">
		<div class="wrap_float">
			<div class="title_wrap">
				<h2 class="title">Interesting Hotels</h2>
				<p class="subtitle">
					Watch and be inspired
				</p>
				<div class="controls">
					<a href="/" class="link">All Hotels</a>
					<div class="arrows">
						<div class="arrow prev"></div>
						<div class="arrow next"></div>
					</div>
				</div>
			</div>
			<div class="section_content">
				<div class="stries_slider" id="stries_slider">
					<a href="/" class="story_item" style="background-image: url(/public/img/hotel1.jpg)">
						<div class="item_wrap">
							<div class="_content">
								<div class="flag_wrap">
									<div class="flag">
										<img src="/public/img/demo-bg.jpg" alt="">
									</div>
								</div>
								<h3 class="country">Abu Dhabi</h3>
								<p class="text">
									Amazing underwater world
								</p>
							</div>
						</div>
						<div class="shadow js-shadow"></div>
					</a>

					<a href="#" class="story_item" style="background-image: url(/public/img/hotel2.jpg)">
						<div class="item_wrap">
							<div class="_content">
								<div class="flag_wrap">
									<div class="flag">
										<img src="/public/img/demo-bg.jpg" alt="">
									</div>
								</div>
								<h3 class="country">Dubai</h3>
								<p class="text">
									Amazing underwater world
								</p>
							</div>
						</div>
						<div class="shadow js-shadow"></div>
					</a>

					<a href="#" class="story_item" style="background-image: url(/public/img/hotel3.jpg)">
						<div class="item_wrap">
							<div class="_content">
								<div class="flag_wrap">
									<div class="flag">
										<img src="/public/img/demo-bg.jpg" alt="">
									</div>
								</div>
								<h3 class="country">Sharjah</h3>
								<p class="text">
									Amazing underwater world
								</p>
							</div>
						</div>
						<div class="shadow js-shadow"></div>
					</a>

					<a href="#" class="story_item" style="background-image: url(/public/img/hotel4.jpg)">
						<div class="item_wrap">
							<div class="_content">
								<div class="flag_wrap">
									<div class="flag">
										<img src="/public/img/demo-bg.jpg" alt="">
									</div>
								</div>
								<h3 class="country">Ajman</h3>
								<p class="text">
									Amazing underwater world
								</p>
							</div>
						</div>
						<div class="shadow js-shadow"></div>
					</a>

					<a href="#" class="story_item" style="background-image: url(/public/img/hotel5.jpg)">
						<div class="item_wrap">
							<div class="_content">
								<div class="flag_wrap">
									<div class="flag">
										<img src="/public/img/demo-bg.jpg" alt="">
									</div>
								</div>
								<h3 class="country">Umm Al-Quwain</h3>
								<p class="text">
									Amazing underwater world
								</p>
							</div>
						</div>
						<div class="shadow js-shadow"></div>
					</a>

					<a href="#" class="story_item" style="background-image: url(/public/img/hotel6.jpg)">
						<div class="item_wrap">
							<div class="_content">
								<div class="flag_wrap">
									<div class="flag">
										<img src="/public/img/demo-bg.jpg" alt="">
									</div>
								</div>
								<h3 class="country">Fujairah</h3>
								<p class="text">
									Amazing underwater world
								</p>
							</div>
						</div>
						<div class="shadow js-shadow"></div>
					</a>

					<a href="#" class="story_item" style="background-image: url(/public/img/hotel4.jpg)">
						<div class="item_wrap">
							<div class="_content">
								<div class="flag_wrap">
									<div class="flag">
										<img src="/public/img/demo-bg.jpg" alt="">
									</div>
								</div>
								<h3 class="country">Africa</h3>
								<p class="text">
									Amazing underwater world
								</p>
							</div>
						</div>
						<div class="shadow js-shadow"></div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="subscribe_section">
	<div class="wrap">
		<div class="wrap_float">
			<div class="subscribe_block" style="background-image: url(public/img/bus-banner.png)">
				<div class="left">
					<h2 class="_title">Bus Booking</h2>
					<p class="_subtitle">For More Bus Enquiry</p>
				</div>
				<div class="right">
					<span>
						<a href="#" class=" btn bg-danger btn-lg text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">Enquiry</a>
					</span>

					<!-- <button class="submit button"><span>Subscribe</span></button> -->
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
				<h5 class="modal-title text-center" id="exampleModalLabel"><b>Enquiry Form</b></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= route_to('enquiry') ?>" method="post" enctype="multipart/form-data">
				<div class="modal-body px-5">
					<div class="mb-3">
						<input type="hidden" class="form-control" id="test" name="enquiry_for" value="">

						<label class="form-label">Name</label>
						<input type="text" class="form-control" name="name" placeholder="Name">
					</div>
					<div class="mb-3">
						<label class="form-label">Mobile</label>
						<input type="number" class="form-control" name="phone" placeholder="Mobile">
					</div>
					<div class="mb-3">
						<label class="form-label">Passport Copy</label>
						<input type="file" class="form-control" name="passport_copy" placeholder="Passport Copy">
					</div>
					<div class="mb-3">
						<label class="form-label">Country</label>
						<input type="text" class="form-control" name="country" placeholder="Country">
					</div>
					<div class="mb-3">
						<label class="form-label">Date</label>
						<input type="date" class="form-control" name="date" placeholder="Date">
					</div>
					<div class="modal-footer">
						<!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
						<button type="submit" class="btn btn-primary">Enquiry Now</button>
					</div>
			</form>
		</div>

	</div>
</div>

<?= $this->endSection() ?>
<?= $this->section('javascript') ?>
<script>
	<?php if (session()->getFlashdata("success")) { ?>
		swal({
			title: "Details Saved",
			text: "New Client Saved",
			icon: "success",
		});
	<?php } ?>
	function enquiryVisa() {
		console.log('test');
		var enquiry = $("#visa").text();
		console.log(enquiry)
		$("#test").val(enquiry);
	}
	function enquiryFlight() {
		console.log('test');
		var enquiry = $("#flight").text();
		console.log(enquiry)
		$("#test").val(enquiry);
	}
	function enquiryHotel() {
		console.log('test');
		var enquiry = $("#hotel").text();
		console.log(enquiry)
		$("#test").val(enquiry);
	}
	function enquiryTourPackages() {
		console.log('test');
		var enquiry = $("#tourPackages").text();
		console.log(enquiry)
		$("#test").val(enquiry);
	}
</script>
<?= $this->endSection() ?>