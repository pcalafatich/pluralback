<?php

namespace App\Http\Controllers;

use App\Models\Localidad;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use App\Http\Resources\LocalidadResource;
use App\Http\Requests\StoreLocalidadRequest;

class LocalidadController extends Controller
{
    use HttpResponses;

    public function index()
    {
        return LocalidadResource::collection(Localidad::with('provincia')->get());
    }

    public function store(StoreLocalidadRequest $request)
    {
        $request->validated($request->all());

        $localidade = Localidad::create([
            'nombre' => $request->nombre,
            'provincia_id' => $request->provincia_id,
            'codigo_postal' => $request->codigo_postal
        ]);

        return new LocalidadResource($localidade);

    }

    public function show(Localidad $localidade)
    {

        return new LocalidadResource($localidade);

    }

    public function update(Request $request, Localidad $localidade)
    {
        $localidade->update($request->all());

        return new LocalidadResource($localidade);

    }

    public function destroy(Localidad $localidade)
    {

        $localidade->delete();
        return response(null, 204);

    }
}
