<section class="bg-light relative no-top no-bottom overflow-hidden">
    <div class="container-fluid position-relative half-fluid">
        <div class="container">
            <div class="row g-4">
                <!-- Image -->
                <div class="col-lg-6 position-lg-absolute left-half h-100">
                    <div class="image" data-bgimage="url(frontend/images/contact.jpg) center"></div>
                </div>
                <!-- Text -->
                <div class="col-lg-6 offset-lg-6">
                    <div class="spacer-single"></div>
                    <div class="spacer-double"></div>
                    <div class="ps-lg-5">
                        <h3>Do you have any question?</h3>

                        <form name="contactForm" class="form-border" method="post"
                            action="{{ route('contact.submit') }}">
                            @csrf
                            <div class="row g-4">
                                <div class="col-md-4 mb-3">
                                    <div class="field-set">
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="field-set">
                                        <input type="text" name="email" id="email" class="form-control"
                                            placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="field-set">
                                        <input type="text" name="phone" id="phone" class="form-control"
                                            placeholder="Your Phone" required>
                                    </div>
                                </div>
                            </div>

                            <div class="field-set mb-4">
                                <textarea name="message" id="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>
                            </div>

                            <div id='submit' class="mt20">
                                <input type='submit' value='Send Message' class="btn btn-primary">
                            </div>

                            @if (session('success'))
                                <div class='success'>
                                    {{ session('success') }}
                                </div>
                            @endif


                            @if ($errors->any())
                                <div class='error'>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif






                        </form>
                    </div>
                    <div class="spacer-double"></div>
                    <div class="spacer-single"></div>
                </div>
            </div>
        </div>
    </div>
</section>
