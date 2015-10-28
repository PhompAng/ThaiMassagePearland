@extends('backend.layout.main')

@section('content')
    <div class="col-md-6 col-md-offset-3">
    <div class="box box-primary">
      <div class="box-header with-border">
        <i class="fa fa-user"></i>
        <h3 class="box-title">Booking No. 00001</h3>
      </div>
      <div class="box-body">
        <div class="row">
          <div class="col-md-3" align="center">
          <img src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" alt="User Pic"  class="img-circle img-responsive">
          </div>
          <div class="col-md-9">
            <table class="table table-user-information">
              <tbody>
                <tr>
                  <td><strong>FirstName:</strong></td>
                  <td>Kitty</td>
                </tr>
                <tr>
                  <td><strong>LastName:</strong></td>
                  <td>Pucky</td>
                </tr>
                <tr>
                  <td><strong>Phone:</strong></td>
                  <td>(999) 645-1455</td>
                </tr>
                <tr>
                  <td><strong>Email:</strong></td>
                  <td>kitty@gmail.com</td>
                </tr>
                <tr>
                  <td><strong>Time Looked</strong></td>
                  <td>-</td>
                </tr>
                <tr>
                  <td><strong>Guests</strong></td>
                  <td>-</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div><!-- /.box-body -->
      <div class="box-footer text-center">
      </div><!--box-footer-->
    </div>
  </div>
@endsection