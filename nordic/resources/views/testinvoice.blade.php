
<div id="to_print" style="font-size: 14px;position: relative;">
        <div id="header" style=" width: 100%; margin: 20px 0; background: #0c242e; text-align: center; color: white; font: bold 15px ; text-decoration: uppercase; letter-spacing: 20px; padding: 8px 0px;" >Invoice</div>
        
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
                {{-- <td align="right" style="padding-top:20px;" valign="top"><img src="{{asset('assets/img/logo-grey.png')}}" alt="" width="150"/></td> --}}
            </tr>
    
        </table>
    
    
        <div style="margin-top:50px;position:relative">
            <div style="position:absolute;left:0px;">
                <table style="width:300px;padding:5px;" id="meta">
                    {{-- <tr style="border: 1px solid #000">
                        <td align="left" class="meta-head" style=" text-align: left; background-color: #0c242e; color: white; padding:2px 5px">Invoice Id</td>
                        <td align="right" style="padding:2px 5px"><div id="invoice_ref" >{{$invoice->payment_ref}}</div></td>
                    </tr> --}}
                    <tr style="border: 1px solid #000">
                        <td align="left" class="meta-head" style=" text-align: left; background-color: #0c242e; color: white; padding:2px 5px ">Arrival Date</td>
                        <td align="right"  style="padding:2px 5px"><div id="arrival_date">{{$invoice->arrival}}</div></td>
                    </tr>
                    <tr style="border: 1px solid #000">
                        <td align="left" class="meta-head" style=" text-align: left; background-color: #0c242e; color: white;padding:2px 5px ">Departure Date</td>
                        <td align="right"  style="padding:2px 5px"><div id="departure_date">{{$invoice->depart}}</div></td>
                    </tr>
                    <tr style="border: 1px solid #000">
                        <td align="left" class="meta-head" style=" text-align: left; background-color: #0c242e; color: white;padding:2px 5px ">Amount Due</td>
                        <td align="right"  style="padding:2px 5px"><div id="invoice_total" class="due">NGN {{$invoice->amount}}</div></td>
                    </tr>
                </table>
            </div>
            <div style="position:absolute;right:0px; text-align: right">
                <h4 style="margin:0px">BILL TO:</h4>
                <p style="margin:0px; padding: 5px; font-size:16px;"><span id="invoice_name">{{$invoice->name}}</span><br>
                <span id="invoice_email">{{$invoice->email}}</span><br>
                <span id="invoice_phone">{{$invoice->phone}}</span><br>
                </p>
            </div>
        </div>
        
    
        <br/>
    
        <table width="100%" style="margin-top: 150px!important;" id="items">
            <thead style="background-color: #0c242e;color: #fff; ">
            <tr>
                <th style="text-align:right!important;padding: 5px 5px;font-weight:normal">#</th>
                <th style="text-align:right!important;padding: 5px 5px;font-weight:normal">Room Type</th>
                <th style="text-align:right!important;padding: 5px 5px;font-weight:normal">Guests</th>
                <th style="text-align:right!important;padding: 5px 5px;font-weight:normal">Unit Price </th>
                <th style="text-align:right!important;padding: 5px 5px;font-weight:normal">No. of Room(s)</th>
                <th style="text-align:right!important;padding: 5px 5px;font-weight:normal">Total</th>
            </tr>
            </thead>
            <tbody>
            <tr class="item-row">
                <td align="right">1</td>
                <td align="right" id="invoice_room_type">{{$invoice->room_type}}</td>
                <td align="right" id="invoice_guests">{{$invoice->guests}}</td>
                <td align="right" id="invoice_cost">NGN {{$room->price}}</td>
                <td align="right" id="invoice_room_no">{{$invoice->room_no}}</td>
                <td align="right" id="invoice_total_price">NGN {{$invoice->amount}}</td>
            </tr>
            
            </tbody>
    
            <tfoot>
                <tr>
                    <td style="font-weight: bold;font-size: 14px;padding: 5px" colspan="4"></td>
                    <td style="font-weight: bold;font-size: 14px;padding: 5px" align="right">Total</td>
                    <td style="font-weight: bold;font-size: 14px;padding: 5px" align="right" id="invoice_total_amount">NGN {{$invoice->amount}}</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;font-size: 14px;padding: 5px" colspan="4"></td>
                    <td style="font-weight: bold;font-size: 14px;padding: 5px" align="right">Amount Paid</td>
                    <td style="font-weight: bold;font-size: 14px;padding: 5px" align="right" id="invoice_amount_due">0</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;font-size: 14px;padding: 5px" colspan="4"></td>
                    <td style="font-weight: bold;font-size: 14px;padding: 5px" align="right">Amount Due</td>
                    <td style="font-weight: bold;font-size: 14px;padding: 5px; background-color: lightgray" align="right">NGN {{$invoice->amount}}</td>
                </tr>
            </tfoot>
        </table>`
    
    </div>