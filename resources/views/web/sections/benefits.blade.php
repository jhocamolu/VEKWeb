<!-- Features Section -->
<section id="features" class="features section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <span>Beneficios</span>
        <h2>Beneficios</h2>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4 align-items-center features-item">
            <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                <img src="{{ asset('assets/img/features-1.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                <h3>Destacar y conectar con tu público objetivo es esencial para el éxito</h3>
                <p class="fst-italic">
                    Nuestros servicios están diseñados para brindarte soluciones integrales que impulsarán tu presencia, fortalecerán tu marca y maximizarán tus resultados
                </p>
                <ul>
                    @foreach ($benefits as $benefit)
                    <li><i class="bi bi-check"></i><span> {{ $benefit }}</span></li>
                    @endforeach

                </ul>
            </div>
        </div><!-- Features Item -->

    </div>

</section><!-- /Features Section -->
