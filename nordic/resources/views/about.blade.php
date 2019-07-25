
@include('layout.header')
	<div class="breadcrumb breadcrumb-1 pos-center bg">
		<h1>ABOUT THE HOTEL</h1>
	</div>
	<div class="content"><!-- Content Section -->
		<div class="container">
			<div class="row">
				<div class="about-slider margint40"><!-- About Slider -->
					<div class="col-lg-12">
						<div class="flexslider">
							<ul class="slides">
                                <li><img alt="Slider 3" class="img-responsive" src="resources/assets/img/e-edited.jpg" /></li>
								<li><img alt="Slider 1" class="img-responsive" src="resources/assets/img/a-edited.jpg" /></li>
								<li><img alt="Slider 1" class="img-responsive" src="resources/assets/img/d-edited.jpg" /></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="about-info clearfix"><!-- About Info -->
					<div class="col-lg-8">
						<h3>ABOUT US</h3>
						<p class="margint30">Nordic Hospitality is a boutique hotel located in Jabi. We offer 22 unique state of the art rooms furnished in a modern day style and decorated with designer furniture. Our rooms are ideal for travelers and families who want the best of leisure time.  </p>
						<p>Lorem ipsum dolor sit amet, consectetur.Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur.Aenean lacinia bibenPraesent commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis. Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur.Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur.Aeum dolor sit amet, consectetur.</p>
						<p>Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur.Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur.Aeum dolor sit amet, consectetur.</p>
					</div>
					<div class="col-lg-4">
						{{-- <h3>SIDEBAR</h3> --}}
						<div id="accordion" class="margint30">
							<div class="panel panel-luxen active-panel">
								<div class="panel-style active">
									<h4><span class="plus-box"><i class="fa fa-angle-up"></i></span> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1">24/7HRS CUSTOMER SERVICE</a></h4>
								</div>
								<div id="collapse1" class="collapse collapse-luxen in">
									<div class="accordionPadding">    	
										<p>Our staff are on ground 24 hours,You have no minimum night of stay.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-luxen">
								<div class="panel-style">
								<h4><span class="plus-box"><i class="fa fa-angle-down"></i></span> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse2">BREAK FAST</a></h4>
								</div>
								<div id="collapse2" class="collapse collapse-luxen">
									<div class="accordionPadding">    	
										<p>We offer freshly prepared breakfast everyday 7:00am - 10:00am. We have continental and Nigeria breakfast.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-luxen">
								<div class="panel-style">
								<h4><span class="plus-box"><i class="fa fa-angle-down"></i></span> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse3">AIRPORT PICK-UP</a></h4>
								</div>
								<div id="collapse3" class="collapse collapse-luxen">
									<div class="accordionPadding">    	
										<p>We are happy to arrange transportation from Nnamdi Azikiwe International Airport to Nordic Hospitality Suites.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="about-services margint60 clearfix"><!-- About Services -->
					<div class="col-lg-4 col-sm-6">
						<img alt="About Services" class="img-responsive" src="resources/assets/img/b-edited.jpg" >
						<h5 class="margint20">SERENE ENVIRONMENT</h5>
						<p class="margint20">Duis mollis, est non commodo luctus, nisi erat odio sewd euismod semp, est non nuluis risus eget urna mollis ornare vel eu leo. semper. </p>
					</div>
					<div class="col-lg-4 col-sm-6">
						<img alt="About Services" class="img-responsive" src="resources/assets/img/f-edited.jpg" >
						<h5 class="margint20">EXCELLENT CUSTOMER SERVICE</h5>
						<p class="margint20">Duis mollis, est non commodo luctus, nisi erat odio sewd euismod semp, est non nuluis risus eget urna mollis ornare vel eu leo. semper. </p>
					</div>
					<div class="col-lg-4 col-sm-6">
						<img alt="About Services" class="img-responsive" src="resources/assets/img/c-edited.jpg" >
						<h5 class="margint20">HOSPITABLE RECEPTION</h5>
						<p class="margint20">Duis mollis, est non commodo luctus, nisi erat odio sewd euismod semp, est non nuluis risus eget urna mollis ornare vel eu leo. semper. </p>
					</div>
				</div>
				{{-- <div class="about-destination margint40 marginb40 clearfix"><!-- About Destination -->
					<div class="title pos-center marginb40">
						<h2>DESTINATIONS</h2>
						<div class="title-shape"><img alt="Shape" src="img/shape.png"></div>
					</div>
					<div class="col-lg-8 col-sm-12 about-title pos-center">
		                <div class="tab-content">
		                    <div class="tab-pane fade in active" id="tab1">
		                        <img src="temp/maps.jpg" alt="" class="img-responsive" />
		                    </div>
		                    <div class="tab-pane fade" id="tab2">
		                        <img src="temp/maps.jpg" alt="" class="img-responsive" />
		                    </div>
		                    <div class="tab-pane fade" id="tab3">
		                        <img src="temp/maps.jpg" alt="" class="img-responsive" />
		                    </div>
		                </div>
					</div>
					<div class="col-lg-4 col-sm-12 tabbed-area tab-style">
					    <div class="about-destination-box active-tab">
			                <a href="#tab1"><h6>MAP DESTINATION</h6></a>
			                <a href="#tab1"><p class="margint10">Duis mollis, est non commodo luctus, nisi erat odiot urna mollis ornare vel eu leo. semper. </p></a>
					    </div>                    
					    <div class="about-destination-box">
			                <a href="#tab2"><h6>BUS DESTINATION</h6></a>
			                <a href="#tab2"><p class="margint10">Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere erat .Do gravida at eget metus.</p></a>
					    </div> 
					    <div class="about-destination-box">
			                <a href="#tab3"><h6>OWN CAR</h6></a>
			                <a href="#tab3"><p class="margint10">Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere era at eget metus.</p></a>
					    </div>
					</div>
				</div> --}}
			</div>
		</div>
	</div>
@include('layout.footer')