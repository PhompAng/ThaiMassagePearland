@extends('backend.layout.main')

@section('content')
    <div class="col-md-6 col-md-offset-3">
    <div class="box box-primary">
      <div class="box-header with-border">
        <i class="fa fa-user"></i>
        <h3 class="box-title">Booking</h3>
        <div class="pull-right">
          <p><strong>Booking ID. </strong> 0001</p>
        </div>
      </div>
      <div class="box-body">
        <div class="row">
          <div class="col-md-offset-2 col-md-8">
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
                <tr>
                  <td><strong>Treatment</strong></td>
                  <td>-</td>
                </tr>
                <tr>
                  <td><strong>Duration</strong></td>
                  <td>-</td>
                </tr>
                <tr>
                  <td><strong>Transaction ID#</strong></td>
                  <td>-</td>
                </tr>
                <tr>
                  <td><strong>Amount</strong></td>
                  <td>$90.00</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div><!-- /.box-body -->
      <div class="box-footer text-right">
          <button type="button" class="btn btn-primary btn flat"><i class="fa fa-print"></i>Print</button>
      </div><!--box-footer-->
    </div>
  </div>
@endsection