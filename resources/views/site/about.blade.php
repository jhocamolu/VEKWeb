<x-site-layout>
    <main class="main">
        @include('web.sections.pagetitle', [
            'title' => 'Nosotros',
            'intro' => 'Descubre cómo nuestra asesoría y consultoría te guiarán hacia el éxito.',
            'breadcrumb' => [
                ['name' => 'Home', 'route' => route('home')],
                ['name' => 'Nosotros', 'route' => route('about')],
            ],
        ])
        @include('web.sections.about')
        <!-- Features Section -->
        <section id="features" class="features section">
            <div class="container">
                @include('web.sections.left', [
                    'title' => 'Misión',
                    'paragraph' =>
                        'Somos una empresa que contribuye al desarrollo de la sociedad mediante soluciones creativas y tecnológicas empresariales aportando servicios de calidad en beneficio de la sociedad proporcionando una oferta tecnológica, fiable, competitiva e innovadora, adaptada a la realidad de cada cliente.',
                ])
                @include('web.sections.rigth', [
                    'title' => 'Visión',
                    'paragraph' =>
                        'En el 2028 Vek Studio Creativo SAS, será una empresa líder en la prestación de soluciones creativas y tecnológicas, en permanente mejoramiento de sus servicios y desarrollo de su personal, destacándose entre las demás empresas por su calidad de servicio, eficiencia y mayor conocimiento a nivel nacional.',
                ])
            </div>
        </section><!-- /Features Section -->

        @include('web.sections.team')
        @include('web.sections.testimonials')
    </main>
</x-site-layout>
