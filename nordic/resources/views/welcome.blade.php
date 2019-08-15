@include('layout.homeHeader')
		<div class="slider-textbox clearfix" style="margin-top: 120px;">
			<div class="container">
				<div class="row">
					<div class="slider-bar pull-left">WELCOME TO NORDIC HOSPITALITY SUITES</div>
					<div class="slider-triangle pull-left"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="slider-bar-under pull-left">5 STAR SUPPORT</div>
					<div class="slider-triangle-under pull-left"></div>
				</div>
			</div>
		</div>
		<div class="book-slider">
			<div class="container">
				<div class="row pos-center">
					<div class="reserve-form-area">
						<form action="{{url('/searchresult')}}" method="post">
							{{ csrf_field() }}
							<ul class="clearfix">
								<li class="li-input">
									<label>ARRIVAL</label>
									<input type="text" id="dpd1" name="arrival" class="date-selector" placeholder="&#xf073;" required>
								</li>
								<li class="li-input">
									<label>DEPARTURE</label>
									<input type="text" id="dpd2" name="depart" class="date-selector" placeholder="&#xf073;" required>
								</li>
								{{-- <li class="li-select">
									<label>ROOMS</label>
									<select name="rooms" class="pretty-select">
										<option selected="selected" value="1" >1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</li>
								<li class="li-select">
									<label>ADULT</label>
									<select name="adult" class="pretty-select">
										<option selected="selected" value="1" >1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</li>
								<li class="li-select">
									<label>CHILDREN</label>
									<select name="children" class="pretty-select">
										<option selected="selected" value="0" >0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</li> --}}
								<li>
									<div class="button-style-1">
										<button type="submit"><i class="fa fa-search"></i>SEARCH</button>
									</div>
								</li>
							</ul>
						</form>
					</div>
				</div>
			</div>
		 </div>
		
		<div class="bottom-book-slider">
			<div class="container">
				<div class="row pos-center">
					<ul>
						<li><i class="fa fa-phone"></i> 24/7HRS CUSTOMER SERVICE</li>
						<li><i class="fa fa-car"></i> AIRPORT PICK UP</li>
						<li><i class="fa fa-coffee"></i> COFFEE & BREAKFAST FREE</li>
						<li><i class="fa fa-wifi"></i> FREE WI-FI ALL ROOM</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Content Section -->
	<div class="content">
		<!-- About Section -->
		<div class="about clearfix">
			<div class="container">
				<div class="row">
					<div class="about-title pos-center margint60">
						<h2>WELCOME TO NORDIC HOSPITALITY SUITES</h2>
						<div class="title-shape"><img alt="Shape" src="assets/img/shape.png"></div>
						<p>Welcome to our hotel, Nordic Hospitality is a boutique hotel located in Jabi.
						We offer 22 unique state of the art rooms furnished in a modern day
						style and decorated with designer furniture.
						Our rooms are ideal for travelers and families who want the best of leisure time. </p>
					</div>
					<div class="otel-info margint60">
						<div class="col-lg-4 col-sm-12">
							<div class="title-style-1 marginb40">
								<h5>GALLERY</h5>
								<hr>
							</div>
							<div class="flexslider">
								<ul class="slides">
									<li><img alt="Slider 1" class="img-responsive" src="{{asset('assets/img/a-edited.jpg')}}" /></li>
									<li><img alt="Slider 1" class="img-responsive" src="{{asset('assets/img/c-edited.jpg')}}" /></li>
									<li><img alt="Slider 1" class="img-responsive" src="{{asset('assets/img/d-edited.jpg')}}" /></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="title-style-1 marginb40">
								<h5>ABOUT US</h5>
								<hr>
							</div>
							<p>Nordic Hospitality is a boutique hotel with rooms furnished in a modern day style and decorated with designer furniture. Our rooms are perfect not only for business but also for a romantic getaway.</p>
							<p><i class="fa fa-check-circle fa-lg" style="color: #e4b248"></i><span class="bullet-point">24 hours Front Desk and Daily Housekeeping</span></p>
							<p><i class="fa fa-check-circle fa-lg" style="color: #e4b248"></i><span class="bullet-point">24 hours Security</span></p>
							<p><i class="fa fa-check-circle fa-lg" style="color: #e4b248"></i><span class="bullet-point">Free Wi-Fi (high speed)</span></p>
							<p><i class="fa fa-check-circle fa-lg" style="color: #e4b248"></i><span class="bullet-point">Secured parking space</span></p>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="title-style-1 marginb40">
								<h5>OUR NEWS</h5>
								<hr>
							</div>
							<div class="home-news">
								<div class="news-box clearfix">
									<div class="news-time pull-left">
										<div class="news-date pos-center"><div class="date-day">20<hr></div>MAY</div>
									</div>
									<div class="news-content pull-left">
										<h6><a href="#">News from us from now</a></h6>
										<p class="margint10">Donec ullamcorper nulla non metus auctor fringilla. Donec sed odio dui <a class="active-color" href="{{url('/news')}}">[...]</a></p>
									</div>
								</div>
								<div class="news-box clearfix">
									<div class="news-time pull-left">
										<div class="news-date pos-center"><div class="date-day">20<hr></div>MAY</div>
									</div>
									<div class="news-content pull-left">
										<h6><a href="#">News from us from now</a></h6>
										<p class="margint10">Donec ullamcorper nulla non metus auctor fringilla. Donec sed odio dui. Nulla vitae elit libero, a pharetra augue <a class="active-color" href="{{url('/news')}}">[...]</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Explore Rooms Section -->
		<div class="explore-rooms margint30 clearfix">
			<div class="container">
				<div class="row">	
					<div class="title-style-2 marginb40 pos-center">
						<h3>EXPLORE ROOMS</h3>
						<hr>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="home-room-box">
							<div class="room-image">
								<img alt="Room Images" class="img-responsive" src="assets/img/rooms/room-2.JPG">
								<div class="home-room-details">
									<h5><a href="{{url('/rooms/standard')}}">The Standard Room</a></h5>
									<div class="pull-left">
										<ul>
											<li><i class="fa fa-calendar"></i></li>
											<li><i class="fa fa-flask"></i></li>
											<li><i class="fa fa-umbrella"></i></li>
											<li><i class="fa fa-laptop"></i></li>
										</ul>
									</div>
									<div class="pull-right room-rating">
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="room-details">
								<p>Our standards Rooms are comfortably furnished with a queen sized bed, a writing desk, 
									32" flat-screen TV, High Speed Internet. A Standard Room can accommodate one guest<a class="active-color" href="{{url('/rooms/standard')}}">[...]</a></p>
							</div>
							<div class="room-bottom">
								<div class="pull-left"><h4>₦18,500<span class="room-bottom-time">/ Night</span></h4></div>
								<div class="pull-right">
									<div class="button-style-1">
										<a href="{{url('/sreservation')}}">BOOK NOW</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="home-room-box">
							<div class="room-image">
								<img alt="Room Images" class="img-responsive" src="assets/img/rooms/room-04.JPG">
								<div class="home-room-details">
									<h5><a href="{{url('/rooms/nordicsuite')}}">The Nordic Suite</a></h5>
									<div class="pull-left">
										<ul>
											<li><i class="fa fa-calendar"></i></li>
											<li><i class="fa fa-flask"></i></li>
											<li><i class="fa fa-umbrella"></i></li>
											<li><i class="fa fa-laptop"></i></li>
										</ul>
									</div>
									<div class="pull-right room-rating">
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="room-details">
								<p>Our Nordic Suites are spaciously sized with a king size bed, a large sitting area, a writing desk. 
								The Suite is furnished to suit your need, its also perfect as an office while staying with us.
								<a class="active-color" href="{{url('/rooms/nordicsuite')}}">[...]</a></p>
							</div>
							<div class="room-bottom">
								<div class="pull-left"><h4>₦35,500<span class="room-bottom-time">/ Night</span></h4></div>
								<div class="pull-right">
									<div class="button-style-1">
										<a href="{{url('/nsreservation')}}">BOOK NOW</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="home-room-box">
							<div class="room-image">
								{{-- <div class="room-features">FEATURED</div> --}}
								<img alt="Room Images" class="img-responsive" src="assets/img/rooms/room-5.JPG">
								<div class="home-room-details">
									<h5><a href="{{url('/rooms/deluxe')}}">The Deluxe</a></h5>
									<div class="pull-left">
										<ul>
											<li><i class="fa fa-calendar"></i></li>
											<li><i class="fa fa-flask"></i></li>
											<li><i class="fa fa-umbrella"></i></li>
											<li><i class="fa fa-laptop"></i></li>
										</ul>
									</div>
									<div class="pull-right room-rating">
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star "></i></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="room-details">
								<p>Spaciously sized with a king size bed. A large sitting area, a writing desk,
								a Full Size Bathtub with luxurious bath products and the scented candles. 
								This room is perfect not only for business but also for a romantic getaway<a class="active-color" href="{{url('/rooms/deluxe')}}">[...]</a></p>
							</div>
							<div class="room-bottom">
								<div class="pull-left"><h4>₦25,500<span class="room-bottom-time">/ Night</span></h4></div>
								<div class="pull-right">
									<div class="button-style-1">
										<a href="{{url('/dreservation')}}">BOOK NOW</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Parallax Section -->
		<div id="parallax123" class="parallax parallax-one clearfix margint60">
			<div class="support-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-sm-4">
							<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
								<div class="flipper">
									<div class="support-box pos-center front">
										<div class="support-box-title"><i class="fa fa-phone"></i></div>
										<h4>CALL US</h4>
										<p class="margint20">We are always available to respond as our staff are on ground 24/7</p>
									</div>
									<div class="support-box pos-center back">
										<div class="support-box-title"><i class="fa fa-phone"></i></div>
										<h4>PHONE NUMBER</h4>
										<p class="margint20">+234 708 026 6555</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-4">
							<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
								<div class="flipper">
									<div class="support-box pos-center front">
										<div class="support-box-title"><i class="fa fa-envelope"></i></div>
										<h4>SEND US E-MAIL</h4>
										<p class="margint20">If you have any questions or further enquiries, send us a message and we'll be glad to reply</p>
									</div>
									<div class="support-box pos-center back">
										<div class="support-box-title"><i class="fa fa-envelope"></i></div>
										<h4>E-MAIL ADDRESS</h4>
										<p class="margint20">info@nordichospitalitysuites.com</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-4">
							<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
								<div class="flipper">
									<div class="support-box pos-center front">
										<div class="support-box-title"><i class="fa fa-home"></i></div>
										<h4>VISIT US</h4>
										<p class="margint20">Our rooms are ideal for travelers and families who want the best of leisure time</p>
									</div>
									<div class="support-box pos-center back">
										<div class="support-box-title"><i class="fa fa-home"></i></div>
										<h4>COMPANY ADDRESS</h4>
										<p class="margint20">No. 14, Patrick O. Bokkor Crescent, Jabi, Abuja</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="newsletter-section"><!-- Newsletter Section -->
			<div class="container">
				<div class="row">
					<div class="newsletter-top pos-center margint30">
						<img alt="Shape Image" src="assets/img/shape.png" >
					</div>
					<div class="newsletter-form margint40 pos-center">
						<div class="newsletter-wrapper">
							<div class="pull-left">
								<h2>Sign up newsletter</h2>
							</div>
							<div class="pull-left">
								<form action="#" method="post" id="ajax-contact-form">
									<input type="text" placeholder="Enter a e-mail address">
									<input type="submit" value="SUBSCRIBE" >
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

@include('layout.homeFooter')