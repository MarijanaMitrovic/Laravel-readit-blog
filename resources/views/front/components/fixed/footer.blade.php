<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="logo"><a href="#">Read<span>it</span>.</a></h2>

              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>

          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Information</h2>
                <ul class="list-unstyled">
                    <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Documentation</a></li>
                    <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Github</a></li>

                </ul>

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script>  by Marijana Mitrovic <br/> template by: <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script>
    const BASE_URL = '{{ url("/") }}';
    const TOKEN = '{{ csrf_token() }}';
</script>
  <script src="{{asset ("js/jquery.min.js") }}"></script>
  <script src= "{{asset ("js/jquery-migrate-3.0.1.min.js") }}" ></script>
  <script src="{{asset ("js/popper.min.js") }}"></script>
  <script src="{{asset ("js/bootstrap.min.js") }}"></script>
  <script src="{{asset ("js/jquery.easing.1.3.js") }}"></script>
  <script src="{{asset ("js/jquery.waypoints.min.js") }}"></script>
  <script src="{{asset ("js/jquery.stellar.min.js") }}"></script>
  <script src="{{asset ("js/owl.carousel.min.js") }}"></script>
  <script src="{{asset ("js/jquery.magnific-popup.min.js") }}"></script>
  <script src="{{asset ("js/aos.js") }}"></script>
  <script src="{{asset ("js/jquery.animateNumber.min.js") }}"></script>
  <script src="{{asset ("js/scrollax.min.js") }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
 
  <script src="{{asset ("js/main.js") }}"></script>
@yield('scripts');
    
  </body>
</html>