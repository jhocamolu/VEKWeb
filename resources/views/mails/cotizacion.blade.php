<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nueva Solicitud de Cotización</title>
</head>
<body>
    <h2>Nueva Solicitud de Cotización</h2>
    <p><strong>Nombre:</strong> {{ $data['nombre'] }}</p>
    <p><strong>Correo Electrónico:</strong> {{ $data['email'] }}</p>
    <p><strong>Teléfono:</strong> {{ $data['telefono'] }}</p>
    <p><strong>Empresa:</strong> {{ $data['empresa'] ?? 'No especificado' }}</p>
    <p><strong>Ciudad y País:</strong> {{ $data['ciudad'] ?? 'No especificado' }}</p>
    <p><strong>Servicios Solicitados:</strong></p>
    <ul>
        @foreach($data['servicios'] as $servicio)
            <li>{{ $servicio }}</li>
        @endforeach
    </ul>
    <p><strong>Detalles del Proyecto:</strong> {{ $data['detalles'] ?? 'No especificado' }}</p>
    <p><strong>Presupuesto Aproximado:</strong> {{ $data['presupuesto'] ?? 'No especificado' }}</p>
    <p><strong>Forma de Contacto Preferida:</strong> {{ $data['contacto_preferido'] }}</p>
    <br>
    <p>Gracias por usar nuestros servicios.</p>
</body>
</html>
