@include('layout.header')
    <div class="breadcrumb breadcrumb-1 pos-center bg">
		<h1>RESERVATION FORM</h1>
	</div>
	<div class="light-book-form margint60 marginb60">
		<div class="container">
			<div class="row pos-center">
				<div class="reserve-form-area">
					<div class="pos-center marginb20">
						{{-- <h2>Reservation Form</h2>
						<img src="img/shape.png"> --}}
					</div>
					<div class="col-lg-3"></div>
					<div class="col-lg-6">
						<form method="post">
							<ul class="clearfix">
								<div class="row">
									<div class="col-md-6">
										<li class="li-input li-side">
											<label>Room Type</label>
											<input type="text" id="room" name="deluxe_room" value="Deluxe Room" disabled/>
										</li>
									</div>
									<div class="col-md-6">
										<li class="li-input li-side">
											<label>Price Per Night(₦)</label>
											<input type="text" id="price" name="deluxe_price" value="25500" disabled/>
										</li>
									</div>
								</div>
								<li class="li-input">
									<label>Full Name</label>
									<input type="text" id="name" name="deluxe_name" required/>
								</li>
								<li class="li-input">
									<label>Email</label>
									<input type="email" id="email" name="deluxe_email" required/>
								</li>
								<div class="row">
									<div class="col-md-6">
											<li class="li-input">
												<label>Arrival</label>
												<input type="text" id="dpd1" name="arrival" class="date-selector arrival" placeholder="&#xf073;" required/>
											</li>
									</div>
									<div class="col-md-6">
											<li class="li-input">
												<label>Departure</label>
												<input type="text" id="dpd2" name="depart" class="date-selector departure" placeholder="&#xf073;" required/>
											</li>
									</div>
								</div>
								<li class="li-select mg-r20">
									<label>Rooms</label>
									<select id="room_no" name="deluxe_room_no" class="pretty-select">
										<option selected="selected" value="1" >1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</li>
								<li class="li-select">
									<label>Guests</label>
									<select id="guests" name="guest" class="pretty-select">
										<option selected="selected" value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</li>
								{{-- <li class="li-input">
									<label>Total Price</label>
									<input type="text" id="total" name="deluxe_total" value="0" disabled/>
								</li> --}}
								<li class="clearfix">
									<script src="https://js.paystack.co/v1/inline.js"></script>
									<div class="button-style-1 clearfix mg-t170">
										<button type="button" onclick="calculate()">BOOK RESERVATION</button>
									</div>
								</li>
							</ul>
						</form>
					</div>
					<div class="col-lg-3"></div>
				</div>
			</div>
		</div>
	</div>
@include('layout.footer')