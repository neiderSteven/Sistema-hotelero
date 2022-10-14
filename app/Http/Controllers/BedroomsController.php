<?php

namespace App\Http\Controllers;

use App\Models\Bedrooms;
use Illuminate\Http\Request;

class BedroomsController extends Controller
{
    /**
     * Obtener habitaciones
     */
    public function getAll()
    {
        return view('bedrooms', [
            'Bedrooms' => Bedrooms::all()
        ]);
    }

    /**
     * Crear Habitacion
     */
    public function create(Request $request)
    {
        try {
            $bedroom = new Bedrooms();
            $bedroom->numberBedroom = $request->numberBedroom;
            $bedroom->numberBeds = $request->numberBeds;
            $bedroom->price = $request->price;

            $bedroom->save();

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
     * Actualizar habitaciones
     */
    public function update(Request $request, $id)
    {
        try {
            $bedroom = Bedrooms::find($id);
            $bedroom->numberBedroom = $request->numberBedroom;
            $bedroom->numberBeds = $request->numberBeds;
            $bedroom->price = $request->price;

            $bedroom->save();

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
     * Eliminar habitaciones
     */
    public function delete($id)
    {
        $bedroom = Bedrooms::findOrFail($id);
        $bedroom->delete();
    
        return back();
    }
}
