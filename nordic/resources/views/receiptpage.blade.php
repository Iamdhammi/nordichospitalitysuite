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
     @elseif(preg_match("/receipt/", $url)) Receipt
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
<link rel="stylesheet" href="{{asset('css/receipt.css')}}">
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
						{{-- <div class="pull-right">
							<div class="button-style-1 margint45">
								<a href="#"><i class="fa fa-search"></i>Check Availability</a>
							</div>
						</div> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="breadcrumb breadcrumb-1 pos-center bg">
            <h1>RECEIPT</h1>
      </div>
    
    <div id="to_print">
        <div id="header" >RECEIPT</div>
        <div class="paid1">PAID</div>
        <div class="paid2" >PAID</div>
        <div class="paid3">PAID</div>
        <table width="100%">
            <tr>
                <td align="left">
                    <h3>Nordic Hospitality Suites</h3>
                    <p>
                    14, Patrick O. Bokkor Crescent,<br>
                    Jabi, Abuja<br>
                    Phone: (+234) 708-0266-555
                    </p>
                </td>
                <td align="right" style="padding-top:20px;" valign="top"><img src="{{asset('assets/img/logo-grey.png')}}" alt="" width="150"/></td>
            </tr>
    
        </table>
    
    
        <div style="overflow: hidden!important; margin-top:50px" >
            <table style="float: left;width:300px;padding:5px;" id="meta">
                <tr style="border: 1px solid #000">
                    <td align="left" class="meta-head">Receipt Id</td>
                    <td align="right" style="padding:2px 5px"><div id="invoice_ref" ></div></td>
                </tr>
                <tr style="border: 1px solid #000">
                    <td align="left" class="meta-head">Arrival Date</td>
                    <td align="right"  style="padding:2px 5px"><div id="arrival_date"></div></td>
                </tr>
                <tr style="border: 1px solid #000">
                    <td align="left" class="meta-head">Departure Date</td>
                    <td align="right"  style="padding:2px 5px"><div id="departure_date"></div></td>
                </tr>
                <tr style="border: 1px solid #000">
                    <td align="left" class="meta-head">Amount Due</td>
                    <td align="right"  style="padding:2px 5px"><div id="invoice_total" class="due"></div></td>
                </tr>
            </table>
            <div style="float: right; text-align: right">
                <h4 style="margin:0px">BILL TO:</h4>
                <p style="margin:0px; padding: 5px;"><span id="invoice_name">Name</span><br>
                <span id="invoice_email">Email</span><br>
                <span id="invoice_phone">Phone</span><br>
            </div>
        </div>
        
    
        <br/>
    
        <table width="100%" style="margin-top: 50px!important;" id="items">
            <thead>
            <tr>
                <th style="text-align:right!important;padding: 5px 5px;font-weight:normal">#</th>
                <th style="text-align:right!important;padding: 5px 5px;font-weight:normal">Room Type</th>
                <th style="text-align:right!important;padding: 5px 5px;font-weight:normal">Guests</th>
                <th style="text-align:right!important;padding: 5px 5px;font-weight:normal">Unit Price &#8358;</th>
                <th style="text-align:right!important;padding: 5px 5px;font-weight:normal">No. of Room(s)</th>
                <th style="text-align:right!important;padding: 5px 5px;font-weight:normal">Total &#8358;</th>
            </tr>
            </thead>
            <tbody>
            <tr class="item-row">
                <td align="right">1</td>
                <td align="right" id="invoice_room_type"></td>
                <td align="right" id="invoice_guests"></td>
                <td align="right" id="invoice_cost"></td>
                <td align="right" id="invoice_room_no"></td>
                <td align="right" id="invoice_total_price"></td>
            </tr>
            
            </tbody>
    
            <tfoot>
                <tr>
                    <td style="font-weight: bold;font-size: 14px;padding: 5px" colspan="4"></td>
                    <td style="font-weight: bold;font-size: 14px;padding: 5px" align="right">Total &#8358;</td>
                    <td style="font-weight: bold;font-size: 14px;padding: 5px" align="right" id="invoice_total_amount"></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;font-size: 14px;padding: 5px" colspan="4"></td>
                    <td style="font-weight: bold;font-size: 14px;padding: 5px" align="right">Amount Paid &#8358;</td>
                    <td style="font-weight: bold;font-size: 14px;padding: 5px"  align="right" id="invoice_amount_due"></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;font-size: 14px;padding: 5px" colspan="4"></td>
                    <td style="font-weight: bold;font-size: 14px;padding: 5px" align="right">Amount Due &#8358;</td>
                    <td style="font-weight: bold;font-size: 14px;padding: 5px;" class="total" align="right">0</td>
                </tr>
            </tfoot>
        </table>`
    
    </div>
    <div class="bottom-btn" style="margin-left: 300px!important">
        <ul>
                <li><a href="javasript:;" onclick="print_this('to_print')"><i class="fa fa-print"></i> Print to Pdf</a></li>
        </ul>
      </div>
@include('layout.receiptfooter')