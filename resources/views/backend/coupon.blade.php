@extends('backend.layout.main')

@section('content')
	<div class="container">
		<div class="box box-primary">
			<div class="box-header with-border">
			<i class="fa fa-money"></i>
                <h3 class="box-title">Coupon Management ({{ $coupons->count() }} coupons)</h3>
            </div>
			<div class="box-body">
		<div class="action-buttons">
			<button type="button" id="showNewCouponModalBtn" class="btn btn-success btn-sm" data-toggle="modal" data-target="#createCouponModal"><i class="glyphicon glyphicon-plus"></i> Issue New Coupon</button>
		</div>
		<hr>
		
			<table class="table table-bordered table-hover table-striped">
				<thead class="thead-text-center">
					<th>CID#</th>
					<th>Code</th>
					<th>Owner</th>
					<th>Redeemed</th>
					<th>Issued on</th>
					<th>Actions</th>
				</thead>
				<tbody>
					@foreach($coupons as $coupon)
					<tr data-cid="{{ $coupon->id }}">
						<td class="text-center">{{ $coupon->id }}</td>
						<td class="text-center"><code>{{ $coupon->code }}</code></td>
						<td><strong>{{ $coupon->owner }}</strong></strong></td>
						<td class="text-center" data-order="{{ $coupon->redeemed }}">
							<i data-cid="{{ $coupon->id }}" class="glyphicon @if($coupon->redeemed) glyphicon-ok text-success @else glyphicon-minus text-muted @endif"></i>
						</td>
						<td class="text-center">{{ $coupon->created_at }}</td>
						<td class="text-center">
								@if($coupon->redeemed)
									<button class="btn btn-xs btn-success" disabled>Redeemed</button>
								@else
									<button class="btn btn-xs btn-success btn-redeem" data-cid="{{ $coupon->id }}" type="button"><i class="glyphicon glyphicon-ok"></i> Redeem</button>
								@endif
								<button class="btn btn-xs btn-danger btn-delete" data-cid="{{ $coupon->id }}"><i class="glyphicon glyphicon-trash"></i> Delete</button>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			</div>
			<div class="box-footer"></div><!--box-footer-->
		</div>
	</div>

	<div class="modal fade" id="resultModal" tabindex="-1" role="dialog">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
	        <h4 class="modal-title result-title">Success!</h4>
	      </div>
	      	<div class="modal-body">
						<div class="alert result-alert">
							You have successfully redeem a coupon of <strong>customer@domain.com</strong>
						</div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
		      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="createCouponModal" tabindex="-1" role="dialog">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
	        <h4 class="modal-title">Issue a new coupon</h4>
	      </div>
      	<div class="modal-body">
					<div id="createCouponErrorAlert" class="alert alert-danger" style="display:none;"></div>
					{!! Form::open(['class' => 'form-horizontal']) !!}
					<div class="form-group">
				    <label class="col-sm-2 control-label">E-mail</label>
				    <div class="col-sm-10">
				      {!! Form::text('newCouponOwner', null, ['class' => 'form-control', 'placeholder' => 'Customer\'s e-mail address']) !!}
				    </div>
	      	</div>
	      	{!! Form::close() !!}
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" id="btnNewCoupon" class="btn btn-success">Issue</button>
	      </div>
	    </div>
	  </div>

@endsection

@section('js')
	<script>
	$('table').DataTable( {
    "bPaginate": false
  } );

		$(window).keydown(function(event){
	    if(event.keyCode == 13) {
	      event.preventDefault();
	      return false;
	    }
	  });

		function redeem(result) {
			console.log(result);
			if (result['status'] == "1") {
				$('.btn-redeem[data-cid=' + result['id'] + ']').html('Redeemed').attr('disabled', 'disabled');
				$('.glyphicon[data-cid=' + result['id'] + ']').removeClass('glyphicon.minus text-muted').addClass('glyphicon-ok text-success');
				$('.result-title').html('Success!');
				$('.result-alert').addClass('alert-success')
					.html('You have successfully redeem a coupon of <strong>' + result['owner'] + '</strong>');
				$('#resultModal').modal();
			} else {
				$('.result-title').html('Failed!');
				$('.result-alert').addClass('alert-danger')
					.html('This coupon is already redeemed!');
				$('#resultModal').modal();
			};
		}

		$('.btn-redeem').click(function(){
			cid = $(this).data('cid');
			$.post('{!! URL::to("/backend/coupon/' + cid + '/redeem") !!}', {'cid': cid, '_method': 'patch', '_token': '{{ csrf_token() }}'}).done(redeem);
		});

		$('.btn-delete').click(function(){
			cid = $(this).data('cid');
			confirm_delete = confirm("Are you sure to delete this coupon?");
			if (confirm_delete) {
				$.post('{!! URL::to("/backend/coupon/' + cid + '") !!}', {'cid': cid, '_method': 'delete', '_token': '{{ csrf_token() }}'}).success(function() {
					$('tr[data-cid=' + cid + ']').remove();
				});
			};
		});

		function newCoupon() {
			owner = $('input[name=newCouponOwner]').val();
			$.post('{!! URL::to("/backend/coupon/") !!}', {'owner': owner, 'code': "XXXXXX", '_token': '{{ csrf_token() }}'}).success(function(result){
				location.reload();
			}).fail(function(data){
				data = data['responseJSON'];
				data = data['owner'];
				console.log(data);
				$('#createCouponErrorAlert').html(data[0]).show();
			});
		}

		$('#btnNewCoupon').click(newCoupon);
	</script>

@endsection