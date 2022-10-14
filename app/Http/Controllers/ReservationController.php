<?php

namespace App\Http\Controllers;

use App\Models\Bedrooms;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Obtener Reservacion
     */
    public function getAll()
    {
        return view('reservations', [
            'Bedrooms' => Bedrooms::all(),
            'Reservations' => Reservation::all()
        ]);
    }

    /**
     * Crear Reservacion
     */
    public function create(Request $request)
    {
        try {
            $reservation = new Reservation();
            $reservation->document = $request->document;
            $reservation->numberPeople = $request->numberPeople;
            $reservation->nightNumber = $request->nightNumber;
            $reservation->initialDate = $request->initialDate;
            $reservation->finishDate = $request->finishDate;
            $reservation->id_bedroom = $request->id_bedroom;
            $reservation->price = $request->price;

            $reservation->save();

            return back();
        } catch (\Exception $th) {
            return response()->json([
                'status' => 'ERROR',
                'success' => false,
                'error' => $th
            ]);
        }
    }

    /**
     * Eliminar Reservacion
     */
    public function delete($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return back();
    }
}
