@include('layout.header')
	<div class="breadcrumb breadcrumb-1 pos-center bg">
		<h1>CONTACT</h1>
	</div>
	<!-- Content Section -->
	<div class="content">
		<div class="container">
			<div class="row">
				<!-- Sidebar -->
				<div class="col-lg-4 col-sm-4 margint60">
					<div class="luxen-widget news-widget">
						<div class="title">
							<h5>HOTEL INFORMATION</h5>
						</div>
						<p>Nordic Hospitality is a boutique hotel located in Jabi. We offer 22 unique state of the art rooms furnished in a modern day style and decorated with designer furniture. Our rooms are ideal for travelers and families who want the best of leisure time.</p>
					</div>
					<div class="luxen-widget news-widget">
						<div class="title">
							<h5>CONTACT</h5>
						</div>
						<ul class="footer-links">
							<li><p><i class="fa fa-map-marker"></i> No. 14, Patrick O. Bokkor Crescent, Jabi, Abuja</p></li>
							<li><p><i class="fa fa-phone"></i> +234 708 026 6555 </p></li>
							<li><p><i class="fa fa-envelope"></i>  info@nordichospitalitysuites.com</p></li>
						</ul>
					</div>
					<div class="luxen-widget news-widget">
						<div class="title">
							<h5>SOCIAL MEDIA</h5>
						</div>
						<ul class="social-links">
							<li><a href="#"><i class="fab fa-facebook"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-vine"></i></a></li>
							<li><a href="#"><i class="fab fa-foursquare"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<!-- Contact -->
				<div class="col-lg-8 col-sm-8 mg-t60">
					<div class="col-md-12" style="text-align:center;">
						@if(Session::has('flash_message_success'))
							<div class="alert alert-success alert-block">
								<button type="button" class="close" data-dismiss="alert">×</button> 
									<strong>{!! session('flash_message_success') !!}</strong>
							</div>
						@endif
						@if(Session::has('flash_message_error'))
							<div class="alert alert-danger alert-block" >
								<button type="button" class="close" data-dismiss="alert">×</button> 
									<strong>{!! session('flash_message_error') !!}</strong>
							</div>
						@endif
					</div>
					<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="300px" id="gmap_canvas" src="https://maps.google.com/maps?q=%2014%2C%20Patrick%20O.%20Bokkor%20Crescent%2C%20Jabi%2C%20Abuja&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/best-wordpress-themes/">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:300px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:100%;}</style></div>
					<div class="contact-form margint30"><!-- Contact Form -->
						
						<form action="" method="post">
							{{ csrf_field() }}
                            <input type="text" id="name" placeholder="Name" name="name" required>
                            <input type="text" id="email" placeholder="E-Mail" name="email" required>
							<input type="text" id="subject" placeholder="Subject" name="subject" required>
							<textarea placeholder="Write what do you want..." id="text" name="message" required></textarea>
							<input class="pull-right margint10" type="submit" value="SUBMIT">
						</form>
					</div>
				</div>
			</div>
		</div>
    </div>
@include('layout.footer')