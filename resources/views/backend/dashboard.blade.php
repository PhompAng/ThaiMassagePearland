@extends('backend.layout.main')

@section('content')
<script type="text/javascript">
  function GetClock(){
  var d=new Date();
  var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

  if(nhour==0){ap=" AM";nhour=12;}
  else if(nhour<12){ap=" AM";}
  else if(nhour==12){ap=" PM";}
  else if(nhour>12){ap=" PM";nhour-=12;}

  if(nmin<=9) nmin="0"+nmin;
  if(nsec<=9) nsec="0"+nsec;

  document.getElementById('clockbox').innerHTML=""+nhour+":"+nmin+":"+nsec+ap+"";
  }

  window.onload=function(){
  GetClock();
  setInterval(GetClock,1000);
  }
  </script>
<div class="row">
		<div class="col-md-3">
			<div class="box box-primary" style="height:200px">
				<div class="box-header with-border">
					<i class="fa fa-clock-o"></i>
					<h3 class="box-title">Current Time</h3>
				</div>
				<div class="box-body">
					<div class="text-center time" id="clockbox"></div>
				</div>
			</div>
		</div>
    <div class="col-md-3">
      <div class="box box-success" style="height:200px">
        <div class="box-header with-border">
          <i class="fa fa-calendar"></i>
          <h3 class="box-title">Today Summary</h3>
        </div>
        <div class="box-body text-center">
          <div class="time">0 of 15</div>
          Booking used.
        </div>
      </div>
    </div>
		<div class="col-md-3">
			<div class="box box-warning" style="height:200px">
				<div class="box-header with-border">
					<i class="fa fa-search"></i>
					<h3 class="box-title">Search Booking</h3>
				</div>
				<div class="box-body search">
          <div class="form-group">
            <input type="text" class="form-control input-lg text-center" id="booking-search-input" placeholder="Booking No.">
          </div>
          <div class="form-group">
            <a class="btn btn-primary btn-block" id="booking-search-btn" href="#"><i class="fa fa-search"></i>Search</a>
          </div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="box box-default" style="height:200px">
				<div class="box-header with-border">
					<i class="fa fa-calendar"></i>
					<h3 class="box-title">Summary</h3>
				</div>
				<div class="box-body">
					<table class="table result">
            <tbody>
              <tr>
                <td class="text-left" style="border-top: none;"><strong>Today</strong></td>
                <td style="border-top: none;">{{ $today_bookings->count() }}</td>
              </tr>
              <tr>
                <td class="text-left"><strong>This Month</strong></td>
                <td>{{ $this_month_booking->count() }}</td>
              </tr>
              <tr>
                <td class="text-left"><strong>No Show <small>(this month)</small></strong></td>
                <td>{{ $this_month_no_show->count() }}</td>
              </tr>
            </tbody>
          </table>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="box">
        <div class="box-header">
          <i class="fa fa-arrow-circle-down"></i>
          <h3 class="box-title">Today Booking</h3>
        </div><!-- /.box-header -->
        <div class="box-body no-padding">
          <table class="table table-hover table-striped">
            <thead>
              <th class="text-center">Booking No.</th>
              <th>Name</th>
              <th class="text-center">Time</th>
              <th class="text-center">Action</th>
            </thead>
            <tbody>
              @forelse($today_bookings as $booking)
              <tr>
                <td class="text-center">#{{ $booking->id }}</td>
                <td class="">{{ $booking->customer_firstname }} {{ $booking->customer_lastname }}</td>
                <td class="text-center">{{ $booking->booked_time }}</td>
                <td class="text-center">
                  <a href="{{ route('backend.booking.show', $booking->id) }}" class="btn btn-xs btn-success"><i class="fa fa-check-circle"></i>Use</a>
                  <a href="{{ route('backend.booking.show', $booking->id) }}" class="btn btn-xs btn-default"><i class="fa fa-eye"></i>View</a>
                  <a href="{{ route('backend.booking.edit', $booking->id) }}" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i>Edit</a>
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="4" class="text-center text-muted">No Today Booking</td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div>
		</div>
		<div class="col-md-6">
	     <div class="box">
        <div class="box-header">
          <i class="fa fa-arrow-circle-right"></i>
          <h3 class="box-title">Tomorrow Booking</h3>
        </div><!-- /.box-header -->
        <div class="box-body no-padding">
          <table class="table table-hover table-striped">
            <thead>
              <th class="text-center">Booking No.</th>
              <th>Name</th>
              <th class="text-center">Time</th>
              <th class="text-center">Action</th>
            </thead>
            <tbody>
              @forelse($tomorrow_bookings as $booking)
              <tr>
                <td class="text-center">#{{ $booking->id }}</td>
                <td class="">{{ $booking->customer_firstname }} {{ $booking->customer_lastname }}</td>
                <td class="text-center">{{ $booking->booked_time }}</td>
                <td class="text-center">
                  <a href="{{ route('backend.booking.show', $booking->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i>View</a>
                  <a href="{{ route('backend.booking.edit', $booking->id) }}" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i>Edit</a>
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="4" class="text-center text-muted">No Tomorrow Booking</td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div>
    </div>
  </div>
@endsection

@section('js')
  <script>
    $('#booking-search-input').change(function() {
      $('#booking-search-btn').attr('href', '/backend/booking/' + $('#booking-search-input').val());
    });
  </script>
@endsection

