<x-site-layout>
    <main class="main">
        @include('web.sections.pagetitle', [
            'title' => 'Diseño para Publicidad Digital',
            'intro' => 'Maximiza tu Impacto Online con Diseño de Publicidad Digital Profesional',
            'breadcrumb' => [
                ['name' => 'Home', 'route' => route('home')],
                ['name' => 'Publicidad Digital', 'route' => route('pop')],
            ],
        ])
        <!-- Features Section -->
        <section id="features" class="features section">
            <div class="container">
                @include('web.sections.left', [
                    'title' => 'Crea Anuncios que Convierten: Diseño para Publicidad Digital Creativo y Efectivo',
                    'paragraph' =>
                        'El diseño juega un papel fundamental para captar la atención de tu audiencia y generar resultados. Nuestro servicio de diseño para publicidad digital te ayuda a crear anuncios visualmente atractivos y estratégicamente diseñados que impulsan tus campañas y maximizan tu retorno de inversión.',
                ])
            </div>
        </section><!-- /Features Section -->
        @include('web.sections.faqservice', [
            'title' => 'Servicios',
            'intro' =>
                'Desde banners y anuncios para redes sociales hasta contenido para email marketing y publicidad en buscadores, nuestro equipo de diseñadores expertos crea piezas visuales que comunican tu mensaje de manera efectiva y generan conversiones.',
            'services' => [
                [
                    'name' => 'Diseño de Banners Publicitarios',
                    'text' =>
                        'Creamos banners publicitarios atractivos y optimizados para diferentes plataformas y formatos. Diseñamos banners estáticos, animados y HTML5 que captan la atención de tu audiencia y generan clics. Banners para display advertising, remarketing y publicidad programática.',
                ],
                [
                    'name' => 'Diseño de Anuncios para Redes Sociales',
                    'text' =>
                        'Diseñamos anuncios visualmente impactantes para Facebook, Instagram, LinkedIn, Twitter y otras redes sociales. Creamos contenido que se adapta a cada plataforma y genera engagement. Anuncios de imagen, video, carrusel y stories.',
                ],
                [
                    'name' => 'Diseño de Contenido para Email Marketing',
                    'text' =>
                        'Creamos plantillas de email atractivas y personalizadas que mejoran la tasa de apertura y clics de tus campañas de email marketing. Diseñamos contenido que comunica tu mensaje de manera efectiva y genera conversiones. Newsletters, emails promocionales, emails transaccionales y más.',
                ],
                [
                    'name' => 'Diseño de Anuncios para Publicidad en Buscadores (SEM)',
                    'text' =>
                        'Diseñamos anuncios visuales para campañas de Google Ads y otras plataformas de publicidad en buscadores. Creamos anuncios que complementan tus anuncios de texto y mejoran el rendimiento de tus campañas. Anuncios de imagen, anuncios de display y anuncios de video para YouTube.',
                ],
                [
                    'name' => 'Diseño de Contenido para Publicidad Nativa',
                    'text' =>
                        'Creamos contenido visual para publicidad nativa que se integra de manera fluida con el contenido editorial de las plataformas. Diseñamos anuncios que generan interés y confianza en tu audiencia. Anuncios de contenido patrocinado, anuncios de recomendación y anuncios in-feed.',
                ],
                [
                    'name' => 'Diseño de Infografías y Contenido Visual',
                    'text' =>
                        'Creamos infografías y contenido visual que comunican información compleja de manera clara y atractiva. Diseñamos piezas visuales que generan engagement y se comparten fácilmente. Infografías informativas, infografías de datos, gráficos y visualizaciones.',
                ],
            ],
        ])
        @include('web.sections.action')
        @include('web.sections.benefits', [
            'benefits' => [
                'Anuncios visualmente atractivos que captan la atención de tu audiencia.',
                'Diseño optimizado para diferentes plataformas y formatos publicitarios.',
                'Aumento del rendimiento de tus campañas publicitarias y del retorno de inversión.',
                'Contenido visual que comunica tu mensaje de manera efectiva y genera conversiones.',
                'Equipo de diseñadores expertos en publicidad digital.',
            ],
        ])
    </main>
</x-site-layout>
