@include('layout.header')
	<div class="breadcrumb breadcrumb-1 pos-center bg">
		<h1>THE STANDARD ROOM</h1>
	</div>
	<div class="content"><!-- Content Section -->
		<div class="container">
			<div class="row">
				<div class="col-lg-12"><!-- Room Gallery Slider -->
					<div class="room-gallery">
						<div class="margint40 marginb20"><h4>PHOTO GALLERY</h4></div>
						<div class="flexslider-thumb falsenav">
							<ul class="slides">
								<li data-thumb="{{asset('assets/img/rooms/standard/room-1.jpg')}}"><img alt="Slider 1" class="img-responsive" src="{{asset('assets/img/rooms/standard/room-1.jpg')}}"/></li>
								<li data-thumb="{{asset('assets/img/rooms/standard/room-2.jpg')}}"><img alt="Slider 1" class="img-responsive" src="{{asset('assets/img/rooms/standard/room-2.jpg')}}"/></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-9 clearfix"><!-- Room Information -->
					<div class="col-lg-8 clearfix col-sm-8">
						<h4>ROOM DESCRIPTION</h4>
						<p class="margint30">Our standards Rooms are comfortably furnished with a queen sized bed, a writing desk, 32" flat-screen TV, High Speed Internet. A Standard Room can accommodate one guest.</p>
                        <p>We offer freshly prepared breakfast and various snacks every day. You will find restaurants within a 10 minute commute from The Nordic Villa.</p>
						<p>All prices are exclusive 5% VAT
						<p>Check-in from 3.00 pm</p>
						<p>Check-out by 12.00 noon</p>
						<h6>RATES</h6>
						<p><i class="fa fa-check-circle" style="color: #e4b248"></i><span class="bullet-point">Executive Suite: ₦18,500</span></p>
						<p><i class="fa fa-check-circle" style="color: #e4b248"></i><span class="bullet-point">Breakfast included in the room rate.</span></p>
					</div>
					<div class="col-lg-4 clearfix col-sm-4">
						<div class="room-services"><!-- Room Services -->
							<h4>SERVICES</h4>
							<ul class="room-services">
                                <li><i class="fa fa-check-circle fa-lg"></i> ROOM SIZE (444m x 354m) </li>
                                <li><i class="fa fa-check-circle fa-lg"></i> FREE WI-FI </li>
                                <li><i class="fa fa-check-circle fa-lg"></i> MODERN BATHROOM </li>
                                <li><i class="fa fa-check-circle fa-lg"></i> 2 PERSONS </li>
                                <li><i class="fa fa-check-circle fa-lg"></i> SECURED PARKING SPACE </li>
                                <li><i class="fa fa-check-circle fa-lg"></i> BREAKFAST INCLUDED </li>
                                <li><i class="fa fa-check-circle fa-lg"></i> FLAT SCREEN TV </li>
                                <li><i class="fa fa-check-circle fa-lg"></i> WORKING DESK </li>
							</ul>
						</div>
						
					</div>
					
				</div>
				<div class="col-lg-3 clearfix"><!-- Sidebar -->
					<div class="quick-reservation-container">
						<div class="quick-reservation clearfix">
							<div class="title-quick pos-center margint30">
								<h5>RESERVATIONS</h5>
                                <div class="line"></div>
                                <div>
                                    <h6 class="whiteColor">Nordic Standard Room ₦18,500/night</h6>
                                </div>
							</div>
							<div class="reserve-form-area">
								<form action="#" method="post" id="ajax-reservation-form">
                                    <label>E-MAIL</label>
                                    <input type="email" id="email" name="email"/>
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
										<label>GUESTS</label>
										<select name="adult" class="pretty-select">
											<option selected="selected" value="1" >1</option>
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
					
				</div>
			</div>
		</div>
    </div>
@include('layout.footer')