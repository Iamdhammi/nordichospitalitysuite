
<div id="to_print" style=" margin-top: 100px!important; margin-right:300px; margin-left: 300px;font-size: 14px;position: relative;">
    <div id="header" style="height: 30px!important; width: 100%; margin: 20px 0; background: #0c242e; text-align: center; color: white; font: bold 15px ; text-decoration: uppercase; letter-spacing: 20px; padding: 8px 0px;" >RECEIPT</div>
    <div style="position: absolute;top:100px;left: 100px;z-index: -1;font-size: 100px;transform: rotate(-25deg);color: #f7f7f7;font-weight: 600;">PAID</div>
    <div style="position: absolute;top:200px;left: 250px;z-index: -1;font-size: 100px;transform: rotate(-25deg);color: #f7f7f7;font-weight: 600;" >PAID</div>
    <div style="position: absolute;top:300px;right: 120px;z-index: -1;font-size: 100px;transform: rotate(-25deg);color: #f7f7f7;font-weight: 600;">PAID</div>
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
                <td align="left" class="meta-head" style=" text-align: left; background: #0c242e; color: white; padding:2px 5px">Receipt Id</td>
                <td align="right" style="padding:2px 5px"><div id="invoice_ref" ></div></td>
            </tr>
            <tr style="border: 1px solid #000">
                <td align="left" class="meta-head" style=" text-align: left; background: #0c242e; color: white; padding:2px 5px ">Arrival Date</td>
                <td align="right"  style="padding:2px 5px"><div id="arrival_date"></div></td>
            </tr>
            <tr style="border: 1px solid #000">
                <td align="left" class="meta-head" style=" text-align: left; background: #0c242e; color: white;padding:2px 5px ">Departure Date</td>
                <td align="right"  style="padding:2px 5px"><div id="departure_date"></div></td>
            </tr>
            <tr style="border: 1px solid #000">
                <td align="left" class="meta-head" style=" text-align: left; background: #0c242e; color: white;padding:2px 5px ">Amount Due</td>
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
        <thead style="background-color: #0c242e;color: #fff; ">
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
                <td style="font-weight: bold;font-size: 14px;padding: 5px" align="right" id="invoice_amount_due"></td>
            </tr>
            <tr>
                <td style="font-weight: bold;font-size: 14px;padding: 5px" colspan="4"></td>
                <td style="font-weight: bold;font-size: 14px;padding: 5px" align="right">Amount Due &#8358;</td>
                <td style="font-weight: bold;font-size: 14px;padding: 5px; background-color: lightgray" align="right">0</td>
            </tr>
        </tfoot>
    </table>`

</div>