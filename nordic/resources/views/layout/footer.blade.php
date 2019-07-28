<div class="footer margint40"><!-- Footer Section -->
    <div class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-sm-2 footer-logo">
            <img alt="Logo" src="{{asset('assets/img/logo-grey.png')}}" class="img-responsive" >
          </div>
          <div class="col-lg-10 col-sm-10">
            <div class="col-lg-3 col-sm-3">
              <h6>TOUCH WITH US</h6>
              <ul class="footer-links">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Google +</a></li>
                <li><a href="#">otels.com</a></li>
                <li><a href="#">Tripadvisor</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-sm-3">
              <h6>ABOUT NORDIC</h6>
              <ul class="footer-links">
                
                <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Blog SIngle</a></li>
                <li><a href="#">Category grid</a></li>
                <li><a href="#">Category list</a></li>
                
              </ul>
            </div>
            <div class="col-lg-2 col-sm-2">
              <h6>LINKS</h6>
              <ul class="footer-links">
                <li><a href="#">Home </a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Gallery</a></li>
                
              </ul>
            </div>
            <div class="col-lg-4 col-sm-4">
              <h6>CONTACT</h6>
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
          <div class="pull-left"><p>Nordic Hospitality Suites © 2019 | Developed by D'Bel</p></div>
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
{{-- <script src="assets/js/vendor/jquery-1.11.1.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
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
</body>
</html>