@extends('backend.layout.main')

@section('content')
<div class="col-md-6 col-md-offset-3">
		<div class="box box-primary">
              <div class="box-header with-border">
              	<i class="fa fa-cog"></i>
                <h3 class="box-title">Setting</h3>
              </div>
				<form class="form-horizontal" _lpchecked="1">
                  <div class="box-body">
                  	<div class="col-sm-offset-1">
	                    <div class="form-group">
	                      <label for="inputEmail3" class="col-sm-4 control-label">Booking Capacity</label>
	                      <div class="col-sm-4">
	                        <input type="email" class="form-control" id="inputEmail3" placeholder="Booking Capacity">
	                      </div>
	                    </div>
	                    <div class="form-group">
    						<label for="email" class="col-sm-4 control-label">Package Name</label>
    						<div class="col-sm-4">
    						<input type="email" class="form-control" id="Package Name" placeholder="Package Name">
    						</div>
    						<button class="btn btn-primary btn-flat"><i class="fa fa-plus"></i>Add</button>
  						</div>
  						<div class="form-group">
    						<label for="email" class="col-sm-4 control-label">Time & Price</label>
    						<div class="col-sm-2">
    						<input type="email" class="form-control" id="Package Name" placeholder="Minutes">
    						</div>
    						<div class="col-sm-2">
    						<input type="email" class="form-control" id="Package Name" placeholder="Price">
    						</div>
    						<button class="btn btn-primary btn-flat"><i class="fa fa-plus"></i>Add</button>
  						</div>
                    </div>
                  </div><!-- /.box-body -->
              	  <div class="box-footer">
                	<button class="btn btn-primary btn-flat"><i class="fa fa-floppy-o"></i>Save</button>
              	  </div><!--box-footer-->
                </form>
        </div>
	</div>
@endsection