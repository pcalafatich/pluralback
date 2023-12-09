<?php

namespace App\Http\Controllers;

use App\Models\Descuento;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Resources\DescuentoResource;
use App\Http\Requests\StoreDescuentoRequest;
use Opcodes\LogViewer\Log as LogViewerLog;
use Illuminate\Support\Carbon;

class DescuentoController extends Controller
{
    use HttpResponses;

    public function index()
    {
        return DescuentoResource::collection(Descuento::paginate(10));
    }

    public function store(StoreDescuentoRequest $request)
    {
Log::info($request);

        $request->validated($request->all());

        $descuento = Descuento::create([
            'comercio_id' => $request->comercio_id,
            'tasa' => $request->tasa,
            'producto' => $request->producto,
            'caducidad' => $request->caducidad,
            'estado' => $request->estado
        ]);

        Log::info($request);

        return new DescuentoResource($descuento);
    }

    public function show(Descuento $descuento)
    {
        return new DescuentoResource($descuento);
    }

    public function update(Request $request, Descuento $descuento)
    {
        $descuento->update($request->all());

        return new DescuentoResource($descuento);
    }

    public function destroy(Descuento $descuento)
    {
        $descuento->delete();
        return response()->json(['mensaje' => ('Descuento eliminado exitosamente')], 200);
    }

    public function descuentosxid($comercio_id)
    {
        return DescuentoResource::collection(Descuento::with('comercio')->where('comercio_id', $comercio_id)->get());
    }

    public function descuentosxlocalidad(Request $request)
    {
        $filter = function ($query) use($request){
            $query->where('id', '=' ,$request->localidad_id);
        };

        $descuentos = Descuento::with(['comercio.localidad' => $filter])
            ->whereHas('comercio.localidad', $filter)
            ->get();

        return DescuentoResource::collection($descuentos);
    }

    public function descuentosxlocalidadrubro(Request $request)
    {
        $filterLocalidad = function ($query) use($request){
            $query->where('id', '=' ,$request->localidad_id);
        };

        $filterRubro = function ($query) use($request){
            $query->where('id', '=' ,$request->rubro_id);
        };


        $descuentos = Descuento::with(['comercio.localidad' => $filterLocalidad, 'comercio.rubro' => $filterRubro ])
            ->whereHas('comercio.localidad', $filterLocalidad)
            ->whereHas('comercio.rubro', $filterRubro)
            ->get();

        return DescuentoResource::collection($descuentos);
    }

}
