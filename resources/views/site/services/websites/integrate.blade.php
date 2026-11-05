<x-site-layout>
    <main class="main">
        @include('web.sections.pagetitle', [
            'title' => 'Simplifica tus Transacciones y Optimiza tus Procesos',
            'intro' => 'Amplía las Capacidades de tu Negocio Online',
            'breadcrumb' => [
                ['name' => 'Home', 'route' => route('home')],
                ['name' => 'Integraciones', 'route' => route('integrate')],
            ],
        ])
        <!-- Features Section -->
        <section id="features" class="features section">
            <div class="container">
                @include('web.sections.left', [
                    'title' => 'Conecta tu Negocio con el Mundo Digital: Integraciones Seguras y Eficientes',
                    'paragraph' =>
                        'Facilitamos la conexión de tu negocio con las principales pasarelas de pago del mercado, como PayU, OpenPay y Payvalida, así como con una amplia gama de aplicaciones de terceros. Nuestro objetivo es simplificar tus operaciones y brindarte la flexibilidad que necesitas para crecer.',
                ])
            </div>
        </section><!-- /Features Section -->
        @include('web.sections.faqservice', [
            'title' => 'Servicios',
            'intro' =>
                'La capacidad de integrar tu plataforma con diversas aplicaciones y pasarelas de pago es fundamental para ofrecer una experiencia de usuario fluida y segura.',
            'services' => [
                [
                    'name' => 'Integración de Pasarelas de Pago',
                    'text' =>
                        'Implementamos soluciones de pago seguras y confiables, integrando tu plataforma con pasarelas líderes como PayU, OpenPay y Payvalida. Ofrecemos una configuración personalizada que se adapta a tus necesidades y garantiza transacciones fluidas. Facilitamos la aceptación de pagos con tarjetas de crédito, débito, transferencias bancarias y otros métodos populares, ampliando tus opciones de venta y mejorando la experiencia de tus clientes.',
                ],
                [
                    'name' => 'Integración con Aplicaciones de Terceros',
                    'text' =>
                        'Conectamos tu plataforma con una amplia gama de aplicaciones de terceros, como sistemas de gestión de inventario, herramientas de marketing, plataformas de CRM y mucho más. Esto te permite automatizar procesos, mejorar la eficiencia y obtener una visión integral de tu negocio. Integramos su sitio web con sistemas de facturación electronica, sistemas de contabilidad, sistemas de manejo de clientes, etc.',
                ],
                [
                    'name' => 'Desarrollo de APIs Personalizadas',
                    'text' =>
                        'Desarrollamos interfaces de programación de aplicaciones (APIs) personalizadas para conectar tu plataforma con cualquier aplicación o servicio que necesites. Esto te brinda una flexibilidad total y te permite crear soluciones a medida para tu negocio.',
                ],
                [
                    'name' => 'Mantenimiento y Soporte',
                    'text' =>
                        'Ofrecemos servicios de mantenimiento y soporte para garantizar el correcto funcionamiento de tus integraciones. Nuestro equipo está disponible para resolver cualquier problema y realizar actualizaciones cuando sea necesario.',
                ],
            ],
        ])
        @include('web.sections.action')
        @include('web.sections.benefits', [
            'benefits' => [
                'Transacciones seguras y eficientes con las principales pasarelas de pago.',
                'Automatización de procesos y mejora de la eficiencia operativa.',
                'Conexión con herramientas y aplicaciones que potencian tu negocio.',
                'Flexibilidad y personalización para adaptarse a tus necesidades específicas.',
                'Soporte técnico experto para garantizar el correcto funcionamiento de tus integraciones.',
            ],
        ])
    </main>
</x-site-layout>
