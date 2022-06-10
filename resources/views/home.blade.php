<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thai Hands Massage Therapy - Thai Massage in Pearland</title>
	<meta name="description"
		content="Thai message is an ancient practice of healing of Thai society. It combines the acupressure, assisted yoga postures, and the Indian Ayurvedic approach to heal." />
	<meta name="keywords" content="massage pearland, thai massage pearland" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

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
		<div class="row" id="main">
			<img src="{{ URL::to('/assets/imgs/main_bg_art.png') }}" id="main-bg-art" class="position-absolute bottom-0 end-0 p-0"/>
			<nav class="navbar navbar-expand-lg fixed-top">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse flex-row-reverse" id="main-nav">
						<ul class="navbar-nav align-items-center">
							<li class="nav-item"><a class="nav-link active" href="#">Thai Traditional Massage</a></li>
							<li class="nav-item"><a class="nav-link" href="#treatments">Treatments</a></li>
							<li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
							<li class="nav-item"><a class="nav-link" href="#reservation">Booking</a></li>
							<li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>

			<img src="{{ URL::to('/assets/imgs/logo.png') }}" id="main-logo" class="position-absolute top-0 start-0 p-0"/>
			<img src="{{ URL::to('/assets/imgs/a.png') }}" class="position-absolute top-0 start-0 p-0" style="opacity: 0.5;"/>
		</div>
	</div>
	<footer class="text-right">&copy 2015 Thai Hands Massage Therapy. All rights reserved.</footer>

	<div class="modal fade" id="resultModal" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
					<h4 class="modal-title result-title">Success!</h4>
				</div>
				<div class="modal-body">
					<div class="alert result-alert">We have sent an email with coupon code to you!</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	@if(session('booking'))
	<div class="modal fade" id="bookingSuccessModal" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
					<h4 class="modal-title result-title">Booking confirmed</h4>
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
					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	@endif

	<div class="modal fade" id="bookingFailModal" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
					<h4 class="modal-title result-title">Booking Failed</h4>
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
					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	{!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js') !!}
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
	</script>

	<script>
		$('.owl-carousel').owlCarousel({
			margin: 10,
			loop: true,
			items: 3,
			responsive: false,
			autoplay: true,
			autoplayTimeout: 2000,
			autoplayHoverPause: false,
			nav: true
		});

		function newCoupon() {
			owner = $('input[name=newCouponOwner]').val();
			$.post('{!! URL::to("/coupon") !!}', {
				'owner': owner,
				'code': "XXXXXX",
				'_token': '{{ csrf_token() }}'
			}).success(function(result) {
				$('.result-title').html('Success!');
				$('.result-alert').removeClass('alert-danger');
				$('.result-alert').addClass('alert-success')
					.html('We have sent an email with coupon code to you!');
				$('#resultModal').modal();
			}).fail(function(data) {
				$('.result-title').html('Failed!');
				$('.result-alert').addClass('alert-danger');
				$('.result-alert').removeClass('alert-success')
					.html('Please check your email format or your email may already used.');
				$('#resultModal').modal();
			});
		}

		$('button[class=get_coupon]').click(newCoupon);

		$('select[name="booking[date]"]').change(function() {
			if ($(this).val() != 0) {
				var booking_date = $(this).val();
				$.get("{{ route('booking.ajax.timeslot') }}", {
					date: booking_date
				}).success(function(result) {
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

						if (value >= {{ \THM\Setting::get('booking_capacity') }}) {
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
		$('select[name="booking[duration]"]').change(getTreatmentPrice);
		$('input[name="booking[guests]"]').change(getTreatmentPrice);

		function getTreatmentPrice() {
			if ($('input[name="booking[guests]"]:checked').val() == 2) {
				if ($('select[name="booking[duration]"]').val() == 60) {
					$('#bookingButton').html("Book & Pay Now for $140");
				} else {
					$('#bookingButton').html("Book & Pay Now for $190");
				};
			} else {
				$.get("{{ route('booking.ajax.getTreatmentPrice') }}", {
					id: $('select[name="booking[treatment]"]').val(),
					duration: $('select[name="booking[duration]"]').val()
				}).success(function(data) {
					$('#bookingButton').html("Book & Pay Now for $" + data);
				}).fail(function() {
					alert("An error occurred, please try again later.");
				});
			};
		}

		@if(Request::input('action') == 'booking_success' && session('booking'))
		$('#bookingSuccessModal').modal();
		@endif

		@if(Request::input('action') == 'booking_cancel')
		$('#bookingFailModal').modal();
		@endif
	</script>
</body>

</html>