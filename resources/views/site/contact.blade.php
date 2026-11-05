<x-site-layout>
    <main class="main">
        @include('web.sections.pagetitle', [
            'title' => 'Contacto',
            'intro' => 'Descubre cómo nuestra asesoría y consultoría te guiarán hacia el éxito.',
            'breadcrumb' => [
                ['name' => 'Home', 'route' => route('home')],
                ['name' => 'Planes', 'route' => route('pricing')],
            ],
        ])
         <!-- Contact Section -->
    <section id="contact" class="contact section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
               <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1989.033303513144!2d-75.15035846126831!3d4.398638998893898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNMKwMjMnNTUuMSJOIDc1wrAwOCc1Ni43Ilc!5e0!3m2!1ses!2sco!4v1743211246059!5m2!1ses!2sco" style="border:0; width: 100%; height: 270px;"allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->

          <div class="row gy-4">

            <div class="col-lg-4">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Dirección</h3>
                  <p>CRA 51 SUR # 142-30, La Arboleda Mz 10 Cs 10</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Llama/Escribe</h3>
                  <p>+57 313 899 36 70</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Correo Electronico</h3>
                  <p>info@vekstudiocreativo.com</p>
                </div>
              </div><!-- End Info Item -->

            </div>

            <div class="col-lg-8">
              <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Nombre" required="">
                  </div>

                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Correo Electronico" required="">
                  </div>

                  <div class="col-md-12">
                    <input type="text" class="form-control" name="subject" placeholder="Asunto" required="">
                  </div>

                  <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Mensaje" required=""></textarea>
                  </div>

                  <div class="col-md-12 text-center">
                    <div class="loading">Cargando</div>
                    <div class="error-message"></div>
                    <div class="sent-message">tu mensaje fue enviado.¡Gracias!</div>

                    <button type="submit">Enviar</button>
                  </div>

                </div>
              </form>
            </div><!-- End Contact Form -->

          </div>

        </div>

      </section><!-- /Contact Section -->
    </main>
</x-site-layout>
