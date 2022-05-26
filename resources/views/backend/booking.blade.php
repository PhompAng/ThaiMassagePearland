@extends('backend.layout.main')

@section('content')
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="box box-primary">
        <div class="box-header">
          <i class="fa fa-list"></i>
          <h3 class="box-title">Booking</h3>
          <div class="box-tools">
            <div class="btn-group">
                <a href="{{ route('backend.booking.index', ['filter' => 1]) }}" class="btn btn-sm btn-default @if(Request::input('filter') == 1) active @endif">Today</a>
                <a href="{{ route('backend.booking.index', ['filter' => 2]) }}" class="btn btn-sm btn-default @if(Request::input('filter') == 2) active @endif">Tomorrow</a>
                <a href="{{ route('backend.booking.index', ['filter' => 3]) }}" class="btn btn-sm btn-default @if(Request::input('filter') == 3) active @endif">This Month</a>
                <a href="{{ route('backend.booking.index') }}" class="btn btn-sm btn-default @if(Request::input('filter') == 0 || !Request::has('filter')) active @endif">All</a>
              </div>
          </div>
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