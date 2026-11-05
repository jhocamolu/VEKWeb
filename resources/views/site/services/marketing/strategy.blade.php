<x-site-layout>
    <main class="main">
        @include('web.sections.pagetitle', [
            'title' => 'Impulsa tu Crecimiento Online',
            'intro' => 'Maximiza tu Retorno de Inversión',
            'breadcrumb' => [
                ['name' => 'Home', 'route' => route('home')],
                ['name' => 'Estrategias', 'route' => route('strategy')],
            ],
        ])
        <!-- Features Section -->
        <section id="features" class="features section">
            <div class="container">
                @include('web.sections.left', [
                    'title' => 'Transforma tu Presencia Digital',
                    'paragraph' =>
                        '¿Estás buscando aumentar tu visibilidad online, generar más leads y aumentar tus ventas? Nuestras estrategias de marketing digital te ofrecen un enfoque integral para alcanzar el éxito en el entorno digital.',
                ])
            </div>
        </section><!-- /Features Section -->
        @include('web.sections.faqservice', [
            'title' => 'Servicios',
            'intro' =>
                'Una estrategia de marketing bien definida es esencial para alcanzar tus objetivos de negocio.',
            'services' => [
                [
                    'name' => 'Auditoría y Análisis',
                    'text' =>
                        'Realizamos un análisis exhaustivo de tu presencia online, identificando fortalezas, debilidades y oportunidades de mejora. Analizamos a tu competencia y a tu público objetivo para definir la estrategia más efectiva.',
                ],
                [
                    'name' => 'Planificación Estratégica',
                    'text' =>
                        'Desarrollamos un plan de marketing personalizado, definiendo objetivos, estrategias y tácticas para alcanzar tus metas. Establecemos un cronograma de acciones y un presupuesto detallado para optimizar tus recursos.',
                ],
                [
                    'name' => 'Implementación y Gestión',
                    'text' =>
                        'Implementamos las estrategias definidas, gestionando tus campañas de marketing en diferentes canales digitales. Optimizamos tus campañas de manera continua para maximizar su rendimiento y alcanzar los mejores resultados.',
                ],
                [
                    'name' => 'Análisis y Reporte',
                    'text' =>
                        'Realizamos un seguimiento constante de tus resultados, analizando las métricas clave para evaluar el rendimiento de tus campañas. Te proporcionamos informes detallados y recomendaciones para mejorar continuamente tus estrategias.',
                ],
                [
                    'name' => 'Marketing de Contenidos',
                    'text' =>
                        'Creamos contenido relevante y atractivo para tu público objetivo, que te posiciona como un referente en tu sector. Desarrollamos estrategias de contenido para blogs, redes sociales, email marketing y otros canales digitales.',
                ],
                [
                    'name' => 'SEO (Optimización de Motores de Búsqueda)',
                    'text' =>
                        'Optimizamos tu sitio web para mejorar tu posicionamiento en los resultados de búsqueda de Google. Implementamos estrategias de SEO técnico, SEO on-page y SEO off-page para aumentar tu tráfico orgánico.',
                ],
                [
                    'name' => 'SEM (Marketing en Motores de Búsqueda)',
                    'text' =>
                        'Creamos y gestionamos campañas de publicidad en Google Ads y otras plataformas de publicidad online. Optimizamos tus campañas para maximizar tu retorno de inversión (ROI) y generar leads de alta calidad.',
                ],
                [
                    'name' => 'Marketing en Redes Sociales (SMM)',
                    'text' =>
                        'Desarrollamos estrategias de marketing en redes sociales para aumentar tu visibilidad, generar engagement y construir una comunidad online. Gestionamos tus perfiles en redes sociales, creando contenido atractivo y relevante para tu público objetivo.',
                ],
                [
                    'name' => 'Email Marketing',
                    'text' =>
                        'Diseñamos y enviamos campañas de email marketing personalizadas para fidelizar a tus clientes y generar ventas. Segmentamos tu audiencia y automatizamos tus campañas para maximizar su efectividad.',
                ],
            ],
        ])
        @include('web.sections.action')
        @include('web.sections.benefits', [
            'benefits' => [
                'Aumento de la visibilidad online y el tráfico a tu sitio web.',
                'Generación de leads cualificados y aumento de las ventas.',
                'Mejora de la reputación y el reconocimiento de tu marca.',
                'Optimización del retorno de inversión (ROI) de tus campañas de marketing.',
                'Ahorro de tiempo y recursos al delegar la gestión de tus estrategias de marketing.',
            ],
        ])
    </main>
</x-site-layout>
