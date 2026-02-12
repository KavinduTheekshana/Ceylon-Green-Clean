  <!-- footer begin -->
  <footer class="section-dark">
      <div class="container">
          <div class="row gx-5">
              <div class="col-lg-4 col-sm-6">
                  <img src="{{ asset('frontend/images/ceylongreenclean.webp') }}" class="w-250px" alt="">
                  <div class="spacer-20"></div>
                  <p>We are a team of passionate cleaning experts who take pride in delivering the highest standard of
                      service. With years of experience in the industry, we’ve perfected our cleaning methods to ensure
                      every job is done right.</p>

                  {{-- <div class="social-icons mb-sm-30">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-discord"></i></a>
                    <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div> --}}
              </div>
              <div class="col-lg-4 col-sm-12 order-lg-1 order-sm-2">
                  <div class="row">
                      <div class="col-lg-4 col-sm-6">
                          <div class="widget">
                              <h5>Company</h5>
                              <ul>
                                  <li><a href="{{route('/')}}">Home</a></li>
                                  <li><a href="{{route('about')}}">About Us</a></li>
                                  <li><a href="{{route('how')}}">How It Works</a></li>
                                  <li><a href="{{route('services')}}">Services</a></li>
                                  <li><a href="{{route('contact')}}">Contact</a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-lg-8 col-sm-6">
                          <div class="widget">
                              <h5>Our Services</h5>
                              <ul>
                                  @foreach ($services->take(5) as $service)
                                      <p>{{ $service->service_name }}</p>
                                  @endforeach
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-6 order-lg-2 order-sm-1">
                  <div class="widget">
                      <div class="text-white fw-bold"><i class="icofont-wall-clock me-2 id-color-2"></i>We're Open</div>
                      Monday - Saturday 08.00 - 18.00

                      <div class="spacer-20"></div>

                      <div class="text-white fw-bold"><i class="icofont-location-pin me-2 id-color-2"></i>
                          Locations</div>
                          Derby, Nottingham, Leicester, Sheffield, Birmingham, Loughborough

                      <div class="spacer-20"></div>

                      <div class="text-white fw-bold"><i class="icofont-envelope me-2 id-color-2"></i>Send a Message
                      </div>
                      contact@ceylondeepcleaners.co.uk
                  </div>
              </div>
          </div>
      </div>
      <div class="subfooter">
          <div class="container">
              <div class="row g-4">
                  <div class="col-md-12">
                      <div class="de-flex">
                        <div class="col-lg-5 col-12">
                            <p class="copyright" style="margin-bottom: 4px;">Copyright &copy; <?= date('Y') ?> Ceylon Green Cleaners. All rights reserved.</p>
                            <p style="color: #999; font-size: 13px; margin: 0 0 0 0;">
                                Design &amp; Developed by 
                                <a href="https://creatxsoftware.com/" target="_blank" rel="noopener noreferrer" 
                                style="color: #999; text-decoration: none; font-weight: 500; transition: color 0.3s ease;">
                                    CreatX Software
                                </a>
                            </p>
                        </div>
                          {{-- <ul class="menu-simple">
                              <li><a href="#">Terms &amp; Conditions</a></li>
                              <li><a href="#">Privacy Policy</a></li>
                          </ul> --}}
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- footer close -->
