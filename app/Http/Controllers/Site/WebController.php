<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CotizacionMail;
use Illuminate\Support\Facades\Log;

class WebController extends Controller
{
    public function enviar(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'telefono' => 'required|string|max:20',
            'servicios' => 'required|array',
            'detalles' => 'nullable|string',
            'contacto_preferido' => 'required|string',
        ]);
        Log::info('$request', $request->all());
        // Envío del correo
        Mail::to('info@vekstudiocreativo.com')->send(new CotizacionMail($request->all()));

        // Redirección con mensaje de éxito
        return redirect()->route('home')->with('success', 'Tu solicitud de cotización ha sido enviada con éxito.');
    }
}
