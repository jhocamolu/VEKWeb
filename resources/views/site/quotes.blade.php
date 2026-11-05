<x-site-layout>
    <main class="main">
        @include('web.sections.pagetitle', [
            'title' => 'Cotización',
            'intro' => 'Descubre cómo nuestra asesoría y consultoría te guiarán hacia el éxito.',
            'breadcrumb' => [
                ['name' => 'Home', 'route' => route('home')],
                ['name' => 'Cotización', 'route' => route('pricing')],
            ],
        ])
        <!-- Get A Quote Section -->
        <section id="get-a-quote" class="get-a-quote section">

            <div class="container">

                <div class="row g-0" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-5 quote-bg" style="background-image: url({{ asset('assets/img/quote-bg.jpg') }});">
                    </div>

                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
                        <form action="{{ route('cotizacion.enviar') }}" method="post" class="php-email-form">
                            @csrf

                            <!-- Datos del Cliente -->
                            <div class="row gy-4">
                                <div class="col-6">
                                    <input type="text" class="form-control @error('nombre') is-invalid @enderror"
                                        id="nombre" name="nombre" placeholder="Nombre Completo"
                                        value="{{ old('nombre') }}" required>
                                    @error('nombre')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <input type="text" class="form-control" id="empresa"
                                        name="empresa"placeholder="Empresa (opcional)" value="{{ old('empresa') }}">
                                </div>

                                <div class="col-6">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ old('email') }}"
                                        placeholder="Correo Electrónico" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <input type="text" class="form-control @error('telefono') is-invalid @enderror"
                                        id="telefono" name="telefono" value="{{ old('telefono') }}"
                                        placeholder="Teléfono de Contacto" required>
                                    @error('telefono')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <input type="text" class="form-control" id="ciudad" name="ciudad"
                                        placeholder="Ciudad y País" value="{{ old('ciudad') }}">
                                </div>
                            </div>
                            <div class="row gy-4">
                                <!-- Servicios Solicitados -->
                                <div class="col-12">
                                    <label class="form-label">Servicios Solicitados</label>
                                    <div class="row">
                                        @foreach (['Web Marketing', 'Estrategias de Marketing', 'Creación de Sitios Web', 'Desarrollo Web', 'Integraciones con Aplicaciones de Terceros y/o Pasarelas de Pago', 'Consultoría/Asesoría en Implementaciones con Aplicaciones de Terceros', 'Fotografía Profesional', 'Producción de Video', 'Branding', 'Diseño de Material POP', 'Diseño para Publicidad Digital'] as $servicio)
                                            <div class="col-6 form-check">
                                                <input class="form-check-input" type="checkbox" name="servicios[]"
                                                    value="{{ $servicio }}" id="{{ Str::slug($servicio) }}">
                                                <label class="form-check-label"
                                                    for="{{ Str::slug($servicio) }}">{{ $servicio }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" id="detalles" name="detalles" rows="3" placeholder="Detalles del Proyecto">{{ old('detalles') }}</textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Forma de Contacto Preferida</label>
                                @foreach (['Correo Electrónico', 'Teléfono', 'Videollamada'] as $contacto)
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="contacto_preferido"
                                            value="{{ $contacto }}" id="{{ Str::slug($contacto) }}">
                                        <label class="form-check-label"
                                            for="{{ Str::slug($contacto) }}">{{ $contacto }}</label>
                                    </div>
                                @endforeach
                            </div>


                            <div class="col-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>
                                <button type="submit" class="btn btn-primary">Enviar Cotización</button>
                            </div>

                    </div>
                    </form>
                </div><!-- End Quote Form -->

            </div>

            </div>

        </section><!-- /Get A Quote Section -->
    </main>
</x-site-layout>
