@php
    $url = url()->current();
@endphp
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>
	 @if (preg_match("/about/", $url)) About 
	 @elseif(preg_match("/gallery/", $url)) Gallery
	 @elseif(preg_match("/contact/", $url)) Contact
	 @elseif(preg_match("/rooms/", $url)) Hotel Rooms
	 @elseif(preg_match("/terms/", $url)) Terms & Condition
	 @elseif(preg_match("/reservation/", $url)) Reservation
	 @elseif(preg_match("/invoice/", $url)) Invoice
	 @elseif(preg_match("/search/", $url)) Search
	 @endif | Nordic Hospitality Suites
</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="shortcut icon" img="{{asset('assets/img/favicon.ico')}}" />
<!-- CSS FILES -->
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}} ">
<link rel="stylesheet" href="{{asset('assets/css/supersized.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/supersized.shutter.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/flexslider.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/prettyPhoto.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/datepicker.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/selectordie.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/2035.responsive.css')}}">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/print.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">


<script src="{{asset('assets/js/vendor/modernizr-2.8.3-respond-1.1.0.min.js')}}"></script>


</head>
<body>
<!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<div id="wrapper">
	<div class="header"><!-- Header Section -->
		<div class="pre-header"><!-- Pre-header -->
			<div class="container">
				<div class="row">
					<div class="pull-left pre-address-b"><p class="whiteColor" ><i class="fa fa-map-marker"></i>No. 14, Patrick O. Bokkor Crescent, Jabi, Abuja</p></div>
					<div class="pull-right">
                        <div class="pull-left">
                            <ul class="pre-link-box">
								<li><a href="{{url('/terms')}}">Terms & Conditions</a></li>
                            </ul>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-header"><!-- Main-header -->
			<div class="container">
				<div class="row">
					<div class="pull-left">
						<div class="logo">
                            <img alt="Logo" src="{{asset('assets/img/logo-grey.png')}}" class="img-responsive" style="width: 120px; height: auto" />
						</div>
					</div>
					<div class="pull-right">
						<div class="pull-left">
							<nav class="nav">
								<ul id="navigate" class="sf-menu navigate">
                                    <li><a href="{{url('/')}}">HOME</a></li>
									<li
										@if(preg_match("/rooms/", $url)) class="active parent-menu"
										@else class="parent-menu" 
										@endif
									><a href="{{url('/rooms')}}">OUR ROOMS</a>
										<ul>
											<li><a href="{{url('/rooms/deluxe')}}">Deluxe Rooms</a></li>
											<li><a href="{{url('/rooms/deluxebalcony')}}">Deluxe Balcony</a></li>
											<li><a href="{{url('/rooms/nordicsuite')}}">Nordic Suite Rooms</a></li>
											<li><a href="{{url('/rooms/nordicsuitebalcony')}}">Nordic Suite Balcony</a></li>
											<li><a href="{{url('/rooms/standard')}}">Standard Rooms</a></li>
										</ul>
									</li>
									<li <?php if (preg_match("/about/", $url)) { ?>  class="active" <?php } ?>><a href="{{url('/about')}}">ABOUT US</a></li>
									<li <?php if (preg_match("/gallery/", $url)) { ?>  class="active" <?php } ?>><a href="{{url('/gallery')}}">GALLERY</a></li>
									<li <?php if (preg_match("/news/", $url)) { ?>  class="active" <?php } ?>><a href="{{url('/news')}}">NEWS</a></li>
                                    <li <?php if (preg_match("/contact/", $url)) { ?>  class="active" <?php } ?>><a href="{{url('/contact')}}">CONTACT</a></li>
								</ul>
							</nav>
						</div>
						<div class="pull-right">
							<div class="button-style-1 margint45">
								<a href="{{url('/search')}}"><i class="fa fa-search"></i>Check Availability</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>