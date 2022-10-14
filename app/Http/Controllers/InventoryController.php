<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Obtener Reservacion
     */
    public function getAll()
    {
        return view('inventory', [
            'Reservations' => Reservation::all()
        ]);
    }
}
