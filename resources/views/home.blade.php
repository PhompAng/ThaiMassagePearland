<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thai Hands Massage Therapy - Thai Massage in Pearland</title>
	<meta name="description" content="Thai message is an ancient practice of healing of Thai society. It combines the acupressure, assisted yoga postures, and the Indian Ayurvedic approach to heal." />
	<meta name="keywords" content="massage pearland, thai massage pearland" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
	<!--[if (lt IE 9)]><script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.helper.ie8.js"></script><![endif]-->
	{!! HTML::style('/assets/css/style.css') !!}

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<div class="container-fluid">
		<section class="row justify-content-end vh-100 align-items-center" id="main">
			<img src="{{ URL::to('/assets/imgs/main_bg_art.png') }}" id="main-bg-art" class="position-absolute bottom-0 end-0 p-0" />
			<img src="{{ URL::to('/assets/imgs/logo.png') }}" id="main-logo" class="position-absolute top-0 start-0 p-0" />

			<div class="col-8 d-flex flex-column align-items-center" style="z-index: 1">
				<nav class="navbar navbar-expand-lg mt-5">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse flex-row-reverse" id="main-nav">
							<ul class="navbar-nav align-items-center">
								<li class="nav-item"><a class="nav-link active" href="#">Thai Traditional Massage</a>
								</li>
								<li class="nav-item"><a class="nav-link" href="#treatments">Treatments</a></li>
								<li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
								<li class="nav-item"><a class="nav-link" href="#reservation">Booking</a></li>
								<li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>

				<p class="title mt-5"><span class="fw-normal">Choose</span> Location</p>
				<p class="subtitle">To freeing the <span class="fw-medium">flow of vital energy</span></p>
				<p class="subtitle">in your body with</p>

				<div class="location-selector d-inline-flex rounded mt-5 active">
					<div class="logo">
						<img src="{{ URL::to('/assets/imgs/logo.png') }}" style='height: 100%; width: 100%; object-fit: contain' />
					</div>
					<div class="location-container">
						<p class="name mb-0">Thai Hands</p>
						<p class="name mb-0">Massge Therapy</p>
						<span class="locate">Located on </span>
						<span class="location">Pearland, TX</span>
					</div>
				</div>
				<div class="location-selector d-inline-flex rounded mt-4">
					<div class="logo">
						<img src="{{ URL::to('/assets/imgs/logo2.png') }}" style='height: 100%; width: 100%; object-fit: contain' />
					</div>
					<div class="location-container">
						<p class="name mb-0">Diamond Thai</p>
						<p class="name mb-0">Massage Therapy</p>
						<span class="locate">Located on </span>
						<span class="location">Seabrook, TX</span>
					</div>
				</div>
			</div>
			{{-- <img src="{{ URL::to('/assets/imgs/a.png') }}" class="position-absolute top-0 start-0 p-0"
			style="opacity: 0.5;" /> --}}
		</section>

		<section class="row align-items-center" id="massage">
			<div class="col-12" style="margin-bottom: 110px;">
				<h1 class="text-center">Thai Traditional Massage</h1>
			</div>
			<div class="col-xxl-4 offset-xxl-2 col-xl-4 offset-xl-2 col-lg-5 offset-lg-1 col-md-6 d-flex flex-column justify-content-center align-items-end position-relative">
				<img src="{{ URL::to('/assets/imgs/massage_art.png') }}" id="massage-art" class="position-absolute" />
				<div class="row">
					<div class="col-xxl-10 offset-xxl-2 col-xl-12">
						<div id="massage-carousel" class="carousel slide carousel-fade" style="z-index: 2; margin-top: 4rem;" data-bs-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active content d-flex align-items-center" data-bs-interval="2000">
									<span class="fs-5"><span class="title">Thai Traditional Massage</span> is a very
										holistic therapy where the human being
										is seen and treated as an ever-changing
										network of physical, mental, emotional
										and spiritual aspects that all influence
										each other.</span>
								</div>
								<div class="carousel-item content d-flex align-items-center" data-bs-interval="2000">
									<span class="fs-5"><span class="title">The practitioner</span> uses his or her
										thumbs,
										palms, elbows, knees and feet to apply a combination of acupressure, gentle
										rocking and
										twisting, joint and spine mobilizations and assisted yoga
										stretches. With the therapist using bodyweight instead of strength and a steady
										and
										meditative rhythm.</span>
								</div>
								<div class="carousel-item content d-flex align-items-center" data-bs-interval="2000">
									<span class="fs-5"><span class="title">The benefits of Thai Traditional
											Massage</span> are
										countless. By freeing the flow of vital energy in the body, Thai Massage can
										improve
										posture, breathing, flexibility, digestion and circulation. Muscles are
										stretched, inner
										organs toned and emotional and nervous tension is reduced. Often a deep sense of
										peace
										can be experienced during and
										after a treatment.</span>
								</div>
							</div>
						</div>
						<div id="massage-carousel-indicator" class="ms-4 mt-3 align-self-start">
							<div class="massage-carousel-item active" data-bs-slide-to="0"></div>
							<div class="massage-carousel-item ms-1" data-bs-slide-to="1"></div>
							<div class="massage-carousel-item ms-1" data-bs-slide-to="2"></div>
						</div>
						<div class="footnote ms-4 align-self-start">
							<p class="mt-4 mb-0">*** We must inform you that</p>
							<p class="mb-0">we are not providing any erotic massage.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-6 col-xl-5 col-xxl-4" style="margin-left: -4rem; z-index: 1">
				<img src="{{ URL::to('/assets/imgs/massage_img.png') }}" alt="" class="img-fluid">
			</div>
		</section>

		<section class="row justify-content-center" id="treatments">
			<img src="{{ URL::to('/assets/imgs/treatments_bg_art.png')}}" class="treatment-bg-art position-absolute start-0 p-0" style="margin-top: 60px">
			<img src="{{ URL::to('/assets/imgs/treatments_bg_art2.png')}}" class="treatment-bg-art position-absolute end-0 p-0">

			<div class="col-12 d-flex flex-column align-items-center" style="padding-top: 150px;">
				<h1 class="text-center" style="margin-bottom: 60px;">Treatments</h1>
				<h2 class="text-center">More than 6 massage styles</h2>
				<h3 class="text-center">specially selected for you by practitioner.</h3>
			</div>

			<div class="col-xxl-11 col-xl-12" style="margin-top: 90px; padding-left: 24px; padding-right: 24px;">
				<div id="treatmentCarousel" class="carousel slide" data-bs-interval="false">
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<h4 class="fs-2 card-title text-center">Deep Tissue Massage</h4>
										<div class="price d-flex mt-5">
											<span class="one fs-4 fw-semibold text-center">$75/ 60 mins</span>
											<span class="two fs-4 fw-semibold text-center">$110/ 90 mins</span>
										</div>
										<p class="fs-4 card-text text-center mt-5">Deep tissue massage is a type of
											therapy similar to Swedish massage,
											but the deeper pressure focuses on
											realigning deeper layers of muscles
											and connective tissue. It is especially
											helpful for chronic aches and pains
											and contracted areas such as stiff neck
											and upper back, low back pain, leg
											muscle tightness, and sore shoulders.</p>
									</div>
									<img src="{{ URL::to('/assets/imgs/treatments_card_art.png')}}" class="card-img img-fluid position-absolute top-0">
									<img src="{{ URL::to('/assets/imgs/treatments_card_art2.png')}}" class="card-img-bottom img-fluid position-absolute bottom-0">
									<img class="card-img-bottom img-fluid position-absolute bottom-0" src="{{ URL::to('/assets/imgs/treatment_deep_tissue.png') }}">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<h4 class="fs-2 card-title text-center">Thai Traditional Massage</h4>
										<div class="price d-flex mt-5">
											<span class="one fs-4 fw-semibold text-center">$75/ 60 mins</span>
											<span class="two fs-4 fw-semibold text-center">$110/ 90 mins</span>
										</div>
										<p class="fs-4 card-text text-center mt-5">Thai massage uses passive stretching
											and gentle pressure along the body’s
											energy lines to increase flexibility, relieve
											muscle and joint tension and balance
											the body’s energy systems. Thai massage
											is both deeply relaxing and energizing.</p>
									</div>
									<img src="{{ URL::to('/assets/imgs/treatments_card_art.png')}}" class="card-img img-fluid position-absolute top-0">
									<img src="{{ URL::to('/assets/imgs/treatments_card_art2.png')}}" class="card-img-bottom img-fluid position-absolute bottom-0">
									<img class="card-img-bottom img-fluid position-absolute bottom-0" src="{{ URL::to('/assets/imgs/treatment_thai_traditional.png') }}">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<h4 class="fs-2 card-title text-center">Reflexology</h4>
										<div class="price d-flex mt-5">
											<span class="one fs-4 fw-semibold text-center">$75/ 60 mins</span>
											<span class="two fs-4 fw-semibold text-center">$110/ 90 mins</span>
										</div>
										<p class="fs-4 card-text text-center mt-5">Reflexology, although it's often
											combined
											with massage, is technically not
											a form of massage. It's a separate
											practice that applies pressure
											to reflex zones on your feet, hands or
											outer ears to affect your entire body.</p>
									</div>
									<img src="{{ URL::to('/assets/imgs/treatments_card_art.png')}}" class="card-img img-fluid position-absolute top-0">
									<img src="{{ URL::to('/assets/imgs/treatments_card_art2.png')}}" class="card-img-bottom img-fluid position-absolute bottom-0">
									<img class="card-img-bottom img-fluid position-absolute bottom-0" src="{{ URL::to('/assets/imgs/treatment_reflexology.png') }}">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<h4 class="fs-2 card-title text-center">Sports Massage</h4>
										<div class="price d-flex mt-5">
											<span class="one fs-4 fw-semibold text-center">$75/ 60 mins</span>
											<span class="two fs-4 fw-semibold text-center">$110/ 90 mins</span>
										</div>
										<p class="fs-4 card-text text-center mt-5">Sports massage emphasizes prevention
											and healing of injuries to the muscles
											and tendons. But you don't have to be
											an athlete to benefit from sports massage.
											Sports massage is also good for people
											with injuries, chronic pain or restricted
											range of motion.</p>
									</div>
									<img src="{{ URL::to('/assets/imgs/treatments_card_art.png')}}" class="card-img img-fluid position-absolute top-0">
									<img src="{{ URL::to('/assets/imgs/treatments_card_art2.png')}}" class="card-img-bottom img-fluid position-absolute bottom-0">
									<img class="card-img-bottom img-fluid position-absolute bottom-0" src="{{ URL::to('/assets/imgs/treatment_sports.png') }}">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<h4 class="fs-2 card-title text-center">Hot Stone Therapy</h4>
										<div class="price d-flex mt-5">
											<span class="one fs-4 fw-semibold text-center">$75/ 60 mins</span>
											<span class="two fs-4 fw-semibold text-center">$110/ 90 mins</span>
										</div>
										<p class="fs-4 card-text text-center mt-5">Hot stone massage therapy session
											promotes deeper muscle
											relaxation through the placement of smooth,
											water-heated stones at key points on the body.</p>
									</div>
									<img src="{{ URL::to('/assets/imgs/treatments_card_art.png')}}" class="card-img img-fluid position-absolute top-0">
									<img src="{{ URL::to('/assets/imgs/treatments_card_art2.png')}}" class="card-img-bottom img-fluid position-absolute bottom-0">
									<img class="card-img-bottom img-fluid position-absolute bottom-0" src="{{ URL::to('/assets/imgs/treatment_hot_stone.png') }}">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<h4 class="fs-2 card-title text-center">Swedish Massage</h4>
										<div class="price d-flex mt-5">
											<span class="one fs-4 fw-semibold text-center">$75/ 60 mins</span>
											<span class="two fs-4 fw-semibold text-center">$110/ 90 mins</span>
										</div>
										<p class="fs-4 card-text text-center mt-5">The term "Swedish Massage" refers to
											a
											variety of techniques specifically designed
											to relax muscles by applying pressure to
											them against deeper muscles and bones,
											and rubbing in the same direction as
											the flow of blood returning to the heart.</p>
									</div>
									<img src="{{ URL::to('/assets/imgs/treatments_card_art.png')}}" class="card-img img-fluid position-absolute top-0">
									<img src="{{ URL::to('/assets/imgs/treatments_card_art2.png')}}" class="card-img-bottom img-fluid position-absolute bottom-0">
									<img class="card-img-bottom img-fluid position-absolute bottom-0" src="{{ URL::to('/assets/imgs/treatment_swedish.png') }}">
								</div>
							</div>
						</div>
					</div>
					<button class="carousel-control-prev" data-bs-target="#treatmentCarousel" data-bs-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</button>
					<button class="carousel-control-next" data-bs-target="#treatmentCarousel" data-bs-slide="next">
						<span class="carousel-control-next-icon"></span>
					</button>
				</div>
			</div>
		</section>

		<section class="row position-relative" id="banner">
			<img src="{{ URL::to('/assets/imgs/banner_bg_art.png') }}" id="banner-bg-art" class="position-absolute end-0 p-0" />

			<div class="col-md-6 content">
				<h1>Special Price</h1>
				<h1>for couples massage</h1>

				<div class="price d-flex mt-5">
					<div class="one">
						<span class="fs-4">2 people</span>
						<h1 class="mt-2">$140</h1>
						<span class="fs-4 fw-bold">$150/ 60 mins</span>
					</div>
					<div class="two">
						<span class="fs-4">2 people</span>
						<h1 class="mt-2">$200</h1>
						<span class="fs-4 fw-bold">$220/ 90 mins</span>
					</div>
				</div>
			</div>
		</section>

		<section class="row justify-content-center" id="gallery">
			<div class="col-12" style="margin-bottom: 72px;">
				<h1 class="text-center">Gallery</h1>
			</div>

			<div class="col-8">
				<div class="tns-outer position-relative" id="customize-ow">
					<div id="customize-mw" class="tns-ovh">
						<div class="tns-inner" id="customize-iw">
							<div class="tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" id="gallery-container" style="transform: translate3d(-66.6667%, 0px, 0px);">
								<div class="tns-item tns-slide-cloned">
									<div class="d-flex">
										<img src="{{ URL::to('assets/gallery/img1.png') }}" />
									</div>
								</div>
								<div class="tns-item tns-slide-cloned">
									<div class="d-flex">
										<img src="{{ URL::to('assets/gallery/img2.png') }}" />
									</div>
								</div>
								<div class="tns-item tns-slide-cloned">
									<div class="d-flex">
										<img src="{{ URL::to('assets/gallery/img3.png') }}" />
									</div>
								</div>
								<div class="tns-item tns-slide-cloned">
									<div class="d-flex">
										<img src="{{ URL::to('assets/gallery/img4.png') }}" />
									</div>
								</div>
								<div class="tns-item tns-slide-cloned">
									<div class="d-flex">
										<img src="{{ URL::to('assets/gallery/img5.png') }}" />
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="constrols" id="gallery-controls">
						<button class="carousel-control-prev prev" data-controls="prev">
							<span class="carousel-control-prev-icon"></span>
						</button>
						<button class="carousel-control-next next" data-controls="next">
							<span class="carousel-control-next-icon"></span>
						</button>
					</div>
				</div>
			</div>

			<div class="col-7">
				<div class="customize-tools">
					<ul class="thumbnails" id="gallery-thumbnails">
						<li data-nav="0" class="tns-nav-active">
							<img src="{{ URL::to('assets/gallery/img1.png') }}" />
						</li>
						<li data-nav="1" class="">
							<img src="{{ URL::to('assets/gallery/img2.png') }}" />
						</li>
						<li data-nav="2" class="">
							<img src="{{ URL::to('assets/gallery/img3.png') }}" />
						</li>
						<li data-nav="3" class="">
							<img src="{{ URL::to('assets/gallery/img4.png') }}" />
						</li>
						<li data-nav="4" class="">
							<img src="{{ URL::to('assets/gallery/img5.png') }}" />
						</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="row justify-content-center" id="booking">
			<div class="col-12" style="margin-bottom: 72px;">
				<h1 class="text-center">Booking</h1>
			</div>

			<div class="col-10">
				<div class="row justify-content-center">
					<div class="col-8">
						<nav class="nav nav-pills nav-fill align-items-center" id="booking-tab">
							<li class="nav-item">
								<button class="nav-link active" id="booking-reservation-tab" data-bs-toggle="pill" data-bs-target="#booking-reservation">Reservation</button>
							</li>
							<li class="nav-item">
								<button class="nav-link" id="booking-gift-tab" data-bs-toggle="pill" data-bs-target="#booking-gift">Gift Certificate</button>
							</li>
						</nav>
					</div>
				</div>
				<div class="tab-content" id="booking-tab-content">
					<div class="tab-pane fade show active" id="booking-reservation">
						<form class="form-horizontal position-relative" method="POST" action="{{ route('booking.process') }}#booking-reservation">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="row justify-content-between form-content">
								@if($errors->count() && session('booking-tab') == 'reservation')
								<div class="alert alert-danger">
									<ul>
										@foreach($errors->all() as $error)
										<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
								@endif
								<div class="col-5">
									<label for="reservation-date" class="form-label">Date</label>
									<select name="booking[date]" class="form-select form-select-lg mb-5" id="reservation-date">
										<option value="0">-- Select Date --</option>
										<?php $date = \Carbon\Carbon::today()->addDay(); ?>
										@for($i = 0; $i < 30; $i++)
											<option value="{{ $date->toDateString() }}" @if((old('booking')['date'] ?? null) == $date->toDateString()) selected @endif>
												{{ $date->format('D, M d, Y') }}
											</option>
											<?php $date->addDay(); ?>
										@endfor
									</select>

									<label for="reservation-time" class="form-label">Time</label>
									<select name="booking[time]" class="form-select form-select-lg mb-5" id="reservation-time" @if((old('booking')['time'] ?? null) == null) disabled @endif>
										<option value="0">-- Select Time --</option>
										<option value="10" @if((old('booking')['time'] ?? null) == 10) selected @endif>10:00 AM</option>
										<option value="11" @if((old('booking')['time'] ?? null) == 11) selected @endif>11:00 AM</option>
										<option value="12" @if((old('booking')['time'] ?? null) == 12) selected @endif>12:00 PM</option>
										<option value="13" @if((old('booking')['time'] ?? null) == 13) selected @endif>01:00 PM</option>
										<option value="14" @if((old('booking')['time'] ?? null) == 14) selected @endif>02:00 PM</option>
										<option value="15" @if((old('booking')['time'] ?? null) == 15) selected @endif>03:00 PM</option>
										<option value="16" @if((old('booking')['time'] ?? null) == 16) selected @endif>04:00 PM</option>
										<option value="17" @if((old('booking')['time'] ?? null) == 17) selected @endif>05:00 PM</option>
										<option value="18" @if((old('booking')['time'] ?? null) == 18) selected @endif>06:00 PM</option>
									</select>

									<label for="reservation-treatment" class="form-label">Treatment</label>
									<select name="booking[treatment]" class="form-select form-select-lg mb-5" id="reservation-treatment">
										@foreach($treatments as $treatment)
											<option value="{{ $treatment->id }}" @if((old('booking')['treatment'] ?? null) == $treatment->id) selected @endif>{{ $treatment->title }}</option>
										@endforeach
									</select>

									<label class="form-label">Choose Minutes and Guest</label>
									<div class="row align-items-stretch select-box">
										<div class="col">
											<input type="radio" class="btn-check" name="booking[duration]" value="60" id="duration60" autocomplete="off" @if((old('booking')['duration'] ?? 60) == 60) checked @endif>
											<label class="btn btn-primary w-100 h-100 p-3" id="duration60-label" for="duration60">60 Minutes</label>
										</div>
										<div class="col">
											<input type="radio" class="btn-check" name="booking[duration]" value="90" id="duration90" autocomplete="off" @if((old('booking')['duration'] ?? null) == 90) checked @endif>
											<label class="btn btn-primary w-100 h-100 p-3" id="duration90-label" for="duration90">90 Minutes</label>
										</div>
									</div>
									<div class="row align-items-stretch select-box mt-3">
										<div class="col">
											<input type="radio" class="btn-check" name="booking[guests]" value="1" id="guests-single" autocomplete="off" @if((old('booking')['guests'] ?? null) == 1) checked @endif>
											<label class="btn btn-primary w-100 h-100 p-3" id="guests-single-label" for="guests-single">Single Guest</label>
										</div>
										<div class="col">
											<input type="radio" class="btn-check" name="booking[guests]" value="2" id="guests-couple" autocomplete="off" @if((old('booking')['guests'] ?? 2) == 2) checked @endif>
											<label class="btn btn-primary w-100 h-100 p-3" id="guests-couple-label" for="guests-couple">Couple Guest</label>
										</div>
									</div>
								</div>
								<div class="col-5">
									<div class="mb-5">
										<label class="form-label">First Name</label>
										<input type="text" name="client[firstname]" value="{{ old('client')['firstname'] ?? '' }}" class="form-control form-control-lg">
									</div>

									<div class="mb-5">
										<label class="form-label">Last Name</label>
										<input type="text" name="client[lastname]" value="{{ old('client')['lastname'] ?? '' }}" class="form-control form-control-lg">
									</div>

									<div class="mb-5">
										<label class="form-label">Phone</label>
										<input type="text" name="client[phone]" value="{{ old('client')['phone'] ?? '' }}" class="form-control form-control-lg">
									</div>

									<div class="mb-5">
										<label class="form-label">Email</label>
										<input type="text" name="client[email]" value="{{ old('client')['email'] ?? '' }}" class="form-control form-control-lg">
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" id="bookingButton">Book & Pay Now</button>
						</form>
					</div>
					<div class="tab-pane fade" id="booking-gift">
						<form class="form-horizontal position-relative" method="POST" action="{{ route('booking.process') }}#booking-gift">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="row justify-content-between form-content">
								@if($errors->count() && session('booking-tab') == 'gift')
								<div class="alert alert-danger">
									<ul>
										@foreach($errors->all() as $error)
										<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
								@endif
								<div class="col-5">
									<p class="fs-3 fw-medium text-white">Available with paper gift card or E-Gift Certificate with an E-mail/PDF.</p>
									<br>
									<p class="fs-3 fw-medium text-white"><span class="fw-bold">Please note that: These are valid</span> for 6 months from date of issuance.</p>
									
									<label for="gift-value" class="form-label">Gift Value</label>
									<div class="input-group">
										<input type="text" name="gift[value]" class="form-control form-control-lg" id="gift-value" placeholder="Amount">
										<span class="input-group-text">$</span>
									</div>
								</div>
								<div class="col-5">
									<div class="mb-5">
										<label class="form-label">First Name</label>
										<input type="text" name="gift[firstname]" class="form-control form-control-lg">
									</div>

									<div class="mb-5">
										<label class="form-label">Last Name</label>
										<input type="text" name="gift[lastname]" class="form-control form-control-lg">
									</div>

									<div class="mb-5">
										<label class="form-label">Phone</label>
										<input type="text" name="gift[phone]" class="form-control form-control-lg">
									</div>

									<div class="mb-5">
										<label class="form-label">Email</label>
										<input type="text" name="gift[email]" class="form-control form-control-lg">
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" id="giftButton">Pay Now</button>
						</form>
					</div>
				</div>
			</div>
		</section>
		<footer class="text-right" style="height: 100vh;">&copy 2015 Thai Hands Massage Therapy. All rights reserved.
		</footer>
	</div>

	<div class="modal fade" id="resultModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title result-title">Success!</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>
				<div class="modal-body">
					<div class="alert result-alert">We have sent an email with coupon code to you!</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	@if(session('booking'))
	<div class="modal fade" id="bookingSuccessModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title result-title">Booking confirmed</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>
				<div class="modal-body">
					<p>Your booking with the following details has been confirmed sent to your email.</p>
					<strong>Booking ID: </strong>#{{ session('booking')->id }}<br>
					<strong>Customer Name: </strong>{{ session('booking')->customer_firstname }} {{
					session('booking')->customer_lastname }}<br>
					<strong>Treatment: </strong>{{ session('booking')->treatment->title }} ({{
					session('booking')->duration }} minutes)<br>
					<strong>Booked Time: </strong>{{ session('booking')->booked_time }}<br>
					<strong>Guests: </strong>{{ session('booking')->guests }}
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	@endif

	<div class="modal fade" id="bookingFailModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title result-title">Booking Failed</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>
				<div class="modal-body">
					<div class="alert alert-danger">
						<p><strong>Your booking is incomplete and not confirmed.</strong></p><br>
						<p>If your credit card has been charged, please contact us at (832) 781-8415 to issue a refund.
						</p><br>
						<p>We're sorry for your inconvenient.</p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	{!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js') !!}
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

	<script>
		$(document).ready(function() {
			var hash = location.hash.replace(/^#/, '');
			if (hash) {
				var triggerTab = document.querySelector('#booking-tab button[data-bs-target="#' + hash + '"]');
				new bootstrap.Tab(triggerTab).show();
			}
		});

		const massageCarousel = document.getElementById('massage-carousel');
		const massageCarouselIndicators = $('#massage-carousel-indicator').children();
		massageCarousel.addEventListener('slide.bs.carousel', event => {
			massageCarouselIndicators.removeClass('active');
			massageCarouselIndicators.eq(event.to).addClass('active');
		});

		let items = document.querySelectorAll('#treatmentCarousel .carousel-item')
		items.forEach((el) => {
			const minPerSlide = 3
			let next = el.nextElementSibling
			for (var i = 1; i < minPerSlide; i++) {
				if (!next) {
					// wrap carousel by using first child
					next = items[0]
				}
				let cloneChild = next.cloneNode(true)
				el.appendChild(cloneChild.children[0])
				next = next.nextElementSibling
			}
		})

		var slider = tns({
			"container": "#gallery-container",
			"items": 1,
			"controlsContainer": "#gallery-controls",
			"navContainer": "#gallery-thumbnails",
			"navAsThumbnails": true,
			"center": true,
			"autoHeight": true,
			"loop": true,
			"autoplay": false,
			"swipeAngle": false,
			"speed": 400
		});

		var resultModal = new bootstrap.Modal('#resultModal');
		function newCoupon(e) {
			e.preventDefault();
			owner = $('input[name="gift[email]').val();
			$.post('{!! URL::to("/coupon") !!}', {
				'owner': owner,
				'code': "XXXXXX",
				'_token': '{{ csrf_token() }}'
			}, function(result) {
				$('.result-title').html('Success!');
				$('.result-alert').removeClass('alert-danger');
				$('.result-alert').addClass('alert-success')
					.html('We have sent an email with coupon code to you!');
				resultModal.show();
			}).fail(function(data) {
				$('.result-title').html('Failed!');
				$('.result-alert').addClass('alert-danger');
				$('.result-alert').removeClass('alert-success')
					.html('Please check your email format or your email may already used.');
				resultModal.show();
			});
		}

		$('#giftButton').click(newCoupon);

		$('select[name="booking[date]"]').change(function() {
			if ($(this).val() != 0) {
				var booking_date = $(this).val();
				$.get("{{ route('booking.ajax.timeslot') }}", {
					date: booking_date
				}, function(result) {
					console.log(result);
					$('select[name="booking[time]"]').val(0);
					$.each(result, function(hour, value) {
						if (hour > 11) {
							if (hour > 12) {
								option_text = "0" + hour % 12 + ":00 PM";
							} else {
								option_text = hour + ":00 PM";
							};
						} else {
							option_text = hour + ":00 AM";
						};

						var capacity = {{ \THM\Setting::get('booking_capacity') }}
						if (value >= capacity) {
							console.log($('select[name="booking[time]"]').find('option[value=' + hour + ']'));
							$('select[name="booking[time]"]').find('option[value=' + hour + ']').attr('disabled', 'disabled').text(option_text + " (FULL)");
						} else {
							$('select[name="booking[time]"]').find('option[value=' + hour + ']').removeAttr('disabled').text(option_text);
						};
					});
					$('select[name="booking[time]"]').removeAttr('disabled');
				}).fail(function() {
					alert("An error occurred, please try again later.");
				});
			} else {
				$('select[name="booking[time]"]').attr('disabled', 'disabled');
				$('select[name="booking[time]"]').val(0);
			};
		});

		$('select[name="booking[treatment]"]').change(getTreatmentPrice);

		$('#duration60-label').click(function() {
			$('#duration90').attr('checked', false);
			$('#duration60').attr('checked', true);
			getTreatmentPrice();
		})
		$('#duration90-label').click(function() {
			$('#duration60').attr('checked', false);
			$('#duration90').attr('checked', true);
			getTreatmentPrice();
		})
		$('#guests-single-label').click(function() {
			$('#guests-couple').attr('checked', false);
			$('#guests-single').attr('checked', true);
			getTreatmentPrice();
		})
		$('#guests-couple-label').click(function() {
			$('#guests-single').attr('checked', false);
			$('#guests-couple').attr('checked', true);
			getTreatmentPrice();
		})

		function getTreatmentPrice() {
			if ($('input[name="booking[guests]"]:checked').val() == 2) {
				if ($('input[name="booking[duration]"]:checked').val() == 60) {
					$('#bookingButton').html("Book & Pay Now for $140");
				} else {
					$('#bookingButton').html("Book & Pay Now for $190");
				};
			} else {
				$.get("{{ route('booking.ajax.getTreatmentPrice') }}", {
					id: $('select[name="booking[treatment]"]').val(),
					duration: $('input[name="booking[duration]"]:checked').val()
				}, function(data) {
					$('#bookingButton').html("Book & Pay Now for $" + data);
				}).fail(function() {
					alert("An error occurred, please try again later.");
				});
			};
		}

		@if(Request::input('action') == 'booking_success' && session('booking'))
		var bookingSuccessModal = new bootstrap.Modal('#bookingSuccessModal');
		bookingSuccessModal.show();
		@endif

		@if(Request::input('action') == 'booking_cancel')
		var bookingFailModal = new bootstrap.Modal('#bookingFailModal');
		bookingFailModal.show();
		@endif
	</script>
</body>

</html>