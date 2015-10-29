@extends('backend.layout.main')

@section('content')
	<div class="row">
		<div class="col-md-3">
			<div class="box">
        <div class="box-header with-border">
        	<i class="fa fa-filter"></i>
          <h3 class="box-title">Filter</h3>
        </div>
        <div class="box-body">
          <h4>Narrow by Name</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis laborum reprehenderit facilis consequuntur aspernatur optio, ipsa neque, vel, eligendi placeateveniet asperiores dolorem doloribus nulla enim fugit veniam. Cum, vero.</p>
          <h4>Narrow by Type</h4>
        </div><!-- /.box-body -->
      </div>
		</div>
		<div class="col-md-9">
			<div class="box box-primary">
        <div class="box-header">
          <i class="fa fa-list"></i>
          <h3 class="box-title">Booking</h3>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <th class="text-center" width="130px">Booking No.</th>
              <th>Name</th>
              <th class="text-center">Time</th>
              <th class="text-center">Status</th>
              <th class="text-center">View</th>
            </thead>
            <tbody>
              @forelse($bookings as $booking)
              <tr>
                <td class="text-center">{{ $booking->id }}</td>
                <td class="">{{ $booking->customer_firstname }} {{ $booking->customer_lastname }}</td>
                <td class="text-center">{{ $booking->booked_time }}</td>
                <td class="text-center">{!! $booking->getFormattedStatus(1) !!}</td>
                <td class="text-center">
                  <a href="{{ route('backend.booking.show', $booking->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i>View</a>
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="5" class="text-center">No Booking</td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div>
		</div>
	</div>
@endsection