<section class="relative overflow-hidden border-top">
    <div class="container">
        <div class="row g-4">
            <div class="text-center col-lg-6 offset-lg-3">
                <div class="mb-3 subtitle wow fadeInUp">Our Services</div>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">Our Cleaning Services</h2>
                <p class="mb-0 lead wow fadeInUp">Whether it's a quick refresh or a deep clean transformation, our expert
                    touch leaves your home or office shining.</p>
                <div class="spacer-single"></div>
                <div class="spacer-half"></div>
            </div>
        </div>

        <div class="row g-4">

        @foreach ($services as $service)
            <div class="mb-4 col-lg-4 col-sm-6">
                <div class="relative" style="height: 100%;">
                    <a href="{{ route('service.single', $service->slug) }}" class="d-block hover" style="display: block; height: 100%; text-decoration: none;">
                        <div class="relative overflow-hidden rounded-1 shadow-soft" 
                            style="position: relative; overflow: hidden; border-radius: 0.25rem; box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075); height: 100%; display: flex; flex-direction: column;">
                            
                            <div class="absolute text-center text-white z-2 start-0 w-100 abs-middle fs-36"
                                style="position: absolute; top: 50%; left: 0; transform: translateY(-50%); width: 100%; text-align: center; color: white; z-index: 2; font-size: 36px;">
                                <span class="btn-main hover-op-1">Read More</span>
                            </div>
                            
                            <!-- Image Container with Fixed Height -->
                            <div style="height: 250px; width: 100%; position: relative; overflow: hidden;">
                                @if(!empty($service->image) && file_exists(public_path('storage/' . $service->image)))
                                    <img src="{{ asset('storage/' . $service->image) }}"  
                                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;"
                                        onmouseover="this.style.transform='scale(1.2)'"
                                        onmouseout="this.style.transform='scale(1)'"
                                        alt="{{ $service->service_name }}">
                                @else
                                    <img src="{{ asset('frontend/images/placeholder.webp') }}" 
                                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;"
                                        onmouseover="this.style.transform='scale(1.2)'"
                                        onmouseout="this.style.transform='scale(1)'"
                                        alt="{{ $service->service_name }}">
                                @endif
                            </div>
                            
                            <!-- Content Section with Fixed Height -->
                            <div class="bottom-0 p-3 px-4 text-center hover-op-0 abs text-light w-100 overlay-black-1 bg-blur"
                                style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 1rem 1.5rem; text-align: center; color: white; background: rgba(0,0,0,0.5); backdrop-filter: blur(5px); height: 80px; display: flex; align-items: center; justify-content: center;">
                                <h4 style="margin: 0; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $service->service_name }}</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach



        </div>
    </div>
</section>
