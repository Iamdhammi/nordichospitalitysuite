@include('layout.header')
  {{-- Invoice --}}
    <div class="breadcrumb breadcrumb-1 pos-center bg">
		  <h1>INVOICE</h1>
    </div>
    <div class="col-md-8 col-md-offset-2" style="text-align:center;margin-top:30px">
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
    <div id="page-wrap">
      <div id="to_print">
        <div id="header">INVOICE</div>
      
        <div id="identity">
        
              
        <div id="address">
          <h3>Nordic Hospitality Suites</h3>
          14, Patrick O. Bokkor Crescent,<br>
          Jabi, Abuja.<br>
          Phone: (+234) 708-0266-555
        </div>
    
          <div id="logo">
              <img id="image" src="{{asset('assets/img/logo-grey.png')}}" alt="logo" />
          </div>
        
        </div>
        
        <div style="clear:both"></div>
        
        <div id="customer">
    
                <table id="meta">
                    {{-- <tr>
                        <td class="meta-head">Invoice Id</td>
                        <td><div id="invoice_ref"></div></td>
                    </tr> --}}
                    <tr>
                        <td class="meta-head">Arrival Date</td>
                        <td><div id="arrival_date"></div></td>
                    </tr>
                    <tr>
                        <td class="meta-head">Departure Date</td>
                        <td><div id="departure_date">December 15, 2009</div></td>
                    </tr>
                    <tr>
                        <td class="meta-head">Amount Due (&#8358;)</td>
                        <td><div class="due" id="invoice_total"></div></td>
                    </tr>
    
                </table>
                <div id="customer-title">
                  <h5>BILL TO:</h5>
                    <p><span id="invoice_name"></span><br>
                    <span id="invoice_email"></span><br>
                    <span id="invoice_phone"></span><br>
                </div>
        
        </div>
        
        <table id="items">
        
          <tr>
              <th>Room type</th>
              <th>Guests</th>
              <th>Unit Cost (&#8358;)</th>
              <th>No. of Room(s)</th>
              <th>Price (&#8358;)</th>
          </tr>
          
          <tr class="item-row">
              <td class="item-name"><div id="invoice_room_type"></div></td>
              <td class="description"><textarea id="invoice_guests" disabled></textarea></td>
              <td><textarea class="cost" id="invoice_cost" disabled></textarea></td>
              <td><textarea class="qty" id="invoice_room_no" disabled></textarea></td>
              <td><span class="price" id="invoice_total_price"></span></td>
          </tr>
          
          {{-- <tr>
              <td colspan="2" class="blank"> </td>
              <td colspan="2" class="total-line">Subtotal</td>
              <td class="total-value"><div id="subtotal">₦650.00</div></td>
          </tr> --}}
          <tr>
    
              <td colspan="2" class="blank"> </td>
              <td colspan="2" class="total-line">Total (&#8358;)</td>
              <td class="total-value"><div id="total" class="invoice_total_amount"></div></td>
          </tr>
          <tr>
              <td colspan="2" class="blank"> </td>
              <td colspan="2" class="total-line">Amount Paid (&#8358;)</td>
    
              <td class="total-value"><div id="paid">0</div></td>
          </tr>
          <tr>
              <td colspan="2" class="blank"> </td>
              <td colspan="2" class="total-line balance">Amount Due (&#8358;)</td>
              <td class="total-value balance"><div class="due" id="invoice_amount_due"></div></td>
          </tr>
        
        </table>
      </div>
      <script src="https://js.paystack.co/v1/inline.js"></script>
      {{ csrf_field() }}
      <div class="bottom-btn">
        <ul>
          <li><a href="javasript:;" onclick="calculate()"><i class="fa fa-money-bill"></i> Make Payment</a></li>
        </ul>
      </div>
      {{-- <div id="terms">
        <h5>Terms</h5>
        <textarea>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
      </div> --}}
    
    </div>
    

    {{-- End Invoice --}}
    @include('layout.footer')