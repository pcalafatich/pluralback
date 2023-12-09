<?php

namespace App\Http\Controllers;

use App\Models\Comercio;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\ComercioResource;
use App\Http\Requests\StoreComercioRequest;

class ComercioController extends Controller
{
    use HttpResponses;

    public function index()
    {
        return ComercioResource::collection(Comercio::all());
    }

    public function store(StoreComercioRequest $request)
    {
        $request->validated($request->all());

        $comercio = new Comercio($request->all());

        $path = $request->logo->store('public/logos');
        $comercio->logo = $path;
        $comercio->save();
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
        $comercio = Comercio::find($comercio);
        if (is_null($comercio)) {
             return response()->json('No se pudo realizar la operación correctamente', 404);
        }

        $comercio->delete();
        return response(null, 204);


    }

    public function datoscomercioapp(Request $request)
    {
        $comercio = Comercio::where('email', $request->email)
                        ->first();
        return $comercio;
    }

    public function validarcomercioapp(Request $request)
    //APP validar comercio
    {
        $comercio = Comercio::where('email', $request->email)
                            ->where('password',$request->password)
                            ->where('estado',1)
                            ->first();
        return $comercio;
    }


    public function agregarcomercioapp(Request $request)
    //APP agregar usuario
    {
        Log::info((json_encode($request)));
        if (is_null($request->logo))
        {
            $request->merge(['logo'=>'no-logo.jpg']);
        }

        $request->merge(['zona'=>1]);
        $request->merge(['promotor_id' =>1]);
        $request->merge(['sucursal_id' => 1]);
        $request->merge(['password' => 12345678]);
        $request->merge(['web' => 'No tiene']);
        $request->merge(['facebook' => 'No tiene']);
        $request->merge(['instagram' => 'No tiene']);
        $request->merge(['twitter' => 'No tiene']);
        $request->merge(['estado' => 1]);

        $comercio = new Comercio([
            'denominacion' => $request->denominacion,
            'razon_social' => $request->razon_social,
            'sucursal_id' => $request->sucursal_id,
            'zona' => $request->zona,
            'promotor_id' => $request->promotor_id,
            'responsable' => $request->responsable,
            'logo' => $request->logo,
            'calle' => $request->calle,
            'altura' => $request->altura,
            'piso' => $request->piso,
            'local' => $request->local,
            'telefono' => $request->telefono,
            'localidad_id' => $request->localidad_id,
            'rubro_id' => $request->localidad_id,
            'cuit' => $request->cuit,
            'fecha_alta' => $request->fecha_alta,
            'ingresos_brutos' => $request->ingresos_brutos,
            'tasa_descuento' => $request->tasa_descuento,
            'email' => $request->email,
            'password' => $request->password,
            'web' => $request->web,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'estado' => $request->estado
        ]);

        $comercio->save();

        return $comercio;
    }

    public function actualizarcomercioapp (Request $request) {

        $comercio_id = $request->comercio_id;

        $comercio = Comercio::find($comercio_id);
        $comercio ->update([
            'telefono' => $request->telefono,
            'tasa_descuento' => $request->tasa_descuento,
            'web' => $request->web,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
        ]);

        return $comercio;
    }

    private function isNotAuthorized($comercio)
    {
        if(Auth::user()->id !== $comercio->user_id) {
            return $this->error('', 'You are not authorized to make this request', 403);
        }
    }
}
