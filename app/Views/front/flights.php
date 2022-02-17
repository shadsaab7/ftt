<?= $this->extend('layout') ?>


<?= $this->section('content') ?>

<div class="main_slider js_height">
	<div class="slider_wrap" id="main_slider_wrap">
		<div class="slide">
			<div class="bg-img" style="background-image: url(/public/img/flight2.jpg)"></div>
			<div class="wrap">
				<div class="wrap_float js_height">
					<div class="slide_content">
						<div class="title_wrap">
							<h2 class="slide_title">Flights Booking</h2>
						</div>
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


<div class="destinations">
	<div class="wrap">
		<div class="wrap_float">
			<div class="title_wrap">
				<h2 class="title">Airlines</h2>
				<p class="subtitle">
					This is the most popular destination in the last month
				</p>
				<div class="controls">
					<a href="/" class="link">View All Airlines</a>
				</div>
			</div>
			<div class="section_content">
				<div class="scroll">
					<a href="#" class="destinations_item" style="background-image: url(/public/img/flight3.jpg)">
						<div class="sq_parent">
							<div class="sq_wrap">
								<div class="sq_content">
									<div class="_content">
										<h3 class="_title">Air Arabia</h3>
										<p class="_info">45 tours | 62 hotels</p>
									</div>
								</div>
							</div>
						</div>
						<div class="shadow js-shadow"></div>
					</a>

					<a href="#" class="destinations_item" style="background-image: url(/public/img/flight4.jpg)">
						<div class="sq_parent">
							<div class="sq_wrap">
								<div class="sq_content">
									<div class="_content">
										<h3 class="_title">Air Arabia Abu Dhabi</h3>
										<p class="_info">45 tours | 62 hotels</p>
									</div>
								</div>
							</div>
						</div>
						<div class="shadow js-shadow"></div>
					</a>

					<a href="#" class="destinations_item" style="background-image: url(/public/img/flight5.jpg)">
						<div class="sq_parent">
							<div class="sq_wrap">
								<div class="sq_content">
									<div class="_content">
										<h3 class="_title">Emirates</h3>
										<p class="_info">45 tours | 62 hotels</p>
									</div>
								</div>
							</div>
						</div>
						<div class="shadow js-shadow"></div>
					</a>

					<a href="#" class="destinations_item" style="background-image: url(/public/img/flight6.jpg)">
						<div class="sq_parent">
							<div class="sq_wrap">
								<div class="sq_content">
									<div class="_content">
										<h3 class="_title">Etihad Airways</h3>
										<p class="_info">45 tours | 62 hotels</p>
									</div>
								</div>
							</div>
						</div>
						<div class="shadow js-shadow"></div>
					</a>

					<a href="#" class="destinations_item" style="background-image: url(/public/img/flight7.jpg)">
						<div class="sq_parent">
							<div class="sq_wrap">
								<div class="sq_content">
									<div class="_content">
										<h3 class="_title">SpiceJet</h3>
										<p class="_info">45 tours | 62 hotels</p>
									</div>
								</div>
							</div>
						</div>
						<div class="shadow js-shadow"></div>
					</a>

					<a href="#" class="destinations_item" style="background-image: url(/public/img/flight8.jpg)">
						<div class="sq_parent">
							<div class="sq_wrap">
								<div class="sq_content">
									<div class="_content">
										<h3 class="_title">SpiceJet</h3>
										<p class="_info">45 tours | 62 hotels</p>
									</div>
								</div>
							</div>
						</div>
						<div class="shadow js-shadow"></div>
					</a>

					<a href="#" class="destinations_item" style="background-image: url(/public/img/flight1.jpg)">
						<div class="sq_parent">
							<div class="sq_wrap">
								<div class="sq_content">
									<div class="_content">
										<h3 class="_title">Vistara</h3>
										<p class="_info">45 tours | 62 hotels</p>
									</div>
								</div>
							</div>
						</div>
						<div class="shadow js-shadow"></div>
					</a>

					<a href="#" class="destinations_item" style="background-image: url(/public/img/flight2.jpg)">
						<div class="sq_parent">
							<div class="sq_wrap">
								<div class="sq_content">
									<div class="_content">
										<h3 class="_title">AirAsia India</h3>
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


<?= $this->endSection() ?>