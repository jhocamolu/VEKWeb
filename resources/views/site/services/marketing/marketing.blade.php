<x-site-layout>
    <main class="main">
        @include('web.sections.pagetitle', [
            'title' => 'Contenido Web Estratégico',
            'intro' => 'Atrae, Engancha y Vende',
            'breadcrumb' => [
                ['name' => 'Home', 'route' => route('home')],
                ['name' => 'Web Marketing', 'route' => route('marketing')],
            ],
        ])
        <!-- Features Section -->
        <section id="features" class="features section">
            <div class="container">
                @include('web.sections.left', [
                    'title' => 'El contenido es el REY',
                    'paragraph' =>
                        '¿Sabías que el 90% de los consumidores buscan información online antes de comprar? Asegúrate de que tu negocio destaque con contenido web optimizado y relevante. Te ayudamos a crear textos que atraigan tráfico, generen confianza y aumenten tus ventas.',
                ])
            </div>
        </section><!-- /Features Section -->
        @include('web.sections.faqservice', [
            'title' => 'Servicios',
            'intro' =>
                'Necesitas textos que conecten con tu audiencia, que transmitan tu mensaje de forma clara y que impulsen tus objetivos de negocio.',
            'services' => [
                [
                    'name' => 'Redacción SEO',
                    'text' =>
                        'Creamos textos optimizados para motores de búsqueda (SEO) que mejoran tu posicionamiento en Google y atraen tráfico orgánico de calidad.',
                ],
                [
                    'name' => 'Copywriting Persuasivo',
                    'text' =>
                        'Desarrollamos textos persuasivos que conectan con tu audiencia, generan interés y los motivan a realizar una acción (compra, suscripción, contacto).',
                ],
                [
                    'name' => 'Contenido para Blogs y Artículos',
                    'text' =>
                        'Creamos contenido de valor para tu blog, que te posiciona como un referente en tu sector y atrae a tu público objetivo.',
                ],
                [
                    'name' => 'Contenido para Redes Sociales',
                    'text' =>
                        'Adaptamos tu mensaje a cada plataforma social, creando textos atractivos que generan engagement y viralidad.',
                ],
                [
                    'name' => 'Contenido para Email Marketing',
                    'text' =>
                        'Diseñamos emails persuasivos que captan la atención de tus suscriptores y los impulsan a la acción.',
                ],
                [
                    'name' => 'Creación de Contenido para Páginas Web',
                    'text' =>
                        'Creamos contenido para cada sección de tu página web, desde la página de inicio, hasta la página de contacto, logrando que el usuario tenga una experiencia completa y exitosa.',
                ],
            ],
        ])
        @include('web.sections.action')
        @include('web.sections.benefits', [
            'benefits' => [
                'Mayor visibilidad online: Aparece en los primeros resultados de búsqueda y atrae más tráfico a tu web.',
                'Aumento del engagement: Conecta con tu audiencia y genera interacciones positivas en tus redes sociales.',
                'Mejora de la reputación: Posiciónate como un experto en tu sector y genera confianza en tus clientes.',
                'Incremento de las ventas: Convierte tus visitas en clientes y aumenta tus ingresos.',
                'Ahorro de tiempo y recursos: Delega la creación de contenido en manos de profesionales y enfócate en tu negocio.',
            ],
        ])
    </main>
</x-site-layout>
