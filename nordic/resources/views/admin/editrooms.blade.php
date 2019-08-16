@include('layout.admin.header')

    <div class="breadcrumb breadcrumb-1 pos-center bg">
		<h1>EDIT ROOMS</h1>
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
                        <div class="col-lg-6">
                            <form method="post">
                                {{ csrf_field() }}
                                <ul class="clearfix">
                                    <li class="li-input">
                                        <label>Deluxe Room (No. of Rooms Available)</label>
                                        {{-- <input type="text" id="name" name="name" required> --}}
                                        <select id="guests" name="deluxe" class="pretty-select" required>
                                            <option selected="selected" value="{{$no_deluxe->room_no}}">{{$no_deluxe->room_no}}</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </li>
                                    <li class="li-input">
                                        <label>Deluxe Balcony (No. of Rooms Available)</label>
                                        {{-- <input type="email" id="email" name="email" required> --}}
                                        <select id="guests" name="deluxeBalcony" class="pretty-select" required>
                                            <option selected="selected" value="{{$no_deluxeBalcony->room_no}}">{{$no_deluxeBalcony->room_no}}</option>
                                            {{-- <option selected="selected" value="1">1</option> --}}
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </li>
                                    <li class="li-input">
                                        <label>Nordic Suite (No. of Rooms Available)</label>
                                        {{-- <input type="tel" id="tel" name="tel" required> --}}
                                        <select id="guests" name="nordic" class="pretty-select" required>
                                            <option selected="selected" value="{{$no_nordic->room_no}}">{{$no_nordic->room_no}}</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </li>
                                    
                                    </li>
                                    <li class="li-input">
                                        <label>Nordic Suite Balcony (No. of Rooms Available)</label>
                                        <select id="guests" name="nordicBalcony" class="pretty-select" required>
                                            <option selected="selected" value="{{$no_nordicBalcony->room_no}}">{{$no_nordicBalcony->room_no}}</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </li>
                                    <li class="li-input">
                                        <label>Standard Room (No. of Rooms Available)</label>
                                        <select id="guests" name="standard" class="pretty-select" required>
                                            <option selected="selected" value="{{$no_standard->room_no}}">{{$no_standard->room_no}}</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
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