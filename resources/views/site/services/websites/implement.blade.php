<x-site-layout>
    <main class="main">
        @include('web.sections.pagetitle', [
            'title' => 'Asesoría Experta para Integraciones Exitosas',
            'intro' => 'Consultoría Personalizada para tu Negocio',
            'breadcrumb' => [
                ['name' => 'Home', 'route' => route('home')],
                ['name' => 'Implementaciones', 'route' => route('implement')],
            ],
        ])
        <!-- Features Section -->
        <section id="features" class="features section">
            <div class="container">
                @include('web.sections.left', [
                    'title' => 'Consultoría Especializada en Implementación de Aplicaciones de Terceros',
                    'paragraph' =>
                        'La integración de aplicaciones de terceros puede ser un desafío, pero también una gran oportunidad para potenciar tu negocio. Nuestro servicio de consultoría te brinda la asesoría experta que necesitas para implementar soluciones de manera eficiente y segura, optimizando tus procesos y maximizando tu retorno de inversión.',
                ])
            </div>
        </section><!-- /Features Section -->
        @include('web.sections.faqservice', [
            'title' => 'Servicios',
            'intro' =>
                'Te guiamos a través del proceso de selección, implementación y gestión de aplicaciones de terceros, asegurando que cada integración se alinee con tus objetivos de negocio y te permita alcanzar el éxito en el entorno digital.',
            'services' => [
                [
                    'name' => 'Análisis de Necesidades y Selección de Aplicaciones',
                    'text' =>
                        'Realizamos un análisis exhaustivo de tus necesidades y procesos de negocio para identificar las aplicaciones de terceros que mejor se adaptan a tus objetivos. Te asesoramos en la selección de las soluciones más adecuadas, considerando factores como funcionalidad, compatibilidad, costo y facilidad de uso.',
                ],
                [
                    'name' => 'Planificación y Diseño de la Implementación',
                    'text' =>
                        'Desarrollamos un plan de implementación detallado, definiendo los pasos, recursos y cronograma necesarios para asegurar una integración exitosa. Diseñamos la arquitectura de la integración, considerando la seguridad, escalabilidad y rendimiento.',
                ],
                [
                    'name' => 'Gestión del Proyecto de Implementación',
                    'text' =>
                        'Gestionamos el proyecto de implementación de principio a fin, coordinando con los proveedores de las aplicaciones de terceros y asegurando que se cumplan los plazos y objetivos establecidos. Te mantenemos informado en cada etapa del proceso, brindándote visibilidad y control.',
                ],
                [
                    'name' => 'Pruebas y Validación de la Integración',
                    'text' =>
                        'Realizamos pruebas exhaustivas para asegurar que la integración funcione correctamente y cumpla con tus requisitos. Validamos la integridad de los datos, la funcionalidad de las aplicaciones y el rendimiento del sistema.',
                ],
                [
                    'name' => 'Capacitación y Soporte',
                    'text' =>
                        'Proporcionamos capacitación a tu equipo para que puedan utilizar las aplicaciones de terceros de manera efectiva. Ofrecemos soporte técnico continuo para resolver cualquier problema y garantizar el correcto funcionamiento de las integraciones.',
                ],
                [
                    'name' => 'Optimización y Mejora Continua',
                    'text' =>
                        'Realizamos un seguimiento constante del rendimiento de las integraciones, identificando oportunidades de mejora y optimizando los procesos para maximizar la eficiencia y el retorno de inversión.',
                ],
            ],
        ])
        @include('web.sections.action')
        @include('web.sections.benefits', [
            'benefits' => [
                'Implementaciones exitosas y eficientes de aplicaciones de terceros.',
                'Optimización de procesos y mejora de la eficiencia operativa.',
                'Reducción de riesgos y costos asociados a las integraciones.',
                'Acceso a asesoría experta y personalizada.',
                'Mayor control y visibilidad sobre el proceso de integración.',
            ],
        ])
    </main>
</x-site-layout>
