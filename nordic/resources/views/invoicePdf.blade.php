
<div id="header">INVOICE</div>
      
      <div id="identity">
      
            
      <div id="address">
        Nordic Hospitality Suites<br>
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
                  <tr>
                      <td class="meta-head">Invoice #</td>
                  <td><div>{{$invoice->invoice_ref}}</div></td>
                  </tr>
                  <tr>
                      <td class="meta-head">Arrival Date</td>
                      <td><div id="arrival_date">{{$invoice->arrival}}</div></td>
                  </tr>
                  <tr>
                      <td class="meta-head">Departure Date</td>
                      <td><div id="departure_date">{{$invoice->depart}}</div></td>
                  </tr>
                  <tr>
                      <td class="meta-head">Amount Due</td>
                      <td><div class="due" id="invoice_total">₦{{$invoice->amount}}</div></td>
                  </tr>
  
              </table>
              <div id="customer-title">
                <h5>BILL TO:</h5>
                  <p><span id="invoice_name">{{$invoice->name}}</span><br>
                  <span id="invoice_email">{{$invoice->email}}</span><br>
                  <span id="invoice_phone">{{$invoice->phone}}</span><br>
              </div>
      
      </div>
      
      <table id="items">
      
        <tr>
            <th>Room type</th>
            <th>Guests</th>
            <th>Unit Cost</th>
            <th>No. of Room(s)</th>
            <th>Price</th>
        </tr>
        
        <tr class="item-row">
            <td class="item-name"><div id="invoice_room_type">{{$invoice->room_type}}</div></td>
            <td class="description"><textarea id="invoice_guests" disabled>{{$invoice->guest}}</textarea></td>
            <td><div class="cost" id="invoice_cost">₦{{$invoice->amount}}</div></td>
            <td><textarea class="qty" id="invoice_room_no" >{{$invoice->room_no}}</textarea></td>
            <td><span class="price" id="invoice_total_price">₦{{$invoice->amount}}</span></td>
        </tr>
        
        <tr>
            <td colspan="2" class="blank"> </td>
            <td colspan="2" class="total-line">Subtotal</td>
            <td class="total-value"><div id="subtotal">₦650.00</div></td>
        </tr>
        <tr>
  
            <td colspan="2" class="blank"> </td>
            <td colspan="2" class="total-line">Total</td>
            <td class="total-value"><div id="total" class="invoice_total_amount">₦{{$invoice->amount}}</div></td>
        </tr>
        <tr>
            <td colspan="2" class="blank"> </td>
            <td colspan="2" class="total-line">Amount Paid</td>
  
            <td class="total-value"><div id="paid">₦0</div></td>
        </tr>
        <tr>
            <td colspan="2" class="blank"> </td>
            <td colspan="2" class="total-line balance">Amount Due</td>
            <td class="total-value balance"><div class="due" id="invoice_amount_due">₦{{$invoice->amount}}</div></td>
        </tr>