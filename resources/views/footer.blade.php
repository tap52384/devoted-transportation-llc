  <footer class="pt-5 pb-2">
      <div class="container">
          <div class="row">
              <div class="col-md-6 text-center text-md-left">
                  <a href="/" title="Devoted Transportation LLC">
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                          x="0px" y="0px" viewBox="0 0 8100 3690" preserveAspectRatio="xMidYMid meet"
                          class="footer-logo">
                          <g id="layer102">
                              <path
                                  d="M720 3629 c68 -64 181 -157 623 -514 147 -119 267 -218 267 -220 0 -2 97 -277 215 -611 119 -335 214 -614 213 -620 -2 -6 -196 -168 -433 -359 -236 -191 -432 -349 -434 -351 -2 -2 599 -4 1336 -4 l1341 0 -63 168 c-34 92 -79 217 -100 277 -20 61 -45 128 -55 150 -9 22 -34 87 -54 145 -21 58 -55 151 -77 206 -21 56 -39 108 -39 116 0 8 -4 18 -9 24 -4 5 -15 29 -24 54 -69 196 -91 256 -98 265 -5 5 -9 16 -9 25 -1 8 -9 33 -20 55 -11 22 -20 47 -20 55 0 8 -9 33 -20 55 -11 22 -19 45 -20 52 0 7 -7 29 -16 50 -9 21 -20 47 -24 58 -4 11 -17 45 -29 75 -26 68 -27 85 -3 75 9 -4 32 -11 51 -15 38 -10 74 -41 140 -125 50 -63 61 -93 434 -1205 21 -63 81 -238 133 -389 52 -151 94 -276 94 -278 0 -1 -673 -3 -1495 -3 l-1494 0 -428 -347 c-406 -328 -576 -466 -597 -485 -6 -4 1815 -8 4045 -8 l4054 1 -30 26 c-16 14 -46 40 -65 57 -19 18 -43 35 -52 39 -10 3 -18 13 -18 22 0 8 -6 15 -13 15 -14 0 -43 22 -126 94 -31 26 -67 56 -81 64 -14 9 -34 27 -45 39 -11 13 -25 23 -30 23 -6 0 -29 17 -51 38 -23 20 -59 51 -80 67 -21 17 -49 40 -61 53 -13 12 -26 22 -29 22 -3 0 -11 6 -18 13 -7 6 -30 26 -52 42 -93 73 -169 137 -172 146 -2 5 -8 9 -14 9 -5 0 -36 20 -67 45 l-58 46 -736 -3 -735 -3 -52 154 c-48 140 -393 1084 -670 1831 -63 168 -117 307 -122 308 -4 2 -6 8 -2 13 3 5 0 9 -6 9 -7 0 -9 7 -6 16 3 8 2 13 -3 9 -5 -3 -18 10 -30 28 -28 46 -134 145 -210 196 -142 97 -369 186 -604 238 l-122 27 -1545 3 -1545 3 65 -61z" />
                              <path
                                  d="M4235 3671 c175 -48 309 -139 386 -258 16 -26 29 -42 29 -36 0 13 -45 80 -79 117 -75 82 -257 178 -362 191 -33 4 -26 1 26 -14z" />
                          </g>
                      </svg>
                      <p class="font-weight-bolder">Devoted Transportation LLC</p>
                  </a>
                  <p>
                      {{-- 123 Anywhere Street<br />
                    Somewhere, NC 27809<br /> --}}
                      <a href="tel:+1{{ $envPhoneNumber }}" title="{{ $envPhoneNumberFmt }}">
                          {{ $envPhoneNumberFmt }}
                      </a><br />
                      <a href="mailto:{{ env('MAIL_USERNAME') }}" title="{{ env('MAIL_USERNAME') }}">
                          {{ env('MAIL_USERNAME') }}
                      </a>
                  </p>
                  <ul class="list-inline ml-2 social-links">
                      <li class="list-inline-item mr-2">
                          <a href="https://www.facebook.com/pg/devotedtrans" title="Facebook">
                              <i class="fa-2x fa fa-facebook "></i>
                          </a>
                      </li>
                      <li class="list-inline-item mr-2">
                          <a href="https://www.instagram.com/devotedtrans/" title="Instagram">
                              <i class="fa-2x fa fa-instagram"></i>
                          </a>
                      </li>
                      <li class="list-inline-item mr-2">
                          <a href="https://www.yelp.com/biz/devotedtrans" title="Yelp">
                              <i class="fa-2x fa fa-yelp"></i>
                          </a>
                      </li>
                  </ul>

              </div> <!-- /.col-md-3 -->
              <div class="col-md-6 text-center text-md-left">
                  <p class="font-weight-bold">Site Links</p>
                  <ul class="list-unstyled">
                    <li>
                        <a href="/" title="Home">
                            Home
                        </a>
                    </li>
                      <li>
                          <a href="/about-us" title="About Us">
                              About Us
                          </a>
                      </li>
                      <li>
                          <a href="/faq" title="FAQ">
                              FAQ
                          </a>
                      </li>
                      <li>
                          <a href="/contact-us" title="Contact Us">
                              Contact Us
                          </a>
                      </li>
                  </ul>
              </div> <!-- /.col-md-3 -->
              {{-- <div class="col-md-4 text-center text-md-left">
                <p class="font-weight-bold">Location - Google Maps</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3227.772466448184!2d-78.94041728429329!3d36.001425780120975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89ace6b201eb327f%3A0xb21f1655ee1ca38d!2sDuke%20University!5e0!3m2!1sen!2sus!4v1579399839704!5m2!1sen!2sus"
                    class="footer-google-maps-iframe"
                    allowfullscreen></iframe>
            </div> <!-- /.col-md-3 --> --}}
          </div> <!-- /.row -->
          <div style="border-top: 1px solid #9e9e9e">
              <p class="small text-center text-md-left">Copyright &copy; {{ date('Y') }} Devoted Transportation LLC. All
                  rights reserved.</p>
          </div>
      </div> <!-- /.container -->
  </footer>

  <script src="{{ asset('js/app.js') }}"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
      window.ga = function () {
          ga.q.push(arguments)
      };
      ga.q = [];
      ga.l = +new Date;
      ga('create', 'UA-XXXXX-Y', 'auto');
      ga('set', 'transport', 'beacon');
      ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>

  </body>

  </html>
