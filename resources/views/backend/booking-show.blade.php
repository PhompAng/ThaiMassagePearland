@extends('backend.layout.main')

@section('content')
    <div class="col-md-6 col-md-offset-3">
    <div class="box box-primary">
      <div class="box-header with-border">
        <i class="fa fa-file"></i>
        <h3 class="box-title">Booking Detail</h3>
        <div class="box-tools">
          {!! $booking->getFormattedStatus(1) !!}
        </div>
      </div>
      <div class="box-body">
        <table class="table table-striped">
          <tr>
            <th class="text-right" width="150px">Booking No.</th>
            <td>{{ $booking->id }}</td>
            <th class="text-right">Customer Name</th>
            <td>{{ $booking->customer_firstname }} {{ $booking->customer_lastname }}</td>
          </tr>
          <tr>
            <th class="text-right">Phone</th>
            <td>{{ $booking->phone }}</td>
            <th class="text-right">Email</th>
            <td colspan="3">{{ $booking->email }}</td>
          </tr>
        </table>
        <hr>
        <table class="table table-striped">
          <tr>
            <th class="text-right">Time</th>
            <td>{{ $booking->booked_time }}</td>
            <th class="text-right">Guests</th>
            <td>{{ $booking->guests }}</td>
          </tr>
          <tr>
            <th class="text-right">Treatment</th>
            <td>{{ $booking->treatment->title }}</td>
            <th class="text-right">Duration</th>
            <td>@if($booking->timeslots == 2) 90 Minutes @else 60 Minutes @endif</td>
          </tr>
          <tr>
            <th class="text-right">Transaction ID</th>
            <td><code>{{ $booking->transaction_id }}</code></td>
            <th class="text-right">Amount</th>
            <td>${{ number_format($booking->total, 2) }}</td>
          </tr>
        </table>
      </div><!-- /.box-body -->
      <div class="box-footer text-right">
        <div class="pull-left">
          <a class="btn btn-sm btn-default" href="{{ route('backend.booking.edit', $booking->id) }}"><i class="fa fa-pencil"></i>Edit</a>
        </div>
        <form action="{{ route('backend.booking.setStatus', $booking->id) }}" method="POST" style="display: inline;">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          @if($booking->status == 0)
            <input type="hidden" name="status" value="1">
            <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check-circle"></i>Use</button>
          @else
            <input type="hidden" name="status" value="0">
            <button type="submit" class="btn btn-sm btn-warning"><i class="fa fa-times-circle"></i>Set as unused</button>
          @endif
        </form>
        <form action="{{ route('backend.booking.setStatus', $booking->id) }}" method="POST" style="display: inline;">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="status" value="2">
          <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-times-circle"></i>Cancel this booking</button>
        </form>
      </div><!--box-footer-->
    </div>
  </div>
@endsection