<?php

namespace App\Http\Controllers;

use App\Models\CobroSucursal;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\CobroSucursalResource;
use App\Http\Requests\StoreCobroSucursalRequest;

class CobroSucursalController extends Controller
{
    use HttpResponses;

    public function index()
    {
        return CobroSucursalResource::collection(CobroSucursal::all());

    }

    public function store(StoreCobroSucursalRequest $request)
    {

        $request->validated($request->all());


        $cobros_sucursale = CobroSucursal::create([
            'comercio_id' => $request->comercio_id,
            'fecha_cobro' => $request->fecha_cobro,
            'importe' => $request->importe,
            'mes_abono' => $request->mes_abono,
            'anio_abono' => $request->anio_abono,
 //         'user_id' => Auth::user()->id,
            'user_id' => $request->user_id
]);

        return new CobroSucursalResource($cobros_sucursale);

    }

    public function show(CobroSucursal $cobros_sucursale)
    {
        return new CobroSucursalResource($cobros_sucursale);

    }

    public function update(Request $request, CobroSucursal $cobros_sucursale)
    {
        $cobros_sucursale->update($request->all());

        return new CobroSucursalResource($cobros_sucursale);

    }

    public function destroy(CobroSucursal $cobros_sucursale)
    {

        $cobros_sucursale->delete();
        return response(null, 204);

    }
}
