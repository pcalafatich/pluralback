<?php

namespace App\Http\Controllers;

use App\Models\Comercio;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\ComercioResource;
use App\Http\Requests\StoreComercioRequest;
//use App\Http\Requests\UpdateComercioRequest;

class ComercioController extends Controller
{
    use HttpResponses;

    public function index()
    {
        return ComercioResource::collection(Comercio::all());
    }

    public function store(StoreComercioRequest $request)
    {

        $request->validated();

        $comercio = Comercio::create([
            'denominacion' => $request->denominacion,
            'razon_social' => $request->razon_social,
            'zona' => $request->zona,
            'promotor_id' => $request->promotor_id,
            'logo' => $request->logo,
            'calle' => $request->calle,
            'altura' => $request->altura,
            'piso' => $request->piso,
            'local' => $request->local,
            'telefono' => $request->telefono,
            'localidad_id' => $request->localidad_id,
            'cuit' => $request->cuit,
            'fecha_alta' => $request->fecha_alta,
            'ingresos_brutos' => $request->ingresos_brutos,
            'tasa_descuento' => $request->tasa_descuento,
            'email' => $request->mail,
            'password' => $request->password,
            'web' => $request->web,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'responsable' => $request->responsable,
            'sucursal_id' => $request->sucursal_id,
            'estado' => $request->estado
        ]);

        return new ComercioResource($comercio);
    }

    public function show(Comercio $comercio)
    {
        return new ComercioResource($comercio);
    }

    public function update(Request $request, Comercio $comercio)
    {
        $comercio->update($request->all());

        return new ComercioResource($comercio);

    }

    public function destroy(Comercio $comercio)
    {
        // $comercio = Comercio::find($id);
        // if (is_null($comercio)) {
        //     return response()->json('No se pudo realizar la operación correctamente', 404);
        // }

        $comercio->delete();
        return response(null, 204);


    }

    private function isNotAuthorized($comercio)
    {
        if(Auth::user()->id !== $comercio->user_id) {
            return $this->error('', 'You are not authorized to make this request', 403);
        }
    }
}
