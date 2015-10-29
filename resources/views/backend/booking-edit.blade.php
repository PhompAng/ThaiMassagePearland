@extends('backend.layout.main')

@section('content')
    <div class="col-md-8 col-md-offset-2">
    <div class="box box-primary">
      <div class="box-header with-border">
        <i class="fa fa-pencil"></i>
        <h3 class="box-title">Edit Booking</h3>
      </div>
      <form class="form-horizontal" method="POST" action="{{ route('backend.booking.update', $booking->id) }}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="_method" value="PUT">
      <div class="box-body">
        <div class="row">
          <div class="col-md-5 col-md-offset-1">
          <div class="form-group">
            <label class="col-sm-4 control-label">Firstname</label>
              <div class="col-sm-8">
                <input type="text" name="customer_firstname" class="form-control" value="{{ Input::old('firstname', $booking->customer_firstname) }}">
              </div>
            </div>
          </div>
          <div class="col-md-5">
          <div class="form-group">
            <label class="col-sm-4 control-label">Lastname</label>
              <div class="col-sm-8">
                <input type="text" name="customer_lastname" class="form-control" value="{{ Input::old('lastname', $booking->customer_lastname) }}">
              </div>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-5 col-md-offset-1">
        <div class="form-group">
            <label class="col-sm-4 control-label">Phone</label>
              <div class="col-sm-8">
                <input type="text" name="phone" class="form-control" value="{{ Input::old('phone', $booking->phone) }}">
              </div>
            </div>
          </div>
          <div class="col-md-5">
          <div class="form-group">
            <label class="col-sm-4 control-label">Email</label>
              <div class="col-sm-8">
                <input type="text" name="email" class="form-control" value="{{ Input::old('email', $booking->email) }}">
              </div>
            </div>
          </div>
        </div><!--row-->
        <hr>
        <div class="row">
          <div class="col-md-5 col-md-offset-1">
            <div class="form-group">
            <label class="col-sm-4 control-label">Booked Time</label>
              <div class="col-sm-8">
                <input type="text" name="booked_time" class="form-control" value="{{ Input::old('booked_time', $booking->booked_time) }}">
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="form-group">
            <label class="col-sm-4 control-label">Guests</label>
              <div class="col-sm-8">
                <input type="text" name="guests" class="form-control" value="{{ Input::old('guests', $booking->guests) }}">
              </div>
            </div>
          </div>
        </div><!--row-->
         <div class="row">
          <div class="col-md-5 col-md-offset-1">
            <div class="form-group">
            <label class="col-sm-4 control-label">Treatment</label>
              <div class="col-sm-8">
                <select name="treatment" class="form-control">
                  @foreach($treatments as $treatment)
                    <option value="{{ $treatment->id }}" @if(Input::old('booked_time', $booking->treatment->id) == $treatment->id) selected @endif>{{ $treatment->title }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="form-group">
            <label class="col-sm-4 control-label">Duration</label>
              <div class="col-sm-8">
                <select name="duration" class="form-control">
                  <option value="1" @if(Input::old('guests', $booking->timeslots) == 1) selected @endif>60 Minutes</option>
                  <option value="2" @if(Input::old('guests', $booking->timeslots) == 2) selected @endif>90 Minutes</option>
                </select>
              </div>
            </div>
          </div>
        </div><!--row-->
          <div class="row">
          <div class="col-md-5 col-md-offset-1">
            <div class="form-group">
            <label class="col-sm-4 control-label">Transaction ID</label>
              <div class="col-sm-8">
                <input type="text" name="transaction_id" class="form-control" value="{{ Input::old('booked_time', $booking->transaction_id) }}"disabled>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="form-group">
            <label class="col-sm-4 control-label">Amount</label>
              <div class="col-sm-8">
                <input type="text" name="amount" class="form-control" value="$90.00"disabled>
              </div>
            </div>
          </div>
        </div><!--row-->
      </div><!-- /.box-body -->
      <div class="box-footer text-center">
        <button class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i>Save</button>
      </div><!--box-footer-->
      </form>
    </div>
  </div>
@endsection