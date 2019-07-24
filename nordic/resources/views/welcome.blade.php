@include('layout.homeHeader')
		<div class="book-slider">
			<div class="container">
				<div class="row pos-center">
					<div class="reserve-form-area">
						<form action="#" method="post" id="ajax-reservation-form">
							<ul class="clearfix">
								<li class="li-input">
									<label>ARRIVAL</label>
									<input type="text" id="dpd1" name="dpd1" class="date-selector" placeholder="&#xf073;" />
								</li>
								<li class="li-input">
									<label>DEPARTURE</label>
									<input type="text" id="dpd2" name="dpd2" class="date-selector" placeholder="&#xf073;" />
								</li>
								<li class="li-select">
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
								</li>
								<li>
									<div class="button-style-1 margint40">
										<a id="res-submit" href="#"><i class="fa fa-search"></i>SEARCH</a>
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
	<div class="content"><!-- Content Section -->
		<div class="about clearfix"><!-- About Section -->
			<div class="container">
				<div class="row">
					<div class="about-title pos-center margint60">
						<h2>WELCOME TO NORDIC HOSPITALITY SUITES</h2>
						<div class="title-shape"><img alt="Shape" src="resources/assets/img/shape.png"></div>
						<p>Welcome to our hotel, Nordic Hospitality is a boutique hotel located in Jabi.
						We offer 22 unique state of the art rooms furnished in a modern day
						style and decorated with designer furniture.
						Our rooms are ideal for travelers and families who want the best of leisure time. </p>
					</div>
					
				</div>
			</div>
		</div>
		<div class="explore-rooms margint30 clearfix"><!-- Explore Rooms Section -->
			<div class="container">
				<div class="row">	
					<div class="title-style-2 marginb40 pos-center">
						<h3>EXPLORE ROOMS</h3>
						<hr>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="home-room-box">
							<div class="room-image">
								<img alt="Room Images" class="img-responsive" src="resources/assets/img/rooms/room-2.JPG">
								<div class="home-room-details">
									<h5><a href="#">The Standard Room</a></h5>
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
											<li><i class="fa fa-star inactive"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="room-details">
								<p>Our standards Rooms are comfortably furnished with a queen sized bed, a writing desk, 
									32" flat-screen TV, High Speed Internet. A Standard Room can accommodate one guest[...]</p>
							</div>
							<div class="room-bottom">
								<div class="pull-left"><h4>89$<span class="room-bottom-time">/ Day</span></h4></div>
								<div class="pull-right">
									<div class="button-style-1">
										<a href="#">BOOK NOW</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="home-room-box">
							<div class="room-image">
								<img alt="Room Images" class="img-responsive" src="resources/assets/img/rooms/room-04.JPG">
								<div class="home-room-details">
									<h5><a href="#">The Nordic Suite</a></h5>
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
											<li><i class="fa fa-star inactive"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="room-details">
								<p>Our Nordic Suites are spaciously sized with a king size bed, a large sitting area, a writing desk. 
								The Suite is furnished to suit your need, its also perfect as an office while staying with us.
								[...]</p>
							</div>
							<div class="room-bottom">
								<div class="pull-left"><h4>89$<span class="room-bottom-time">/ Day</span></h4></div>
								<div class="pull-right">
									<div class="button-style-1">
										<a href="#">BOOK NOW</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="home-room-box">
							<div class="room-image">
								<div class="room-features">FEATURED</div>
								<img alt="Room Images" class="img-responsive" src="resources/assets/img/rooms/room-5.JPG">
								<div class="home-room-details">
									<h5><a href="#">The Deluxe</a></h5>
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
											<li><i class="fa fa-star inactive"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="room-details">
								<p>Spaciously sized with a king size bed. A large sitting area, a writing desk,
								a Full Size Bathtub with luxurious bath products and the scented candles. 
								This room is perfect not only for business but also for a romantic getaway[...]</p>
							</div>
							<div class="room-bottom">
								<div class="pull-left"><h4>89$<span class="room-bottom-time">/ Day</span></h4></div>
								<div class="pull-right">
									<div class="button-style-1">
										<a href="#">BOOK NOW</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<div id="parallax123" class="parallax parallax-one clearfix margint60"><!-- Parallax Section -->
			<div class="support-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-sm-4">
							<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
								<div class="flipper">
									<div class="support-box pos-center front">
										<div class="support-box-title"><i class="fa fa-phone"></i></div>
										<h4>CALL US</h4>
										<p class="margint20">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut ferme fentum</p>
									</div>
									<div class="support-box pos-center back">
										<div class="support-box-title"><i class="fa fa-phone"></i></div>
										<h4>PHONE NUMBER</h4>
										<p class="margint20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, et.<br />+61 3 8376 6284</p>
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
										<p class="margint20">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut ferme fentum</p>
									</div>
									<div class="support-box pos-center back">
										<div class="support-box-title"><i class="fa fa-envelope"></i></div>
										<h4>E-MAIL ADDRESS</h4>
										<p class="margint20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, et.<br />luxen@2035themes.com</p>
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
										<p class="margint20">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut ferme fentum</p>
									</div>
									<div class="support-box pos-center back">
										<div class="support-box-title"><i class="fa fa-home"></i></div>
										<h4>COMPANY ADDRESS</h4>
										<p class="margint20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, et.<br />Manhattan square. 124 avenue. Bodrum</p>
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
						<img alt="Shape Image" src="resources/assets/img/shape.png" >
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