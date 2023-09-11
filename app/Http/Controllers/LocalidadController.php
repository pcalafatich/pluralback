<?php

namespace App\Http\Controllers;

use App\Models\Localidad;
use Illuminate\Http\Request;

class LocalidadController extends Controller
{

    public function index()
    {
        return Localidad::all();
    }


    public function store(Request $request)
    {
        $request->validate([
            'localidad' => 'required',
            'id_provincia' => 'required',
            'codigo_postal' => 'required',
        ]);

        $localidad = new Localidad;
        $localidad->localidad = $request->localidad;
        $localidad->id_provincia = $request->id_provincia;
        $localidad->codigo_postal = $request->codigo_postal;

        $localidad->save();

        return $localidad;
    }

    public function show(Localidad $localidade)
    {

        return $localidade;
    }

    public function update(Request $request, Localidad $localidade)
    {
        $request->validate([
            'localidad' => 'required',
            'id_provincia' => 'required',
            'codigo_postal' => 'required'
        ]);

        $localidade->localidad = $request -> localidad;
        $localidade->id_provincia = $request->id_provincia;
        $localidade->codigo_postal = $request->codigo_postal;
        $localidade->update();

        return $localidade;

    }

    public function destroy($id)
    {
        $localidad = Localidad::find($id);
        if (is_null($localidad)) {
            return response()->json('No se pudo realizar la operación correctamente', 404);
        }

        $localidad->delete();
        return response()->noContent();
    }
}
