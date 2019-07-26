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
							<li><a href="http://facebook.com/2035themes"><i class="fa fa-facebook"></i></a></li>
							<li><a href="http://twitter.com/2035themes"><i class="fa fa-twitter"></i></a></li>
							<li><a href="http://vine.com/2035themes"><i class="fa fa-vine"></i></a></li>
							<li><a href="http://foursquare.com/2035themes"><i class="fa fa-foursquare"></i></a></li>
							<li><a href="http://instagram.com/2035themes"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<!-- Contact -->
				<div class="col-lg-8 col-sm-8 mg-t60">
					<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="300px" id="gmap_canvas" src="https://maps.google.com/maps?q=%2014%2C%20Patrick%20O.%20Bokkor%20Crescent%2C%20Jabi%2C%20Abuja&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/best-wordpress-themes/">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:300px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:100%;}</style></div>
					<div class="contact-form margint30"><!-- Contact Form -->
						<form action="#" method="post" id="ajax-contact-form">
                            <input type="text" id="cname" placeholder="Name" name="name" >
                            <input type="text" id="cmail" placeholder="E-Mail" name="email" >
							<input type="text" id="csubject" placeholder="Subject" name="subject" >
							<textarea placeholder="Write what do you want..." id="ctext" name="message"></textarea>
							<input class="pull-right margint10" type="submit" value="SUBMIT">
						</form>
					</div>
				</div>
			</div>
		</div>
    </div>
@include('layout.footer')