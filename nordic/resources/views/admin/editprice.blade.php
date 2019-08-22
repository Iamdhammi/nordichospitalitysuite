@include('layout.admin.header')

    <div class="breadcrumb breadcrumb-1 pos-center bg">
		<h1>EDIT PRICES</h1>
	</div>
	<!-- Content Section -->
	<div class="light-book-form margint60 marginb60 ">
		<div class="container">
                <div class="row pos-center">
                    <div class="reserve-form-area">
                        <div class="pos-center marginb20">
                            {{-- <h2>Reservation Form</h2>
                            <img src="img/shape.png"> --}}
                        </div>
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6 room_price">
                            <form method="post">
                                {{ csrf_field() }}
                                <ul class="clearfix">
                                    <li class="li-input ">
                                        <label>Deluxe Room (&#8358;)</label>
                                        <input type="number" name="deluxe" value="{{$deluxe->price}}" required>
                                        
                                    </li>
                                    <li class="li-input">
                                        <label>Deluxe Balcony (&#8358;)</label>
                                        <input type="number" name="deluxeBalcony" value="{{$deluxeBalcony->price}}" required>
                                        
                                    </li>
                                    <li class="li-input">
                                        <label>Nordic Suite (&#8358;)</label>
                                        <input type="number" name="nordic" value="{{$nordic->price}}"  required>
                                        
                                    </li>
                                    
                                    </li>
                                    <li class="li-input">
                                        <label>Nordic Suite Balcony (&#8358;)</label>
                                        <input type="number" name="nordicBalcony" value="{{$nordicBalcony->price}}"  required>
                                        
                                    </li>
                                    <li class="li-input">
                                        <label>Standard Room (&#8358;)</label>
                                        <input type="number" name="standard" value="{{$standard->price}}"  required>
                                        
                                    </li>

                                    <li class="clearfix">
                                        <div class="button-style-1 clearfix" style="margin-top:50px;">
                                            <button type="submit"><i class="fa fa-file-invoice"></i> Save </button>
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

@include('layout.admin.footer')