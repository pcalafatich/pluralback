<?php

namespace App\Http\Controllers;

use App\Models\MobileUser;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\MobileUserResource;
use App\Http\Requests\StoreMobileUserRequest;
use Illuminate\Support\Facades\Log;

class MobileUserController extends Controller
{
    use HttpResponses;

    public function index()
    {
        return MobileUserResource::collection(MobileUser::with(['localidad.provincia'])->get());
    }

    public function store(StoreMobileUserRequest $request)
    {
        $request->validated($request->all());

        //Establecemos siguiente Autoincrement ID
        $statement = DB::select("SHOW TABLE STATUS LIKE 'mobileusers'");
        $nextId = $statement[0]->Auto_increment;
        $request->merge(["tarjeta"=>$nextId + 1000]);
        $request->merge(["estado"=>1]);

        $mobileuser = MobileUser::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'dni' => $request-> dni,
            'email' => $request->email,
            'domicilio' => $request->domicilio,
            'telefono' => $request->telefono,
            'localidad_id' => $request->localidad_id,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'password' => $request->password,
            'tarjeta' => $request->tarjeta,
            'estado' => $request->estado
        ]);

        return new MobileUserResource($mobileuser);
    }

    public function show(MobileUser $mobileuser)
    {
        return new MobileUserResource($mobileuser);
    }

    public function update(Request $request, MobileUser $mobileuser)
    {
        $mobileuser->update($request->all());

        return new MobileUserResource($mobileuser);
    }

    public function destroy(MobileUser $mobileuser)
    {
        $mobileuser->delete();
        return response(null, 204);
    }

    public function validarusuarioapp(Request $request)
    //APP validar usuario
    {
        $mobileuser = MobileUser::with(['localidad.provincia'])->where('dni', $request->dni)->where('password',$request->password)->first();
        return new MobileUserResource($mobileuser);
    }

    public function getusuarioapp(Request $request)
    //APP datos usuario
    {
        $mobileuser = MobileUser::with(['localidad.provincia'])->where('dni', $request->dni)->first();
        return new MobileUserResource($mobileuser);
    }


    public function agregarusuarioapp(Request $request)
    //APP agregar usuario
    {
        Log::info((json_encode($request)));
        //Establecemos siguiente Autoincrement ID
        $statement = DB::select("SHOW TABLE STATUS LIKE 'mobileusers'");
        $nextId = $statement[0]->Auto_increment;
        $request->merge(["tarjeta"=>$nextId + 1000]);
        $request->merge(["estado"=>1]);

        $mobileuser = MobileUser::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'dni' => $request-> dni,
            'email' => $request->email,
            'domicilio' => $request->domicilio,
            'telefono' => $request->telefono,
            'localidad_id' => $request->localidad_id,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'password' => $request->password,
            'tarjeta' => $request->tarjeta,
            'estado' => $request->estado
        ]);

        return $mobileuser;
    }
}

