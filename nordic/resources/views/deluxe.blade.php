@include('layout.header')
	<div class="breadcrumb breadcrumb-1 pos-center bg">
		<h1>DELUXE ROOM</h1>
	</div>
	<div class="content"><!-- Content Section -->
		<div class="container">
			<div class="row">
				<div class="col-lg-12"><!-- Room Gallery Slider -->
					<div class="room-gallery">
						<div class="margint40 marginb20"><h4>PHOTO GALLERY</h4></div>
						<div class="flexslider-thumb falsenav">
							<ul class="slides">
								<li data-thumb="{{asset('assets/img/rooms/deluxe/room-1.jpg')}}"><img alt="Slider 1" class="img-responsive" src="{{asset('assets/img/rooms/deluxe/room-1.jpg')}}"/></li>
								<li data-thumb="{{asset('assets/img/rooms/deluxe/room-2.jpg')}}"><img alt="Slider 1" class="img-responsive" src="{{asset('assets/img/rooms/deluxe/room-2.jpg')}}"/></li>
								<li data-thumb="{{asset('assets/img/rooms/deluxe/room-3.jpg')}}"><img alt="Slider 1" class="img-responsive" src="{{asset('assets/img/rooms/deluxe/room-3.jpg')}}"/></li>
                                <li data-thumb="{{asset('assets/img/rooms/deluxe/room-4.jpg')}}"><img alt="Slider 1" class="img-responsive" src="{{asset('assets/img/rooms/deluxe/room-4.jpg')}}"/></li>
                                <li data-thumb="{{asset('assets/img/rooms/deluxe/room-5.jpg')}}"><img alt="Slider 1" class="img-responsive" src="{{asset('assets/img/rooms/deluxe/room-5.jpg')}}"/></li>
                                <li data-thumb="{{asset('assets/img/rooms/deluxe/room-6.jpg')}}"><img alt="Slider 1" class="img-responsive" src="{{asset('assets/img/rooms/deluxe/room-6.jpg')}}"/></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-9 clearfix"><!-- Room Information -->
					<div class="col-lg-8 clearfix col-sm-8">
						<h4>ROOM DESCRIPTION</h4>
						<p class="margint30">Curabitur blandit tempus porttitor. Maecenas sed diam eget risus varius blandit sit amet non magna. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus nibh Curabitur blandit tempus porttitor. Maecenas sed diam eget risus varius blandit sit amet non magna. Fusce dapibus, tellus ac blandit Maecenas sed diam eget risus varius blandit sit amet non magna. Fusce dapibus, tellus ac blandit tempus.</p>

						<p>Curabitur blandit tempus porttitor. Maecenas sed diam eget risus varius blandit sit amet non magna. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus nibh Curabitur blandit tempus porttitor. Maecenas sed diam eget risus varius blandit sit amr. Maecenas sed diam eget risus varius blandit sit amet non magna. Fusce dapibus, tellus ac blandit tempus.</p>
					</div>
					<div class="col-lg-4 clearfix col-sm-4">
						<div class="room-services"><!-- Room Services -->
							<h4>SERVICES</h4>
							<ul class="room-services">
								<li><i class="fa fa-calendar"></i> CALENDAR </li>
								<li><i class="fa fa-laptop"></i> 16 MBIT WI-FI </li>
								<li><i class="fa fa-umbrella"></i> 2 BALCONIES </li>
								<li><i class="fa fa-phone"></i> 2 BEDS </li>
								<li><i class="fa fa-clock-o"></i> 7/24 SERVICE </li>
							</ul>
						</div>
						<div class="location-weather margint40"><!-- Room Weather -->
							<h4>WEATHER</h4>
							<div id="weather"></div>
						</div>
					</div>
					<div class="col-lg-12 clearfix margint40 room-single-tab"><!-- Room Tab -->
						<div class="tab-style-2 ">
							<ul class="tabbed-area tab-style-nav clearfix">
								<li class="active"><h6><a href="#tab1s">EXAMPLE TAB</a></h6></li>
								<li class=""><h6><a href="#tab2s">OTHER TABS EXAMPLE</a></h6></li>
								<li class=""><h6><a href="#tab3s">SUIT IT NOW</a></h6></li>
							</ul>
							<div class="tab-content tab-style-content">
								<div class="tab-pane fade active in" id="tab1s">
									<div class="col-lg-3 margint30">
										<img alt="Tab Image" class="img-responsive" src="temp/tab-image.jpg">
									</div>
									<div class="col-lg-9 margint30">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nesciunt ad architecto enim dignissimos incidunt recusandae officia odit sapiente laudantium obcaecati maiores aspernatur fuga neque eum? Reiciendis sit est cum magnam quos tempore tempora esse quibusdam culpa quisquam debitis eveniet necessitatibus excepturi sed ab cumque laudantium. Fugit culpa expedita odio id temporibus laudantium sunt non nemo sapiente dolorum? Soluta incidunt debitis molestiae consectetur accusantium nulla aperiam ad repellendus quas assumenda eum fugiat commodi iusto corporis adipisci autem dolor rerum! Nulla blanditiis aut vel aperiam soluta placeat quia quae libero architecto officiis eius dolorem asperiores est illo praesentium. Sunt reprehenderit alias!
										</p>
									</div>
								</div>
								<div class="tab-pane fade" id="tab2s">
									<div class="col-lg-3 margint30">
										<img alt="Tab Image" class="img-responsive" src="temp/tab-image.jpg">
									</div>
									<div class="col-lg-9 margint30">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nesciunt ad architecto enim dignissimos incidunt recusandae officia odit sapiente laudantium obcaecati maiores aspernatur fuga neque eum? Reiciendis sit est cum magnam quos tempore tempora esse quibusdam culpa quisquam debitis eveniet necessitatibus excepturi sed ab cumque laudantium. Fugit culpa expedita odio id temporibus laudantium sunt non nemo sapiente dolorum? Soluta incidunt debitis molestiae consectetur accusantium nulla aperiam ad repellendus quas assumenda eum fugiat commodi iusto corporis adipisci autem dolor rerum! Nulla blanditiis aut vel aperiam soluta placeat quia quae libero architecto officiis eius dolorem asperiores est illo praesentium. Sunt reprehenderit alias!
										</p>
									</div>
								</div>
								<div class="tab-pane fade" id="tab3s">
									<div class="col-lg-3 margint30">
										<img alt="Tab Image" class="img-responsive" src="temp/tab-image.jpg">
									</div>
									<div class="col-lg-9 margint30">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nesciunt ad architecto enim dignissimos incidunt recusandae officia odit sapiente laudantium obcaecati maiores aspernatur fuga neque eum? Reiciendis sit est cum magnam quos tempore tempora esse quibusdam culpa quisquam debitis eveniet necessitatibus excepturi sed ab cumque laudantium. Fugit culpa expedita odio id temporibus laudantium sunt non nemo sapiente dolorum? Soluta incidunt debitis molestiae consectetur accusantium nulla aperiam ad repellendus quas assumenda eum fugiat commodi iusto corporis adipisci autem dolor rerum! Nulla blanditiis aut vel aperiam soluta placeat quia quae libero architecto officiis eius dolorem asperiores est illo praesentium. Sunt reprehenderit alias!
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 clearfix"><!-- Sidebar -->
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
						<p>Curabitur blandit tempus porttitor. Nulla vitae elit libero, a pharetra augue. Lorem ipsumero, a pharetra augue. Lorem ipsum dolor sit amet, consectedui.</p>
					</div>
					<div class="luxen-widget news-widget">
						<div class="title">
							<h5>CONTACT</h5>
						</div>
						<ul class="footer-links">
							<li><p><i class="fa fa-map-marker"></i> Lorem ipsum dolor sit amet lorem Victoria 8011 Australia </p></li>
							<li><p><i class="fa fa-phone"></i> +61 3 8376 6284 </p></li>
							<li><p><i class="fa fa-envelope"></i> info@2035themes.com</p></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
    </div>
@include('layout.footer')