  <!-- footer begin -->
<footer class="section-dark" style="background-color: #06362D;">
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
                            <h3 style="color: #ffffff;">Contact Info</h3>


                            <div class="text-white fw-bold"><i class="icofont-ui-call me-2 id-color-2"></i>Call / WhatsApp</div>
                            <a href="tel:+94756745331" class="text-white footer-contact-link">+94 75 674 53 31</a><br>
                            <a href="https://wa.me/94768002660" class="text-white footer-contact-link">+94 76 800 26 60 (WhatsApp)</a>

                            <div class="spacer-20"></div>

                            <div class="text-white fw-bold"><i class="icofont-envelope me-2 id-color-2"></i>Email</div>
                            <a href="mailto:Info@ceylongreenclean.com" class="text-white footer-contact-link">Info@ceylongreenclean.com</a>
                            <div class="spacer-20"></div>

                            <div class="text-white fw-bold"><i class="icofont-location-pin me-2 id-color-2"></i>Office Location</div>
                            No.25, Linkwood place, Wehera,<br>
                            Kurunegala, Sri Lanka.
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

<!-- WhatsApp Floating Widget -->
<a href="https://wa.me/94768002660" target="_blank" rel="noopener noreferrer" class="whatsapp-float" aria-label="Chat on WhatsApp">
    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#fff" viewBox="0 0 24 24">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
    </svg>
</a>

<style>
    .whatsapp-float {
        position: fixed;
        bottom: 25px;
        right: 25px;
        width: 46px;
        height: 46px;
        background-color: #128C7E;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        transition: background-color 0.3s ease;
    }

    .whatsapp-float:hover {
        background-color: #0e7a6d;
    }
</style>
