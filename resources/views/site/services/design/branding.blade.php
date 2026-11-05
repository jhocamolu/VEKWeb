<x-site-layout>
    <main class="main">
        @include('web.sections.pagetitle', [
            'title' => 'Branding Profesional para tu Negocio',
            'intro' => 'Diseñamos Marcas que Inspiran y Conectan',
            'breadcrumb' => [
                ['name' => 'Home', 'route' => route('home')],
                ['name' => 'Branding', 'route' => route('branding')],
            ],
        ])
        <!-- Features Section -->
        <section id="features" class="features section">
            <div class="container">
                @include('web.sections.left', [
                    'title' => 'Crea una Marca Inolvidable: Diseño de Logo y Estrategia de Branding Personalizada',
                    'paragraph' =>
                        'Tu marca es la esencia de tu negocio. Va más allá de un simple logo; es la identidad visual que te diferencia de la competencia y conecta con tu público objetivo. Nuestro servicio de branding y creación de logo/marca te ayuda a construir una identidad visual sólida y coherente que transmite tus valores y atrae a tus clientes ideales.',
                ])
            </div>
        </section><!-- /Features Section -->
        @include('web.sections.faqservice', [
            'title' => 'Servicios',
            'intro' =>
                'Desde la creación de un logo memorable hasta el desarrollo de una estrategia de branding completa, nuestro equipo de diseñadores y estrategas te guiará en cada paso del proceso, asegurando que tu marca refleje la personalidad y los objetivos de tu negocio.',
            'services' => [
                [
                    'name' => 'Creación de Logo Profesional',
                    'text' =>
                        'Diseñamos logos únicos y memorables que representan la esencia de tu marca. Consideramos tu público objetivo, valores y objetivos de negocio para crear un logo que destaque en el mercado. Exploramos diferentes estilos y conceptos, desde logos minimalistas y modernos hasta logos clásicos y elegantes.',
                ],
                [
                    'name' => 'Desarrollo de Identidad Visual',
                    'text' =>
                        'Creamos una identidad visual completa que incluye paleta de colores, tipografía, estilo de imágenes y otros elementos visuales. Esto garantiza una imagen de marca coherente en todos los canales de comunicación. Desarrollamos guías de estilo para que puedas mantener la coherencia visual de tu marca.',
                ],
                [
                    'name' => 'Estrategia de Branding',
                    'text' =>
                        'Definimos la personalidad, los valores y el posicionamiento de tu marca. Esto incluye el análisis de tu público objetivo, la competencia y las tendencias del mercado. Desarrollamos un plan de comunicación que incluye mensajes clave, tono de voz y canales de comunicación.',
                ],
                [
                    'name' => 'Diseño de Material de Marketing',
                    'text' =>
                        'Creamos material de marketing coherente con tu identidad visual, incluyendo tarjetas de presentación, brochures, banners, diseño para redes sociales, y más. Adaptamos el diseño a diferentes formatos y plataformas, asegurando la mejor presentación de tu marca.',
                ],
                [
                    'name' => 'Naming y Slogan',
                    'text' =>
                        'Te ayudamos a elegir un nombre y un slogan que reflejen la personalidad y los valores de tu marca. Realizamos investigaciones de mercado y análisis de la competencia para garantizar que el nombre sea único y memorable.',
                ],
            ],
        ])
        @include('web.sections.action')
        @include('web.sections.benefits', [
            'benefits' => [
                'Marca sólida y coherente que te diferencia de la competencia.',
                'Logo memorable que atrae a tu público objetivo.',
                'Material de marketing profesional que transmite tus valores.',
                'Estrategia de branding personalizada para alcanzar tus objetivos de negocio.',
                'Equipo de diseñadores y estrategas con experiencia en branding.',
            ],
        ])
    </main>
</x-site-layout>
