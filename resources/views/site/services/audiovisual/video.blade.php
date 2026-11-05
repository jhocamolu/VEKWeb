<x-site-layout>
    <main class="main">
        @include('web.sections.pagetitle', [
            'title' => 'Videos que Impactan y Conectan',
            'intro' => 'Producción de Video para tu Negocio y Presencia Online',
            'breadcrumb' => [
                ['name' => 'Home', 'route' => route('home')],
                ['name' => 'Producción de Video', 'route' => route('video')],
            ],
        ])
        <!-- Features Section -->
        <section id="features" class="features section">
            <div class="container">
                @include('web.sections.left', [
                    'title' => 'Producción de Video Profesional: Da Vida a tu Marca, Productos y Eventos',
                    'paragraph' =>
                        'Desde videos promocionales y corporativos hasta contenido para redes sociales y cobertura de eventos, nuestro equipo de productores y editores expertos te ayudará a contar tu historia de manera creativa y efectiva.',
                ])
            </div>
        </section><!-- /Features Section -->
        @include('web.sections.faqservice', [
            'title' => 'Servicios',
            'intro' =>
                'Creamos sitios web que no solo son visualmente atractivos, sino también funcionales y optimizados para convertir visitantes en clientes.',
            'services' => [
                [
                    'name' => 'Producción de Video de Productos',
                    'text' =>
                        'Creamos videos que muestran tus productos en su mejor luz, destacando sus características, funcionalidades y beneficios. Ideal para tiendas online, catálogos y campañas publicitarias. Videos con tomas detalladas, demostraciones de uso y animaciones para resaltar los aspectos clave de tus productos.',
                ],
                [
                    'name' => 'Producción de Video de Servicios',
                    'text' =>
                        'Presenta tus servicios de manera profesional y atractiva, mostrando el valor que ofreces a tus clientes. Ideal para sitios web, presentaciones y material de marketing. Videos testimoniales, explicativos o demostrativos que transmiten la calidad y el profesionalismo de tus servicios.',
                ],
                [
                    'name' => 'Producción de Video de Eventos',
                    'text' =>
                        'Capturamos la emoción y la energía de tus eventos corporativos, sociales o culturales, creando videos que reviven los momentos más importantes. Cobertura completa del evento, incluyendo entrevistas, presentaciones, momentos destacados y videos resumen.',
                ],
                [
                    'name' => 'Producción de Video para Influencers',
                    'text' =>
                        'Creamos contenido de video atractivo y de alta calidad para influencers, colaboraciones con marcas y campañas en redes sociales. Videos creativos y personalizados que se adaptan al estilo y la audiencia del influencer.',
                ],
                [
                    'name' => 'Video Marketing y Publicidad',
                    'text' =>
                        'Desarrollamos estrategias de video marketing y producimos videos publicitarios que generan impacto y aumentan el reconocimiento de tu marca. Videos para redes sociales, YouTube, anuncios online y campañas de email marketing.',
                ],
                [
                    'name' => 'Edición y Postproducción Profesional',
                    'text' =>
                        'Realizamos edición y postproducción de video de alta calidad, incluyendo corrección de color, efectos visuales, diseño de sonido y animación. Videos con un acabado profesional y una narrativa visual atractiva.',
                ],
            ],
        ])
        @include('web.sections.action')
        @include('web.sections.benefits', [
            'benefits' => [
                'Videos de alta calidad que mejoran la imagen de tu marca y productos.',
                'Contenido de video atractivo para tus redes sociales y campañas publicitarias.',
                'Cobertura profesional de tus eventos y colaboraciones con influencers.',
                'Equipo de producción de video con experiencia en diferentes áreas.',
                'Servicio personalizado y adaptado a tus necesidades y presupuesto.',
            ],
        ])
    </main>
</x-site-layout>
