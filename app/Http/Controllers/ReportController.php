<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Obtener Reservacion
     */
    public function getAll()
    {
        return view('report', [
            'Reservations' => Reservation::all()
        ]);
    }
}
