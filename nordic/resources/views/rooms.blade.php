@include('layout.header')
	<div class="breadcrumb breadcrumb-1 pos-center bg">
		<h1>HOTEL ROOMS</h1>
	</div>
	<div class="content"><!-- Content Section -->
		<div class="container margint60">
			<div class="row">
				<div class="col-lg-12"><!-- Explore Rooms -->
					<table id="roomtable" data-page-length='5' style="width:100%">
						<thead>
							<tr class="products-title">
								<td class="table-products-image pos-center"><h6>IMAGE</h6></td>
								<td class="table-products-name pos-center"><h6>ROOM NAME</h6></td>
								<td class="table-products-no pos-center"><h6>NO. OF <br>AVAILABLE ROOMS</h6></td>
								<td class="table-products-price pos-center"><h6>PRICE</h6></td>
								<td class="table-products-total pos-center"><h6>PURCHASE</h6></td>
							</tr>
						</thead>
						<tbody>
							<tr class="table-products-list pos-center">
								<td class="products-image-table">
									<a href="{{url('/rooms/deluxe')}}">
										<img alt="Products Image 1" src="assets/img/rooms/deluxe/room-1.jpg" class="img-responsive">
									</a>
								</td>
								<td class="title-table">
									<div class="room-details-list clearfix">
										<div class="pull-left">
											<h5><a href="{{url('/rooms/deluxe')}}">{{$deluxe->room_type}}</a></h5>
										</div>
										<div class="pull-left room-rating">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
									<div class="list-room-icons clearfix">
										<ul>
											<li><i class="fa fa-calendar"></i></li>
											<li><i class="fa fa-flask"></i></li>
											<li><i class="fa fa-umbrella"></i></li>
											<li><i class="fa fa-laptop"></i></li>
										</ul>
									</div>
									<p>The Deluxe Rooms offer great comfort having all the facilities travellers could require such as spacious room, king size bed, sitting area.<br>
										<a class="active-color" href="{{url('/rooms/deluxe')}}">View More</a> 
									</p>
								</td>
								<td><h5>{{$deluxe->no_rooms_available}}</h5></td>
								<td><h5>₦25,500</h5></td>
								@if($deluxe->no_rooms_available > 0)
								<td><div class="button-style-1"><a href="{{url('/dreservation')}}"><i class="fa fa-calendar"></i><span class="mobile-visibility">BOOK NOW</span></a></div></td>
								@else
								<td><div class="button-style-1"><a><i class="fa fa-calendar"></i><span class="mobile-visibility">NO VACANCY</span></a></div></td>
								@endif
							</tr>
							<tr class="table-products-list pos-center">
								<td class="products-image-table">
									<a href="{{url('/rooms/deluxebalcony')}}">
										<img alt="Products Image 1" src="assets/img/rooms/deluxe_balcony/room-1.jpg" class="img-responsive">
									</a>
								</td>
								<td class="title-table">
									<div class="room-details-list clearfix">
										<div class="pull-left">
											<h5><a href="{{url('/rooms/deluxebalcony')}}">{{$deluxeBalcony->room_type}}</a></h5>
										</div>
										<div class="pull-left room-rating">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
									<div class="list-room-icons clearfix">
										<ul>
											<li><i class="fa fa-calendar"></i></li>
											<li><i class="fa fa-flask"></i></li>
											<li><i class="fa fa-umbrella"></i></li>
											<li><i class="fa fa-laptop"></i></li>
										</ul>
									</div>
									<p>A modern hotel roomwith walk-in closet and a spacious bathroom with a full size spa tub. It has a spaciously sized king size bed, a sitting area, a writing desk. This room also features a balcony.<br>
										<a class="active-color" href="{{url('/rooms/deluxebalcony')}}">View More</a>
									</p>
								</td>
								<td><h5>{{$deluxeBalcony->no_rooms_available}}</h5></td>
								<td><h5>₦29,500</h5></td>
								@if($deluxeBalcony->no_rooms_available > 0)
								<td><div class="button-style-1"><a href="{{url('/dbreservation')}}"><i class="fa fa-calendar"></i><span class="mobile-visibility">BOOK NOW</span></a></div></td>
								@else
								<td><div class="button-style-1"><a><i class="fa fa-calendar"></i><span class="mobile-visibility">NO VACANCY</span></a></div></td>
								@endif
								
							</tr>
							<tr class="table-products-list pos-center">
								<td class="products-image-table">
									<a href="{{url('/rooms/nordicsuite')}}">
										<img alt="Products Image 2" src="assets/img/rooms/nordic_suite/room-1.jpg" class="img-responsive">
									</a>
								</td>
								<td class="title-table">
									<div class="room-details-list clearfix">
										<div class="pull-left">
											<h5><a href="{{url('/rooms/nordicsuite')}}">{{$nordic->room_type}}</a></h5>
										</div>
										<div class="pull-left room-rating">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
									<div class="list-room-icons clearfix">
										<ul>
											<li><i class="fa fa-calendar"></i></li>
											<li><i class="fa fa-flask"></i></li>
											<li><i class="fa fa-umbrella"></i></li>
											<li><i class="fa fa-laptop"></i></li>
										</ul>
									</div>
									<p>Our Nordic Suites are spaciously sized with a king size bed, a large sitting area, a writing desk. The Suite is furnished to suit your need, its also perfect as an office while staying with us.<br> 
										<a class="active-color" href="{{url('/rooms/nordicsuite')}}">View More</a> 
									</p>
								</td>
								<td><h5>{{$nordic->no_rooms_available}}</h5></td>
								<td><h5>₦35,500</h5></td>
								@if($nordic->no_rooms_available > 0)
								<td><div class="button-style-1"><a href="{{url('/nsreservation')}}"><i class="fa fa-calendar"></i><span class="mobile-visibility">BOOK NOW</span></a></div></td>
								@else
								<td><div class="button-style-1"><a><i class="fa fa-calendar"></i><span class="mobile-visibility">NO VACANCY</span></a></div></td>
								@endif
								
							</tr>
							<tr class="table-products-list pos-center">
								<td class="products-image-table">
									<a href="{{url('/rooms/nordicsuitebalcony')}}">
										<img alt="Products Image 2" src="assets/img/rooms/nordic_suite_balcony/room-1.jpg" class="img-responsive">
									</a>
								</td>
								<td class="title-table">
									<div class="room-details-list clearfix">
										<div class="pull-left">
											<h5><a href="{{url('/rooms/nordicsuitebalcony')}}">{{$nordicBalcony->room_type}}</a></h5>
										</div>
										<div class="pull-left room-rating">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
									<div class="list-room-icons clearfix">
										<ul>
											<li><i class="fa fa-calendar"></i></li>
											<li><i class="fa fa-flask"></i></li>
											<li><i class="fa fa-umbrella"></i></li>
											<li><i class="fa fa-laptop"></i></li>
										</ul>
									</div>
									<p>Spaciously sized with a king size bed. A large sitting area, a writing desk, a Full Size Bathtub with luxurious bath products and the scented candles. This room is perfect not only for business but also for a romantic getaway.<br>
										<a class="active-color" href="{{url('/rooms/nordicsuitebalcony')}}">View More</a> 
									</p>
								</td>
								<td><h5>{{$nordicBalcony->no_rooms_available}}</h5></td>
								<td><h5>₦39,500</h5></td>
								@if($nordicBalcony->no_rooms_available > 0)
								<td><div class="button-style-1"><a href="{{url('/nsbreservation')}}"><i class="fa fa-calendar"></i><span class="mobile-visibility">BOOK NOW</span></a></div></td>
								@else
								<td><div class="button-style-1"><a><i class="fa fa-calendar"></i><span class="mobile-visibility">NO VACANCY</span></a></div></td>
								@endif
								
							</tr>
							<tr class="table-products-list pos-center">
								<td class="products-image-table">
									<a href="{{url('/rooms/standard')}}">
										<img alt="Products Image 2" src="assets/img/rooms/standard	/room-1.jpg" class="img-responsive">
									</a>
								</td>
								<td class="title-table">
									<div class="room-details-list clearfix">
										<div class="pull-left">
											<h5><a href="{{url('/rooms/standard')}}">{{$standard->room_type}}</a></h5>
										</div>
										<div class="pull-left room-rating">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
									<div class="list-room-icons clearfix">
										<ul>
											<li><i class="fa fa-calendar"></i></li>
											<li><i class="fa fa-flask"></i></li>
											<li><i class="fa fa-umbrella"></i></li>
											<li><i class="fa fa-laptop"></i></li>
										</ul>
									</div>
									<p>Our standards Rooms are comfortably furnished with a queen sized bed, a writing desk, 32" flat-screen TV, High Speed Internet. A Standard Room can accommodate one guest.<br>
										<a class="active-color" href="{{url('/rooms/standard')}}">View More</a> 
									</p>
								</td>
								<td><h5>{{$standard->no_rooms_available}}</h5></td>
								<td><h5>₦18,500</h5></td>
								@if($standard->no_rooms_available > 0)
								<td><div class="button-style-1"><a href="{{url('/sreservation')}}"><i class="fa fa-calendar"></i><span class="mobile-visibility">BOOK NOW</span></a></div></td>
								@else
								<td><div class="button-style-1"><a><i class="fa fa-calendar"></i><span class="mobile-visibility">NO VACANCY</span></a></div></td>
								@endif
								
							</tr>
						</tbody>
					</table>
				</div>
				{{-- <div class="col-lg-3"><!-- Sidebar -->
					<div class="quick-reservation-container">
						<div class="quick-reservation clearfix">
							<div class="title-quick pos-center margint30">
								<h5>QUICK RESERVATIONS</h5>
								<div class="line"></div>
							</div>
							<div class="reserve-form-area">
								<form action="#" method="post" id="ajax-reservation-form">
									<label>ARRIVAL</label>
									<input type="text" id="dpd1" name="dpd1" class="date-selector" placeholder="&#xf073;" />
									<label>RETURN</label>
									<input type="text" id="dpd2" name="dpd2" class="date-selector" placeholder="&#xf073;" />
									<div class="pull-left children clearfix">
										<label>ROOMS</label>
										<select name="rooms" class="pretty-select">
											<option selected="selected" value="1" >1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="pull-left type clearfix">
										<label>ADULT</label>
										<select name="adult" class="pretty-select">
											<option selected="selected" value="1" >1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
									</select>
									</div>
									<div class="pull-left rooms clearfix">
										<label>CHILDREN</label>
										<select name="children" class="pretty-select">
											<option selected="selected" value="0" >0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="pull-left search-button clearfix">
										<div class="button-style-1">
											<a id="res-submit" href="#">SEARCH</a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="luxen-widget news-widget">
						<div class="title-quick marginb20">
							<h5>HOTEL INFORMATION</h5>
						</div>
						<p>We offer 22 unique state of the art rooms furnished in a modern day style and decorated with designer furniture. Our rooms are ideal for travelers and families who want the best of leisure time.</p>
					</div>
					<div class="luxen-widget news-widget">
						<div class="title">
							<h5>CONTACT</h5>
						</div>
						<ul class="footer-links">
							<li><p><i class="fa fa-map-marker"></i> No. 14, Patrick O. Bokkor Crescent Jabi, Abuja </p></li>
							<li><p><i class="fa fa-phone"></i> +2347080266555 </p></li>
							<li><p><i class="fa fa-envelope"></i> info@nordichospitalitysuites.com</p></li>
						</ul>
					</div>
				</div> --}}
			</div>
		</div>
	</div>
@include('layout.footer')