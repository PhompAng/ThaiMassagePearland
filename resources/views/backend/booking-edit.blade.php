@extends('backend.layout.main')

@section('content')
    <div class="col-md-6 col-md-offset-3">
    <div class="box box-primary">
      <div class="box-header with-border">
        <i class="fa fa-user"></i>
        <h3 class="box-title">Booking</h3>
      </div>
      <form class="form-horizontal" _lpchecked="1">
      <div class="box-body">
        <div class="row">
          <div class="col-md-6">
          <div class="field">
            <label for="inputEmail3" class="col-sm-4 control-label">Firstname</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" id="inputEmail3" value="Jonathan">
              </div>
          </div>
          </div>
          <div class="col-md-6">
          <div class="field">
            <label for="inputEmail3" class="col-sm-4 control-label">Lastname</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" id="inputEmail3" value="McKengie">
              </div>
          </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
        <div class="field">
            <label for="inputEmail3" class="col-sm-4 control-label">Phone</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" id="inputEmail3" value="(999) 545-1455">
              </div>
          </div>
          </div>
          <div class="col-md-6">
          <div class="field">
            <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" id="inputEmail3" value="john.mcken@private.me">
              </div>
          </div>
          </div>
        </div><!--row-->
        <hr>
        <div class="row">
          <div class="col-md-6">
            <div class="field">
            <label for="inputEmail3" class="col-sm-4 control-label">Time Looked</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" id="inputEmail3" value="McKengie">
              </div>
          </div>
          </div>
          <div class="col-md-6">
            <div class="field">
            <label for="inputEmail3" class="col-sm-4 control-label">Guest</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" id="inputEmail3" value="McKengie">
              </div>
          </div>
          </div>
        </div><!--row-->
      </div><!-- /.box-body -->
      <div class="box-footer">
        <button class="btn btn-primary btn-flat"><i class="fa fa-floppy-o"></i>Save</button>
      </div><!--box-footer-->
      </form>
    </div>
  </div>
@endsection