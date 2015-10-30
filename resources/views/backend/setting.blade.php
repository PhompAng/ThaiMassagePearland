@extends('backend.layout.main')

@section('content')
<div class="col-md-8 col-md-offset-2">
		<div class="box box-primary">
              <div class="box-header with-border">
              	<i class="fa fa-cog"></i>
                <h3 class="box-title">Setting</h3>
              </div>
              <form class="form-horizontal" method="POST" action="{{ route('backend.setting.store') }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
                <div class="row">
                  <div class="col-md-10 col-md-offset-1 ">
                    <h3>Booking</h3><hr>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                   <div class="form-group">
                      <label class="col-sm-4 control-label">Booking Capacity</label>
                      <div class="col-sm-4">
                        <div class="input-group">
                          <input type="text" name="settings[booking_capacity]" class="form-control" value="{{ \THM\Setting::get('booking_capacity') }}">
                          <div class="input-group-addon">per hour</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-10 col-md-offset-1 ">
                    <h3>Package</h3><hr>
                  </div>
                  <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    @foreach($treatments as $treatment)
                    <table class="table table-striped table-bordered">
                      <tr>
                        <th>Treatment</th>
                        <td colspan="3">{{ $treatment->title }}</td>
                      </tr>
                      @foreach(array_keys($treatment->time) as $time)
                      <tr>
                        <th style="vertical-align: middle;">Duration</th>
                        <td style="vertical-align: middle;">{{ $time }} Minutes</td>
                        <th style="vertical-align: middle;">Price</th>
                        <td width="120px">
                          <div class="input-group">
                            <div class="input-group-addon">$</div>
                            <input type="text" name="treatment[{{ $treatment->id }}][{{ $time }}]" class="form-control input-sm" value="{{ $treatment->time[$time] }}">
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </table>
                    @endforeach
                  </div>
                </div>
                </div>
              </div><!-- /.box-body -->
              <div class="box-footer text-right">
                <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-floppy-o"></i>Save</button>
              </div><!--box-footer-->
              </form>
        </div>
	</div>
@endsection