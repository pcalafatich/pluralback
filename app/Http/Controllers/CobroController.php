<?php

namespace App\Http\Controllers;

use App\Models\Cobro;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\CobroResource;
use App\Http\Requests\StoreCobroRequest;

class CobroController extends Controller
{
    use HttpResponses;

    public function index()
    {
        return CobroResource::collection(Cobro::with('comercio')->get());
    }

    public function store(StoreCobroRequest $request)
    {
        $request->validated($request->all());

        $cobro = Cobro::create([
            'comercio_id' => $request->comercio_id,
            'fecha_cobro' => $request->fecha_cobro,
            'importe' => $request->importe,
            'mes_abono' => $request->mes_abono,
            'anio_abono' => $request->anio_abono,
            'ingresado_por' => Auth::user()->id,
        ]);

        return new CobroResource($cobro);

    }

    public function show(Cobro $cobro)
    {

        return new CobroResource($cobro);

    }

    public function update(Request $request, Cobro $cobro)
    {
        $cobro->update($request->all());

        return new CobroResource($cobro);

    }

    public function destroy(Cobro $cobro)
    {

        $cobro->delete();
        return response(null, 204);

    }
}
