<?php

namespace App\Http\Controllers;

use App\Models\Sucursal;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use App\Http\Resources\SucursalResource;
use App\Http\Requests\StoreSucursalRequest;

class SucursalController extends Controller
{
    use HttpResponses;

    public function index()
    {
        return SucursalResource::collection(Sucursal::all());
    }

    public function store(StoreSucursalRequest $request)
    {
        $request->validated($request->all());

        $sucursale = Sucursal::create([
            'nombre' => $request->nombre,
            'domicilio' => $request->domicilio,
            'localidad_id' => $request->localidad_id,
            'estado' => $request->estado
        ]);

        return new SucursalResource($sucursale);
    }

    public function show(Sucursal $sucursale)
    {
        return new SucursalResource($sucursale);
    }

    public function update(Request $request, Sucursal $sucursale)
    {
        $sucursale->update($request->all());

        return new SucursalResource($sucursale);
    }

    public function destroy(Sucursal $sucursale)
    {
        $sucursale->delete();
        return response(null, 204);
    }
}
