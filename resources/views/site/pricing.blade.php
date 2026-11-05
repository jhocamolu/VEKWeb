<x-site-layout>
    <main class="main">
        @include('web.sections.pagetitle', [
            'title' => 'Planes',
            'intro' => 'Descubre cómo nuestra asesoría y consultoría te guiarán hacia el éxito.',
            'breadcrumb' => [
                ['name' => 'Home', 'route' => route('home')],
                ['name' => 'Planes', 'route' => route('pricing')],
            ],
        ])
        @include('web.sections.pricing')
        <!-- Features Section -->
        <section id="features" class="features section">
            <div class="container">
                @include('web.sections.left', [
                    'title' => 'PLAN EMPRENDEDOR',
                    'paragraph' =>
                        'Este plan es perfecto para aquellos que están iniciando su negocio y buscan establecer una identidad sólida en el mercado digital. Incluye el diseño de identidad corporativa completo, abarcando la marca y el manual de uso, así como la implementación de un sitio web básico para dar a conocer tu negocio en línea.',
                ])
                @include('web.sections.rigth', [
                    'title' => 'PLAN CAMPAÑA',
                    'paragraph' =>
                        'Ideal para quienes desean lanzar una campaña de marketing efectiva y enfocada en redes sociales. Este plan ofrece el diseño de identidad corporativa, la creación de un plan estratégico de marketing y la maquetación de imágenes optimizadas para redes sociales, asegurando una presencia impactante en el mundo digital.',
                ])

                @include('web.sections.left', [
                    'title' => 'PLAN INFLUENCER',
                    'paragraph' =>
                        'Diseñado para aquellos que buscan destacar su marca personal y conectar con su audiencia a través de contenido visual de alta calidad. Incluye el diseño de la identidad de la marca, una sesión fotográfica profesional y la maquetación de imágenes atractivas para redes sociales.',
                ])
                @include('web.sections.rigth', [
                    'title' => 'PLAN FULL',
                    'paragraph' =>
                        'El paquete completo para quienes buscan una presencia digital integral y poderosa. Este plan combina todos los servicios anteriores, incluyendo el diseño de identidad de marca, sesión fotográfica, maquetación de imágenes para redes sociales, plan estratégico de marketing y el diseño e implementación de un sitio web básico.',
                ])
            </div>
        </section><!-- /Features Section -->
        @include('web.sections.testimonials')
    </main>
</x-site-layout>
