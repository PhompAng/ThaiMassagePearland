@extends('backend.layout.head')

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
                  <table class="table table-condensed">
                    <tbody><tr>
                      <th class="text-center" width="10%">Booking No.</th>
                      <th>Name</th>
                      <th class="text-center" width="15%">Time</th>
                      <th class="text-center" width="20%">Action</th>
                    </tr>
                    <tr>
                      <td class="text-center">1.</td>
                      <td>Update software</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-xs btn-success" href=""><i class="fa fa-check"></i>Use</a>
                        <a class="btn btn-xs btn-default" href=""><i class="fa fa-pencil"></i>Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">2.</td>
                      <td>Clean database</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                        </div>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-xs btn-success" href=""><i class="fa fa-check"></i>Use</a>
                        <a class="btn btn-xs btn-default" href=""><i class="fa fa-pencil"></i>Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">3.</td>
                      <td>Cron job running</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                        </div>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-xs btn-success" href=""><i class="fa fa-check"></i>Use</a>
                        <a class="btn btn-xs btn-default" href=""><i class="fa fa-pencil"></i>Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">4.</td>
                      <td>Fix and squish bugs</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-xs btn-success" href=""><i class="fa fa-check"></i>Use</a>
                        <a class="btn btn-xs btn-default" href=""><i class="fa fa-pencil"></i>Edit</a>
                      </td>
                    </tr>
                                        <tr>
                      <td class="text-center">5.</td>
                      <td>Fix and squish bugs</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-xs btn-success" href=""><i class="fa fa-check"></i>Use</a>
                        <a class="btn btn-xs btn-default" href=""><i class="fa fa-pencil"></i>Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">6.</td>
                      <td>Fix and squish bugs</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-xs btn-success" href=""><i class="fa fa-check"></i>Use</a>
                        <a class="btn btn-xs btn-default" href=""><i class="fa fa-pencil"></i>Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">7.</td>
                      <td>Fix and squish bugs</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-xs btn-success" href=""><i class="fa fa-check"></i>Use</a>
                        <a class="btn btn-xs btn-default" href=""><i class="fa fa-pencil"></i>Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">8.</td>
                      <td>Fix and squish bugs</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-xs btn-success" href=""><i class="fa fa-check"></i>Use</a>
                        <a class="btn btn-xs btn-default" href=""><i class="fa fa-pencil"></i>Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">9.</td>
                      <td>Fix and squish bugs</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-xs btn-success" href=""><i class="fa fa-check"></i>Use</a>
                        <a class="btn btn-xs btn-default" href=""><i class="fa fa-pencil"></i>Edit</a>
                      </td>
                    </tr>
                  </tbody></table>
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
                  <table class="table table-condensed">
                    <tbody><tr>
                      <th class="text-center" width="10%">Booking No.</th>
                      <th>Name</th>
                      <th class="text-center" width="15%">Time</th>
                      <th class="text-center" width="20%">Action</th>
                    </tr>
                    <tr>
                      <td class="text-center">1.</td>
                      <td>Update software</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-xs btn-success" href=""><i class="fa fa-check"></i>Use</a>
                        <a class="btn btn-xs btn-default" href=""><i class="fa fa-pencil"></i>Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">2.</td>
                      <td>Clean database</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                        </div>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-xs btn-success" href=""><i class="fa fa-check"></i>Use</a>
                        <a class="btn btn-xs btn-default" href=""><i class="fa fa-pencil"></i>Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">3.</td>
                      <td>Cron job running</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                        </div>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-xs btn-success" href=""><i class="fa fa-check"></i>Use</a>
                        <a class="btn btn-xs btn-default" href=""><i class="fa fa-pencil"></i>Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">4.</td>
                      <td>Fix and squish bugs</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-xs btn-success" href=""><i class="fa fa-check"></i>Use</a>
                        <a class="btn btn-xs btn-default" href=""><i class="fa fa-pencil"></i>Edit</a>
                      </td>
                    </tr>
                                        <tr>
                      <td class="text-center">5.</td>
                      <td>Fix and squish bugs</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-xs btn-success" href=""><i class="fa fa-check"></i>Use</a>
                        <a class="btn btn-xs btn-default" href=""><i class="fa fa-pencil"></i>Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">6.</td>
                      <td>Fix and squish bugs</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-xs btn-success" href=""><i class="fa fa-check"></i>Use</a>
                        <a class="btn btn-xs btn-default" href=""><i class="fa fa-pencil"></i>Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">7.</td>
                      <td>Fix and squish bugs</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-xs btn-success" href=""><i class="fa fa-check"></i>Use</a>
                        <a class="btn btn-xs btn-default" href=""><i class="fa fa-pencil"></i>Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">8.</td>
                      <td>Fix and squish bugs</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-xs btn-success" href=""><i class="fa fa-check"></i>Use</a>
                        <a class="btn btn-xs btn-default" href=""><i class="fa fa-pencil"></i>Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">9.</td>
                      <td>Fix and squish bugs</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-xs btn-success" href=""><i class="fa fa-check"></i>Use</a>
                        <a class="btn btn-xs btn-default" href=""><i class="fa fa-pencil"></i>Edit</a>
                      </td>
                    </tr>
                  </tbody></table>
                </div><!-- /.box-body -->
              </div>
		        </div>
	       </div>
@endsection
