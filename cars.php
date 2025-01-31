<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vioo - Tour & Travel Booking Agency | Cars</title>
	<link rel="icon" type="image/x-icon" href="assets/img/favicon.png">

	<!-- All Plugins -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/animation.css" rel="stylesheet">
	<link href="assets/css/dropzone.min.css" rel="stylesheet">
	<link href="assets/css/flatpickr.min.css" rel="stylesheet">
	<link href="assets/css/flickity.min.css" rel="stylesheet">
	<link href="assets/css/lightbox.min.css" rel="stylesheet">
	<link href="assets/css/magnifypopup.css" rel="stylesheet">
	<link href="assets/css/select2.min.css" rel="stylesheet">
	<link href="assets/css/rangeSlider.min.css" rel="stylesheet">
	<link href="assets/css/prism.css" rel="stylesheet">

	<!-- Fontawesome & Bootstrap Icons CSS -->
	<link href="assets/css/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/css/fontawesome.css" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
		rel="stylesheet">
	<style></style>

	<!-- Custom CSS -->
	<link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<div id="preloader">
		<div class="preloader"><span></span><span></span></div>
	</div>

	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">

		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->
		<!-- Start Navigation -->
		<?php
		include "inc/header.php";
		?>
		<!-- End Navigation -->
		<div class="clearfix"></div>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->

		<div class="image-cover hero-header bg-white" style="position: relative; overflow: hidden; height: 100vh;"
			data-overlay="5">
			<!-- Video Background -->
			<video autoplay muted loop id="backgroundVideo"
				style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
				<source src="imgs/cars.mp4"
					type="video/mp4">
				Your browser does not support the video tag.
			</video>

			<div class="container">
				<!-- Content here -->

				<div class="image-cover hero-header" style="position: relative; overflow: hidden;" data-overlay="5">
					<!-- Video Background -->


					<div class="container">
						<!-- Search Form -->
						<div class="row justify-content-center align-items-center">
							<div class="col-xl-9 col-lg-10 col-md-12 col-sm-12">
								<div class="position-relative text-center mb-5">
									<h1>Start Your Trip With <span class="position-relative z-4">Vioo<span
												class="position-absolute top-50 start-50 translate-middle d-none d-md-block mt-4">
												<svg width="185px" height="23px" viewBox="0 0 445.5 23">
													<path class="fill-white opacity-7"
														d="M409.9,2.6c-9.7-0.6-19.5-1-29.2-1.5c-3.2-0.2-6.4-0.2-9.7-0.3c-7-0.2-14-0.4-20.9-0.5 c-3.9-0.1-7.8-0.2-11.7-0.3c-1.1,0-2.3,0-3.4,0c-2.5,0-5.1,0-7.6,0c-11.5,0-23,0-34.5,0c-2.7,0-5.5,0.1-8.2,0.1 c-6.8,0.1-13.6,0.2-20.3,0.3c-7.7,0.1-15.3,0.1-23,0.3c-12.4,0.3-24.8,0.6-37.1,0.9c-7.2,0.2-14.3,0.3-21.5,0.6 c-12.3,0.5-24.7,1-37,1.5c-6.7,0.3-13.5,0.5-20.2,0.9C112.7,5.3,99.9,6,87.1,6.7C80.3,7.1,73.5,7.4,66.7,8 C54,9.1,41.3,10.1,28.5,11.2c-2.7,0.2-5.5,0.5-8.2,0.7c-5.5,0.5-11,1.2-16.4,1.8c-0.3,0-0.7,0.1-1,0.1c-0.7,0.2-1.2,0.5-1.7,1 C0.4,15.6,0,16.6,0,17.6c0,1,0.4,2,1.1,2.7c0.7,0.7,1.8,1.2,2.7,1.1c6.6-0.7,13.2-1.5,19.8-2.1c6.1-0.5,12.3-1,18.4-1.6 c6.7-0.6,13.4-1.1,20.1-1.7c2.7-0.2,5.4-0.5,8.1-0.7c10.4-0.6,20.9-1.1,31.3-1.7c6.5-0.4,13-0.7,19.5-1.1c2.7-0.1,5.4-0.3,8.1-0.4 c10.3-0.4,20.7-0.8,31-1.2c6.3-0.2,12.5-0.5,18.8-0.7c2.1-0.1,4.2-0.2,6.3-0.2c11.2-0.3,22.3-0.5,33.5-0.8 c6.2-0.1,12.5-0.3,18.7-0.4c2.2-0.1,4.4-0.1,6.7-0.1c11.5-0.1,23-0.2,34.6-0.4c7.2-0.1,14.4-0.1,21.6-0.1c12.2,0,24.5,0.1,36.7,0.1 c2.4,0,4.8,0.1,7.2,0.2c6.8,0.2,13.5,0.4,20.3,0.6c5.1,0.2,10.1,0.3,15.2,0.4c3.6,0.1,7.2,0.4,10.8,0.6c10.6,0.6,21.1,1.2,31.7,1.8 c2.7,0.2,5.4,0.4,8,0.6c2.9,0.2,5.8,0.4,8.6,0.7c0.4,0.1,0.9,0.2,1.3,0.3c1.1,0.2,2.2,0.2,3.2-0.4c0.9-0.5,1.6-1.5,1.9-2.5 c0.6-2.2-0.7-4.5-2.9-5.2c-1.9-0.5-3.9-0.7-5.9-0.9c-1.4-0.1-2.7-0.3-4.1-0.4c-2.6-0.3-5.2-0.4-7.9-0.6 C419.7,3.1,414.8,2.9,409.9,2.6z">
													</path>
												</svg>
											</span></span></h1>
									<p class="fs-5 fw-light">Take a little break from the work stress of everyday.
										Discover, plan
										trip and explore beautiful destinations.</p>
								</div>
							</div>

							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<div class="search-wrap bg-white rounded-3 p-3">
									<div class="row gy-3 gx-md-3 gx-sm-2">
										<div class="col-xl-8 col-lg-7 col-md-12">
											<div class="row gy-3 gx-md-3 gx-sm-2">
												<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
													<div class="form-group hdd-arrow mb-0">
														<select class="pickup form-control fw-bold">
															<option value="">Select</option>
															<option value="ny">New York</option>
															<option value="sd">San Diego</option>
															<option value="sj">San Jose</option>
															<option value="ph">Philadelphia</option>
															<option value="nl">Nashville</option>
															<option value="sf">San Francisco</option>
															<option value="hu">Houston</option>
															<option value="sa">San Antonio</option>
														</select>
													</div>
												</div>
												<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
													<div class="form-group mb-0">
														<input type="text" class="form-control choosedate fw-bold"
															placeholder="Choose Date..." readonly="readonly">
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-5 col-md-12">
											<div class="row gy-3 gx-md-3 gx-sm-2">
												<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
													<div class="form-group hdd-arrow mb-0">
														<select class="drop form-control fw-bold">
															<option value="">Select</option>
															<option value="ny">New York</option>
															<option value="sd">San Diego</option>
															<option value="sj">San Jose</option>
															<option value="ph">Philadelphia</option>
															<option value="nl">Nashville</option>
															<option value="sf">San Francisco</option>
															<option value="hu">Houston</option>
															<option value="sa">San Antonio</option>
														</select>
													</div>
												</div>
												<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
													<div class="form-group mb-0">
														<button type="button"
															class="btn btn-primary full-width fw-medium"><i
																class="fa-solid fa-magnifying-glass me-2"></i>Search</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- ============================ Hero Banner  Start================================== -->


	<!-- ============================ Hero Banner End ================================== -->


	<!-- =========================== Tours Offers Start ====================================== -->
	<section class="pt-5 pb-0">
		<div class="container">
			<div class="row align-items-center justify-content-center g-xl-4 g-lg-4 g-md-3 g-4">

				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
					<div class="pop-touritems">
						<a href="car-detail.php" class="card rounded-3 border br-dashed border-2 m-0">
							<div class="offers-container d-flex align-items-center justify-content-start p-2">
								<div class="offers-flex position-relative">
									<div class="offer-tags position-absolute start-0 top-0 mt-2 ms-2"><span
											class="label text-light bg-danger fw-medium">20% Off</span></div>
									<div class="offers-pic"><img src="assets/img/city/ct-6.png"
											class="img-fluid rounded" width="110" alt="">
									</div>
								</div>
								<div class="offers-captions ps-3">
									<h4 class="city fs-6 m-0 fw-bold">
										<span>Los Angeles</span>
									</h4>
									<p class="detail ellipsis-container">
										<span class="ellipsis-item__normal">Round-trip</span>
										<span class="separate ellipsis-item__normal"></span>
										<span class="ellipsis-item">3D/4N</span>
										<span class="separate ellipsis-item__normal"></span>
										<span class="ellipsis-item">3 Person</span>
									</p>
									<div class="booking-wrapes d-flex align-items-center justify-content-between">
										<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span
												class="price">$849 -
												$999</span></h5>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
					<div class="pop-touritems">
						<a href="home-car.html#" class="card rounded-3 border br-dashed border-2 m-0">
							<div class="offers-container d-flex align-items-center justify-content-start p-2">
								<div class="offers-flex position-relative">
									<div class="offer-tags position-absolute start-0 top-0 mt-2 ms-2"><span
											class="label text-light bg-danger fw-medium">15% Off</span></div>
									<div class="offers-pic"><img src="assets/img/city/ct-5.png"
											class="img-fluid rounded" width="110" alt="">
									</div>
								</div>
								<div class="offers-captions ps-3">
									<h4 class="city fs-6 m-0 fw-bold">
										<span>United Kingdom</span>
									</h4>
									<p class="detail ellipsis-container">
										<span class="ellipsis-item__normal">Round-trip</span>
										<span class="separate ellipsis-item__normal"></span>
										<span class="ellipsis-item">3D/4N</span>
										<span class="separate ellipsis-item__normal"></span>
										<span class="ellipsis-item">2 Person</span>
									</p>
									<div class="booking-wrapes d-flex align-items-center justify-content-between">
										<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span
												class="price">$399 -
												$599</span></h5>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
					<div class="pop-touritems">
						<a href="car-detail.php" class="card rounded-3 border br-dashed border-2 m-0">
							<div class="offers-container d-flex align-items-center justify-content-start p-2">
								<div class="offers-flex position-relative">
									<div class="offer-tags position-absolute start-0 top-0 mt-2 ms-2"><span
											class="label text-light bg-danger fw-medium">30% Off</span></div>
									<div class="offers-pic"><img src="assets/img/city/ct-1.png"
											class="img-fluid rounded" width="110" alt="">
									</div>
								</div>
								<div class="offers-captions ps-3">
									<h4 class="city fs-6 m-0 fw-bold">
										<span>France</span>
									</h4>
									<p class="detail ellipsis-container">
										<span class="ellipsis-item__normal">Round-trip</span>
										<span class="separate ellipsis-item__normal"></span>
										<span class="ellipsis-item">3D/4N</span>
										<span class="separate ellipsis-item__normal"></span>
										<span class="ellipsis-item">3 Person</span>
									</p>
									<div class="booking-wrapes d-flex align-items-center justify-content-between">
										<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span
												class="price">$569 -
												$799</span></h5>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- =========================== Tours Offers End ====================================== -->


	<!-- ============================ All car List Start ================================== -->
	<section>
		<div class="container">

			<div class="row align-items-center justify-content-center">
				<div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
					<div class="secHeading-wrap text-center mb-5">
						<h2>Our Awesome Vehicles</h2>
						<p>We compare airport transfer prices from hundreds of suppliers worldwide to offer you the lowest possible price without compromising the quality of service</p>
					</div>
				</div>
			</div>

			<div class="row justify-content-center gy-4 gx-xl-3 gx-lg-4 gx-4">

				<!-- Single -->
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
					<div class="pop-touritem">
						<a href="car-detail.php" class="card rounded-3 shadow-wrap m-0">
							<div class="flight-thumb-wrapper">
								<div class=" position-absolute top-0 left-0 ms-3 mt-3 z-1">
									<div
										class="label bg-primary text-light d-inline-flex align-items-center justify-content-center">
										<span class="svg-icon text-light svg-icon-2hx me-1">
											<svg width="14" height="14" viewBox="0 0 24 24" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3"
													d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
													fill="currentColor"></path>
												<path
													d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z"
													fill="currentColor"></path>
											</svg>
										</span>600Kms included. After that $15/Kms
									</div>
								</div>
								<div class="popFlights-item-overHidden">
									<img src="assets/img/car.jpg" class="img-fluid" alt="">
								</div>
							</div>
							<div class="touritem-middle position-relative p-3">
								<div class="touritem-flexxer">
									<h4 class="city fs-4 m-0 fw-bold">
										<span>Carmy Accord</span>
									</h4>
									<p class="detail ellipsis-container">
										<span class="ellipsis-item__normal">SEDAN</span>
										<span class="separate ellipsis-item__normal"></span>
										<span class="ellipsis-item">AC</span>
										<span class="separate ellipsis-item__normal"></span>
										<span class="ellipsis-item">5 Seats</span>
									</p>

									<div class="touritem-centrio mt-4">
										<div class="d-block position-relative"><span
												class="label bg-light-success text-success">Free
												Cancellation Till 10 Aug 23</span></div>
										<div class="aments-lists mt-2">
											<div class="detail ellipsis-container mt-1">
												<span class="ellipsis">Manual</span>
												<span class="ellipsis">1 Large bag</span>
												<span class="ellipsis">1 Small bag</span>
												<span class="ellipsis">Diesel</span>
											</div>
										</div>
									</div>
								</div>
								<div class="trsms-foots mt-4">
									<div class="flts-flex d-flex align-items-end justify-content-between">
										<div class="flts-flex-strat">
											<div class="d-flex align-items-center justify-content-start">
												<span class="label bg-light-danger text-danger">15% Off</span>
											</div>
											<div class="d-flex align-items-center">
												<div class="text-dark fw-bold fs-4">US$59</div>
												<div class="text-muted-2 fw-medium text-decoration-line-through ms-2">
													US$79</div>
											</div>
										</div>

										<div class="flts-flex-end">
											<div class="row align-items-center justify-content-end gx-2">
												<div class="col-auto text-start text-md-end">
													<div class="text-md text-dark fw-medium">Exceptional</div>
													<div class="text-md text-muted-2">3,014 reviews</div>
												</div>
												<div class="col-auto">
													<div class="square--40 rounded-2 bg-primary text-light">4.8
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

				<!-- Single -->
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
					<div class="pop-touritem">
						<a href="home-car.html#" class="card rounded-3 shadow-wrap m-0">
							<div class="flight-thumb-wrapper">
								<div class=" position-absolute top-0 left-0 ms-3 mt-3 z-1">
									<div
										class="label bg-primary text-light d-inline-flex align-items-center justify-content-center">
										<span class="svg-icon text-light svg-icon-2hx me-1">
											<svg width="14" height="14" viewBox="0 0 24 24" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3"
													d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
													fill="currentColor"></path>
												<path
													d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z"
													fill="currentColor"></path>
											</svg>
										</span>600Kms included. After that $15/Kms
									</div>
								</div>
								<div class="popFlights-item-overHidden">
									<img src="assets/img/car.jpg" class="img-fluid" alt="">
								</div>
							</div>
							<div class="touritem-middle position-relative p-3">
								<div class="touritem-flexxer">
									<h4 class="city fs-4 m-0 fw-bold">
										<span>Audi, BMW</span>
									</h4>
									<p class="detail ellipsis-container">
										<span class="ellipsis-item__normal">Hatchback</span>
										<span class="separate ellipsis-item__normal"></span>
										<span class="ellipsis-item">AC</span>
										<span class="separate ellipsis-item__normal"></span>
										<span class="ellipsis-item">5 Seats</span>
									</p>

									<div class="touritem-centrio mt-4">
										<div class="d-block position-relative"><span
												class="label bg-light-success text-success">Free
												Cancellation Till 10 Aug 23</span></div>
										<div class="aments-lists mt-2">
											<div class="detail ellipsis-container mt-1">
												<span class="ellipsis">Manual</span>
												<span class="ellipsis">1 Large bag</span>
												<span class="ellipsis">1 Small bag</span>
												<span class="ellipsis">Diesel</span>
											</div>
										</div>
									</div>
								</div>
								<div class="trsms-foots mt-4">
									<div class="flts-flex d-flex align-items-end justify-content-between">
										<div class="flts-flex-strat">
											<div class="d-flex align-items-center justify-content-start">
												<span class="label bg-light-danger text-danger">15% Off</span>
											</div>
											<div class="d-flex align-items-center">
												<div class="text-dark fw-bold fs-4">US$59</div>
												<div class="text-muted-2 fw-medium text-decoration-line-through ms-2">
													US$79</div>
											</div>
										</div>

										<div class="flts-flex-end">
											<div class="row align-items-center justify-content-end gx-2">
												<div class="col-auto text-start text-md-end">
													<div class="text-md text-dark fw-medium">Exceptional</div>
													<div class="text-md text-muted-2">3,014 reviews</div>
												</div>
												<div class="col-auto">
													<div class="square--40 rounded-2 bg-primary text-light">4.8
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

				<!-- Single -->
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
					<div class="pop-touritem">
						<a href="home-car.html#" class="card rounded-3 shadow-wrap m-0">
							<div class="flight-thumb-wrapper">
								<div class=" position-absolute top-0 left-0 ms-3 mt-3 z-1">
									<div
										class="label bg-primary text-light d-inline-flex align-items-center justify-content-center">
										<span class="svg-icon text-light svg-icon-2hx me-1">
											<svg width="14" height="14" viewBox="0 0 24 24" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3"
													d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
													fill="currentColor"></path>
												<path
													d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z"
													fill="currentColor"></path>
											</svg>
										</span>600Kms included. After that $15/Kms
									</div>
								</div>
								<div class="popFlights-item-overHidden">
									<img src="assets/img/car.jpg" class="img-fluid" alt="">
								</div>
							</div>
							<div class="touritem-middle position-relative p-3">
								<div class="touritem-flexxer">
									<h4 class="city fs-4 m-0 fw-bold">
										<span>Ertiga, Xylo</span>
									</h4>
									<p class="detail ellipsis-container">
										<span class="ellipsis-item__normal">LUX</span>
										<span class="separate ellipsis-item__normal"></span>
										<span class="ellipsis-item">AC</span>
										<span class="separate ellipsis-item__normal"></span>
										<span class="ellipsis-item">5 Seats</span>
									</p>

									<div class="touritem-centrio mt-4">
										<div class="d-block position-relative"><span
												class="label bg-light-success text-success">Free
												Cancellation Till 10 Aug 23</span></div>
										<div class="aments-lists mt-2">
											<div class="detail ellipsis-container mt-1">
												<span class="ellipsis">Manual</span>
												<span class="ellipsis">1 Large bag</span>
												<span class="ellipsis">1 Small bag</span>
												<span class="ellipsis">Diesel</span>
											</div>
										</div>
									</div>
								</div>
								<div class="trsms-foots mt-4">
									<div class="flts-flex d-flex align-items-end justify-content-between">
										<div class="flts-flex-strat">
											<div class="d-flex align-items-center justify-content-start">
												<span class="label bg-light-danger text-danger">15% Off</span>
											</div>
											<div class="d-flex align-items-center">
												<div class="text-dark fw-bold fs-4">US$59</div>
												<div class="text-muted-2 fw-medium text-decoration-line-through ms-2">
													US$79</div>
											</div>
										</div>

										<div class="flts-flex-end">
											<div class="row align-items-center justify-content-end gx-2">
												<div class="col-auto text-start text-md-end">
													<div class="text-md text-dark fw-medium">Exceptional</div>
													<div class="text-md text-muted-2">3,014 reviews</div>
												</div>
												<div class="col-auto">
													<div class="square--40 rounded-2 bg-primary text-light">4.8
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

				<!-- Single -->
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
					<div class="pop-touritem">
						<a href="home-car.html#" class="card rounded-3 shadow-wrap m-0">
							<div class="flight-thumb-wrapper">
								<div class=" position-absolute top-0 left-0 ms-3 mt-3 z-1">
									<div
										class="label bg-primary text-light d-inline-flex align-items-center justify-content-center">
										<span class="svg-icon text-light svg-icon-2hx me-1">
											<svg width="14" height="14" viewBox="0 0 24 24" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3"
													d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
													fill="currentColor"></path>
												<path
													d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z"
													fill="currentColor"></path>
											</svg>
										</span>600Kms included. After that $15/Kms
									</div>
								</div>
								<div class="popFlights-item-overHidden">
									<img src="assets/img/car.jpg" class="img-fluid" alt="">
								</div>
							</div>
							<div class="touritem-middle position-relative p-3">
								<div class="touritem-flexxer">
									<h4 class="city fs-4 m-0 fw-bold">
										<span>Suv, Innova Crysta</span>
									</h4>
									<p class="detail ellipsis-container">
										<span class="ellipsis-item__normal">SUV</span>
										<span class="separate ellipsis-item__normal"></span>
										<span class="ellipsis-item">AC</span>
										<span class="separate ellipsis-item__normal"></span>
										<span class="ellipsis-item">5 Seats</span>
									</p>

									<div class="touritem-centrio mt-4">
										<div class="d-block position-relative"><span
												class="label bg-light-success text-success">Free
												Cancellation Till 10 Aug 23</span></div>
										<div class="aments-lists mt-2">
											<div class="detail ellipsis-container mt-1">
												<span class="ellipsis">Manual</span>
												<span class="ellipsis">1 Large bag</span>
												<span class="ellipsis">1 Small bag</span>
												<span class="ellipsis">Diesel</span>
											</div>
										</div>
									</div>
								</div>
								<div class="trsms-foots mt-4">
									<div class="flts-flex d-flex align-items-end justify-content-between">
										<div class="flts-flex-strat">
											<div class="d-flex align-items-center justify-content-start">
												<span class="label bg-light-danger text-danger">15% Off</span>
											</div>
											<div class="d-flex align-items-center">
												<div class="text-dark fw-bold fs-4">US$59</div>
												<div class="text-muted-2 fw-medium text-decoration-line-through ms-2">
													US$79</div>
											</div>
										</div>

										<div class="flts-flex-end">
											<div class="row align-items-center justify-content-end gx-2">
												<div class="col-auto text-start text-md-end">
													<div class="text-md text-dark fw-medium">Exceptional</div>
													<div class="text-md text-muted-2">3,014 reviews</div>
												</div>
												<div class="col-auto">
													<div class="square--40 rounded-2 bg-primary text-light">4.8
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

				<!-- Single -->
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
					<div class="pop-touritem">
						<a href="home-car.html#" class="card rounded-3 shadow-wrap m-0">
							<div class="flight-thumb-wrapper">
								<div class=" position-absolute top-0 left-0 ms-3 mt-3 z-1">
									<div
										class="label bg-primary text-light d-inline-flex align-items-center justify-content-center">
										<span class="svg-icon text-light svg-icon-2hx me-1">
											<svg width="14" height="14" viewBox="0 0 24 24" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3"
													d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
													fill="currentColor"></path>
												<path
													d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z"
													fill="currentColor"></path>
											</svg>
										</span>600Kms included. After that $15/Kms
									</div>
								</div>
								<div class="popFlights-item-overHidden">
									<img src="assets/img/car.jpg" class="img-fluid" alt="">
								</div>
							</div>
							<div class="touritem-middle position-relative p-3">
								<div class="touritem-flexxer">
									<h4 class="city fs-4 m-0 fw-bold">
										<span>Toyota Aygo</span>
									</h4>
									<p class="detail ellipsis-container">
										<span class="ellipsis-item__normal">SEDAN</span>
										<span class="separate ellipsis-item__normal"></span>
										<span class="ellipsis-item">AC</span>
										<span class="separate ellipsis-item__normal"></span>
										<span class="ellipsis-item">5 Seats</span>
									</p>

									<div class="touritem-centrio mt-4">
										<div class="d-block position-relative"><span
												class="label bg-light-success text-success">Free
												Cancellation Till 10 Aug 23</span></div>
										<div class="aments-lists mt-2">
											<div class="detail ellipsis-container mt-1">
												<span class="ellipsis">Manual</span>
												<span class="ellipsis">1 Large bag</span>
												<span class="ellipsis">1 Small bag</span>
												<span class="ellipsis">Diesel</span>
											</div>
										</div>
									</div>
								</div>
								<div class="trsms-foots mt-4">
									<div class="flts-flex d-flex align-items-end justify-content-between">
										<div class="flts-flex-strat">
											<div class="d-flex align-items-center justify-content-start">
												<span class="label bg-light-danger text-danger">15% Off</span>
											</div>
											<div class="d-flex align-items-center">
												<div class="text-dark fw-bold fs-4">US$59</div>
												<div class="text-muted-2 fw-medium text-decoration-line-through ms-2">
													US$79</div>
											</div>
										</div>

										<div class="flts-flex-end">
											<div class="row align-items-center justify-content-end gx-2">
												<div class="col-auto text-start text-md-end">
													<div class="text-md text-dark fw-medium">Exceptional</div>
													<div class="text-md text-muted-2">3,014 reviews</div>
												</div>
												<div class="col-auto">
													<div class="square--40 rounded-2 bg-primary text-light">4.8
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

				<!-- Single -->
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
					<div class="pop-touritem">
						<a href="home-car.html#" class="card rounded-3 shadow-wrap m-0">
							<div class="flight-thumb-wrapper">
								<div class=" position-absolute top-0 left-0 ms-3 mt-3 z-1">
									<div
										class="label bg-primary text-light d-inline-flex align-items-center justify-content-center">
										<span class="svg-icon text-light svg-icon-2hx me-1">
											<svg width="14" height="14" viewBox="0 0 24 24" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3"
													d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
													fill="currentColor"></path>
												<path
													d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z"
													fill="currentColor"></path>
											</svg>
										</span>600Kms included. After that $15/Kms
									</div>
								</div>
								<div class="popFlights-item-overHidden">
									<img src="assets/img/car.jpg" class="img-fluid" alt="">
								</div>
							</div>
							<div class="touritem-middle position-relative p-3">
								<div class="touritem-flexxer">
									<h4 class="city fs-4 m-0 fw-bold">
										<span>Ford Focus</span>
									</h4>
									<p class="detail ellipsis-container">
										<span class="ellipsis-item__normal">LUX</span>
										<span class="separate ellipsis-item__normal"></span>
										<span class="ellipsis-item">AC</span>
										<span class="separate ellipsis-item__normal"></span>
										<span class="ellipsis-item">5 Seats</span>
									</p>

									<div class="touritem-centrio mt-4">
										<div class="d-block position-relative"><span
												class="label bg-light-success text-success">Free
												Cancellation Till 10 Aug 23</span></div>
										<div class="aments-lists mt-2">
											<div class="detail ellipsis-container mt-1">
												<span class="ellipsis">Manual</span>
												<span class="ellipsis">1 Large bag</span>
												<span class="ellipsis">1 Small bag</span>
												<span class="ellipsis">Diesel</span>
											</div>
										</div>
									</div>
								</div>
								<div class="trsms-foots mt-4">
									<div class="flts-flex d-flex align-items-end justify-content-between">
										<div class="flts-flex-strat">
											<div class="d-flex align-items-center justify-content-start">
												<span class="label bg-light-danger text-danger">15% Off</span>
											</div>
											<div class="d-flex align-items-center">
												<div class="text-dark fw-bold fs-4">US$59</div>
												<div class="text-muted-2 fw-medium text-decoration-line-through ms-2">
													US$79</div>
											</div>
										</div>

										<div class="flts-flex-end">
											<div class="row align-items-center justify-content-end gx-2">
												<div class="col-auto text-start text-md-end">
													<div class="text-md text-dark fw-medium">Exceptional</div>
													<div class="text-md text-muted-2">3,014 reviews</div>
												</div>
												<div class="col-auto">
													<div class="square--40 rounded-2 bg-primary text-light">4.8
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

			</div>

			<div class="row align-items-center justify-content-center">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="text-center position-relative mt-5">
						<button type="button" class="btn btn-light-primary fw-medium px-5">Explore More<i
								class="fa-solid fa-arrow-trend-up ms-2"></i></button>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- ============================ All car List Start ================================== -->


	<!-- ============================ Best Locations Design Start ================================== -->
	<section class="gray-simple">
		<div class="container">

			<div class="row align-items-center justify-content-center">
				<div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
					<div class="secHeading-wrap text-center mb-5">
						<h2>Book your hassle-free airport transfer today</h2>
						<p>We compare airport transfer prices from hundreds of suppliers worldwide to offer you the lowest possible price without compromising the quality of service</p>
					</div>
				</div>
			</div>

			<div class="row align-items-center justify-content-center gy-4 gx-3">

				<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
					<div class="destination-blocks bg-white p-2 rounded">
						<div class="destination-blocks-pics p-1">
							<a href="home-car.html#"><img src="assets/img/city/c-8.png" class="img-fluid rounded"
									alt=""></a>
						</div>
						<div class="destination-blocks-captions">
							<div class="touritem-flexxer text-center p-3">
								<h4 class="city fs-5 m-0 fw-bold">
									<span>Chicago</span>
								</h4>
								<p class="detail ellipsis-container m-0">
									<span class="ellipsis-item__normal">10 Destinations</span>
									<span class="separate ellipsis-item__normal"></span>
									<span class="ellipsis-item">5 Cars</span>
								</p>
							</div>
						</div>
					</div>
				</div>

				

				<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
					<div class="destination-blocks bg-white p-2 rounded">
						<div class="destination-blocks-pics p-1">
							<a href="home-car.html#"><img src="assets/img/city/c-4.png" class="img-fluid rounded"
									alt=""></a>
						</div>
						<div class="destination-blocks-captions">
							<div class="touritem-flexxer text-center p-3">
								<h4 class="city fs-5 m-0 fw-bold">
									<span>Los Angeles</span>
								</h4>
								<p class="detail ellipsis-container m-0">
									<span class="ellipsis-item__normal">10 Destinations</span>
									<span class="separate ellipsis-item__normal"></span>
									<span class="ellipsis-item">5 Cars</span>
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
					<div class="destination-blocks bg-white p-2 rounded">
						<div class="destination-blocks-pics p-1">
							<a href="home-car.html#"><img src="assets/img/city/c-5.png" class="img-fluid rounded"
									alt=""></a>
						</div>
						<div class="destination-blocks-captions">
							<div class="touritem-flexxer text-center p-3">
								<h4 class="city fs-5 m-0 fw-bold">
									<span>New Orleans</span>
								</h4>
								<p class="detail ellipsis-container m-0">
									<span class="ellipsis-item__normal">10 Destinations</span>
									<span class="separate ellipsis-item__normal"></span>
									<span class="ellipsis-item">5 Cars</span>
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
					<div class="destination-blocks bg-white p-2 rounded">
						<div class="destination-blocks-pics p-1">
							<a href="home-car.html#"><img src="assets/img/city/c-6.png" class="img-fluid rounded"
									alt=""></a>
						</div>
						<div class="destination-blocks-captions">
							<div class="touritem-flexxer text-center p-3">
								<h4 class="city fs-5 m-0 fw-bold">
									<span>Long Beach</span>
								</h4>
								<p class="detail ellipsis-container m-0">
									<span class="ellipsis-item__normal">10 Destinations</span>
									<span class="separate ellipsis-item__normal"></span>
									<span class="ellipsis-item">5 Cars</span>
								</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- ============================ Best Locations Design Start ================================== -->


	<!-- ============================ Video Helps End ================================== -->
	
	<!-- ============================ Video Helps End ================================== -->


	<!-- ============================ Our Reviews Start ================================== -->
	<section class="gray-simple bg-cover" style="background:url('assets/img/reviewbg.png')no-repeat;">
		<div class="container">

			<div class="row align-items-center justify-content-center">
				<div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
					<div class="secHeading-wrap text-center mb-5">
						<h2>Loving Reviews By Our Customers</h2>
						<p>Cicero famously orated against his political opponent Lucius Sergius Catilina.</p>
					</div>
				</div>
			</div>

			<div class="row align-items-center justify-content-center g-xl-4 g-lg-4 g-md-4 g-3">

				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
					<div class="card border rounded-3">
						<div class="card-body">
							<div class="position-absolute top-0 end-0 mt-3 me-3"><span
									class="square--40 circle text-primary bg-light-primary"><i
										class="fa-solid fa-quote-right"></i></span></div>
							<div class="d-flex align-items-center flex-thumbes">
								<div class="revws-pic"><img src="assets/img/team-1.jpg" class="img-fluid rounded-2"
										width="80" alt=""></div>
								<div class="revws-caps ps-3">
									<h6 class="fw-bold fs-6 m-0">Aman Diwakar</h6>
									<p class="text-muted-2 text-md m-0">United States</p>
									<div class="d-flex align-items-center justify-content-start">
										<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
									</div>
								</div>
							</div>
							<div class="revws-desc mt-3">
								<p class="m-0 text-md">Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut
									odit aut fugit,
									sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
					<div class="card border rounded-3">
						<div class="card-body">
							<div class="position-absolute top-0 end-0 mt-3 me-3"><span
									class="square--40 circle text-primary bg-light-primary"><i
										class="fa-solid fa-quote-right"></i></span></div>
							<div class="d-flex align-items-center flex-thumbes">
								<div class="revws-pic"><img src="assets/img/team-2.jpg" class="img-fluid rounded-2"
										width="80" alt=""></div>
								<div class="revws-caps ps-3">
									<h6 class="fw-bold fs-6 m-0">Kunal M. Thakur</h6>
									<p class="text-muted-2 text-md m-0">United States</p>
									<div class="d-flex align-items-center justify-content-start">
										<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
									</div>
								</div>
							</div>
							<div class="revws-desc mt-3">
								<p class="m-0 text-md">Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut
									odit aut fugit,
									sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
					<div class="card border rounded-3">
						<div class="card-body">
							<div class="position-absolute top-0 end-0 mt-3 me-3"><span
									class="square--40 circle text-primary bg-light-primary"><i
										class="fa-solid fa-quote-right"></i></span></div>
							<div class="d-flex align-items-center flex-thumbes">
								<div class="revws-pic"><img src="assets/img/team-3.jpg" class="img-fluid rounded-2"
										width="80" alt=""></div>
								<div class="revws-caps ps-3">
									<h6 class="fw-bold fs-6 m-0">Divya Talwar</h6>
									<p class="text-muted-2 text-md m-0">United States</p>
									<div class="d-flex align-items-center justify-content-start">
										<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
									</div>
								</div>
							</div>
							<div class="revws-desc mt-3">
								<p class="m-0 text-md">Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut
									odit aut fugit,
									sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
					<div class="card border rounded-3">
						<div class="card-body">
							<div class="position-absolute top-0 end-0 mt-3 me-3"><span
									class="square--40 circle text-primary bg-light-primary"><i
										class="fa-solid fa-quote-right"></i></span></div>
							<div class="d-flex align-items-center flex-thumbes">
								<div class="revws-pic"><img src="assets/img/team-4.jpg" class="img-fluid rounded-2"
										width="80" alt=""></div>
								<div class="revws-caps ps-3">
									<h6 class="fw-bold fs-6 m-0">Karan Maheshwari</h6>
									<p class="text-muted-2 text-md m-0">United States</p>
									<div class="d-flex align-items-center justify-content-start">
										<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
									</div>
								</div>
							</div>
							<div class="revws-desc mt-3">
								<p class="m-0 text-md">Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut
									odit aut fugit,
									sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
					<div class="card border rounded-3">
						<div class="card-body">
							<div class="position-absolute top-0 end-0 mt-3 me-3"><span
									class="square--40 circle text-primary bg-light-primary"><i
										class="fa-solid fa-quote-right"></i></span></div>
							<div class="d-flex align-items-center flex-thumbes">
								<div class="revws-pic"><img src="assets/img/team-5.jpg" class="img-fluid rounded-2"
										width="80" alt=""></div>
								<div class="revws-caps ps-3">
									<h6 class="fw-bold fs-6 m-0">Ritika Mathur</h6>
									<p class="text-muted-2 text-md m-0">United States</p>
									<div class="d-flex align-items-center justify-content-start">
										<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
									</div>
								</div>
							</div>
							<div class="revws-desc mt-3">
								<p class="m-0 text-md">Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut
									odit aut fugit,
									sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt
								</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- ============================ Our Reviews End ================================== -->


	<!-- ============================ Our Experience End ================================== -->
	
	<!-- ============================ Our Experience End ================================== -->


	<!-- ================================ Article Section Start ======================================= -->
	<section class="pt-0">
		<div class="container">

			<div class="row align-items-center justify-content-center">
				<div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
					<div class="secHeading-wrap text-center mb-5">
						<h2>Trending & Popular Articles</h2>
						<p>Cicero famously orated against his political opponent Lucius Sergius Catilina.</p>
					</div>
				</div>
			</div>


			<div class="row justify-content-center g-4">

				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
					<div class="blogGrid-wrap d-flex flex-column h-100">
						<div class="blogGrid-pics">
							<a href="home-car.html#" class="d-block"><img src="assets/img/blog-1.jpg"
									class="img-fluid rounded" alt="Blog image"></a>
						</div>
						<div class="blogGrid-caps pt-3">
							<div class="d-flex align-items-center mb-1"><span
									class="label text-success bg-light-success">Destination</span></div>
							<h4 class="fw-bold fs-6 lh-base"><a href="home-car.html#" class="text-dark">Make Your
									Next Journey Delhi To Paris in
									Comfirtable And Best Price</a></h4>
							<p class="mb-3">Think of a news blog that's filled with content hourly on the Besides,
								random text risks
								to be unintendedly humorous or offensive day of going live.</p>
							<a class="text-primary fw-medium" href="home-car.html#">Read More<i
									class="fa-solid fa-arrow-trend-up ms-2"></i></a>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
					<div class="blogGrid-wrap d-flex flex-column h-100">
						<div class="blogGrid-pics">
							<a href="home-car.html#" class="d-block"><img src="assets/img/blog-2.jpg"
									class="img-fluid rounded" alt="Blog image"></a>
						</div>
						<div class="blogGrid-caps pt-3">
							<div class="d-flex align-items-center mb-1"><span
									class="label text-success bg-light-success">Journey</span></div>
							<h4 class="fw-bold fs-6 lh-base"><a href="home-car.html#" class="text-dark">Make Your
									Next Journey Delhi To Paris in
									Comfirtable And Best Price</a></h4>
							<p class="mb-3">Think of a news blog that's filled with content hourly on the Besides,
								random text risks
								to be unintendedly humorous or offensive day of going live.</p>
							<a class="text-primary fw-medium" href="home-car.html#">Read More<i
									class="fa-solid fa-arrow-trend-up ms-2"></i></a>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
					<div class="blogGrid-wrap d-flex flex-column h-100">
						<div class="blogGrid-pics">
							<a href="home-car.html#" class="d-block"><img src="assets/img/blog-3.jpg"
									class="img-fluid rounded" alt="Blog image"></a>
						</div>
						<div class="blogGrid-caps pt-3">
							<div class="d-flex align-items-center mb-1"><span
									class="label text-success bg-light-success">Business</span></div>
							<h4 class="fw-bold fs-6 lh-base"><a href="home-car.html#" class="text-dark">Make Your
									Next Journey Delhi To Paris in
									Comfirtable And Best Price</a></h4>
							<p class="mb-3">Think of a news blog that's filled with content hourly on the Besides,
								random text risks
								to be unintendedly humorous or offensive day of going live.</p>
							<a class="text-primary fw-medium" href="home-car.html#">Read More<i
									class="fa-solid fa-arrow-trend-up ms-2"></i></a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- ================================ Article Section Start ======================================= -->


	<!-- ============================ Call To Action Start ================================== -->
	<div class="py-5 bg-primary">
		<div class="container">
			<div class="row align-items-center justify-content-between">

				<div class="col-xl-4 col-lg-4 col-md-6">
					<h4 class="text-light fw-bold lh-base m-0">Join our Newsletter To Keep Up To Date With Us!</h4>
				</div>

				<div class="col-xl-5 col-lg-5 col-md-6">
					<div class="newsletter-forms mt-md-0 mt-4">
						<form>
							<div class="row align-items-center justify-content-between bg-white rounded-3 p-2 gx-0">

								<div class="col-xl-9 col-lg-8 col-md-8">
									<div class="form-group m-0">
										<input type="text" class="form-control bold ps-1 border-0"
											placeholder="Enter Your Mail!">
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-md-4">
									<div class="form-group m-0">
										<button type="button" class="btn btn-dark fw-medium full-width">Submit<i
												class="fa-solid fa-arrow-trend-up ms-2"></i></button>
									</div>
								</div>

							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- ============================ Call To Action Start ================================== -->


	<!-- ============================ Footer Start ================================== -->
	<?php
		include "inc/footer.php";
		?>
	<!-- ============================ Footer End ================================== -->

	<!-- Log In Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
			<div class="modal-content" id="loginmodal">
				<div class="modal-header">
					<h4 class="modal-title fs-6">Sign In / Register</h4>
					<a href="home-car.html#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i
							class="fa-solid fa-square-xmark"></i></a>
				</div>
				<div class="modal-body">
					<div class="modal-login-form py-4 px-md-3 px-0">
						<form>

							<div class="form-floating mb-4">
								<input type="email" class="form-control" placeholder="name@example.com">
								<label>User Name</label>
							</div>
							<div class="form-floating mb-4">
								<input type="password" class="form-control" placeholder="Password">
								<label>Password</label>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary full-width font--bold btn-lg">Log
									In</button>
							</div>

							<div class="modal-flex-item d-flex align-items-center justify-content-between mb-3">
								<div class="modal-flex-first">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" id="savepassword"
											value="option1">
										<label class="form-check-label" for="savepassword">Save Password</label>
									</div>
								</div>
								<div class="modal-flex-last">
									<a href="JavaScript:Void(0);" class="text-primary fw-medium">Forget
										Password?</a>
								</div>
							</div>
						</form>
					</div>

					<div class="prixer px-3">
						<div class="devider-wraps position-relative">
							<div class="devider-text text-muted-2 text-md">Sign In with More Methods</div>
						</div>
					</div>

					<div class="social-login py-4 px-2">
						<ul class="row align-items-center justify-content-between g-3 p-0 m-0">
							<li class="col"><a href="home-car.html#"
									class="square--60 border br-dashed rounded-2 full-width"><i
										class="fa-brands fa-facebook color--facebook fs-2"></i></a></li>
							<li class="col"><a href="home-car.html#" class="square--60 border br-dashed rounded-2"><i
										class="fa-brands fa-whatsapp color--whatsapp fs-2"></i></a></li>
							<li class="col"><a href="home-car.html#" class="square--60 border br-dashed rounded-2"><i
										class="fa-brands fa-linkedin color--linkedin fs-2"></i></a></li>
							<li class="col"><a href="home-car.html#" class="square--60 border br-dashed rounded-2"><i
										class="fa-brands fa-dribbble color--dribbble fs-2"></i></a></li>
							<li class="col"><a href="home-car.html#" class="square--60 border br-dashed rounded-2"><i
										class="fa-brands fa-twitter color--twitter fs-2"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="modal-footer align-items-center justify-content-center">
					<p>Don't have an account yet?<a href="https://shreethemes.net/geotrip-live/geotrip/signup.html"
							class="text-primary fw-medium ms-1">Sign Up</a></p>
				</div>
			</div>
		</div>
	</div>
	<!-- End Modal -->

	<!-- Choose Currency Modal -->
	<div class="modal modal-lg fade" id="currencyModal" tabindex="-1" aria-labelledby="currenyModalLabel"
		aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title fs-6" id="currenyModalLabel">Select Your Currency</h4>
					<a href="home-car.html#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i
							class="fa-solid fa-square-xmark"></i></a>
				</div>
				<div class="modal-body">
					<div class="allCurrencylist">

						<div class="suggestedCurrencylist-wrap mb-4">
							<div class="d-inline-block mb-0 ps-3">
								<h5 class="fs-6 fw-bold">Suggested Currency For you</h5>
							</div>
							<div class="suggestedCurrencylists">
								<ul
									class="row align-items-center justify-content-start row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-2 gy-2 gx-3 m-0 p-0">
									<li class="col">
										<a class="selectCurrency" href="home-car.html#">
											<div class="text-dark text-md fw-medium">United State Dollar</div>
											<div class="text-muted-2 text-md text-uppercase">USD</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCurrency" href="home-car.html#">
											<div class="text-dark text-md fw-medium">Pound Sterling</div>
											<div class="text-muted-2 text-md text-uppercase">GBP</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCurrency active" href="home-car.html#">
											<div class="text-dark text-md fw-medium">Indian Rupees</div>
											<div class="text-muted-2 text-md text-uppercase">Inr</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCurrency" href="home-car.html#">
											<div class="text-dark text-md fw-medium">Euro</div>
											<div class="text-muted-2 text-md text-uppercase">EUR</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCurrency" href="home-car.html#">
											<div class="text-dark text-md fw-medium">Australian Dollar</div>
											<div class="text-muted-2 text-md text-uppercase">aud</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCurrency" href="home-car.html#">
											<div class="text-dark text-md fw-medium">Thai Baht</div>
											<div class="text-muted-2 text-md text-uppercase">thb</div>
										</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="suggestedCurrencylist-wrap">
							<div class="d-inline-block mb-0 ps-3">
								<h5 class="fs-6 fw-bold">All Currencies</h5>
							</div>
							<div class="suggestedCurrencylists">
								<ul
									class="row align-items-center justify-content-start row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-2 gy-2 gx-3 m-0 p-0">
									<li class="col">
										<a class="selectCurrency" href="home-car.html#">
											<div class="text-dark text-md fw-medium">United State Dollar</div>
											<div class="text-muted-2 text-md text-uppercase">USD</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCurrency" href="home-car.html#">
											<div class="text-dark text-md fw-medium">Property currency</div>
											<div class="text-muted-2 text-md text-uppercase">GBP</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCurrency" href="home-car.html#">
											<div class="text-dark text-md fw-medium">Argentine Peso</div>
											<div class="text-muted-2 text-md text-uppercase">EUR</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCurrency" href="home-car.html#">
											<div class="text-dark text-md fw-medium">Azerbaijani Manat</div>
											<div class="text-muted-2 text-md text-uppercase">Inr</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCurrency" href="home-car.html#">
											<div class="text-dark text-md fw-medium">Australian Dollar</div>
											<div class="text-muted-2 text-md text-uppercase">aud</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCurrency" href="home-car.html#">
											<div class="text-dark text-md fw-medium">Bahraini Dinar</div>
											<div class="text-muted-2 text-md text-uppercase">thb</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCurrency" href="home-car.html#">
											<div class="text-dark text-md fw-medium">Brazilian Real</div>
											<div class="text-muted-2 text-md text-uppercase">USD</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCurrency" href="home-car.html#">
											<div class="text-dark text-md fw-medium">Bulgarian Lev</div>
											<div class="text-muted-2 text-md text-uppercase">GBP</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCurrency" href="home-car.html#">
											<div class="text-dark text-md fw-medium">Canadian Dollar</div>
											<div class="text-muted-2 text-md text-uppercase">EUR</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCurrency" href="home-car.html#">
											<div class="text-dark text-md fw-medium">Chilean Peso</div>
											<div class="text-muted-2 text-md text-uppercase">Inr</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCurrency" href="home-car.html#">
											<div class="text-dark text-md fw-medium">Colombian Peso</div>
											<div class="text-muted-2 text-md text-uppercase">aud</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCurrency" href="home-car.html#">
											<div class="text-dark text-md fw-medium">Danish Krone</div>
											<div class="text-muted-2 text-md text-uppercase">thb</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCurrency" href="home-car.html#">
											<div class="text-dark text-md fw-medium">Egyptian Pound</div>
											<div class="text-muted-2 text-md text-uppercase">USD</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCurrency" href="home-car.html#">
											<div class="text-dark text-md fw-medium">Hungarian Forint</div>
											<div class="text-muted-2 text-md text-uppercase">GBP</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCurrency" href="home-car.html#">
											<div class="text-dark text-md fw-medium">Japanese Yen</div>
											<div class="text-muted-2 text-md text-uppercase">EUR</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCurrency" href="home-car.html#">
											<div class="text-dark text-md fw-medium">Jordanian Dinar</div>
											<div class="text-muted-2 text-md text-uppercase">Inr</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCurrency" href="home-car.html#">
											<div class="text-dark text-md fw-medium">Kuwaiti Dinar</div>
											<div class="text-muted-2 text-md text-uppercase">aud</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCurrency" href="home-car.html#">
											<div class="text-dark text-md fw-medium">Malaysian Ringgit</div>
											<div class="text-muted-2 text-md text-uppercase">thb</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCurrency" href="home-car.html#">
											<div class="text-dark text-md fw-medium">Singapore Dollar</div>
											<div class="text-muted-2 text-md text-uppercase">thb</div>
										</a>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Choose Countries Modal -->
	<div class="modal modal-lg fade" id="countryModal" tabindex="-1" aria-labelledby="countryModalLabel"
		aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title fs-6" id="countryModalLabel">Select Your Country</h4>
					<a href="home-car.html#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i
							class="fa-solid fa-square-xmark"></i></a>
				</div>
				<div class="modal-body">
					<div class="allCountrieslist">

						<div class="suggestedCurrencylist-wrap mb-4">
							<div class="d-inline-block mb-0 ps-3">
								<h5 class="fs-6 fw-bold">Suggested Countries For you</h5>
							</div>
							<div class="suggestedCurrencylists">
								<ul
									class="row align-items-center justify-content-start row-cols-xl-4 row-cols-lg-3 row-cols-2 gy-2 gx-3 m-0 p-0">
									<li class="col">
										<a class="selectCountry" href="home-car.html#">
											<div class="d-inline-block"><img src="assets/img/flag/united-states.png"
													class="img-fluid circle" width="35" alt=""></div>
											<div class="text-dark text-md fw-medium ps-2">United State Dollar</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCountry" href="home-car.html#">
											<div class="d-inline-block"><img src="assets/img/flag/united-kingdom.png"
													class="img-fluid circle" width="35" alt=""></div>
											<div class="text-dark text-md fw-medium ps-2">Pound Sterling</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCountry active" href="home-car.html#">
											<div class="d-inline-block"><img src="assets/img/flag/flag.png"
													class="img-fluid circle" width="35" alt=""></div>
											<div class="text-dark text-md fw-medium ps-2">Indian Rupees</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCountry" href="home-car.html#">
											<div class="d-inline-block"><img src="assets/img/flag/belgium.png"
													class="img-fluid circle" width="35" alt=""></div>
											<div class="text-dark text-md fw-medium ps-2">Euro</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCountry" href="home-car.html#">
											<div class="d-inline-block"><img src="assets/img/flag/brazil.png"
													class="img-fluid circle" width="35" alt=""></div>
											<div class="text-dark text-md fw-medium ps-2">Australian Dollar</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCountry" href="home-car.html#">
											<div class="d-inline-block"><img src="assets/img/flag/china.png"
													class="img-fluid circle" width="35" alt=""></div>
											<div class="text-dark text-md fw-medium ps-2">Thai Baht</div>
										</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="suggestedCurrencylist-wrap">
							<div class="d-inline-block mb-0 ps-3">
								<h5 class="fs-6 fw-bold">All Countries</h5>
							</div>
							<div class="suggestedCurrencylists">
								<ul
									class="row align-items-center justify-content-start row-cols-xl-4 row-cols-lg-3 row-cols-2 gy-2 gx-3 m-0 p-0">
									<li class="col">
										<a class="selectCountry" href="home-car.html#">
											<div class="d-inline-block"><img src="assets/img/flag/united-states.png"
													class="img-fluid circle" width="35" alt=""></div>
											<div class="text-dark text-md fw-medium ps-2">United State Dollar</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCountry" href="home-car.html#">
											<div class="d-inline-block"><img src="assets/img/flag/vietnam.png"
													class="img-fluid circle" width="35" alt=""></div>
											<div class="text-dark text-md fw-medium ps-2">Property currency</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCountry" href="home-car.html#">
											<div class="d-inline-block"><img src="assets/img/flag/turkey.png"
													class="img-fluid circle" width="35" alt=""></div>
											<div class="text-dark text-md fw-medium ps-2">Argentine Peso</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCountry" href="home-car.html#">
											<div class="d-inline-block"><img src="assets/img/flag/spain.png"
													class="img-fluid circle" width="35" alt=""></div>
											<div class="text-dark text-md fw-medium ps-2">Azerbaijani Manat</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCountry" href="home-car.html#">
											<div class="d-inline-block"><img src="assets/img/flag/japan.png"
													class="img-fluid circle" width="35" alt=""></div>
											<div class="text-dark text-md fw-medium ps-2">Australian Dollar</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCountry" href="home-car.html#">
											<div class="d-inline-block"><img src="assets/img/flag/flag.png"
													class="img-fluid circle" width="35" alt=""></div>
											<div class="text-dark text-md fw-medium ps-2">Bahraini Dinar</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCountry" href="home-car.html#">
											<div class="d-inline-block"><img src="assets/img/flag/portugal.png"
													class="img-fluid circle" width="35" alt=""></div>
											<div class="text-dark text-md fw-medium ps-2">Brazilian Real</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCountry" href="home-car.html#">
											<div class="d-inline-block"><img src="assets/img/flag/italy.png"
													class="img-fluid circle" width="35" alt=""></div>
											<div class="text-dark text-md fw-medium ps-2">Bulgarian Lev</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCountry" href="home-car.html#">
											<div class="d-inline-block"><img src="assets/img/flag/germany.png"
													class="img-fluid circle" width="35" alt=""></div>
											<div class="text-dark text-md fw-medium ps-2">Canadian Dollar</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCountry" href="home-car.html#">
											<div class="d-inline-block"><img src="assets/img/flag/france.png"
													class="img-fluid circle" width="35" alt=""></div>
											<div class="text-dark text-md fw-medium ps-2">Chilean Peso</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCountry" href="home-car.html#">
											<div class="d-inline-block"><img src="assets/img/flag/european.png"
													class="img-fluid circle" width="35" alt=""></div>
											<div class="text-dark text-md fw-medium ps-2">Colombian Peso</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCountry" href="home-car.html#">
											<div class="d-inline-block"><img src="assets/img/flag/china.png"
													class="img-fluid circle" width="35" alt=""></div>
											<div class="text-dark text-md fw-medium ps-2">Danish Krone</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCountry" href="home-car.html#">
											<div class="d-inline-block"><img src="assets/img/flag/brazil.png"
													class="img-fluid circle" width="35" alt=""></div>
											<div class="text-dark text-md fw-medium ps-2">Egyptian Pound</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCountry" href="home-car.html#">
											<div class="d-inline-block"><img src="assets/img/flag/belgium.png"
													class="img-fluid circle" width="35" alt=""></div>
											<div class="text-dark text-md fw-medium ps-2">Hungarian Forint</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCountry" href="home-car.html#">
											<div class="d-inline-block"><img src="assets/img/flag/turkey.png"
													class="img-fluid circle" width="35" alt=""></div>
											<div class="text-dark text-md fw-medium ps-2">Japanese Yen</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCountry" href="home-car.html#">
											<div class="d-inline-block"><img src="assets/img/flag/spain.png"
													class="img-fluid circle" width="35" alt=""></div>
											<div class="text-dark text-md fw-medium ps-2">Jordanian Dinar</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCountry" href="home-car.html#">
											<div class="d-inline-block"><img src="assets/img/flag/germany.png"
													class="img-fluid circle" width="35" alt=""></div>
											<div class="text-dark text-md fw-medium ps-2">Kuwaiti Dinar</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCountry" href="home-car.html#">
											<div class="d-inline-block"><img src="assets/img/flag/france.png"
													class="img-fluid circle" width="35" alt=""></div>
											<div class="text-dark text-md fw-medium ps-2">Malaysian Ringgit</div>
										</a>
									</li>
									<li class="col">
										<a class="selectCountry" href="home-car.html#">
											<div class="d-inline-block"><img src="assets/img/flag/brazil.png"
													class="img-fluid circle" width="35" alt=""></div>
											<div class="text-dark text-md fw-medium ps-2">Singapore Dollar</div>
										</a>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Video Modal -->
	<div class="modal fade" id="popup-video" tabindex="-1" role="dialog" aria-labelledby="popupvideo"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content" id="popupvideo">
				<iframe class="embed-responsive-item full-width" height="480"
					src="https://www.youtube.com/embed/qN3OueBm9F4?rel=0" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<!-- End Video Modal -->

	<a id="back2Top" class="top-scroll" title="Back to top" href="home-car.html#"><i
			class="fa-solid fa-sort-up"></i></a>


	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->


	<!-- ============================================================== -->
	<!-- All Jquery -->
	<!-- ============================================================== -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/dropzone.min.js"></script>
	<script src="assets/js/flatpickr.js"></script>
	<script src="assets/js/flickity.pkgd.min.js"></script>
	<script src="assets/js/lightbox.min.js"></script>
	<script src="assets/js/rangeslider.js"></script>
	<script src="assets/js/select2.min.js"></script>
	<script src="assets/js/counterup.min.js"></script>
	<script src="assets/js/prism.js"></script>

	<script src="assets/js/addadult.js"></script>
	<script src="assets/js/custom.js"></script>
	<!-- ============================================================== -->
	<!-- This page plugins -->
	<!-- ============================================================== -->

</body>

</html>