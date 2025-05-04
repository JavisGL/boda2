<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BodaController extends Controller
{
    public function invitacion()
    {
        // Puedes cambiar la fecha y hora aquí
        $evento = [
            'lugar' => 'Hacienda Santa María, Hidalgo',
            'fecha' => '2025-10-18 17:00:00',
        ];

        return view('invitacion', compact('evento'));
    }
}

