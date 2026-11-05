<x-site-layout>
    <main class="main">
        @include('web.sections.pagetitle', [
            'title' => 'Diseño de Material POP',
            'intro' => 'Maximiza tu Presencia en el Punto de Venta con Diseño de Material POP Profesional',
            'breadcrumb' => [
                ['name' => 'Home', 'route' => route('home')],
                ['name' => 'Diseño de Material POP', 'route' => route('pop')],
            ],
        ])
        <!-- Features Section -->
        <section id="features" class="features section">
            <div class="container">
                @include('web.sections.left', [
                    'title' => 'Atrae, Impacta y Vende: Diseño de Material POP Creativo y Efectivo',
                    'paragraph' =>
                        'El material POP juega un papel crucial para captar la atención de los clientes y aumentar las ventas. Nuestro servicio de diseño de material POP te ayuda a crear piezas visuales impactantes que destacan tus productos, promociones y marca en el punto de venta.',
                ])
            </div>
        </section><!-- /Features Section -->
        @include('web.sections.faqservice', [
            'title' => 'Servicios',
            'intro' =>
                'Desde displays y banners hasta folletos y exhibidores, nuestro equipo de diseñadores expertos crea material POP que atrae, informa y persuade a tus clientes, impulsando tus ventas y generando reconocimiento de marca.',
            'services' => [
                [
                    'name' => 'Diseño de Displays y Exhibidores',
                    'text' =>
                        'Creamos displays y exhibidores personalizados que destacan tus productos y promociones en el punto de venta. Diseñamos soluciones creativas y funcionales que se adaptan a tus necesidades y espacio disponible. Displays de mostrador, de piso, colgantes, rotativos y más.',
                ],
                [
                    'name' => 'Diseño de Banners y Carteles',
                    'text' =>
                        'Diseñamos banners y carteles llamativos que comunican tus mensajes de manera clara y efectiva. Ideal para promociones, lanzamientos de productos y eventos especiales. Banners publicitarios, roll-ups, carteles informativos y más.',
                ],
                [
                    'name' => 'Diseño de Folletos y Flyers',
                    'text' =>
                        'Creamos folletos y flyers informativos y atractivos que destacan las características y beneficios de tus productos y servicios. Ideal para distribuir en el punto de venta o en eventos promocionales. Folletos plegables, flyers promocionales, catálogos de productos y más.',
                ],
                [
                    'name' => 'Diseño de Material para Promociones',
                    'text' =>
                        'Diseñamos material POP para promociones especiales, como ofertas, descuentos y concursos. Creamos piezas visuales que generan emoción y motivan a la compra. Stickers promocionales, cupones, displays de ofertas y más.',
                ],
                [
                    'name' => 'Diseño de Material para Degustaciones y Eventos',
                    'text' =>
                        'Creamos material POP para degustaciones y eventos, como stands, displays y material promocional. Diseñamos soluciones que atraen a los asistentes y generan interés en tus productos. Stands promocionales, displays de degustación, material informativo y más.',
                ],
                [
                    'name' => 'Diseño de Material para Señalización',
                    'text' =>
                        'Diseñamos material de señalización para el punto de venta, como letreros, indicadores y mapas. Creamos piezas visuales que facilitan la navegación y mejoran la experiencia de compra. Letreros de pasillo, indicadores de productos, mapas de la tienda y más.',
                ],
            ],
        ])
        @include('web.sections.action')
        @include('web.sections.benefits', [
            'benefits' => [
                'Material POP creativo y efectivo que atrae la atención de los clientes.',
                'Diseño personalizado que se adapta a tus necesidades y espacio disponible.',
                'Aumento de las ventas y reconocimiento de marca en el punto de venta.',
                'Material POP de alta calidad que transmite profesionalismo.',
                'Equipo de diseñadores expertos en material POP.',
            ],
        ])
    </main>
</x-site-layout>
