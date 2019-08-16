@include('layout.admin.header')

    <div class="breadcrumb breadcrumb-1 pos-center bg">
		<h1>TRANSACTIONS</h1>
	</div>
	<!-- Content Section -->
	<div class="content margint60 marginb60">
		<div class="container">
			<div class="row">
				<div class="col-md-12 ">
					<table id="example" class="table table-striped table-bordered dt-responsive" style="width:100%">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Room Type</th>
								<th>Room No.</th>
								<th>Guest(s)</th>
								<th>Arrival</th>
								<th>Depart</th>
								<th>Payment Reference</th>
								<th>Amount</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							@if(!empty($transactions))
								@foreach($transactions as $transaction)		
									<tr>
										<td>{{$transaction->name}}</td>
										<td>{{$transaction->email}}</td>
										<td>{{$transaction->phone}}</td>
										<td>{{$transaction->room_type}}</td>
										<td>{{$transaction->room_no}}</td>
										<td>{{$transaction->guests}}</td>
										<td>{{$transaction->arrival}}</td>
										<td>{{$transaction->depart}}</td>
										<td>{{$transaction->payment_ref}}</td>
										<td>{{$transaction->amount}}</td>
										@if($transaction->depart >= date('m/d/Y') )
										<td><strong>Active</strong></td>
										@elseif($transaction->depart < date('m/d/Y'))
										<td><strong>Expired</strong></td>
										@endif
									</tr>
								@endforeach
							@endif
						</tbody>
					</table>
				</div>
			</div>
			
        </div>
	</div>

@include('layout.admin.footer')