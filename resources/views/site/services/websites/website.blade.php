<x-site-layout>
    <main class="main">
        @include('web.sections.pagetitle', [
            'title' => 'Crea tu Sitio Web Ideal',
            'intro' => 'Soluciones Personalizadas para tu Negocio',
            'breadcrumb' => [
                ['name' => 'Home', 'route' => route('home')],
                ['name' => 'Tu sitio web', 'route' => route('website')],
            ],
        ])
        <!-- Features Section -->
        <section id="features" class="features section">
            <div class="container">
                @include('web.sections.left', [
                    'title' => 'La carta de presentación de tu negocio',
                    'paragraph' =>
                        'Desde sitios web básicos hasta tiendas virtuales completas, ofrecemos soluciones personalizadas que se adaptan a tus necesidades y presupuesto. Impulsa tu presencia online y alcanza tus objetivos de negocio con un sitio web profesional.',
                ])
            </div>
        </section><!-- /Features Section -->
        @include('web.sections.faqservice', [
            'title' => 'Servicios',
            'intro' =>
                'Creamos sitios web que no solo son visualmente atractivos, sino también funcionales y optimizados para convertir visitantes en clientes.',
            'services' => [
                [
                    'name' => 'Sitio Web Básico (HTML Personalizado)',
                    'text' =>
                        'Ideal para negocios que buscan una presencia online sencilla y efectiva. Diseñamos y desarrollamos sitios web HTML personalizados, con estilos Bootstrap para una experiencia de usuario óptima en todos los dispositivos. Perfecto para páginas de presentación de negocios, o profesionales independientes que buscan una presencia sencilla online.',
                ],
                [
                    'name' => 'Sitio Web Dinámico (HTML/PHP Nativo)',
                    'text' =>
                        'Sitios web más robustos y funcionales, desarrollados con HTML o PHP nativo. Perfectos para negocios que requieren funcionalidades personalizadas y una gestión de contenido más dinámica. Ideal para sitios web que necesitan formularios de contacto avanzados, galerías de imágenes interactivas o sistemas de gestión de contenido simples.',
                ],
                [
                    'name' => 'Landing Page con CMS (WordPress - Plantilla Gratuita)',
                    'text' =>
                        'Landing pages efectivas para campañas de marketing o lanzamientos de productos. Utilizamos WordPress con plantillas gratuitas, configurando perfiles de usuario, categorías, artículos y galerías de imágenes. Solución rápida y económica para promocionar productos o servicios específicos y generar leads.',
                ],
                [
                    'name' => 'Sitio Web con CMS y Tienda Virtual (WordPress - Plantilla Gratuita)',
                    'text' =>
                        'Combina la potencia de WordPress con la funcionalidad de una tienda virtual. Ideal para negocios que quieren vender productos o servicios online. Configuramos todo lo necesario para que empieces a vender de inmediato. Incluye configuración de productos, métodos de pago, envío y gestión de inventario.',
                ],
                [
                    'name' => 'Landing Page con CMS (WordPress - Plantilla Premium)',
                    'text' =>
                        'Landing pages con diseños exclusivos y funcionalidades avanzadas. Utilizamos plantillas Premium de WordPress para crear experiencias de usuario impactantes y aumentar las conversiones. Ideal para campañas de marketing de alto impacto y negocios que buscan una imagen de marca premium.',
                ],
                [
                    'name' => 'Sitio Web con CMS y Tienda Virtual (WordPress - Plantilla Premium)',
                    'text' =>
                        'Tiendas virtuales de alto rendimiento con diseños personalizados y funcionalidades avanzadas. Utilizamos plantillas Premium de WordPress y las mejores extensiones de comercio electrónico. Ofrece una experiencia de compra online excepcional y aumenta tus ventas.',
                ],
                [
                    'name' => 'Mantenimiento de Sitio Web por Hora (Opcional)',
                    'text' =>
                        'Ofrecemos soporte técnico y mantenimiento para garantizar el correcto funcionamiento de tu sitio web. Solución flexible y económica para resolver problemas técnicos, actualizar contenido o realizar mejoras. Paga solo por las horas de mantenimiento que necesites.',
                ],
            ],
        ])
        @include('web.sections.action')
        @include('web.sections.benefits', [
            'benefits' => [
                'Sitios web profesionales y atractivos que generan confianza y credibilidad.',
                'Soluciones personalizadas que se adaptan a tus necesidades y presupuesto.',
                'Optimización para motores de búsqueda (SEO) para aumentar la visibilidad online.',
                'Diseño responsive para una experiencia de usuario óptima en todos los dispositivos.',
                'Soporte técnico y mantenimiento para garantizar el funcionamiento continuo de tu sitio web.',
            ],
        ])
    </main>
</x-site-layout>
