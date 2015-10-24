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
                    <tbody><tr>
                      <th class="text-center" width="100px">#</th>
                      <th>Name</th>
                      <th class="text-center">Time</th>
                      <th class="text-center">Status</th>
                      <th class="text-center">Action</th>
                    </tr>
                    <tr>
                      <td class="text-center">183</td>
                      <td>John Doe</td>
                      <td class="text-center">11-7-2014</td>
                      <td class="text-center"><span class="label label-success">Approved</span></td>
                      <td class="text-center"><a class="btn btn-xs btn-default" href=""><i class="fa fa-pencil"></i>Edit</a></td>
                    </tr>
                    <tr>
                      <td class="text-center">219</td>
                      <td>Alexander Pierce</td>
                      <td class="text-center">11-7-2014</td>
                      <td class="text-center"><span class="label label-warning">Pending</span></td>
                      <td class="text-center"><a class="btn btn-xs btn-default" href=""><i class="fa fa-pencil"></i>Edit</a></td>
                    </tr>
                    <tr>
                      <td class="text-center">657</td>
                      <td>Bob Doe</td>
                      <td class="text-center">11-7-2014</td>
                      <td class="text-center"><span class="label label-primary">Approved</span></td>
                      <td class="text-center"><a class="btn btn-xs btn-default" href=""><i class="fa fa-pencil"></i>Edit</a></td>
                    </tr>
                    <tr>
                      <td class="text-center">175</td>
                      <td>Mike Doe</td>
                      <td class="text-center">11-7-2014</td>
                      <td class="text-center"><span class="label label-danger">Denied</span></td>
                      <td class="text-center"><a class="btn btn-xs btn-default" href=""><i class="fa fa-pencil"></i>Edit</a></td>
                    </tr>
                  </tbody></table>
                </div><!-- /.box-body -->
              </div>
		</div>
	</div>
@endsection