<x-site-layout>
    <main class="main">
        @include('web.sections.pagetitle', [
            'title' => 'Fotografía Profesional',
            'intro' => 'Captura la Esencia de tu Marca, Productos y Eventos',
            'breadcrumb' => [
                ['name' => 'Home', 'route' => route('home')],
                ['name' => 'Tu sitio web', 'route' => route('photo')],
            ],
        ])
        <!-- Features Section -->
        <section id="features" class="features section">
            <div class="container">
                @include('web.sections.left', [
                    'title' => 'Imágenes que Inspiran y Venden: Fotografía Profesional para tu Negocio',
                    'paragraph' =>
                        'Desde fotografías de productos que resaltan sus características hasta la cobertura completa de tus eventos, nuestro equipo de fotógrafos expertos captura la esencia de cada momento y crea imágenes que cuentan historias.',
                ])
            </div>
        </section><!-- /Features Section -->
        @include('web.sections.faqservice', [
            'title' => 'Servicios',
            'intro' =>
                'Creamos sitios web que no solo son visualmente atractivos, sino también funcionales y optimizados para convertir visitantes en clientes.',
            'services' => [
                [
                    'name' => 'Fotografía de Productos',
                    'text' =>
                        'Creamos fotografías de productos de alta calidad que destacan sus detalles, texturas y colores. Ideal para catálogos, tiendas online y material promocional. Fotografías con fondo blanco, ambientadas o con modelos, según tus necesidades.',
                ],
                [
                    'name' => 'Fotografía de Servicios',
                    'text' =>
                        'Capturamos la esencia de tus servicios, mostrando el profesionalismo y la calidad de tu trabajo. Ideal para sitios web, brochures y material de marketing. Fotografías de tus instalaciones, equipo de trabajo y clientes satisfechos.',
                ],
                [
                    'name' => 'Fotografía de Eventos',
                    'text' =>
                        'Documentamos tus eventos corporativos, sociales o culturales, capturando los momentos más importantes y creando recuerdos inolvidables. Cobertura completa del evento, incluyendo fotografías de los asistentes, oradores, presentaciones y momentos especiales.',
                ],
                [
                    'name' => 'Fotografía Publicitaria',
                    'text' =>
                        'Creamos imágenes impactantes para tus campañas publicitarias, transmitiendo tu mensaje de manera creativa y efectiva. Fotografías conceptuales, con modelos o productos, adaptadas a tu público objetivo.',
                ],
                [
                    'name' => 'Fotografía para Redes Sociales',
                    'text' =>
                        'Creamos contenido visual atractivo y de alta calidad para tus redes sociales, aumentando el engagement y la visibilidad de tu marca. Fotografías adaptadas a cada plataforma, con el estilo y la estética de tu marca.',
                ],
                [
                    'name' => 'Retoque y Edición Profesional',
                    'text' =>
                        'Realizamos retoque y edición profesional de todas las fotografías, asegurando la mejor calidad y presentación. Ajuste de color, iluminación, contraste, eliminación de imperfecciones y otros retoques necesarios.',
                ],
            ],
        ])
        @include('web.sections.action')
        @include('web.sections.benefits', [
            'benefits' => [
                'Imágenes de alta calidad que mejoran la presentación de tu marca, productos y servicios.',
                'Fotografías que capturan la esencia de tus eventos y momentos especiales.',
                'Contenido visual atractivo para tus redes sociales y campañas publicitarias.',
                'Equipo de fotógrafos profesionales con experiencia en diferentes áreas.',
                'Servicio personalizado y adaptado a tus necesidades y presupuesto.',
            ],
        ])
    </main>
</x-site-layout>
