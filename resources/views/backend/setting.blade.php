@extends('backend.layout.main')

@section('content')
<div class="col-md-6 col-md-offset-3">
		<div class="box box-primary">
              <div class="box-header with-border">
              	<i class="fa fa-cog"></i>
                <h3 class="box-title">Setting</h3>
              </div>
              <form class="form-horizontal">
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
                        <input type="text" name="firstname" class="form-control" value="">
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
                   <div class="form-group">
                      <label class="col-sm-4 control-label">Package Name</label>
                      <div class="col-sm-4">
                        <input type="text" name="firstname" class="form-control" placeholder="Package Name" value="">
                        
                      </div>
                        <button type="button" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i>Add</button>
                    </div>

                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                      <label for="email" class="col-sm-4 control-label">Time &amp; Price</label>
                      <div class="col-sm-2">
                        <input type="email" class="form-control" id="Package Name" placeholder="Minutes">
                      </div>
                      <div class="col-sm-2">
                        <input type="email" class="form-control" id="Package Name" placeholder="Price">
                      </div>
                      <button class="btn btn-primary btn-flat"><i class="fa fa-plus"></i>Add</button>
                    </div>
                  </div>
                </div>                      
                </div>
              </div><!-- /.box-body -->
              <div class="box-footer text-right">
                <button class="btn btn-primary btn-flat"><i class="fa fa-floppy-o"></i>Save</button>
              </div><!--box-footer-->
              </form>
        </div>
	</div>
@endsection