<x-site-layout>
    <main class="main">
        @include('web.sections.hero')
        @include('web.sections.featservice')
        @include('web.sections.about')
        @include('web.sections.carousel',[
            'title' => 'Una Imagen Visual que Hable por Ti',
            'subtitle' => 'Diseño Gráfico',
            'intro' => 'Nuestro servicio integral de diseño gráfico está pensado para transformar tus ideas en piezas visuales de alto impacto, alineadas con la identidad de tu marca y orientadas a resultados. Ya sea que estés lanzando una marca, promocionando un producto o buscando atraer más clientes, te ayudamos a proyectar una imagen coherente, atractiva y memorable.',
            'items'=>[
                [
                    'title' => 'Branding y Creación de Marca',
                    'icon' => 'bi bi-palette',
                    'holder' => 'Diseño de logo profesional, Desarrollo de identidad visual (colores, tipografía, guías de estilo),Estrategia de branding (posicionamiento, tono de voz, naming y más)',
                    'text' => 'Construimos la identidad visual que define tu negocio. Creamos marcas que inspiran, conectan y perduran en la mente de tus clientes. Desde el diseño de un logo memorable hasta una estrategia completa de branding, desarrollamos todo lo necesario para que tu marca tenga una personalidad fuerte y coherente.',
                    'image' => 'service-1.jpg',
                ],
                [
                    'title' => ' Diseño de Material POP',
                    'icon' => 'fa-solid fa-image',
                    'holder' => 'Displays, exhibidores y señalización, Banners, folletos, flyers y catálogos, Material promocional para eventos, degustaciones y ofertas',//texto imagen
                    'text' => 'Atrae más clientes en el punto de venta. Diseñamos material publicitario para puntos de venta que capta miradas y aumenta las ventas. Desde displays hasta folletos, creamos piezas que reflejan tu marca y potencian tus promociones.',
                    'image' => 'service-2.jpg',
                ],
                [
                    'title' => 'Diseño para Publicidad Digital',
                    'icon' => 'fa-solid fa-object-group',
                    'holder' => 'Anuncios para redes sociales, banners y publicidad programática, Plantillas para email marketing y anuncios para Google Ads, Infografías y contenido visual para captar y retener atención',//texto imagen
                    'text' => 'Convierte clics en resultados con diseño que impacta. Impulsa tus campañas online con anuncios visuales optimizados para cada plataforma. Creamos contenido gráfico que comunica tu mensaje con claridad y eficacia, maximizando tu retorno de inversión.',
                    'image' => 'service-3.jpg',
                ],
            ],
            ])
        @include('web.sections.action')
        @include('web.sections.feature')
        @include('web.sections.faq')
    </main>
</x-site-layout>
