@extends('backend.layout.main')

@section('content')
    <div class="col-md-6 col-md-offset-3">
    <div class="box box-primary">
      <div class="box-header with-border">
        <i class="fa fa-user"></i>
        <h3 class="box-title">Booking</h3>
        <div class="pull-right">
          <p><strong> Booking ID. </strong>{{ $booking->id }}</p>
        </div>
      </div>
      <form class="form-horizontal">
      <div class="box-body">
        <div class="row">
          <div class="col-md-5 col-md-offset-1">
          <div class="form-group">
            <label class="col-sm-4 control-label">Firstname</label>
              <div class="col-sm-8">
                <input type="text" name="firstname" class="form-control" value="{{ Input::old('firstname', $booking->customer_firstname) }}">
              </div>
            </div>
          </div>
          <div class="col-md-5">
          <div class="form-group">
            <label class="col-sm-4 control-label">Lastname</label>
              <div class="col-sm-8">
                <input type="text" name="lastname" class="form-control" value="{{ Input::old('lastname', $booking->customer_lastname) }}">
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
                <input type="text" name="treatment" class="form-control" value="{{ Input::old('booked_time', $booking->treatmen) }}">
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="form-group">
            <label class="col-sm-4 control-label">Duration</label>
              <div class="col-sm-8">
                <input type="text" name="duration" class="form-control" value="{{ Input::old('guests', $booking->guests) }}">
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
        <button class="btn btn-primary btn-flat"><i class="fa fa-floppy-o"></i>Save</button>
      </div><!--box-footer-->
      </form>
    </div>
  </div>
@endsection