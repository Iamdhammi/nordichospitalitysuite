@include('layout.admin.header')

    <div class="breadcrumb breadcrumb-1 pos-center bg">
		<h1>Available Rooms</h1>
	</div>
	<!-- Content Section -->
	<div class="content margint60 marginb60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 ">
                    <div>
                        <h2>Available Rooms</h2>
                    </div>
					<table class="table table-striped table-bordered dt-responsive" style="width:100%">
						<thead>
							<tr>
								<th>Room Type</th>
								<th>No. of Available Rooms</th>
							</tr>
						</thead>
						<tbody>
							@if(!empty($availableRooms))
								@foreach($availableRooms as $availableRoom)		
									<tr>
										<td>{{$availableRoom->room_type}}</td>
										<td>{{$availableRoom->no_rooms_available}}</td>
									</tr>
								@endforeach
							@endif
						</tbody>
					</table>
                </div>
                <div class="col-md-6 ">
                    <div>
                        <h2>Booked Room(s)</h2>
                    </div>
					<table id="example2" class="table table-striped table-bordered dt-responsive" style="width:100%">
						<thead>
							<tr>
                                <th>Name</th>
								<th>Room Type</th>
								<th>No. of Room(s)</th>
								<th>Arrival</th>
								<th>Depart</th>
							</tr>
						</thead>
						<tbody>
                            @if(!empty($books))
                                @foreach($books as $book)		
                                    <tr>
                                        <td>{{$book->name}}</td>
										<td>{{$book->room_type}}</td>
										<td>{{$book->room_no}}</td>
                                        <td>{{$book->arrival}}</td>
                                        <td>{{$book->depart}}</td>
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