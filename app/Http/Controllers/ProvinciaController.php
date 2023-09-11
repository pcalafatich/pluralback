<?php

namespace App\Http\Controllers;

use App\Models\Provincia;
use Illuminate\Http\Request;

class ProvinciaController extends Controller
{

    public function index()
    {
        return Provincia::all();
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
        ]);

        $provincia = new Provincia;
        $provincia->nombre = $request -> nombre;
        $provincia->save();

        return $provincia;

    }


    public function show(Provincia $provincia)
    {
        return $provincia;
    }

    public function update(Request $request, Provincia $provincia)
    {
        $request->validate([
            'nombre' => 'required',
        ]);

        $provincia->nombre = $request -> nombre;
        $provincia->update();

        return $provincia;
    }


    public function destroy($id)
    {
        $provincia = Provincia::find($id);
        if (is_null($provincia)) {
            return response()->json('No se pudo realizar la operación correctamente', 404);
        }

        $provincia->delete();
        return response()->noContent();
    }
}
