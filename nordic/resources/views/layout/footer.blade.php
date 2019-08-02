<div class="footer margint40"><!-- Footer Section -->
    <div class="main-footer">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 col-sm-12">
                <div class="col-lg-4 col-sm-4">
                  <div class="footer-image" >
                    <img alt="Logo" src="{{asset('assets/img/logo-grey.png')}}" class="img-responsive" >
                  </div>
                  <div class="footer-text">
                    <p>
                      Nordic Hospitality is a boutique hotel located in Jabi. We offer 22 unique state of the art rooms furnished in a modern day style 
                      and decorated with designer furniture. Our rooms are ideal for travelers and families who want the best of leisure time
                    </p>
                  </div>
                </div>
                <div class="col-lg-2 col-sm-2">
                    <h5>NORDIC ROOMS</h5>
                    <hr class="footer-hr">
                    <ul class="footer-links">
                      
                    <li><a href="#"><i class="fa fa-angle-right"></i> Deluxe Room</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Deluxe Balcony</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Nordic Suite</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Nordic Suite Balcony</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Standard Room</a></li>
                    
                  </ul>
                </div>
                <div class="col-lg-2 col-sm-2">
                  <h5>LINKS</h5>
                  <hr class="footer-hr">
                  <ul class="footer-links">
                    <li><a href="#"><i class="fa fa-angle-right"></i> Home </a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> About</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Contact</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Gallery</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Terms & Conditions</a></li>
                  </ul>
                </div>
                <div class="col-lg-4 col-sm-4">
                  <h5>CONTACT</h5>
                  <hr class="footer-hr">
                  <ul class="footer-links">
                    <li><p><i class="fa fa-map-marker"></i> No. 14, Patrick O. Bokkor Crescent Jabi, Abuja </p></li>
                    <li><p><i class="fa fa-phone"></i> For Reservation: +2347080266555 </p></li>
                    <li><p><i class="fa fa-envelope"></i> <a href="mailto:info@nordichospitalitysuites.com">info@nordichospitalitysuites.com</a></p></li>
                  </ul>
                </div>
              </div>
            </div>
      </div>
    </div>
    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <div class="pull-left"><p>Nordic Hospitality Suites © Copyright <script>document.write(new Date().getFullYear());</script></p></div>
          <div class="pull-right">
            <ul>
              <li><p>CONNECT WITH US</p></li>
              <li><a><img alt="Facebook" src="{{asset('assets/temp/orkut.png')}}" ></a></li>
              <li><a><img alt="Tripadvisor" src="{{asset('assets/temp/tripadvisor.png')}}" ></a></li>
              <li><a><img alt="Yelp" src="{{asset('assets/temp/hyves.png')}}" ></a></li>
              <li><a><img alt="Twitter" src="{{asset('assets/temp/skype.png')}}" ></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
<!-- JS FILES -->
<script src="{{asset('assets/js/vendor/jquery-1.11.1.min.js')}}"></script>
{{-- <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script> --}}
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/retina-1.1.0.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('assets/js/superfish.pack.1.4.1.js')}}"></script>
<script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('assets/js/selectordie.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{asset('assets/js/jquery.simpleWeather.min.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
{{-- <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script> --}}
<script src="{{asset('assets/js/main.js')}}"></script>
{{-- DataTable --}}
<script>
  $(document).ready( function () {
      $('#roomtable').DataTable({
        "order": [[0, 'asc']],
        "searching": false,
        'destroy': true,
        "lengthChange": false
      });
  } );
</script>
<script>
  function calculate() {
    let arrival = document.querySelector('.arrival').value;
    let depart = document.querySelector('.departure').value;
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let price = document.getElementById('price').value;
    let room_no = document.getElementById('room_no').value;
    let room_type = document.getElementById('room').value;
    let guests = document.getElementById('guests').value;
    let tel = document.getElementById('tel').value;

    if (arrival != "" && depart != "" && name != "" && email != "") {
      let arrivaldate = new Date(arrival);
      let departuredate = new Date(depart);
      let diff = Math.abs(departuredate - arrivaldate)/1000/60/60/24;


      let total = price * diff * room_no;

      //document.getElementById('total').value = total;
      

      let totalprice = parseInt(total) * 100;
      let handler = PaystackPop.setup({
        key: 'pk_test_bbbca00e8ea21f67ffbc2cc8858436c592266f5f',
        email: email,
        amount: totalprice,
        currency: "NGN",
        ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
        metadata: {
          custom_fields: [
              {
                display_name: "Customer Name",
                variable_name: "customer_name",
                value: name
              }, 
              {
                display_name: "Email",
                variable_name: "email",
                value: email
              },
              {
                display_name: "Phone",
                variable_name: "phone",
                value: tel  
              }
          ]
        },
        callback: function(response){
          //console.log(window.location.href);
          //console.log(response);
          let transaction = new Object();
          transaction.name = name;
          transaction.email = email;
          transaction.tel = tel;
          transaction.ref = response.reference;
          transaction.id = response.transaction;
          transaction.room_type = room_type;
          transaction.room_no = room_no;
          transaction.guests = guests;
          transaction.arrival = arrival;
          transaction.depart = depart;
          transaction.total = total;
          //console.log(transaction);
          let _token = $("input[name='_token']").val();
            $.ajax({
              url: window.location.href,
              type: 'POST',
              dataType: 'json',
              data: { _token, transaction },
            
          })
        },
        onClose: function(){
            
        }
      });
      handler.openIframe();

    }
  };
</script>
</body>
</html>