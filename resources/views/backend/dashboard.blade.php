@extends('backend.layout.main')

@section('content')
<script type="text/javascript">
  function GetClock(){
  var d=new Date();
  var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

  if(nhour==0){ap=" AM";nhour=12;}
  else if(nhour<12){ap=" AM";}
  else if(nhour==12){ap=" PM";}
  else if(nhour>12){ap=" PM";nhour-=12;}

  if(nmin<=9) nmin="0"+nmin;
  if(nsec<=9) nsec="0"+nsec;

  document.getElementById('clockbox').innerHTML=""+nhour+":"+nmin+":"+nsec+ap+"";
  }

  window.onload=function(){
  GetClock();
  setInterval(GetClock,1000);
  }
  </script>
<div class="row">
		<div class="col-md-3">
			<div class="box box-primary" style="height:200px">
				<div class="box-header with-border">
					<i class="fa fa-clock-o"></i>
					<h3 class="box-title">Current Time</h3>
				</div>
				<div class="box-body">
					<div class="text-center time" id="clockbox"></div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="box box-primary" style="height:200px">
				<div class="box-header with-border">
					<i class="fa fa-search"></i>
					<h3 class="box-title">Search Booking</h3>
				</div>
				<div class="box-body search">
          <div class="form-group">
            <input type="text" class="form-control input-lg" placeholder="Booking Number."> 
          </div>  
          <div class="form-group">
            <button class="btn btn-primary btn-flat col-md-12" type="button"><i class="fa fa-search"></i>Search</button>
          </div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="box box-primary" style="height:200px">
				<div class="box-header with-border">
					<i class="fa fa-calendar"></i>
					<h3 class="box-title">Today</h3>
				</div>
				<div class="box-body">
					ASDlas
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="box box-primary" style="height:200px">
				<div class="box-header with-border">
					<i class="fa fa-calendar"></i>
					<h3 class="box-title">Today</h3>
				</div>
				<div class="box-body">
					<table class="table result">
            <tbody>
              <tr>
                <td class="text-left"><strong>Today</strong></td>
                <td>124</td>
              </tr>
              <tr>
                <td class="text-left"><strong>This Month</strong></td>
                <td>1456</td>
              </tr>
              <tr>
                <td class="text-left"><strong>No show</strong></td>
                <td>3</td>
              </tr>
            </tbody>     
          </table>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="box">
                <div class="box-header">
                  <i class="fa fa-arrow-circle-down"></i>
                  <h3 class="box-title">Today Booking</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-bordered table-hover table-striped">
                    <thead class="thead-text-center">
                      <th width="10%">Booking #</th>
                      <th>Name</th>
                      <th width="15%">Time</th>
                      <th width="20%">Action</th>
                      </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div>
		</div>
				<div class="col-md-6">
			     <div class="box">
                <div class="box-header">
                  <i class="fa fa-arrow-circle-right"></i>
                  <h3 class="box-title">Tomorrow Booking</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-bordered table-hover table-striped">
                    <thead class="thead-text-center">
                      <th width="10%">Booking #</th>
                      <th>Name</th>
                      <th width="15%">Time</th>
                      <th width="20%">Action</th>
                    </thead>
                  <tbody>
                  </tbody></table>
                </div><!-- /.box-body -->
              </div>
		        </div>
	       </div>
@endsection

