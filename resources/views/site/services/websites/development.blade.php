<x-site-layout>
    <main class="main">
        @include('web.sections.pagetitle', [
            'title' => 'Desarrollo Web Profesional a tu Medida',
            'intro' => 'Soluciones Innovadoras y Eficientes',
            'breadcrumb' => [
                ['name' => 'Home', 'route' => route('home')],
                ['name' => 'Desarrollo de software', 'route' => route('development')],
            ],
        ])
        <!-- Features Section -->
        <section id="features" class="features section">
            <div class="container">
                @include('web.sections.left', [
                    'title' => 'Impulsa tu Negocio con Soluciones Web Personalizadas y de Alto Rendimiento',
                    'paragraph' =>
                        'Desde aplicaciones web complejas hasta soluciones empresariales a medida, nuestro equipo de desarrolladores altamente capacitados te ayudará a convertir tu visión en realidad. Trabajamos con tecnologías de vanguardia como .Net 8, PHP (Laravel, CodeIgniter) y Node.js Express para garantizar resultados de alta calidad.',
                ])
            </div>
        </section><!-- /Features Section -->
        @include('web.sections.faqservice', [
            'title' => 'Servicios',
            'intro' =>
                'Utilizamos metodologías ágiles para garantizar una comunicación fluida y entregas oportunas. Nuestro equipo tiene experiencia en el desarrollo de aplicaciones web complejas, sistemas de gestión de contenido personalizados, plataformas de comercio electrónico y mucho más.',
            'services' => [
                [
                    'name' => '.Net 8 (.Net Core, Blazor)',
                    'text' =>
                        'Desarrollamos aplicaciones web robustas y escalables utilizando la plataforma .Net 8, incluyendo .Net Core y Blazor. Esta tecnología nos permite crear aplicaciones de alto rendimiento con una interfaz de usuario moderna y atractiva. Ideal para aplicaciones empresariales, sistemas de gestión y soluciones que requieren una gran capacidad de procesamiento y seguridad.',
                ],
                [
                    'name' => 'PHP (Laravel, CodeIgniter)',
                    'text' =>
                        'Desarrollamos aplicaciones web dinámicas y flexibles utilizando los frameworks Laravel y CodeIgniter. Estas tecnologías nos permiten crear aplicaciones web de alta calidad con un desarrollo rápido y eficiente. Perfecto para sitios web dinámicos, aplicaciones web personalizadas y plataformas de comercio electrónico.',
                ],
                [
                    'name' => 'Node.js Express',
                    'text' =>
                        'Desarrollamos aplicaciones web en tiempo real y API\'s robustas utilizando Node.js y el framework Express. Esta tecnología nos permite crear aplicaciones web rápidas, escalables y con una gran capacidad de respuesta. Ideal para aplicaciones web en tiempo real, aplicaciones de mensajería, API\'s y soluciones que requieren un alto rendimiento.',
                ],
            ],
        ])
        @include('web.sections.action')
        @include('web.sections.benefits', [
            'benefits' => [
                'Soluciones web personalizadas que se adaptan a tus necesidades y objetivos.',
                'Desarrollo con tecnologías de vanguardia para garantizar un alto rendimiento y escalabilidad.',
                'Equipo de desarrolladores altamente capacitados y con experiencia en proyectos complejos.',
                'Metodologías ágiles para una comunicación fluida y entregas oportunas.',
                'Valoración estándar por hora para un control preciso del presupuesto.',
            ],
        ])
    </main>
</x-site-layout>
