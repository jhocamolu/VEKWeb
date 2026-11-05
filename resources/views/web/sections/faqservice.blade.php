<!-- Faq Section -->
<section id="faq" class="faq section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <span>{{ $title }}</span>
        <h2>{{ $title }}</h2>
        <p>{{ $intro }}</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-10">

                <div class="faq-container">

                    @foreach ($services as $service)
                    <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                        <i class="faq-icon bi bi-check"></i>
                        <h3>{{ $service['name'] }}</h3>
                        <div class="faq-content">
                            <p>{{ $service['text'] }}</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->
                    @endforeach


                </div>

            </div>

        </div>

    </div>

</section><!-- /Faq Section -->
