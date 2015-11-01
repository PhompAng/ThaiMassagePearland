<img src="{{ URL::to('/assets/imgs/mail/header.jpg') }}">
<br><br>
Thank you for booking Thai Massage Service, we're pleased to inform you that your booking has been confirmed.
<br><br>
<strong>Please bring this information with you on your booked time shown below.</strong>
<strong>Booking ID: #{{ $booking->id }}</strong><br>
<strong>Customer Name: {{ $booking->customer_firstname }} {{ $booking->customer_lastname }}</strong><br>
<strong>Treatment: {{ $booking->treatment->title }} ({{ $booking->duration }} minutes)</strong><br>
<strong>Booked Time: {{ $booking->booked_time }}</strong><br>
<strong>Guests: {{ $booking->guests }}</strong>
<br><br>
For more information, please call (832) 781-8415
<br><br>
Yours sincerely,<br>
Thai Hands Massage Therapy.